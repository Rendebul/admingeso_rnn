module.exports = function (ApiService, $http) {
  'ngInject';
  angular.extend(this, ApiService);
  this.resource = 'archivoCargasActual/';

  this.setResource = function(idArchivo) {
    this.resource = this.resource + idArchivo;
  };

  this.getErrores = function(params) {
    // return $http.get(this.resource + '/errores?page=' + params.page);
    return $http.get(this.resource + '/errores');
  };

};
