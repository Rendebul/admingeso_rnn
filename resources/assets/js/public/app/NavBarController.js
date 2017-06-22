module.exports = function($scope, $auth) {
  'ngInject';

  $scope.isAuthenticated = () => {
    return $auth.isAuthenticated();
  }
};
