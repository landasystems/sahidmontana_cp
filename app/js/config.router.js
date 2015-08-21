'use strict';

/**
 * Config for the router
 */
angular.module('app')
        .run(
                ['$rootScope', '$state', '$stateParams',
                    function ($rootScope, $state, $stateParams) {
                        $rootScope.$state = $state;
                        $rootScope.$stateParams = $stateParams;
                        //pengecekan login
                        $rootScope.$on("$stateChangeStart", function (event, toState) {
                            var globalmenu = ['app.dashboard'];
                            Data.get('site/session').then(function (results) {
                                if (typeof results.data.user != "undefined") {
                                    $rootScope.user = results.data.user;
                                    if (results.data.user.akses[(toState.name).replace(".", "_")]) { // jika punya hak akses, return true

                                    } else {
                                        if (globalmenu.indexOf(toState.name) >= 0) { //menu global menu tidak di redirect

                                        } else {
                                            $state.go("access.forbidden");
                                        }
                                    }
                                } else {
                                    $state.go("access.signin");
                                }
                            });
                        });
                    }
                ]
                )
        .config(
                ['$stateProvider', '$urlRouterProvider',
                    function ($stateProvider, $urlRouterProvider) {

                        $urlRouterProvider
                                .otherwise('/app/dashboard');
                        $stateProvider
                                .state('app', {
                                    abstract: true,
                                    url: '/app',
                                    templateUrl: 'tpl/app.html'
                                })
                                .state('app.dashboard', {
                                    url: '/dashboard',
                                    templateUrl: 'tpl/dashboard.html',
                                    resolve: {
                                        deps: ['$ocLazyLoad',
                                            function ($ocLazyLoad) {

                                            }]
                                    }
                                })
                                
                                // others
                                .state('access', {
                                    url: '/access',
                                    template: '<div ui-view class="fade-in-right-big smooth"></div>'
                                })
                                .state('access.signin', {
                                    url: '/signin',
                                    templateUrl: 'tpl/page_signin.html',
                                    resolve: {
                                        deps: ['uiLoad',
                                            function (uiLoad) {
                                                return uiLoad.load(['js/controllers/signin.js']);
                                            }]
                                    }
                                })
                                .state('access.404', {
                                    url: '/404',
                                    templateUrl: 'tpl/page_404.html'
                                })
                                //master
                                .state('master', {
                                    url: '/master',
                                    templateUrl: 'tpl/app.html'
                                })
                                
                                .state('master.apparticle', {
                                    url: '/article',
                                    templateUrl: 'tpl/m_apparticle/index.html',
                                    resolve: {
                                        deps: ['$ocLazyLoad',
                                            function ($ocLazyLoad) {
                                                return $ocLazyLoad.load('textAngular')
                                                        .then(
                                                                function () {
                                                                    return $ocLazyLoad.load('js/controllers/apparticle.js');
                                                                }
                                                        );
                                            }]
                                    }
                                })
                               
                                .state('master.kategori', {
                                    url: '/kategori',
                                    templateUrl: 'tpl/m_kategori/index.html',
                                    resolve: {
                                        deps: ['$ocLazyLoad',
                                            function ($ocLazyLoad) {
                                                return $ocLazyLoad.load('js/controllers/kategori.js');
                                            }]
                                    }
                                })
                                
                                .state('master.filemanager', {
                                    url: '/filemanager',
                                    templateUrl: 'tpl/filemanager/index.html',
                                   
                                })
                                
                    }
                ]
                );
