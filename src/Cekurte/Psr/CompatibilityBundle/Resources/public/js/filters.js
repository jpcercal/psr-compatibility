'use strict';

/* Filters */

angular.module('psrFilters', [])
    .filter('trans', function () {
        return function (text, placeholder, domain) {
            return Translator.trans(text, placeholder, domain);
        };
    })
;