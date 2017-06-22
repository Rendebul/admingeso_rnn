module.exports = function (establecimientos, EstablecimientoService, toastr, Confirm, $state, $stateParams, AclService) {
  'ngInject';
  var vm = this;
  vm.establecimientos = establecimientos.data;
  vm.totalItems = establecimientos.total;
  vm.itemsPerPage = establecimientos.per_page;
  vm.search = $stateParams;
  vm.page = establecimientos.current_page;
  vm.reload = false;
  vm.hasRole = AclService.hasRole;

  vm.destroy = function (id, index) {
    Confirm.destroy(function() {
      vm.deleteEstablecimiento(id, index);
    });
  };

  vm.deleteEstablecimiento = function (id, index) {
    EstablecimientoService.deleteResource(id)
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
