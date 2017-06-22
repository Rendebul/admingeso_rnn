module.exports = function (data, comunas, EstablecimientoService, $state, toastr) {
  'ngInject';
  var vm = this;
  vm.action = 'Editar';
  vm.data =  data;
  vm.comunas = comunas;
  vm.errors = {};
  vm.formIsSubmit = false;

  this.submitForm = function () {
    vm.formIsSubmit = true;

    EstablecimientoService.updateResource(vm.data.id, vm.data)
      .then(function(data) {
        toastr.success(data.data.message, 'Estado!');
        $state.go('app.establecimientos.index', {}, {reload: true});
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
};
