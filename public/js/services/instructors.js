app.factory('instructors', ['$http', function($http) {
  return $http.get('/api/instructors')
            .success(function(data) {
              return data;
            })
            .error(function(err) {
              return err;
            });
}]);
