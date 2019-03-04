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
                        <li class="breadcrumb-item active">User Creation</li>
                    </ol>
                </div>
                <div class="col-md-6 col-4 align-self-center">
                    <a class="btn pull-right hidden-sm-down btn-success" data-toggle="modal" data-target="#exampleModalCenter">Add New</a>
                </div>
            </div>
            <!-- table rew -->
            <div class="row">
                <!-- column -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">User Table</h4>
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>
                                                <i class="fa fa-edit m-r-10 btn text-success" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></i>
                                                <i class="fa fa-trash m-r-10 text-danger" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>
                                                <i class="fa fa-edit m-r-10 btn text-success" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></i>
                                                <i class="fa fa-trash m-r-10 text-danger" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>
                                                <i class="fa fa-edit m-r-10 btn text-success" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></i>
                                                <i class="fa fa-trash m-r-10 text-danger" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>
                                                <i class="fa fa-edit m-r-10 btn text-success" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></i>
                                                <i class="fa fa-trash m-r-10 text-danger" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>
                                                <i class="fa fa-edit m-r-10 btn text-success" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></i>
                                                <i class="fa fa-trash m-r-10 text-danger" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>
                                                <i class="fa fa-edit m-r-10 btn text-success" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></i>
                                                <i class="fa fa-trash m-r-10 text-danger" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>
                                                <i class="fa fa-edit m-r-10 btn text-success" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></i>
                                                <i class="fa fa-trash m-r-10 text-danger" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td>55</td>
                                            <td>2010/10/14</td>
                                            <td>
                                                <i class="fa fa-edit m-r-10 btn text-success" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></i>
                                                <i class="fa fa-trash m-r-10 text-danger" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>39</td>
                                            <td>2009/09/15</td>
                                            <td>
                                                <i class="fa fa-edit m-r-10 btn text-success" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></i>
                                                <i class="fa fa-trash m-r-10 text-danger" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <td>23</td>
                                            <td>2008/12/13</td>
                                            <td>
                                                <i class="fa fa-edit m-r-10 btn text-success" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></i>
                                                <i class="fa fa-trash m-r-10 text-danger" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>30</td>
                                            <td>2008/12/19</td>
                                            <td>
                                                <i class="fa fa-edit m-r-10 btn text-success" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></i>
                                                <i class="fa fa-trash m-r-10 text-danger" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
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
        <script type="text/javascript">
            $(document).ready( function () {
                var table = $('#example').DataTable();
            } );
        </script>
    <?php include'partials/footer.php'; ?>
