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
								<i class="bi bi-person"></i> Client
							</a>
						</li>
						<li class="list-group-item border-0">
							<a class="btn text-secondary">
								<i class="bi bi-bag"></i> Purchase
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
						<?php if ($this->session->flashdata('delete')) { ?>
							<div class="alert alert-danger alert-dismissible fade show col-7" role="alert">
								<i class="bi bi-exclamation-diamond"></i> Product Deleted
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>

						<?php } elseif ($this->session->flashdata('status')) {  ?>
							<div class="alert alert-success alert-dismissible fade show col-7" role="alert">
								<i class="bi bi-check-circle"></i> New Product added
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php } elseif ($this->session->flashdata('empty')) {  ?>
							<div class="alert alert-danger alert-dismissible fade show col-7" role="alert">
								<i class="bi bi-pencil"></i> Fill in all the informations
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php } elseif ($this->session->flashdata('update')) { ?>

							<div class="alert alert-warning alert-dismissible fade show col-7" role="alert">
								<i class="bi bi-pencil"></i> Product updated
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php } ?>
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
								<form action="<?php echo base_url("addProduct") ?>" method="POST">
									<div class="modal-body">
										<div class="row py-3">
											<div class="col">
												<label class="">(Ex: Product Mark - product functionality)</label>
												<input type="text" placeholder="Enter product name" class="form-control" name="name">
											</div>
											<div class="col col-4">
												<label class="">Quantity of the product</label>
												<input type="number" placeholder="Quantity" class="form-control" name="qty">
											</div>
										</div>

										<div class="row py-3">
											<div class="col">
												<label class="">Amount of one product</label>
												<input type="text" placeholder="Enter the amount one product" class="form-control" name="price">
											</div>
											<div class="col">
												<label class="">Enter the date of the product delivery</label>
												<input type="date" class="form-control" name="deliver">
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
								<td><?php if ($product->qty == 0) { ?>
										<span class="badge text-bg-danger">Out of stock</span>
									<?php } else {
										echo $product->qty;
									}  ?>
								</td>
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
									<a type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModal<?php echo $product->id; ?>"><i class="bi bi-trash text-danger"></i></a>
									<a type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModals<?php echo $product->id; ?>"><i class="bi bi-eye text-primary"></i></a>
									<a type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModale<?php echo $product->id; ?>"><i class="bi bi-pencil text-warning"></i></a>
								</td>

								<!-- Delete Modal -->
								<div class="modal fade" id="exampleModal<?php echo $product->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Delete this record</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												Are you sure you want to delete this record of <b><?php echo $product->name; ?></b> ?
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<a class="btn btn-danger" href="<?php echo base_url('deleteproduct/' . $product->id) ?>">
													Delete Record
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- Ends here -->



								<!-- Edit Modal -->
								<div class="modal fade" id="exampleModals<?php echo $product->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">View This Record</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<h4> <?php echo $product->name; ?></h4>
												<p>Matricule : <i class="text-secondary"><?php echo $product->uid; ?></i></p>
												<label>Quantity : <?php if ($product->qty == 0) { ?>
														<span class="badge text-bg-danger">Out of stock</span>
													<?php } else {
																		echo $product->qty;
																	}  ?></label>
												<hr />
												<div>
													<label>Price per product <b><?php echo $product->price ?> CFA</b></label><br />
													<label>Total amount <b> <?php

																			$quantity = $product->qty;
																			$price = $product->price;

																			$total_price = $quantity * $price;

																			echo $total_price

																			?>
															CFA</b></label>
													<hr />
													<div class="">
														<label>Adding date : <i class="text-secondary"><?php echo $product->deliver ?></i></label><br>
														<label>Modification date : <i class="text-secondary"><?php echo $product->time ?></i></label>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div>
								<!-- Ends here -->



								<!-- update Modal -->
								<div class="modal fade" id="exampleModale<?php echo $product->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Update this record</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<form action="<?php echo base_url('updateProduct/' . $product->id) ?>" method="POST">
												<div class="modal-body">
													<div class="row py-3">
														<div class="col">
															<label class="">(Ex: Product Mark - product functionality)</label>
															<input type="text" placeholder="Enter product name" class="form-control" name="name" value="<?php echo $product->name ?>">
														</div>
														<div class="col col-4">
															<label class="">Quantity of the product</label>
															<input type="number" placeholder="Quantity" class="form-control" name="qty" value="<?php echo $product->qty ?>">
														</div>
													</div>

													<div class="row py-3">
														<div class="col">
															<label class="">Amount of one product</label>
															<input type="text" placeholder="Enter the amount one product" class="form-control" name="price" value="<?php echo $product->price ?>">
														</div>
														<div class="col">
															<label class="">Enter the date of the product delivery</label>
															<input type="date" placeholder="Product delivery date" class="form-control" name="deliver" name="price" value="<?php echo $product->deliver ?>">
														</div>
													</div>

												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													<button type="submit" class="btn text-white add">Update changes</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<!-- Ends here -->





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
