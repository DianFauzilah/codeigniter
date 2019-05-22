<?php
/**
 * Menu class
 * Klas turunan dari klas menu gentelella dengan ditambahkan penangan javascript void pada menu yg mengandung #
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2018 OMMU (www.ommu.co)
 * @created date 2 January 2018, 23:08 WIB
 * @link https://github.com/ommu/ommu
 * 
 */

namespace themes\stackadmin\components;

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\helpers\Inflector;
use rmrevin\yii\fontawesome\component\Icon;

class Menu extends \yii\widgets\Menu
{
	/**
	 * {@inheritdoc}
	 */
	public $isNavigation = true;

	/**
	 * {@inheritdoc}
	 */
	public $itemOptions = ['class'=>'sidebar-menu-item'];

	/**
	 * {@inheritdoc}
	 */
	public $linkTemplate = '<a class="sidebar-menu-button" href="{url}">{icon}{label}{badge}</a>';

	/**
	 * {@inheritdoc}
	 */
	public $labelTemplate = '{label}';

	/**
	 * {@inheritdoc}
	 */
	public $submenuTemplate = '<ul class="sidebar-submenu collapse">{items}</ul>';

	/**
	 * {@inheritdoc}
	 */
	public function init()
	{
		parent::init();
		if(empty($this->options))
			$this->options = ['class'=>'sidebar-menu'];
	}

	/**
	 * {@inheritdoc}
	 */
	protected function renderItems($items, $first=true)
	{
		$n = count($items);
		$lines = [];
		foreach ($items as $i => $item) {
			$options = array_merge($this->itemOptions, ArrayHelper::getValue($item, 'options', []));
			$tag = ArrayHelper::remove($options, 'tag', 'li');
			$class = [];
			if ($item['active']) {
				$class[] = $this->activeCssClass;
			}
			if ($i === 0 && $this->firstItemCssClass !== null) {
				$class[] = $this->firstItemCssClass;
			}
			if ($i === $n - 1 && $this->lastItemCssClass !== null) {
				$class[] = $this->lastItemCssClass;
			}
			Html::addCssClass($options, $class);

			$menu = $this->renderItem($item, $first);
			if (!empty($item['items'])) {
				$submenuTemplate = ArrayHelper::getValue($item, 'submenuTemplate', $this->submenuTemplate);
				if(!$this->isNavigation) {
					$submenuTemplate = str_replace('>{items}', ' id="'.Inflector::slug(Inflector::singularize($item['label'])).'">{items}', $submenuTemplate);
				} else {
					if($first == false)
						$submenuTemplate = '{items}';
				}
				$menu .= strtr($submenuTemplate, [
					'{items}' => $this->renderItems($item['items'], false),
				]);
			}
			$lines[] = (!$this->isNavigation || ($this->isNavigation && $first && !empty($item['items']))) ? Html::tag($tag, $menu, $options) : ($this->isNavigation && $first && empty($item['items']) ? Html::tag($tag, $menu, $options) : $menu);
		}

		return implode("\n", $lines);
	}

	/**
	 * {@inheritdoc}
	 */
	protected function renderItem($item, $first=true)
	{
		$renderedItem = '';
		if (isset($item['url'])) {
			$template = ArrayHelper::getValue($item, 'template', $this->linkTemplate);
			if(isset($item['items']) && count($item['items']) > 0) {
				if(!$this->isNavigation)
					$template = str_replace('href="{url}"', 'data-toggle="collapse" href="{url}"', $template);
				else {
					if(!$first)
						$template = '<div class="dropdown-divider"></div><div class="dropdown-header">{label}</div>';
					$template = str_replace(['class="dropdown-item"', 'href="{url}"'], ['class="nav-link dropdown-toggle"', 'data-toggle="dropdown" href="{url}"'], $template);
				}
			} else {
				if($first)
					$template = str_replace('class="dropdown-item" href="{url}"', 'class="nav-link" href="{url}"', $template);
			}

			if($item['url'][0] == 'current')
				unset($item['url'][0]);
			$url = Html::encode(Url::to($item['url']));
			// Jika key url isinya '#' maka replace href menjadi html id nama-label.
			if( (!is_array($item['url']) && substr($item['url'], -1) == '#') || 
				(is_array($item['url']) && ($item['url'][0] == '/#' || $item['url'][0] == '#')) ) {
				$url = $this->isNavigation ? '#' : '#'.Inflector::slug(Inflector::singularize($item['label']));
			}

			$renderedItem = strtr($template, [
				'{url}' => $url,
				'{label}' => $this->isNavigation ? $item['label'] : Html::tag('span', $item['label'], ['class'=>'sidebar-menu-text']),
			]);

		} else {
			$template = ArrayHelper::getValue($item, 'template', $this->labelTemplate);

			$renderedItem = strtr($template, [
				'{label}' => $this->isNavigation ? $item['label'] : Html::tag('span', $item['label'], ['class'=>'sidebar-menu-text']),
			]);
		}

		if (isset($item['badge'])) {
			$badgeOptions = ArrayHelper::getValue($item, 'badgeOptions', []);
			Html::addCssClass($badgeOptions, 'label pull-right');
		} else {
			$badgeOptions = null;
		}
		$icons = explode('#', $item['icon']);

		return strtr(
			$renderedItem,
			[
				'{icon}' => isset($item['icon']) && $item['icon']
					? (preg_match("/^(materialdesign)+/", $item['icon']) 
						? Html::tag('span',$icons[1], ['class'=>'sidebar-menu-icon sidebar-menu-icon--left material-icons'])
						: new Icon(substr($item['icon'], 3), ArrayHelper::getValue($item, 'iconOptions', ['class'=>'sidebar-menu-icon sidebar-menu-icon--left'])))
					: '',
				'{badge}' => (
					isset($item['badge'])
						? Html::tag('small', $item['badge'], $badgeOptions)
						: ''
					) . (
					isset($item['items']) && count($item['items']) > 0
						? Html::tag('span', '', ['class'=>'ml-auto sidebar-menu-toggle-icon'])
						: ''
					),
			]
		);
	}
}