module.exports = function (comunas, ComunaService, toastr, Confirm, $state, $stateParams, AclService) {
  'ngInject';
  var vm = this;
  vm.comunas = comunas.data;
  vm.totalItems = comunas.total;
  vm.itemsPerPage = comunas.per_page;
  vm.search = $stateParams;
  vm.page = comunas.current_page;
  vm.reload = false;
  vm.hasRole = AclService.hasRole;

  vm.destroy = function (id, index) {
    Confirm.destroy(function() {
      vm.deleteComuna(id, index);
    });
  };

  vm.deleteComuna = function (id, index) {
    ComunaService.deleteResource(id)
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
