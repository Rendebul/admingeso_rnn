module.exports = function (data, roles) {
  'ngInject';
  var vm = this;
  vm.data =  data;
  vm.roles = roles;
  vm.classRoles = {
    'solicitante': 'primary',
    'super-admin': 'info',
    'admin': 'success',
  };
  vm.nameRoles = {
    'solicitante': 'Solicitante',
    'super-admin': 'Super Administrador',
    'admin': 'Administrador',
  };
};
