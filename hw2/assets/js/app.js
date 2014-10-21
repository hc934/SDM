var MyApp = angular.module('MyApp', []);

MyApp.controller('BoardCtrl',function($scope, $http){	

	$scope.add_Issue = {};
	$scope.add_Comment = {};
	//$scope.issue_id = 10;
	//$scope.comments_id = 10;
	$scope.issueidlist = [];
	$scope.commentidlist = [];
	$scope.issues = {};
	$scope.comments = {};
	$scope.main = {};
	$scope.main.page = "index";
	$scope.predicate = "issue_id";

	$scope.$watch('$viewContentLoaded', function(e){
		$scope.viewissue();
	});

	$scope.addcomment = function(post){
		if($scope.commentidlist.length !== 0){
			post.comments_id = $scope.getMaxOfArray($scope.commentidlist)+1;
		}
		else{
			post.comments_id = 1;
		}
		post.timestamp = new Date();
		post.issue_id = $scope.currentIssue.issue_id;
		$http({
        method:'POST',
        url:"addcomment.php",
        data:JSON.stringify(post)
	    }).success(function(data) {
		    console.log("success!!");
		    $scope.main.page = "viewforum";
		  	$scope.viewcomment();
	    }).error(function(data, status) {
	    	console.log("fail!");
		});
	  	
	}

	$scope.viewcomment = function(){
		$http({
        method:'GET',
        url:"viewcomment.php"
	    }).success(function(data) {
	      $scope.comments = data;
	      data.forEach(function(element){
	      	$scope.commentidlist.push(element.comments_id);
	      });
	    }).error(function(data, status) {
	    	console.log("fail!");
		});
	}

	$scope.addissue = function(post){
		if($scope.issueidlist.length !== 0){
			post.issue_id = $scope.getMaxOfArray($scope.issueidlist)+1;
		}
		else{
			post.issue_id = 1;
		}
		$http({
        method:'POST',
        url:"addissue.php",
        data:JSON.stringify(post)
	    }).success(function(data) {
	      console.log("success!!");
	      //$scope.main.page = "index";
	  	  $scope.viewissue();
	    }).error(function(data, status) {
	    	console.log("fail!");
		});
	  	
	  	//$scope.$apply();
	}

	$scope.viewissue = function(){
		console.log("viewissue!!");
		$http({
        method:'GET',
        url:"viewissue.php"
	    }).success(function(data) {
	      $scope.issues = data;
	      console.log(data);
	      data.forEach(function(element){
	       	$scope.issueidlist.push(element.issue_id);
	      });
	    }).error(function(data, status) {
	    	console.log("fail!");
		});
	    //$scope.$apply();
	}

	$scope.GetThisIssue = function(issue){
		$scope.currentIssue = issue;
	}
	$scope.getMaxOfArray = function(numArray) {
    	return Math.max.apply(null, numArray);
	}
});