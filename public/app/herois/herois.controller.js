Herois.controller('heroisController', function heroisController($scope, $http, $location, constants) {
    // set our current page for pagination purposes
     $scope.currentPage=1;
     $scope.lastPage=1;
     $scope.loadMoreText='Load More Heroes...';
     
     $http.get(constants.API_URL + "heroi", {params: { page: $scope.currentPage }})
        .success(function(response) {
            $scope.herois = response.data;
            $scope.currentPage = response.current_page;
            $scope.lastPage = response.last_page;
             
            if($scope.currentPage >= $scope.lastPage){
                $scope.loadMoreText='All Heroes Loaded!';
            }
        });
     
    $scope.loadMoreHerois = function() {
        $scope.currentPage++;
         
        $http.get(constants.API_URL + "herois", {params: { page: $scope.currentPage }})
            .success(function(response) {
                $scope.herois = $scope.herois.concat(response.data);
                $scope.currentPage = response.current_page;
                $scope.lastPage = response.last_page;
                 
                if($scope.currentPage >= $scope.lastPage){
                    $scope.loadMoreText='All Heroes Loaded!';
                }
            });
             
    };
     
    $scope.addHeroi = function() {
        $http.post(constants.API_URL + "herois", $scope.heroi)
            .success(function(response) {
                 
                console.log(response);
                 
                // close the modal
                $scope.closeModal();
                 
                // load the page for our newly created burger
                $scope.loadHeroiPage(response.id);
                 
 
            })
            .error(function(response, status, headers, config) {
                // alert and log the response
                alert('Failed to add the heroi: [Server response: '+status + '] - ' +response.name[0]);
                console.log(response);
                 
            });
 
    }
     
    // load the page for an individual burger
    $scope.loadHeroiPage = function(id){
         $location.path("herois/"+id);
    }
     
    // display the modal form
    $scope.showModal = function() {
        $('#addHeroiModal').modal('show');
    }
     
    // display the modal form
    $scope.closeModal = function() {
        $('#addHeroiModal').modal('hide');
    }
});