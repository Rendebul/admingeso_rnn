module.exports = function (
  tipos_archivo,
  $uibModalInstance,
  ArchivoCargaService,
  Upload,
  $state,
  $stateParams,
  toastr) {
  'ngInject';
  var vm = this;

  vm.errors = {};
  vm.formIsSubmit = false;
  vm.action = 'Cargar';
  vm.data = {
    tipo_archivo:  '',
    archivo: '',
    file: null,
    mes: '',
    anho:'',
  };
  vm.tipos_archivo = tipos_archivo;

  vm.hasError = function(property) {
    return vm.errors.hasOwnProperty(property);
  };

  vm.submitForm = function () {
    vm.formIsSubmit = true;
    console.log('data',vm.data);
    Upload.upload({
      url: '/api/' + ArchivoCargaService.getUploadRoute(),
      data: vm.data,
      method: 'POST'
    })
    .then(function(response) {
      toastr.success(response.data.message, 'Estado!');
      $state.go('app.csvs', {}, {reload: true});
      $uibModalInstance.close('closed');
    })
    .catch(function(errors) {
      vm.errors = errors.data;
    })
    .finally(function() {
      vm.formIsSubmit = false;
    });
  };

  vm.cancelar = function () {
    $uibModalInstance.dismiss('cancel');
  };
};
