app.factory('videos', ['$http', function($http) {
  return $http.get('/api/videos')
            .success(function(data) {
              return data;
            })
            .error(function(err) {
              return err;
            });
}]);
