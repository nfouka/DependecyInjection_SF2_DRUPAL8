/**
 * @file
 *  Related JavaScript.
 */

/**
 * Declare the app.
 */
var s5_app = angular.module('s5_app', []);
s5_app.controller('s5_ctrl', function s5_ctrl($scope) {

});




/**
 * We need to bootstrap the app manually to the container by id, since we have
 *  more tha one app on the same page.
 */
angular.element(document).ready(function() {
  angular.bootstrap(document.getElementById("s5_container"),['s5_app']);
});