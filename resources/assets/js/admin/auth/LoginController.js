module.exports = function ($auth, $http, $state, toastr) {
  'ngInject';

  var vm = this;
  vm.user = {};
  vm.errors = {};

  vm.login = () => {
    $auth.login(vm.user)
      .then((response) => {
        toastr.success('Has iniciado sesión exitosamente!');
        $state.go('app.home');
      })
      .catch((response) => {
        vm.errors = response.data;
      });
  }

  this.hasError = (property) => {
    return vm.errors.hasOwnProperty(property) ? true : false;
  };

};
