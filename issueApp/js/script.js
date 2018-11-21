/// <reference path="angular.min.js" />

var myApp = angular.module("myModule", []);

// var myController = function ($scope) {
// 	$scope.message = "RichMond AnGular"
// };

//myApp.controller("myController", myController);
myApp.controller("myController",  function ($scope) {
	$scope.message = "RichMond AnGular";
});
