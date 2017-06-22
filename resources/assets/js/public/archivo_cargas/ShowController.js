module.exports = function (archivo, toastr, Confirm, $state, $stateParams, _find, $uibModalInstance, MensajeErrorArchivoCargaService) {
  'ngInject';
  var vm = this;
  MensajeErrorArchivoCargaService.setResource(archivo.id);

  vm.archivo = archivo;
  vm.reloadErrors = true;

  /*
  // deberia indicar errores
  vm.errores.totalItems = vm.errores.total;
  vm.errores.itemsPerPage = vm.errores.per_page;
  vm.errores.search = $stateParams;
  vm.errores.search.page = vm.errores.current_page;
  vm.errores.reloadErrors = false;
  */

  vm.tipos_archivo = [
    {id: undefined              , nombre: 'Todos'},
    {id: 'dotacion_efectiva'    , nombre: 'Dotación Efectiva'},
    {id: 'ausentismo_global'    , nombre: 'Ausentismo Global'},
    {id: 'ausentismo_licencias' , nombre: 'Ausentismo Licencias Médicas'},
    {id: 'honorarios'           , nombre: 'Honorarios'},
    {id: 'horas_extras'         , nombre: 'Horas Extras'}
  ];

  vm.archivo.tipo_archivo = _find(vm.tipos_archivo, {id: vm.archivo.tipo_archivo}).nombre;

  vm.cerrar = function () {
    $uibModalInstance.close('close');
  };

  vm.labelClass = function(estado) {
    if (estado === 'En cola') {
      return 'label-info';
    } else if (estado === 'Procesando') {
      return 'label-warning';
    } else if (estado === 'Error') {
      return 'label-danger';
    } else if (estado === 'Completado') {
      return 'label-success';
    }
    return 'label-default';
  };

  vm.getErrores = function () {
    if (vm.archivo.cantidadErrores > 0) {
      MensajeErrorArchivoCargaService.getErrores({page: 1}).then(function (data) {
        vm.errores = data.data;
        vm.reloadErrors = false;
      });
    }
  };

  vm.getErrores();
};
