'use strict';

/* Controllers */

angular.module('app')
        .controller('AppCtrl', ['$scope', '$window','Data','$state',
            function ($scope, $window, Data, $state) {
                // add 'ie' classes to html
                var isIE = !!navigator.userAgent.match(/MSIE/i);
                isIE && angular.element($window.document.body).addClass('ie');
                isSmartDevice($window) && angular.element($window.document.body).addClass('smart');

                // config
                $scope.app = {
                    name: 'Dashboard',
                    version: '1.1',
                    // for chart colors
                    color: {
                        primary: '#7266ba',
                        info: '#23b7e5',
                        success: '#27c24c',
                        warning: '#fad733',
                        danger: '#f05050',
                        light: '#e8eff0',
                        dark: '#3a3f51',
                        black: '#1c2b36'
                    },
                    settings: {
                        themeID: 7,
                        navbarHeaderColor: 'bg-info dker',
                        navbarCollapseColor: 'bg-info dk',
                        asideColor: 'bg-black',
                    }
                }

                function isSmartDevice($window)
                {
                    // Adapted from http://www.detectmobilebrowsers.com
                    var ua = $window['navigator']['userAgent'] || $window['navigator']['vendor'] || $window['opera'];
                    // Checks for iOs, Android, Blackberry, Opera Mini, and Windows mobile devices
                    return (/iPhone|iPod|iPad|Silk|Android|BlackBerry|Opera Mini|IEMobile/).test(ua);
                }
                
                 $scope.logout = function () {
                    var DirUrl = 'ProjectKerja/sahidmontana_cp/satu/';
                    var Exten = '.html';
                    Data.get(DirUrl+'appsite/logout'+Exten).then(function (results) {
                        $state.go('access.signin');
                    });
                   
                }

            }]);