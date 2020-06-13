(function () {
"use strict";

angular.module('common')
.service('MenuService', MenuService);


MenuService.$inject = ['$http', 'ApiPath'];
function MenuService($http, ApiPath) {
  var service = this;

  service.getCategories = function () {
    return $http.get(ApiPath + '/categories.json').then(function (response) {
      return response.data;
    });
  };


  service.getMenuItems = function (menu_item) {
    // var config = {};
    // if (category) {
    //   config.params = {'category': category};
    // }

    return $http.get(ApiPath + '/menu_items/'+ menu_item + '.json')
    .then(function success (response) {
      //console.log('response.data: ', response.data);
      //console.log('response: ', response);
      return response.data;
    },
    function error(response) {
      console.log('http error:', response);
      if(response.data.status == 500) {
        //console.log("Internal Server Error");
        return null;
      }
    });
  };

}



})();
