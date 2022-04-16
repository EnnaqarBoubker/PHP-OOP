<?php
include './navbarUser.php';
?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Contact</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="section-two text-start ">
                        
                            <!-- Text input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" id="name" class="form-control" />
                            </div>

                            <!-- Text input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="email">Email</label>
                                <input type="text" id="email" class="form-control" />
                            </div>
                        </div>
                        
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="formulair3">Téléphone</label>
                                <input type="email" id="formulair3" class="form-control" />
                            </div>

                            <!-- password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="formulair4">Adress</label>
                                <input type="password" id="formulair4" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <!-- Submit button -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-block mb-4">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Modal -->
<div class="container-fluid">
    <div class="d-flex justify-content-between justify-content-between my-3">
        <div class="title">
            <h2>Contacts Lists :</h2>
        </div>
        <div class="add d-none d-md-block d-lg-block">
            <button class="btna border-0 fw-bold rounded-3" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Contact</button>
        </div>
        <div class="add1 d-block d-md-none d-lg-none">
            <button class="btna1" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-user-plus"></i></button>
        </div>
    </div>
    <div class="tableau my-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Télephone</th>
                    <th scope="col">Adresse</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                        <i class="fas fa-edit mx-1"></i>
                        <i class="fas fa-trash-alt"></i>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>
                        <i class="fas fa-edit mx-1"></i>
                        <i class="fas fa-trash-alt"></i>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Thornton</td>
                    <td>Thornton</td>
                    <td>@twitter</td>
                    <td>
                        <i class="fas fa-edit mx-1"></i>
                        <i class="fas fa-trash-alt"></i>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>