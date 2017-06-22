module.exports = function (data, regions, ServicioSaludService, $state, toastr) {
  'ngInject';
  var vm = this;
  vm.action = 'Editar';
  vm.data =  data;
  vm.regions = regions;
  vm.errors = {};
  vm.formIsSubmit = false;

  this.submitForm = function () {
    vm.formIsSubmit = true;

    ServicioSaludService.updateResource(vm.data.id, vm.data)
      .then(function(data) {
        toastr.success(data.data.message, 'Estado!');
        $state.go('app.serviciosSalud.index', {}, {reload: true});
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
