module.exports = function ($http) {
  'ngInject';

  this.me = () => {
    return $http.get('/api/me');
  };

  this.changePassword = (data) => {
    return $http.post('/api/changePassword', data);
  }
};
