module.exports = function (users, UserService, toastr, Confirm, $state, $stateParams, AclService) {
  'ngInject';
  var vm = this;
  vm.users = users.data;
  vm.totalItems = users.total;
  vm.itemsPerPage = users.per_page;
  vm.search = $stateParams;
  vm.page = users.current_page;
  vm.reload = false;
  vm.hasRole = AclService.hasRole;

  vm.filter = function (page) {
    vm.search.page = page || 1;
    $state.go('.', vm.search, {reload: true});
    vm.reload = true;
  };

  vm.destroy = function (id, index) {
    Confirm.destroy(function() {
      vm.deleteUser(id, index);
    });
  };

  vm.deleteUser = function (id, index) {
    UserService.deleteResource(id)
      .then(function(data) {
        toastr.success(data.data.message, 'Estado!');
        vm.removeFromUsers(index);
      })
      .catch(function(errors) {
        vm.errors = errors.data;
      });
  };

  vm.removeFromUsers = function (index) {
    vm.users.splice(index, 1);
  };
};
