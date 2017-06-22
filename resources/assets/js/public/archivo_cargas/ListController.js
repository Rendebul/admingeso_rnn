module.exports = function (
  archivos,
  toastr,
  Confirm,
  _find,
  $window,
  $state,
  $stateParams,
  $uibModal,
  ArchivoCargaService,
  $rootScope) {
  'ngInject';
  var vm = this;

  console.log('vm', vm);
  vm.archivos = archivos.data;
  vm.totalItems = archivos.total;
  vm.itemsPerPage = archivos.per_page;
  vm.search = $stateParams;
  vm.search.page = archivos.current_page;
  vm.reload = false;
  vm.formato = {
    fecha_asociada: 'MM-yyyy',
    created_at: 'dd-MM-YYYY'
  };

  vm.tipos_archivo = [
    {id: undefined, nombre: 'Todos'},
    {id: 'datos'    , nombre: 'Datos'}  
  ];

  vm.estados = [
    {id: undefined,     nombre: 'Todos',        labelClass: 'label-default'},
    {id: 'En cola',     nombre: 'En cola',      labelClass: 'label-info'},
    {id: 'Procesando',  nombre: 'Procesando',   labelClass: 'label-warning'},
    {id: 'Error',       nombre: 'Error',        labelClass: 'label-danger'},
    {id: 'Completado',  nombre: 'Completado',   labelClass: 'label-success'}
  ];

  vm.archivos.forEach(function (item, index, array) {
    array[index].tipo_archivo = _find(vm.tipos_archivo, {id: array[index].tipo_archivo}).nombre;
  });

  vm.filter = function () {
    $state.go('.', vm.search, {reload: true});
    vm.reload = true;
  };

  vm.modalCrearArchivo = function() {
    $uibModal.open({
      template: require('./views/form.html'),
      controller: require('./CreateController'),
      controllerAs: 'vm',
      resolve: {
        tipos_archivo: function() {
          var tipos = vm.tipos_archivo.slice();
          tipos.splice(0,1);
          return tipos;
        }
      }
    }).result.then(
      function(data) {
        vm.filter();
      },
      function() {
        return;
      }
    );
  };

  vm.descargar = function(filename) {
    $window.open(filename, '_blank');
  };

  vm.labelClass = function(estado) {
    return _find(vm.estados, {id: estado}).labelClass;
  };

  vm.modalVerDetalles = function(id, index) {
    ArchivoCargaService.getResource(id).then(function(data) {
      var archivoCargado = data.data;
      vm.archivos[index] = archivoCargado;

      $uibModal.open({
        template: require('./views/show.html'),
        controller: require('./ShowController'),
        controllerAs: 'vm',
        resolve: {
          archivo: archivoCargado
        }
      });
    });
  };

  vm.actualizarRegistro = function(data) {
    vm.archivos.forEach(function (item, index, array) {
      var archivo = data.archivo;
      if (array[index].id == archivo.id) {
        archivo.tipo_archivo = _find(vm.tipos_archivo, {id: archivo.tipo_archivo}).nombre;
        vm.archivos[index] = archivo;
        return;
      }
    });
  };

  vm.formatoFechaAsociada = function() {
    if (!vm.search.fechaAsociada) {
      vm.filter();
      return;
    }
    var fecha = vm.search.fechaAsociada.split('-');
    var fParseada = Date.parse(fecha[1] + '-' + fecha[0]);
    if (isNaN(fParseada) || fecha.length != 2) {
      vm.toastrErrorFecha();
      vm.search.fechaAsociada = null;
      return;
    }
    vm.filter();
  };

  vm.limpiar = function() {
    ArchivoCargaService.fixDatos().then(function(data) {
      console.log('data', data);
    });
  };

  vm.toastrErrorFecha = function() {
    toastr.error('Error de formato en la fecha a buscar (formato en ' +
      vm.formato.fecha_asociada + ' o dejar vacío)', 'Error!');
  };

  $rootScope.pusherChannel.bind('carga-archivos', vm.actualizarRegistro);
};
