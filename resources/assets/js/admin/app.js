window._ = require('lodash');
window.$ = window.jQuery = require('jquery');
require('./layout/nav.js')
require('angular');
require('bootstrap-sass');
require('angular-acl');
require('angular-animate');
require('angular-loading-bar');
require('angular-sanitize');
require('angular-sweetalert');
require('angular-ui-bootstrap');
require('angular-ui-router');
require('angular-toastr');
require('satellizer');
require('sweetalert');
require('ui-select');

angular.module('app', [
  'angular-loading-bar',
  'ngAnimate',
  'ngSanitize',
  'mm.acl',
  'oitozero.ngSweetAlert',
  'satellizer',
  'toastr',
  'ui.bootstrap',
  'ui.router',
  'ui.select',
])
.run(function($rootScope, $log, $auth, $state, toastr) {
	$rootScope.$on('$stateChangeError',
		function(event, toState, toParams, fromState, fromParams, error) {
      if (error.status == 401) {
        $auth.removeToken();
        toastr.error(error.data.error, 'Estado!');
        $state.go('login');
      }
			$log.error('error', error);
		});
})
.config(require('./routes.js'))
.config(function($authProvider, uibPaginationConfig) {
	$authProvider.loginUrl = '/login';
  uibPaginationConfig.previousText = 'Previo';
  uibPaginationConfig.nextText = 'Siguiente';
})
.directive('smartMenu', require('./directives/smartMenu'))
.directive('stateBreadcrumbs', require('./directives/stateBreadcrumbs'))
.directive('ngEnter', require('./directives/NgEnter'))
.filter('isEmpty', require('./filters/IsEmpty'))
.filter('propsFilter', require('./filters/propsFilter'))
.controller('NavBarController', require('./app/NavBarController'))
.service('ApiService', require('./services/ApiService'))
.service('Confirm', require('./services/Confirm'))
.service('UserService', require('./users/UserService'))
.service('RoleService', require('./roles/RoleService'))
.service('PermissionService', require('./permissions/PermissionService'))
.service('RegionService', require('./regions/RegionService'))
.service('ServicioSaludService', require('./serviciosSalud/ServicioSaludService'))
.service('ComunaService', require('./comunas/ComunaService'))
.service('EstablecimientoService', require('./establecimientos/EstablecimientoService'))
