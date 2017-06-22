module.exports = function (ApiService, $http) {
  'ngInject';
  angular.extend(this, ApiService);
  this.resource = 'comunas';
};
