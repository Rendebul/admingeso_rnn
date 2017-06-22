module.exports = function (user, UserService, $state, toastr) {
  'ngInject';
	var vm = this;
	vm.user = user;
  vm.errors = {};
	vm.showPanelPassword = false;
	vm.formIsSubmit = false;

  this.submitForm = function () {
    vm.formIsSubmit = true;

    UserService.changePassword(vm.data)
      .then(function(data) {
        toastr.success(data.data.message, 'Estado!');
        $state.go('app.profile', {}, {reload: true});
      })
      .catch(function(errors) {
        vm.errors = errors.data;
      }).finally(function() {
        vm.formIsSubmit = false;
      });
  };

  this.hasError = function(property) {
    return vm.errors.hasOwnProperty(property);
  };
}
