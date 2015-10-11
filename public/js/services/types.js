app.factory('types', ['$http', function($http) {
  return $http.get('/api/types')
            .success(function(data) {
              return data;
            })
            .error(function(err) {
              return err;
            });
}]);
