var Herois = angular.module('Herois', ['ngRoute']);
 
 // define our canstant for the API
Herois.constant('constants', {
        API_URL: 'http://localhost/nw-herois/public/api/'
    });
     
// configure our routes
Herois.config(function($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl : 'app/herois/herois.template.htm',
            controller  : 'heroisController'
        })
 
        .when('/heroi/:heroiID', {
            templateUrl : 'app/heroi/heroi.template.htm',
            controller  : 'heroiController'
        })
 
        // default route
        .otherwise({
               redirectTo: '/'
        });
         
             
});