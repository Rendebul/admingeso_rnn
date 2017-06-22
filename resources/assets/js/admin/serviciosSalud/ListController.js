module.exports = function (serviciosSalud, ServicioSaludService, toastr, Confirm, $state, $stateParams, AclService) {
  'ngInject';
  var vm = this;
  vm.serviciosSalud = serviciosSalud.data;
  vm.totalItems = serviciosSalud.total;
  vm.itemsPerPage = serviciosSalud.per_page;
  vm.search = $stateParams;
  vm.page = serviciosSalud.current_page;
  vm.reload = false;
  vm.hasRole = AclService.hasRole;

  vm.destroy = function (id, index) {
    Confirm.destroy(function() {
      vm.deleteServicioSalud(id, index);
    });
  };

  vm.deleteServicioSalud = function (id, index) {
    ServicioSaludService.deleteResource(id)
      .then(function(data) {
        toastr.success(data.data.message, 'Estado!');
        $state.reload();
      })
      .catch(function(errors) {
        vm.errors = errors.data;
      });
  };

  vm.filter = function (page) {
    vm.search.page = page || 1;
    $state.go('.', vm.search, {reload: true});
    vm.reload = true;
  };
};
