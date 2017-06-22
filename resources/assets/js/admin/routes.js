module.exports = function OnConfig($stateProvider, $locationProvider, $urlRouterProvider) {
  'ngInject';

  /**
    * Helper auth functions
    */
  var skipIfLoggedIn = function($q, $auth, $location) {
    var deferred = $q.defer();
    if ($auth.isAuthenticated()) {
      $location.path('/home');
    } else {
      deferred.resolve();
    }
    return deferred.promise;
  };

  $stateProvider
  // auth
    .state('login', {
      url: '/login',
      controller: require('./auth/LoginController'),
      controllerAs: 'vm',
      template: require('./auth/login.html'),
      resolve: {
        skipIfLoggedIn: skipIfLoggedIn
      }
    })

    .state('logout', {
      url: '/logout',
      controller: require('./auth/LogoutController'),
      template: '<div></div>'
    })

  // application
    .state('app', {
      abstract: true,
      template: require('./layout/layout.html'),
      controller: function(user, AclService) {
        this.user = user;
        this.hasRole = AclService.hasRole;
      },
      controllerAs: 'vm',
      resolve: {
        user: function(UserService, AclService, $auth, toastr, $state) {
          return UserService.me().then((data) => {
            _.flatMap(_.flatMap(data.data.roles), 'name').forEach(function(rol) {
              AclService.attachRole(rol);
            });
            return data.data;
          }, (error) => {
            $auth.removeToken();
            toastr.error(error.data.error, 'Estado!');
            $state.go('login');
          });
        }
      },
    })

    .state('app.home', {
      url: '/home',
      controller: function($auth) { this.isAuthenticated = $auth.isAuthenticated },
      controllerAs: 'vm',
      template: require('./app/index.html')
    })

    .state('app.users', {
      abstract: true,
      url: '/users',
      template: '<ui-view/>',
      data: {title: 'Usuarios'}
    })

    .state('app.users.index', {
      url: '?page&name&email&roles',
      data: {title: 'Listado'},
      controller: require('./users/ListController'),
      controllerAs: 'vm',
      template: require('./users/views/index.html'),
      resolve: {
        users: function(UserService, $stateParams) {
          return UserService.filterResources($stateParams).then(function(data) {
            return data.data;
          });
        }
      }
    })

    .state('app.users.create', {
      url: '/create',
      data: {title: 'Crear'},
      controller: require('./users/CreateController'),
      controllerAs: 'vm',
      template: require('./users/views/form.html'),
      resolve : {
        acl: function(AclService, $q) {
          if (!AclService.hasRole('super-admin')) {
            return $q.reject('Unauthorized')
          }
        },
        roles: function(RoleService) {
          return RoleService.getResources().then(function(data) {
            return data.data.data;
          });
        }
      }
    })

    .state('app.users.edit', {
      url: '/edit/:id',
      data: {title: 'Editar'},
      controller: require('./users/EditController'),
      controllerAs: 'vm',
      template: require('./users/views/form.html'),
      resolve: {
        acl: function(AclService, $q) {
          if (!AclService.hasRole('super-admin')) {
            return $q.reject('Unauthorized')
          }
        },
        data: function(UserService, $stateParams) {
          return UserService.getResource($stateParams.id).then(function(data) {
            return data.data;
          });
        },
        roles: function(RoleService) {
          return RoleService.getResources().then(function(data) {
            return data.data.data;
          });
        }
      },
    })

    .state('app.users.show', {
      url: '/show/:id',
      data: {title: 'Ver'},
      controller: require('./users/ShowController'),
      controllerAs: 'vm',
      template: require('./users/views/show.html'),
      resolve: {
        data: function(UserService, $stateParams) {
          return UserService.getResource($stateParams.id).then(function(data) {
            return data.data;
          });
        },
        roles: function(RoleService) {
          return RoleService.getResources().then(function(data) {
            return data.data.data;
          });
        }
      },
    })

    .state('app.roles', {
      abstract: true,
      url: '/roles',
      template: '<ui-view/>',
      data: {title: 'Roles'}
    })

    .state('app.roles.index', {
      url: '?page&name&label&permissions',
      data: {title: 'Listado'},
      controller: require('./roles/ListController'),
      controllerAs: 'vm',
      template: require('./roles/views/index.html'),
      resolve: {
        roles: function(RoleService, $stateParams) {
          return RoleService.filterResources($stateParams).then(function(data) {
            return data.data;
          });
        }
      }
    })

    .state('app.roles.create', {
      url: '/create',
      data: {title: 'Crear'},
      controller: require('./roles/CreateController'),
      controllerAs: 'vm',
      template: require('./roles/views/form.html'),
      resolve: {
        acl: function(AclService, $q) {
          if (!AclService.hasRole('super-admin')) {
            return $q.reject('Unauthorized')
          }
        },
        permissions: function(PermissionService) {
          return PermissionService.all().then(function(data) {
            return data.data;
          });
        }
      }
    })

    .state('app.roles.edit', {
      url: '/edit/:id',
      data: {title: 'Editar'},
      controllerAs: 'vm',
      controller: require('./roles/EditController'),
      template: require('./roles/views/form.html'),
      resolve: {
        acl: function(AclService, $q) {
          if (!AclService.hasRole('super-admin')) {
            return $q.reject('Unauthorized')
          }
        },
        role: function(RoleService, $stateParams) {
          return RoleService.getResource($stateParams.id).then(function(data) {
            return data.data;
          });
        },
        permissions: function(PermissionService) {
          return PermissionService.all().then(function(data) {
            return data.data;
          });
        }
      }
    })

    .state('app.regions', {
      abstract: true,
      url: '/regiones',
      template: '<ui-view/>',
      data: {title: 'Regiones'}
    })

    .state('app.regions.index', {
      url: '?page&name&code',
      data: {title: 'Listado'},
      controller: require('./regions/ListController'),
      controllerAs: 'vm',
      template: require('./regions/views/index.html'),
      resolve: {
        regions: function(RegionService, $stateParams) {
          return RegionService.filterResources($stateParams).then(function(data) {
            return data.data;
          });
        }
      }
    })

    .state('app.regions.create', {
      url: '/create',
      data: {title: 'Crear'},
      controller: require('./regions/CreateController'),
      controllerAs: 'vm',
      template: require('./regions/views/form.html'),
      resolve: {
        acl: function(AclService, $q) {
          if (!AclService.hasRole('super-admin')) {
            return $q.reject('Unauthorized')
          }
        }
      }
    })

    .state('app.regions.edit', {
      url: '/edit/:id',
      data: {title: 'Editar'},
      controller: require('./regions/EditController'),
      controllerAs: 'vm',
      template: require('./regions/views/form.html'),
      resolve: {
        acl: function(AclService, $q) {
          if (!AclService.hasRole('super-admin')) {
            return $q.reject('Unauthorized')
          }
        },
        data: function(RegionService, $stateParams) {
          return RegionService.getResource($stateParams.id).then(function(data) {
            return data.data;
          });
        }
      },
    })

    .state('app.serviciosSalud', {
      abstract: true,
      url: '/serviciosSalud',
      template: '<ui-view/>',
      data: {title: 'Servicios de Salud'}
    })

    .state('app.serviciosSalud.index', {
      url: '?page&name&code&region',
      data: {title: 'Listado'},
      controller: require('./serviciosSalud/ListController'),
      controllerAs: 'vm',
      template: require('./serviciosSalud/views/index.html'),
      data: {title: 'Listado'},
      resolve: {
        serviciosSalud: function(ServicioSaludService, $stateParams) {
          return ServicioSaludService.filterResources($stateParams).then(function(data) {
            return data.data;
          });
        }
      }
    })

    .state('app.serviciosSalud.create', {
      url: '/create',
      data: {title: 'Crear'},
      controller: require('./serviciosSalud/CreateController'),
      controllerAs: 'vm',
      template: require('./serviciosSalud/views/form.html'),
      resolve: {
        acl: function(AclService, $q) {
          if (!AclService.hasRole('super-admin')) {
            return $q.reject('Unauthorized')
          }
        },
        regions: function(RegionService) {
          return RegionService.getResources().then(function(data) {
            return data.data;
          });
        }
      }
    })

    .state('app.serviciosSalud.edit', {
      url: '/edit/:id',
      data: {title: 'Editar'},
      controller: require('./serviciosSalud/EditController'),
      controllerAs: 'vm',
      template: require('./serviciosSalud/views/form.html'),
      resolve: {
        acl: function(AclService, $q) {
          if (!AclService.hasRole('super-admin')) {
            return $q.reject('Unauthorized')
          }
        },
        data: function(ServicioSaludService, $stateParams) {
          return ServicioSaludService.getResource($stateParams.id).then(function(data) {
            return data.data;
          });
        },
        regions: function(RegionService) {
          return RegionService.getResources().then(function(data) {
            return data.data;
          });
        }
      },
    })

    .state('app.comunas', {
      abstract: true,
      url: '/comunas',
      template: '<ui-view/>',
      data: {title: 'Comunas'}
    })

    .state('app.comunas.index', {
      url: '?page&name&code&servicio',
      data: {title: 'Listado'},
      controller: require('./comunas/ListController'),
      controllerAs: 'vm',
      template: require('./comunas/views/index.html'),
      resolve: {
        comunas: function(ComunaService, $stateParams) {
          return ComunaService.filterResources($stateParams).then(function(data) {
            return data.data;
          });
        }
      }
    })

    .state('app.comunas.create', {
      url: '/create',
      data: {title: 'Crear'},
      controller: require('./comunas/CreateController'),
      controllerAs: 'vm',
      template: require('./comunas/views/form.html'),
      resolve: {
        acl: function(AclService, $q) {
          if (!AclService.hasRole('super-admin')) {
            return $q.reject('Unauthorized')
          }
        },
        servicios: function(ServicioSaludService) {
          return ServicioSaludService.getResources().then(function(data) {
            return data.data;
          });
        }
      }
    })

    .state('app.comunas.edit', {
      url: '/edit/:id',
      data: {title: 'Editar'},
      controller: require('./comunas/EditController'),
      controllerAs: 'vm',
      template: require('./comunas/views/form.html'),
      resolve: {
        acl: function(AclService, $q) {
          if (!AclService.hasRole('super-admin')) {
            return $q.reject('Unauthorized')
          }
        },
        data: function(ComunaService, $stateParams) {
          return ComunaService.getResource($stateParams.id).then(function(data) {
            return data.data;
          });
        },
        servicios: function(ServicioSaludService) {
          return ServicioSaludService.getResources().then(function(data) {
            return data.data;
          });
        }
      },
    })

    .state('app.establecimientos', {
      abstract: true,
      url: '/establecimientos',
      template: '<ui-view/>',
      data: {title: 'Establecimientos'}
    })

    .state('app.establecimientos.index', {
      url: '?page&name&code&servicio',
      data: {title: 'Listado'},
      controller: require('./establecimientos/ListController'),
      controllerAs: 'vm',
      template: require('./establecimientos/views/index.html'),
      resolve: {
        establecimientos: function(EstablecimientoService, $stateParams) {
          return EstablecimientoService.filterResources($stateParams).then(function(data) {
            return data.data;
          });
        }
      }
    })

    .state('app.establecimientos.create', {
      url: '/create',
      data: {title: 'Crear'},
      controller: require('./establecimientos/CreateController'),
      controllerAs: 'vm',
      template: require('./establecimientos/views/form.html'),
      resolve: {
        acl: function(AclService, $q) {
          if (!AclService.hasRole('super-admin')) {
            return $q.reject('Unauthorized')
          }
        },
        comunas: function(ComunaService) {
          return ComunaService.getResources().then(function(data) {
            return data.data;
          });
        }
      }
    })

    .state('app.establecimientos.edit', {
      url: '/edit/:id',
      data: {title: 'Editar'},
      controller: require('./establecimientos/EditController'),
      controllerAs: 'vm',
      template: require('./establecimientos/views/form.html'),
      resolve: {
        acl: function(AclService, $q) {
          if (!AclService.hasRole('super-admin')) {
            return $q.reject('Unauthorized')
          }
        },
        data: function(EstablecimientoService, $stateParams) {
          return EstablecimientoService.getResource($stateParams.id).then(function(data) {
            return data.data;
          });
        },
        comunas: function(ComunaService) {
          return ComunaService.getResources().then(function(data) {
            return data.data;
          });
        }
      },
    })

    .state('root', {
      url: '/',
      external: true
    });

  $urlRouterProvider.otherwise('/login');
};
