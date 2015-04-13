'use strict';

/* App Module */

var psrApp = angular.module('psrApp', [
    'ngRoute',
    'psrControllers',
    'psrServices',
    'psrFilters'
]);

psrApp.config(['$routeProvider', function($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl: '/bundles/cekurtepsrcompatibility/partials/home.html',
            controller: 'HomeController'
        })
        .otherwise({
            redirectTo: '/'
        })
    ;
}]);