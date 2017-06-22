module.exports = function ($auth, $http, $state, toastr) {
  'ngInject';

  var vm = this;
  vm.user = {};
  vm.errors = {};

  vm.submit = () => {
    $auth.signup(vm.user)
      .then((response) => {
        $auth.setToken(response);
        $state.go('app.home');
        toastr.info('Se ha creado tu cuenta exitosamente y se ha iniciado sesión');
      })
      .catch((response) => {
        vm.errors = response.data;
      });
  }

  this.hasError = (property) => {
    return vm.errors.hasOwnProperty(property) ? true : false;
  };

};
