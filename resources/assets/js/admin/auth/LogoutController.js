module.exports = function($state, $auth, toastr, AclService) {
  'ngInject';

	if (!$auth.isAuthenticated()) {
		return;
	}

	$auth.logout().then(() => {
    AclService.flushRoles();
		toastr.info('Ha sido cerrada tu sesión');
		$state.go('login');
	});
};
