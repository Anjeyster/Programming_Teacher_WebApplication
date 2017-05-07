<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Programming Teacher | Dashboard</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
    <link href="assets/css/selectize.default.css" rel="stylesheet"/>

</head>

<body class="signup-page">
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Programming Teacher v2.0</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="php/logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container" style="background-color:#FFFFFF; margin:0 auto;">
    <div class="row">
        <img src="assets/img/logo.png" style="width:40px; margin-left:20px; margin-top:17px; float:left; margin-right:10px;">
        <h3 style="margin-left:30px !important;">Enter a new question</h3>
        <hr>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <form action="php/addQuestion.php" method="post">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <b>Question Title</b>
                        </span>
                        <input type="text" class="form-control" name="title" placeholder="Enter here">
                    </div>
                </div>

                <div class="col-xs-12"  style="margin-top:30px;">
                    <b><p style="margin-left:17px; color:#555555; margin-bottom:-35px;">Question Main Tags</p></b>
                    <div>
                        <input type="text" id="input-tags" name="mainTags" class="form-control" placeholder="Enter here with comma seperate" style="margin-top:-30px !important;; ">
                    </div>
                </div>

                <div class="col-xs-12"  style="margin-top:30px;">
                    <b><p style="margin-left:17px; color:#555555; margin-bottom:-35px;">Question Sub Tags</p></b>
                    <div>
                        <input type="text" id="input-tags2" name="subTags" class="form-control" placeholder="Enter here with comma seperate" style="margin-top:-30px !important;; ">
                    </div>
                </div>

                <div class="col-xs-12" style="margin-top:30px;">
                    <div>
                        <b><p  style="margin-left:17px; color:#555555; margin-bottom:-35px;">Correct Answer Sequence</p></b>
                        <input type="text" id="input-tags3" name="correct" class="form-control" placeholder="Enter here with comma seperate" style="margin-top:-30px !important;;">
                    </div>
                </div>

                <div class="col-xs-12" style="width:100%;">
                    <button class="btn btn-primary" style="width:100%; margin-top:50px;">Submit Question</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="assets/js/material-kit.js" type="text/javascript"></script>

<script src="assets/js/selectize.min.js" type="text/javascript"></script>

<script src="assets/js/tags.js" type="text/javascript"></script>

<script>
    $('#input-tags').selectize({
        plugins: ['remove_button'],
        delimiter: ',',
        persist: false,
        createOnBlur: true,
        create: true
    });
    $('#input-tags2').selectize({
        plugins: ['remove_button'],
        delimiter: ',',
        persist: false,
        createOnBlur: true,
        create: true
    });
    $('#input-tags3').selectize({
        plugins: ['remove_button'],
        delimiter: ',',
        persist: false,
        createOnBlur: true,
        create: true
    });
</script>


</html>
