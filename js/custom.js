$(document).ready(function(){

	$('.enquiryButton').click(function(){
		let data = {};
		// data.name = $('.name').val();
		// data.email = $('.email').val();
		// data.phone = $('.phone').val();
		// data.area = $('.area').val();
		// data.budget = $('.budget').val();
		// data.comment = $('.comment').val();
		data.name = 'suraj';
		data.email = 'surajgmail.com';
		data.phone = 7021640516;
		data.budget = '2cr';
		data.comment = 'test lead';
		let area = 'Thane';

		const regions = {
            "thane" : 1,
            "kdmc" : 2,
            "western" : 3,
            "pune" : 4,
            "central" : 5,
            "navi mumbai" : 6,
            "mumbai-miscellaneous" : 7,
            "goa" : 8,
            "bengaluru" : 9,
            "kolkatta" : 10,
            "thane & beyond" : 11,
            "south" : 12,
            "gurugram" : 13,
            "ahemdabad" : 14,
      	}
      	const cities = {1:"Mumbai",2:"Mumbai",3:"Mumbai",4:"Pune",5:"Mumbai",6:"Mumbai",7:"Mumbai",8:"Goa",9:"Bangalore",10:"Kolkatta",11:"Mumbai",12:"Mumbai",13:"Gurugram",14:"Ahemdabad",98:"Mumbai",99:"Mumbai"}
      	var region_id = regions[area];
      	data.city = cities[region_id];

		let res = formValid(data);

    	console.log(res,"====>");

		if(res){
			console.log("true");
			let obj = {};
			obj.p_username = data.name;
			obj.p_mobilenumber = data.phone;
	        obj.p_email = data.email;
    	  	obj.p_pref = "home_page";
          	obj.p_leadtype = "homesfy_website";
          	obj.p_launchname = "";
          	obj.p_source = "website";
          	obj.p_city = city;
          	obj.p_projectid = '';
          	obj.p_messagefeedback = data.comment +" "+ data.budget;
          	obj.p_feedback = data.comment +" "+ data.budget;
          	obj.p_message = data.comment +" "+ data.budget;
          	obj.p_regionid = region_id;

			$.ajax({

				type: 'POST',
                url: 'https://www.myhomesfy.com/api/leads',
                data : obj,
                success: function(data) {
                	console.log(data);

                },error: function(error) {
                	console.log(error);
                }
			});

		}else{
			console.log("false");
		}

	});

	formValid = ({...rest }) => {
      let isValid = false;
      let isError = {};
      if (!rest.name || !rest.email || !rest.phone || !rest.city || !rest.budget){
        return false;
      }

      if(nameCheck(rest.name)){
          isError.name = '' 
      }else{
        isError.name = 'Atleast 4 characaters required'
      }
      if(emailCheck(rest.email)){
          isError.email = '' 
      }else{
        isError.email = 'Email address is invalid'
      }
      if(phoneCheck(rest.phone)){
          isError.phone = '' 
      }else{
        isError.phone = 'phone is invalid'
      }
      
      Object.values(isError).forEach(val => {
        console.log('in the Val',val);
          if (val.length > 0) {
              console.log('in the _____ eoor')
              return false;
          } else {
              console.log('in the ++++++++ flase')
              isValid = true
          }
      });

      return isValid;
    }  

});

const nameCheck = data => {

    const regExp = RegExp(/^[a-zA-Z ]+$/);

    if(regExp.test(data)) return true;
    return false;
};
const emailCheck=(email)=>{

    const regExp = RegExp(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/);
    if(regExp.test(email)){
      return true;
    } 
    return false;
};
const phoneCheck=(phone)=>{

    const regExp = RegExp(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/)

    if(regExp.test(phone)){
      return true ;
    } 
    return false;
};