<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Insertion</title>
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
                        <li class="breadcrumb-item active">Data Insertion</li>
                    </ol>
                </div>
            </div>
            <!-- tab table div -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-block">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Table One</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Table Two</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">Table ar code nai</div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Pore kormu</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php include'partials/footer.php'; ?>
