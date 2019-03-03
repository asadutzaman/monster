<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Creation</title>
    <?php include 'partials/css.php';?>
</head>
<body class="fix-header card-no-border">
    <?php include 'partials/header.php'; ?>
    <?php include 'partials/nav.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- table rew -->
            <div class="row">
                <!-- column -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">Basic Table</h4>
                            <h6 class="card-subtitle">Add class <code>.table</code></h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Deshmukh</td>
                                            <td>Prohaska</td>
                                            <td>@Genelia</td>
                                            <td>
                                                <i class="fa fa-edit m-r-10 btn text-success"  aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></i>
                                                <i class="fa fa-trash m-r-10 text-danger" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Deshmukh</td>
                                            <td>Gaylord</td>
                                            <td>@Ritesh</td>
                                            <td>
                                                <i class="fa fa-edit m-r-10 btn text-success" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></i>
                                                <i class="fa fa-trash m-r-10 text-danger" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sanghani</td>
                                            <td>Gusikowski</td>
                                            <td>@Govinda</td>
                                            <td>
                                                <i class="fa fa-edit m-r-10 btn text-success" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></i>
                                                <i class="fa fa-trash m-r-10 text-danger" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Roshan</td>
                                            <td>Rogahn</td>
                                            <td>@Hritik</td>
                                            <td>
                                                <i class="fa fa-edit m-r-10 btn text-success" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></i>
                                                <i class="fa fa-trash m-r-10 text-danger" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Joshi</td>
                                            <td>Hickle</td>
                                            <td>@Maruti</td>
                                            <td>
                                                <i class="fa fa-edit m-r-10 btn text-success" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></i>
                                                <i class="fa fa-trash m-r-10 text-danger" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Nigam</td>
                                            <td>Eichmann</td>
                                            <td>@Sonu</td>
                                            <td>
                                                <i class="fa fa-edit m-r-10 btn text-success" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></i>
                                                <i class="fa fa-trash m-r-10 text-danger" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-block">
                            This is some text within a card block.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    <?php include'partials/footer.php'; ?>
