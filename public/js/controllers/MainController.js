app.controller('MainController', ['$scope', 'videos', 'instructors', 'positions' , 'types',
    function($scope, videos, instructors, positions, types) {
    videos.success(function(data) {
    $scope.videos = data.videos;
  });
    instructors.success(function(data) {
        var fruits = ["apple"]
        for (i = 0 ; i < data.instructors.length ; i++) {
             fruits.push(data.instructors[i].name);
        }
        $scope.instructors = fruits;
        console.log($scope.instructors);
        });
    types.success(function(data) {
        $scope.types = data.types;
    });
    positions.success(function(data) {
        $scope.positions = data.positions;
        console.log(data);
    });
}]);
