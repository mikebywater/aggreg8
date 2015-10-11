app.factory('positions', ['$http', function($http) {
  return $http.get('/api/positions')
            .success(function(data) {
              return data;
            })
            .error(function(err) {
              return err;
            });
}]);
