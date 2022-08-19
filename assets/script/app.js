var app = angular.module('fixkart', ['ngRoute', 'angular.filter','ngSanitize','vsGoogleAutocomplete']);



app.controller('headercontroller', function ($http, $scope,$filter, $window, globalUrl, $location,servService) {


load_device();
$scope.devicel = "";



function load_device(){
    servService.load_device().then(function(response){



$scope.devicelist = response.data.data;
console.log($scope.devicelist);
setTimeout(function() {

$('select').niceSelect();
 }, 500);


    }, function(error) {});
}

$scope.brand_list = function(id){
    // alert($scope.devicel);
    servService.load_brand_bydevice($scope.devicel).then(function(response){  


$scope.brandlist = response.data.data;
setTimeout(function() {

$('select').niceSelect('update');
 }, 500);


    }, function(error) {});
}

$scope.model_list = function(){
     // alert($scope.brandl);

    servService.load_model_bybrand($scope.brandl).then(function(response){  


$scope.modellist = response.data.data;
setTimeout(function() {

$('select').niceSelect('update');
 }, 500);


    }, function(error) {});
}

$scope.issue_list = function(){

    servService.load_issue_bymodel($scope.modell).then(function(response){  


$scope.issuelist = response.data.data;
setTimeout(function() {

$('select').niceSelect('update');
 }, 500);


    }, function(error) {});

}

$scope.submit_requesr = function(){
     if(($scope.devicel == '')||($scope.devicel === undefined)){
        $scope.nerror = "Please select Device";
     }else if(($scope.brandl == '')||($scope.brandl === undefined)){
 $scope.nerror = "Please select Brand";
     }else if(($scope.modell == '')||($scope.modell === undefined)){
$scope.nerror = "Please select modal";
     }else if(($scope.issues == '')||($scope.issues === undefined)){
        $scope.nerror = "Please select issue";
     }else{
         $scope.nerror = "";
         $scope.nerror_n = "";
         $("#msgsection").hide();
          $("#mobilesect").show();
         $("#otpsect").hide();
         $('#exampleModal').modal('show');
     }
    
    
}

$scope.send_otp = function(){

    if(($scope.name == '')||($scope.name === undefined)){
        $scope.nerror_n = "Please Enter your name";
     }else if(($scope.mobile == '')||($scope.mobile === undefined)){
         $scope.nerror_n = "Please Enter your Mobile";
     }else{
        servService.send_otp($scope.devicel,$scope.brandl,$scope.modell,$scope.issues,$scope.name,$scope.mobile).then(function(response){  
         // $scope.nerror_n = "";
         $("#mobilesect").hide();
         $("#otpsect").show();
         $scope.order_id = response.data;

         // $scope.nsucess_n = " Your request is submitted successfully our team will contact you shortly";
         }, function(error) {});
     }

}

$scope.send_enquiry = function(){
    
if(($scope.otp == '')||($scope.otp === undefined)){
        $scope.nerror_notp = "Please Enter otp";
     }else{
        servService.send_enquiry($scope.devicel,$scope.brandl,$scope.modell,$scope.issues,$scope.name,$scope.mobile,$scope.otp,$scope.order_id).then(function(response){  
         $scope.nerror_notp = "";
         window.location.href = "thanks.html";
         $("#msgsection").show();
          $("#mobilesect").hide();
         $("#otpsect").hide();

         $scope.nsucess_notp = " Thanks for choosing fixkart we will fix your device in 15mins @ your place for more details call us on 9886004346";
         }, function(error) {});
     }


}

$scope.close_model = function(){
    $('#exampleModal').modal('hide');

}
});


app.controller('thankstroller', function ($http, $scope,$filter, $window, globalUrl, $location,servService) {


$('#exampleModal').modal('show');
    $("#msgsection").show();
         //  $("#mobilesect").hide();
         // $("#otpsect").hide();

         $scope.nsucess_notp = " Thanks for choosing fixkart we will fix your device in 15mins @ your place for more details call us on 9886004346";



$scope.close_model = function(){
   window.location.href = "thanks.html";

}

 

    });



