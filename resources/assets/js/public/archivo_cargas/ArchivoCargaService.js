module.exports = function (ApiService, $http) {
  'ngInject';
  angular.extend(this, ApiService);
  this.resource = 'archivoCargas';

  this.getUploadRoute = function() {
    return 'archivoCargas';
  };

  this.fixDatos = function() {
    return $http.get('/api/fixerDatos');
  };
     
};
