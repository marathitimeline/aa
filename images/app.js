// Your web app's Firebase configuration
  var firebaseConfig = {
      apiKey: "AIzaSyAFHaSh8rBUFj1s80sJeKsP7BfoBfcx3ng",
    authDomain: "a-mussic.firebaseapp.com",
    databaseURL: "https://a-mussic-default-rtdb.firebaseio.com",
    projectId: "a-mussic",
    storageBucket: "a-mussic.appspot.com",
    messagingSenderId: "683306878834",
    appId: "1:683306878834:web:11ff1154aaf3d22415ffeb",
    measurementId: "G-38SDPGE968"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
    firebase.auth.Auth.Persistence.LOCAL; 

    $("#btn-login").click(function(){
        
        var email = $("#email").val();
        var password = $("#password").val(); 

        var result = firebase.auth().signInWithEmailAndPassword(email, password);
    
        result.catch(function(error){
            var errorCode = error.code; 
            var errorMessage = error.message; 

            console.log(errorCode);
            console.log(errorMessage);
        });

    });

    $("#btn-logout").click(function(){
        firebase.auth().signOut();
    });

    function switchView(view){
        $.get({
            url:view,
            cache: false,  
        }).then(function(data){
            $("#container").html(data);
        });
    }