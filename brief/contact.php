<?php
include './includes/navbarUser.php';
include './classes/user.php';
$user = new User();
if (isset($_POST['submitCr'])) {
    $user->creatContact($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['adress']);
    echo 'done';
    echo "<script>alert('User created successfully');document.location='contact.php'</script>";
}
?>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="section-two text-start ">
                        <!-- Text input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="" />
                        </div>

                        <!-- Text input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" />
                        </div>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="formulair3">Phone</label>
                        <input type="text" name="phone" id="formulair3" class="form-control" />
                    </div>

                    <!-- password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="formulair4">Adress</label>
                        <input type="text" name="adress" id="formulair4" class="form-control" />
                    </div>
                    <!-- Submit button -->
                    <div class="modal-footer">
                        <input name="submitCr" type="submit" class=" btn btn-primary btn-block mb-4" value="Save">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
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
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Contact</button>
        </div>
        <div class="add1 d-block d-md-none d-lg-none">
            <button class="btna1" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-user-plus"></i></button>
        </div>
    </div>
    <div class="tableau my-3">
        <table class="table table-responsive">
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

                <?php $user->afficher(("SELECT * FROM contact WHERE fkuser = ?")); ?>

            </tbody>
        </table>
    </div>
</div>