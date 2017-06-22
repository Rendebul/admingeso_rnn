module.exports = function (regions, RegionService, toastr, Confirm, $state, $stateParams, AclService) {
  'ngInject';
  var vm = this;
  vm.regions = regions.data;
  vm.totalItems = regions.total;
  vm.itemsPerPage = regions.per_page;
  vm.search = $stateParams;
  vm.page = regions.current_page;
  vm.reload = false;
  vm.hasRole = AclService.hasRole;

  vm.destroy = function (id, index) {
    Confirm.destroy(function() {
      vm.deleteRegion(id, index);
    });
  };

  vm.deleteRegion = function (id, index) {
    RegionService.deleteResource(id)
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
