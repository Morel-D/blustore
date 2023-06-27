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
                        <h3 class="">Client</h3>
                    </div>
                    <div class="col text-end">
                        <a href="" class="btn text-secondary d-flex justify-content-end"><i class="bi bi-box-arrow-right"></i>Logout</a>
                    </div>
                </div>
                <br>
                <hr />
                <br />
                <div class="row">
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-2" id="exampleModalLabel">Add a product</h3>
                                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="" method="POST">
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
                <table class="table table-hover col-2">
                    <thead class="text-white" id="tableHead">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($records as $record) {  ?>
                            <tr>
                                <td>1</td>
                                <td><?php echo $record->client_name  ?></td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    </div>
    </div>
</body>
