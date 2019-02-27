<!DOCTYPE html>
<html lang="en">
<head>
    <title>Monster</title>
    <?php include 'partials/css.php';?>
</head>
<body class="fix-header card-no-border">
    <?php //include 'partials/header.php'; ?>
    <?php include 'partials/nav.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-md-6 col-8 align-self-center">
                    <form>
                        <div class="row">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">MSISDN</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="MSISDN">
                            </div>
                            <button type="button" class="btn btn-success col-sm-2">Search</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-4 align-self-center">
                    <a class="btn hidden-sm-down btn-success"> Clear Data</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5><u>MSISDN Records</u></h5>
                                </div>
                                <div class="col-md-7">
                                    <label>Payment In Cycle & Date:</label>
                                </div>
                                <div class="col-md-5">
                                    test
                                </div>
                                <div class="col-md-7">
                                    <label >Remaining Due:</label>
                                </div>
                                <div class="col-md-5">
                                    test
                                </div>
                                <div class="col-md-7">
                                    <label >Current Local Balance:</label>
                                </div>
                                <div class="col-md-5">
                                    test
                                </div>
                                <div class="col-md-7">
                                    <label >Current IR Balance:</label>
                                </div>
                                <div class="col-md-5">
                                    test
                                </div>
                                <div class="col-md-7">
                                    <label >Current Total Balance:</label>
                                </div>
                                <div class="col-md-5">
                                    test
                                </div>
                                <div class="col-md-7">
                                    <label >Barring Date:</label>
                                </div>
                                <div class="col-md-5">
                                    test
                                </div>
                                <div class="col-md-7">
                                    <label >Bar Duration:</label>
                                </div>
                                <div class="col-md-5">
                                    test
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-7">
                                    <label >Security Deposit:</label>
                                </div>
                                <div class="col-md-5">
                                    test
                                </div>
                                <div class="col-md-7">
                                    <label >Total Limit:</label>
                                </div>
                                <div class="col-md-5">
                                    test
                                </div>
                                <div class="col-md-7">
                                    <label >Bundle Plan:</label>
                                </div>
                                <div class="col-md-5">
                                    test
                                </div>
                                <div class="col-md-7">
                                    <label >Rateplan:</label>
                                </div>
                                <div class="col-md-5">
                                    test
                                </div>
                                <div class="col-md-7">
                                    <label >Bar/Unbar Status:</label>
                                </div>
                                <div class="col-md-5">
                                    test
                                </div>
                                <div class="col-md-7">
                                    <label >Bill Cycle:</label>
                                </div>
                                <div class="col-md-5">
                                    test
                                </div>
                                <div class="col-md-7">
                                    <label >Total Unbilled:</label>
                                </div>
                                <div class="col-md-5">
                                    test
                                </div>
                                <div class="col-md-7">
                                    <label >Activation Date:</label>
                                </div>
                                <div class="col-md-5">
                                    test
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Customer Information -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5><u>Customer Information</u></h5>
                                </div>
                                <div class="col-md-3">
                                    <label >Name:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control form-control-sm" id="usr">
                                </div>
                                <div class="col-md-3">
                                    <label >City:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control form-control-sm" id="usr">
                                </div>
                                <div class="col-md-3">
                                    <label >Email:</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-sm" id="usr">
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-normal">E</button>
                                    <button type="button" class="btn btn-success">U</button>
                                </div>
                                <div class="col-md-4">
                                    <label >Alt. Contact No.</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control form-control-sm" id="usr">
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-normal">E</button>
                                    <button type="button" class="btn btn-success">U</button>
                                </div>
                                <div class="col-md-3">
                                    <label >Address:</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea type="text" class="form-control" id="usr"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- agent input field -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5><u>Agent Input Field</u></h5>
                                </div>
                                <div class="col-md-6">
                                    <label >Commitment Date:</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-sm" id="usr">
                                </div>
                                <div class="col-md-6">
                                    <label >Commitment Ammount:</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-sm" id="usr">
                                </div>
                                <div class="col-md-6">
                                    <label >Short Code:</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-sm" id="usr">
                                </div>
                                <div class="col-md-6">
                                    <label >Customer Feedback:</label>
                                </div>
                                <div class="col-md-6">
                                    <textarea type="text" class="form-control" id="usr"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-12">
                                <label >Customer Feedback 1:</label>
                            </div>
                            <div class="col-md-12">
                                <textarea type="text" class="form-control" id="usr"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label >Customer Feedback 2:</label>
                            </div>
                            <div class="col-md-12">
                                <textarea type="text" class="form-control" id="usr"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-12">
                                <label >Customer Feedback 3:</label>
                            </div>
                            <div class="col-md-12">
                                <textarea type="text" class="form-control" id="usr"></textarea>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-success float-right">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include'partials/footer.php'; ?>
