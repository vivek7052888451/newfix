var app = angular.module('fixkart');

app.service('servService', ['$http', 'globalUrl', function($http, globalUrl) {


    this.load_device = function(){
        return $http({
            method: 'POST',
            // data: 'user_id=' +user_id+'&token='+token,
            url: globalUrl.baseurl +'api/list_all_device/',
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
      
      
        })
    }


this.load_brand_bydevice = function(divid){
     return $http({
            method: 'GET',
             // data: 'user_id=' +user_id+'&token='+token,
            url: globalUrl.baseurl +'api/get/all_brand/'+divid,
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
      
      
        })
}


this.load_model_bybrand = function(brand_id){
    return $http({
            method: 'GET',
             // data: 'user_id=' +user_id+'&token='+token,
            url: globalUrl.baseurl +'api/get/all_model/'+brand_id,
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
      
      
        })

}


this.load_issue_bymodel = function(model_id){

    return $http({
            method: 'GET',
             // data: 'user_id=' +user_id+'&token='+token,
            url: globalUrl.baseurl +'api/get/all_issue/'+model_id,
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
      
      
        })

}

this.send_otp = function(devicel,brandl,modell,issues,name,mobile){

    var postdata = 'device='+devicel+'&brand='+brandl+'&model='+modell+'&issue='+issues+'&myname='+name+'&mymobile='+mobile;
return $http({
            method: 'POST',
             data: postdata,
            url: globalUrl.baseurl +'api/send_otp/',
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
      
      
        })

}

this.send_enquiry = function(devicel,brandl,modell,issues,name,mobile,otp,order_id){
var postdata = 'device='+devicel+'&brand='+brandl+'&model='+modell+'&issue='+issues+'&myname='+name+'&mymobile='+mobile+'&otp='+otp+'&order_id='+order_id;
return $http({
            method: 'POST',
             data: postdata,
            url: globalUrl.baseurl +'api/add_enquery_1/',
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
      
      
        })
}
    
}]);