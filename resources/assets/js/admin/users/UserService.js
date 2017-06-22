module.exports = function (ApiService, $http) {
  'ngInject';
  angular.extend(this, ApiService);
  this.resource = 'users';

  this.me = () => {
    return $http.get('/api/admin/me');
  };
};
