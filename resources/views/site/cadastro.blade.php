<!DOCTYPE html>
<html ng-app="listaTelefonica">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="./vendor/angular/1.6.6/angular.min.js"></script>
    <script type="text/javascript" src="./vendor/angular-route/1.6.8/angular-route.min.js"></script>
    <script type="text/javascript" src="./vendor/angular-messages/1.6.6/angular-messages.min.js"></script>
    <script type="text/javascript" src="./vendor/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./lib/ui.js"></script>
    <script type="text/javascript" src="./js/angular/app.js"></script>
    <script type="text/javascript" src="./js/angular/config/interceptorsConfig.js"></script>
    <script type="text/javascript" src="./js/angular/config/routeConfig.js"></script>
    <script type="text/javascript" src="./js/angular/controllers/listaTelefonicaCtrl.js"></script>
    <script type="text/javascript" src="./js/angular/controllers/novoContatoCtrl.js"></script>
    <script type="text/javascript" src="./js/angular/controllers/detalhesContatoCtrl.js"></script>
    <script type="text/javascript" src="./js/angular/directives/uiAlertDirective.js"></script>
    <script type="text/javascript" src="./js/angular/directives/uiPhoneDirective.js"></script>
    <script type="text/javascript" src="./js/angular/filters/nameFilter.js"></script>
    <script type="text/javascript" src="./js/angular/filters/ellipsisFilter.js"></script>
    <script type="text/javascript" src="./js/angular/interceptors/errorInterceptor.js"></script>
    <script type="text/javascript" src="./js/angular/interceptors/timestampInterceptor.js"></script>
    <script type="text/javascript" src="./js/angular/interceptors/loadingInterceptor.js"></script>
    <script type="text/javascript" src="./js/angular/services/contatosAPIService.js"></script>
    <title>Lista Telefonica</title>
</head>
<body>
    <div ng-show="loading" class="loading">
        <div class="container">
            <div class="agenda content-wrap">
                <div class="jumbotron">
                    <div class="loader"></div>
                </div>
            </div>
        </div>
    </div>
    <div ng-hide="loading">
        <div ng-view class="container"></div>
    </div>
</body>
</html>