'use strict';

/* Services */

var psrServices = angular.module('psrServices', ['ngResource']);

psrServices.factory('Home', ['$resource', function($resource){
    return $resource(Routing.generate('home'), {}, {
        get: {headers: {
            'Accept':'application/json'
        }}
    });
}]);