var token;

function Login(){
	var id_login = document.getElementById("login_userName").value;
	var pass_login = document.getElementById("login_password").value;

	let settings = {
	  "url": "http://localhost/Test_SAIJAI_RestApi/api/v1/user/login",
	  "method": "POST",
	  "timeout": 0,
	  "headers": {
	    "Content-Type": "application/json"
	  },
	  "data": JSON.stringify({"userName":id_login,"passWord":pass_login}),
	};

	$.ajax(settings).then(function(response){
	    // console.log('response : ',response);
	    token = response.result.token;
	    if (response.result.imageProfile != "") {
	    	document.getElementById("imageProfile").src = response.result.imageProfile;
	    }
	    alert("Login")
	    document.getElementById("userNameProfile").innerHTML = "Hello : " + response.userName;
	    document.getElementById("login_userName").value = "";
	    document.getElementById("login_password").value = "";
	    document.getElementById('checkuserLogin').style.display = null;
	}).catch(function(error){
	   alert(error.responseJSON.result.Message)
	});
}

function Register(){
	var id_regis = document.getElementById("register_userName").value;
	var pass_regis = document.getElementById("register_password").value;

	// console.log(id)
	let settings = {
	  "url": "http://localhost/Test_SAIJAI_RestApi/api/v1/user/register",
	  "method": "POST",
	  "timeout": 0,
	  "headers": {
	    "Content-Type": "application/json"
	  },
	  "data": JSON.stringify({"userName":id_regis,"passWord":pass_regis}),
	};

	$.ajax(settings).then(function(response){
	    alert(response.result.Message)
	    document.getElementById("register_userName").value = "";
	    document.getElementById("register_password").value = "";
	}).catch(function(error){
	   alert(error.responseJSON.result.Message)
	});
}

function UploadImage(){
	// console.log(token);
	uploadImg(token);
}

const toBase64 = file => new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => resolve(reader.result);
    reader.onerror = error => reject(error);
});

async function uploadImg(toekn) {
   const file = document.querySelector('#imageForm').files[0];
   let base64 = await toBase64(file);

   var settings = {
	  "url": "http://localhost/Test_SAIJAI_RestApi/api/v1/user/uploadImage",
	  "method": "POST",
	  "timeout": 0,
	  "headers": {
	    "Authorization": "Bearer " + toekn,
	    "Content-Type": "application/json"
	  },
	  "data": JSON.stringify({"imageBase64":base64}),
	};

	$.ajax(settings).then(function(response){
	    alert(response.result.Message);
	    document.getElementById("imageProfile").src = response.result.imageProfile;
	    document.querySelector('#imageForm').value = null;
	}).catch(function(error){
	   alert(error.responseJSON.error)
	});
}



