module.exports = function($http) {
	'ngInject';
	this.resource = '';

	this.filterResources = function(params, paginate = true) {
		var queryParams = buildQueryParams(params, paginate);
		return $http.get('/api/' + this.resource + queryParams);
	};

	this.getResources = function(columns) {
    var queryParams = columns ? '?columns=' + columns : '';
    return $http.get('/api/' + this.resource + queryParams);
	};

	this.getResource = function(id, queryParams) {
    var nestedResource = queryParams ? '?with=' + queryParams : '';
		return $http.get('/api/' + this.resource + '/' + id + nestedResource);
	};

	this.createResource = function(data) {
		return $http.post('/api/' + this.resource, data, {ignoreLoadingBar: true});
	};

	this.deleteResource = function(id) {
		return $http.delete('/api/' + this.resource + '/' + id);
	};

	this.updateResource = function(id, data) {
		return $http.put('/api/' + this.resource + '/' + id, data, {ignoreLoadingBar: true});
	};

	function buildQueryParams(params, paginate) {
		var page = params.page || 1;
		var query = paginate ? '?page=' + page : '?';

		for (var paramKey in params) {
			if (paramKey !== 'page' && params[paramKey] !== undefined) {
				query += '&' + paramKey + '=' + params[paramKey];
			}
		}
		return query;
	}
};
