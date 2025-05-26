<!DOCTYPE html>
<html ng-app="moviesWatchedApp" ng-cloak>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movies Watched Web App</title>
    <!-- jQuery -->
    <script src="js/jquery-3.3.1.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap-3.3.7/dist/css/bootstrap.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Custom style sheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Angular -->
    <script src="js/angular/angular.js"></script>
    <!--
    <script src="js/app.js"></script>
    <script src="js/controllers/moviesWatchedController.js"></script>
    -->
    <script src="dist/main.js"></script>
    <!-- bootstrap-datepicker -->
    <script src="js/bootstrap-datepicker-1.6.4-dist/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="js/bootstrap-datepicker-1.6.4-dist/css/bootstrap-datepicker.css">
    <link rel="shortcut icon" type="image/jpg" href="img/favicon/favicon.png"/>
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-offset-2 col-md-8" ng-controller="moviesWatchedController">
            <?php if (isset($movieInserted)) echo "The movie was successfully added."; ?>
            <div id="header">
                <h1 id="title-header"><a id="home-link" href="" ng-click="goToHomePage()">Movies Watched App</a></h1>
                <div style="text-align: center;">
                    <button class="btn btn-default" ng-click="goToAddMoviePage()">Add Movie</button>
                    <button class="btn btn-default" ng-click="goToViewMoviesPage()">View Movies Watched</button>
                    <button class="btn btn-default" ng-click="goToManageDirectorsPage()">Manage Directors</button>
                </div>
            </div>