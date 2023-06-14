<body>
	<div class="container-fluid p-5">
		<div class="row">
			<div class="col col-2 left-content text-start">
				<div class="user mx-4 mb-4">
					<label class="lead"><b>Tchaptche Denzel</b>
						<a href="" class="btn"><i class="bi bi-pencil text-secondary mx-2"></i></a>
					</label>
					<p class="text-secondary">Owner</p>
				</div>
				<hr />
				<div class="">
					<ul class="list-group">
						<li class="list-group-item border-0">
							<a class="btn text-secondary">
								<i class="bi bi-cast"></i> Dashboard
							</a>
						</li>
						<li class="list-group-item border-0">
							<a class="btn text-secondary">
								<i class="bi bi-box2"></i> Product
							</a>
						</li>
						<li class="list-group-item border-0">
							<a class="btn text-secondary">
								<i class="bi bi-bag"></i> Purchase
							</a>
						</li>
						<li class="list-group-item border-0">
							<a class="btn text-secondary">
								<i class="bi bi-receipt"></i> Transactions
							</a>
						</li>
						<li class="list-group-item border-0">
							<a class="btn text-secondary">
								<i class="bi bi-bar-chart-line"></i> Report
							</a>
						</li>
					</ul>
				</div>
				<div class="extents"></div>
			</div>


			<div class="col">
				<div class="row">
					<div class="col mb-3">
						<!-- fashbox -->
						<!-- <div class="alert alert-danger alert-dismissible fade show col-7" role="alert">
							<i class="bi bi-exclamation-diamond"></i> Product Deleted
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div> -->

						<?php if ($this->session->flashdata('status')) {  ?>
							<div class="alert alert-success alert-dismissible fade show col-7" role="alert">
								<i class="bi bi-check-circle"></i> New Product added
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php } elseif ($this->session->flashdata('empty')) {  ?>
							<div class="alert alert-danger alert-dismissible fade show col-7" role="alert">
								<i class="bi bi-pencil"></i> Fill in all the informations
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php } ?>



						<!--	<div class="alert alert-warning alert-dismissible fade show col-7" role="alert">
							<i class="bi bi-pencil"></i> Product updated
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div> -->
						<!-- fashbox -->

						<h3 class="">Product</h3>
					</div>
					<div class="col text-end">
						<a href="" class="btn text-secondary d-flex justify-content-end"><i class="bi bi-box-arrow-right"></i>Logout</a>
					</div>
				</div>
				<br>
				<hr />
				<br />
				<div class="row">
					<div class="col col-2">
						<div class="card">
							<label class=" mt-2 mx-2">Total Amount : <b>11000CFA</b></label>
						</div>
					</div>
					<div class="col">
						<button class="btn text-white add" data-bs-toggle="modal" data-bs-target="#exampleModal">Add a product</button>
					</div>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h3 class="modal-title fs-2" id="exampleModalLabel">Add a product</h3>
									<button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<form action="<?php echo base_url("store") ?>" method="POST">
									<div class="modal-body">
										<div class="row py-3">
											<div class="col">
												<input type="text" placeholder="Enter product name" class="form-control" name="name">
											</div>
											<div class="col col-2">
												<input type="number" placeholder="Quantity" class="form-control" name="qty">
											</div>
										</div>

										<div class="row py-3">
											<div class="col">
												<input type="text" placeholder="Enter the amount one product" class="form-control" name="price">
											</div>
											<div class="col">
												<input type="date" placeholder="DD/MM/YY" class="form-control" name="deliver">
											</div>
										</div>

									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="btn text-white add">Save changes</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- Modal end -->

					<div class="col col-4"><input type="text" class="form-control" placeholder="Search a product"></div>
				</div>
				<br />
				<table class="table table-hover">
					<thead class="text-white" id="tableHead">
						<tr>
							<th scope="col">#</th>
							<th scope="col">Product Name</th>
							<th scope="col">product Matricule</th>
							<th scope="col">Quantity</th>
							<th scope="col">Amount per product</th>
							<th scope="col">Products Amount</th>
							<th scope="col">Delivered Date</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$num = 1;
						?>
						<?php foreach ($produts as $product) {  ?>
							<tr>
								<th scope="row"><?php echo $num++; ?></th>
								<td><?php echo $product->name ?></td>
								<td><?php echo $product->uid ?></td>
								<td><?php echo $product->qty ?></td>
								<td><?php echo $product->price ?> CFA</td>
								<td>
									<?php

									$quantity = $product->qty;
									$price = $product->price;

									$total_price = $quantity * $price;

									echo $total_price

									?>
									CFA
								</td>
								<td><?php echo $product->deliver ?></td>
								<td>
									<a href="" class="btn"><i class="bi bi-trash text-danger"></i></a>
									<a href="" class="btn"><i class="bi bi-eye text-warning"></i></a>
								</td>
							<?php } ?>
							</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>


	</div>
	</div>
</body>
