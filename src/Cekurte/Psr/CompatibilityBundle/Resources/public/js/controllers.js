'use strict';

/* Controllers */

var psrControllers = angular.module('psrControllers', []);

psrControllers.controller('HomeController', ['$rootScope', '$scope', 'Home', function($rootScope, $scope, Home) {

    $rootScope.app = {
        'nav': {
            'menu': [
                {
                    'href': '#/',
                    'label': 'Home'
                }
            ]
        },
        'title': 'Teste'
    };

    Home.get(function(response) {

        $scope.home = response.home;
    });

}]);
