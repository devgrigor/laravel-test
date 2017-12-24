<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- build:css(.) styles/vendor.css -->
    <!-- bower:css -->
    <!-- endbower -->
    <!-- endbuild -->
    <!-- build:css(.tmp) styles/main.css -->
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
    <!-- endbuild -->
  </head>
  <body ng-app="kinoSiteApp">
    <!--[if lte IE 8]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <ng-include src="'views/layout/header.html'"></ng-include>

    <div class="container">
    <div ng-view=""></div>
    </div>

    <div class="footer">
      <div class="container">
      </div>
    </div>

    <!-- build:js(.) scripts/vendor.js -->
    <!-- bower:js -->
    <!-- endbower -->
    <!-- endbuild -->

        <!-- build:js({.tmp,app}) scripts/scripts.js -->
        <script src="bower_components/angular/angular.js"></script>
        <script src="bower_components/angular-animate/angular-animate.js"></script>
        <script src="bower_components/angular-cookies/angular-cookies.js"></script>
        <script src="bower_components/angular-resource/angular-resource.js"></script>
        <script src="bower_components/angular-route/angular-route.js"></script>
        <script src="bower_components/angular-sanitize/angular-sanitize.js"></script>
        <script src="bower_components/angular-touch/angular-touch.js"></script>
        <script src="bower_components/jquery/dist/jquery.js"></script>
        <script type="bower_components/bootstrap/bootstyrap.js"></script>
        <script src="scripts/app.js"></script>
        <script src="scripts/controllers/main.js"></script>
        <script src="scripts/controllers/settings.js"></script>
        <script src="scripts/controllers/about.js"></script>
        <script src="scripts/controllers/login.js"></script>
        <script src="scripts/controllers/logout.js"></script>
        <script src="scripts/controllers/movie.js"></script>
        <script src="scripts/directives/scroll.js"></script>
        <script src="scripts/services/auth.js"></script>
        <!-- endbuild -->
</body>
</html>