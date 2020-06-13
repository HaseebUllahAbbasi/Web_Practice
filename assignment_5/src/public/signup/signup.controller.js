(function() {
  'use strict';

  angular.module('public')
  .controller('SignupController', SignupController);

  SignupController.$inject = ['UserService', 'MenuService'];
  function SignupController (UserService, MenuService) {
    var ctrl = this;

    ctrl.register = function () {
      // if the favorite Item is found
      MenuService.getMenuItems(ctrl.favoriteMenu)
      .then(function (response) {
        //console.log('register response:', response);
        if(response){
          UserService.register({
            firstName: ctrl.firstname,
            lastName: ctrl.lastname,
            email: ctrl.email,
            phone: ctrl.phoneNumber,
            favoriteMenu: ctrl.favoriteMenu
          });
          ctrl.isRegistered = true;
          ctrl.isMenuItemNotFound = false;
        }

        // if not found
        else {
          //console.log('OnRegister: Item not found.');
          ctrl.isMenuItemNotFound = true;
          ctrl.isRegistered = false;
        }
      })
    }
  }
}());
