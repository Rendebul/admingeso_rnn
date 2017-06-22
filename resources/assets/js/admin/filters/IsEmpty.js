module.exports = function() {
  return function(object) {
    if (typeof object === 'undefined') {
      return false;
    }

    if (Array === object.constructor) {
      return angular.equals([], object);
    }
    return angular.equals({}, object);
  };
};
