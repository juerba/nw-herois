// create the controller and inject the Angular $scope
Heroi.controller('heroiController', function heroiController($scope, $http, $location, $routeParams, constants) {
    // set our current page for pagination purposes
    
    console.log($scope);
    /*
    $scope.heroi_id = $routeParams.heroiID;
    $scope.heroi_name = "Unknown Burger";
    
    // modal title
    $scope.modal_title = 'Add a new heroi for '+$scope.heroi_name;
    $scope.modal_button = "Add heroi";
     
    // pagination
    $scope.currentPage=1;
    $scope.lastPage=1;
    $scope.loadMoreText='Load More heroi...';
     
    $http.get(constants.API_URL + "herois/" + $scope.heroi_id )
        .success(function(response) {
            $scope.heroi = response.data;
            $scope.heroi_name = response.name;
             
            // got the burger, now get the heroi from the API
            $http.get(constants.API_URL + "herois/" + $scope.heroi_id + "/heroi")
                .success(function(response) {
                    $scope.heroi = response.data;
                    $scope.currentPage = response.current_page;
                    $scope.lastPage = response.last_page;
                     
                    if($scope.currentPage >= $scope.lastPage){
                        $scope.loadMoreText='All herois Loaded!';
                    }
                })
                .error(function(response, status, headers, config) {
                        // log the response
                        console.log(response);
                         
                        // alert and log the response
                        alert('Failed to get the burger heroi: [Server response: '+status + '] - ' +response.name[0]);
                         
                    });
        })
        .error(function(response, status, headers, config) {
                // log the response
                console.log(response);
                 
                // reload the main page
                $scope.loadBurgersPage();
                 
            });
     
    // infinite scroll of the herois
    $scope.loadMoreHerois = function() {
        // increase our current page index
        $scope.currentPage++;
         
         
        $http.get(constants.API_URL + "cla/" + $scope.heroi_id + "/herois", {params: { page: $scope.currentPage }})
            .success(function(response) {
                $scope.heroi = $scope.heroi.concat(response.data);
                $scope.currentPage = response.current_page;
                $scope.lastPage = response.last_page;
                 
                if($scope.currentPage >= $scope.lastPage){
                    $scope.loadMoreText='All herois Loaded!';
                }
            });
             
    };
     
    $scope.addNovoHeroi = function(heroiID){
         
        if($scope.modal_button == "Edit heroi"){
            //edit the existing heroi to our heroi
            $http.put(constants.API_URL + "herois/" + $scope.heroi_id + "/herois/"+heroiID, $scope.herois)
                .success(function(response) {
                     
                    console.log(response);
                     
                    // close the modal
                    $scope.closeModal();
                     
                    // reload the page
                    location.reload();
 
                })
                .error(function(response, status, headers, config) {
                    // alert and log the response
                    alert('Failed to edit the heroi: [Server response: '+status + '] - ' +response.name);
                    console.log(response);
                     
                });
        }else{
            //add the new heroi to our heroi
            $http.post(constants.API_URL + "herois/" + $scope.heroi_id + "/herois", $scope.heroi)
                .success(function(response) {
                     
                    console.log(response);
                     
                    // close the modal
                    $scope.closeModal();
                     
                    // reload the page
                    location.reload();
                     
 
                })
                .error(function(response, status, headers, config) {
                    // alert and log the response
                    alert('Failed to add the heroi: [Server response: '+status + '] - ' +response.name[0]);
                    console.log(response);
                     
                });
        }
    }
     
    $scope.deleteHerois = function(heroiID){
        var confirmDelete = confirm('Are you sure you want to delete this heroi?');
        if (confirmDelete) {
            $http.delete(constants.API_URL + "herois/" + $scope.heroi_id + "/herois/"+heroiID)
            .success(function(response) {
                 
                console.log(response);
                $location.reload();
                 
 
            })
            .error(function(response, status, headers, config) {
                // alert and log the response
                alert('Failed to add the heroi: [Server response: '+status + '] - ' +response.name[0]);
                console.log(response);
                 
            });
        }else{
            return false;
        }
         
    }
     
    // load the burgers page
    $scope.loadBurgersPage = function(){
         $location.path("herois");
    }
     
    // display the modal form
    $scope.showModal = function(action,heroiID) {
         
         switch (action) {
            case 'edit':
                $scope.modal_title = "Edit heroi for "+$scope.heroi_name;
                $scope.modal_button = "Edit heroi";
                $http.get(constants.API_URL + "herois/" + $scope.heroi_id + "/herois/"+heroiID)
                    .success(function(response) {
                        console.log(response);
                        $scope.heroi = response;
                    });
                break;
            case 'add':
            default:
                $scope.heroi = null;
                $scope.modal_title = 'Add a new heroi for '+$scope.heroi_name;
                $scope.modal_button = "Add heroi";
                break;
        }
     
        $('#addHeroiModal').modal('show');
    }
     
    // close the modal form
    $scope.closeModal = function() {
        $('#addHeroiModal').modal('hide');
    }
    */
});