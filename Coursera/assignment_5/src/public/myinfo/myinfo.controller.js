(function() {
  'use strict';

  angular.module('public')
  .controller('MyInfoController', MyInfoController);

  MyInfoController.$inject = ['UserService', 'MenuService']
  function MyInfoController (UserService, MenuService) {
    var ctrl = this;


    ctrl.isRegistered = UserService.getIsRegistered();

    ctrl.user = UserService.getUserInfo();

    if(ctrl.isRegistered) {
      MenuService.getMenuItems(ctrl.user['favoriteMenu'])
      .then(function (response) {
        //console.log('response: ',response)
        ctrl.menuItems = [];
        ctrl.menuItems.push(response);
      })
    }
  }
}());
