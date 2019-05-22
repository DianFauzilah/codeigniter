<?php
/**
 * @var $this app\components\View
 * @var $this themes\stackadmin\controllers\UiController
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 15 February 2019, 16:07 WIB
 * @link https://github.com/ommu/theme-stackadmin
 *
 */

use yii\helpers\Html;
?>

<div class="row">
	<div class="col-lg">
		<div class="card card-body">
			// content above this line
			<hr>
			<div class="d-flex flex-row align-items-center">
				<div class="form-inline">
					View
					<select class="custom-select ml-2" style="width: 70px;">
						<option value="20" selected>20</option>
						<option value="50">50</option>
						<option value="100">100</option>
						<option value="200">200</option>
					</select>
				</div>
				<div class="ml-auto">
					20 <span class="text-muted">of 100</span> <a href="#" class="icon-muted"><i class="material-icons float-right">arrow_forward</i></a>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header card-header-large bg-white">
				<h4 class="card-header__title">Pagination Light</h4>
			</div>
			<div class="card-body">
				<div class="pagination-light">


					<ul class="pagination ">

						<li class="page-item disabled">
							<a class="page-link" href="#" aria-label="Previous">
								<span aria-hidden="true" class="material-icons">first_page</span>
								<span class="sr-only">First</span>
							</a>
						</li>


						<li class="page-item disabled">
							<a class="page-link" href="#" aria-label="Previous">
								<span aria-hidden="true" class="material-icons">chevron_left</span>
								<span class="sr-only">Prev</span>
							</a>
						</li>


						<li class="page-item active">
							<a class="page-link" href="#" aria-label="1">
								<span>1</span>
							</a>
						</li>

						<li class="page-item">
							<a class="page-link" href="#" aria-label="2">
								<span>2</span>
							</a>
						</li>

						<li class="page-item">
							<a class="page-link" href="#" aria-label="3">
								<span>3</span>
							</a>
						</li>

						<li class="page-item">
							<a class="page-link" href="#" aria-label="4">
								<span>4</span>
							</a>
						</li>


						<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
								<span class="sr-only">Next</span>
								<span aria-hidden="true" class="material-icons">chevron_right</span>
							</a>
						</li>


						<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
								<span class="sr-only">Last</span>
								<span aria-hidden="true" class="material-icons">last_page</span>
							</a>
						</li>

					</ul>


					<ul class="pagination m-0">


						<li class="page-item disabled">
							<a class="page-link" href="#" aria-label="Previous">
								<span aria-hidden="true" class="material-icons">chevron_left</span>
								<span>Prev</span>
							</a>
						</li>


						<li class="page-item active">
							<a class="page-link" href="#" aria-label="1">
								<span>1</span>
							</a>
						</li>

						<li class="page-item">
							<a class="page-link" href="#" aria-label="2">
								<span>2</span>
							</a>
						</li>


						<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
								<span>Next</span>
								<span aria-hidden="true" class="material-icons">chevron_right</span>
							</a>
						</li>


					</ul>

				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header card-header-large bg-white">
				<h4 class="card-header__title">Pagination Square</h4>
			</div>
			<div class="card-body">


				<ul class="pagination ">

					<li class="page-item disabled">
						<a class="page-link" href="#" aria-label="Previous">
							<span aria-hidden="true" class="material-icons">first_page</span>
							<span class="sr-only">First</span>
						</a>
					</li>


					<li class="page-item disabled">
						<a class="page-link" href="#" aria-label="Previous">
							<span aria-hidden="true" class="material-icons">chevron_left</span>
							<span class="sr-only">Prev</span>
						</a>
					</li>


					<li class="page-item active">
						<a class="page-link" href="#" aria-label="1">
							<span>1</span>
						</a>
					</li>

					<li class="page-item">
						<a class="page-link" href="#" aria-label="2">
							<span>2</span>
						</a>
					</li>

					<li class="page-item">
						<a class="page-link" href="#" aria-label="3">
							<span>3</span>
						</a>
					</li>

					<li class="page-item">
						<a class="page-link" href="#" aria-label="4">
							<span>4</span>
						</a>
					</li>


					<li class="page-item">
						<a class="page-link" href="#" aria-label="Next">
							<span class="sr-only">Next</span>
							<span aria-hidden="true" class="material-icons">chevron_right</span>
						</a>
					</li>


					<li class="page-item">
						<a class="page-link" href="#" aria-label="Next">
							<span class="sr-only">Last</span>
							<span aria-hidden="true" class="material-icons">last_page</span>
						</a>
					</li>

				</ul>


				<ul class="pagination m-0">


					<li class="page-item disabled">
						<a class="page-link" href="#" aria-label="Previous">
							<span aria-hidden="true" class="material-icons">chevron_left</span>
							<span>Prev</span>
						</a>
					</li>


					<li class="page-item active">
						<a class="page-link" href="#" aria-label="1">
							<span>1</span>
						</a>
					</li>

					<li class="page-item">
						<a class="page-link" href="#" aria-label="2">
							<span>2</span>
						</a>
					</li>


					<li class="page-item">
						<a class="page-link" href="#" aria-label="Next">
							<span>Next</span>
							<span aria-hidden="true" class="material-icons">chevron_right</span>
						</a>
					</li>


				</ul>

			</div>
		</div>
		<div class="card">
			<div class="card-header card-header-large bg-white">
				<h4 class="card-header__title">Pagination Rounded</h4>
			</div>
			<div class="card-body">
				<div class="pagination-rounded">


					<ul class="pagination ">

						<li class="page-item disabled">
							<a class="page-link" href="#" aria-label="Previous">
								<span aria-hidden="true" class="material-icons">first_page</span>
								<span class="sr-only">First</span>
							</a>
						</li>


						<li class="page-item disabled">
							<a class="page-link" href="#" aria-label="Previous">
								<span aria-hidden="true" class="material-icons">chevron_left</span>
								<span class="sr-only">Prev</span>
							</a>
						</li>


						<li class="page-item active">
							<a class="page-link" href="#" aria-label="1">
								<span>1</span>
							</a>
						</li>

						<li class="page-item">
							<a class="page-link" href="#" aria-label="2">
								<span>2</span>
							</a>
						</li>

						<li class="page-item">
							<a class="page-link" href="#" aria-label="3">
								<span>3</span>
							</a>
						</li>

						<li class="page-item">
							<a class="page-link" href="#" aria-label="4">
								<span>4</span>
							</a>
						</li>


						<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
								<span class="sr-only">Next</span>
								<span aria-hidden="true" class="material-icons">chevron_right</span>
							</a>
						</li>


						<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
								<span class="sr-only">Last</span>
								<span aria-hidden="true" class="material-icons">last_page</span>
							</a>
						</li>

					</ul>


					<ul class="pagination m-0">


						<li class="page-item disabled">
							<a class="page-link" href="#" aria-label="Previous">
								<span aria-hidden="true" class="material-icons">chevron_left</span>
								<span>Prev</span>
							</a>
						</li>


						<li class="page-item active">
							<a class="page-link" href="#" aria-label="1">
								<span>1</span>
							</a>
						</li>

						<li class="page-item">
							<a class="page-link" href="#" aria-label="2">
								<span>2</span>
							</a>
						</li>


						<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
								<span>Next</span>
								<span aria-hidden="true" class="material-icons">chevron_right</span>
							</a>
						</li>


					</ul>

				</div>
			</div>
		</div>
	</div>
</div>