// Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyCbAtks4dpIvBsTytqRt3PfrXj_mudU3Ew",
  authDomain: "premium-quotes-pro.firebaseapp.com",
  databaseURL: "https://premium-quotes-pro.firebaseio.com",
  projectId: "premium-quotes-pro",
  storageBucket: "premium-quotes-pro.appspot.com",
  messagingSenderId: "625698181484",
  appId: "1:625698181484:web:a407fcef3085659acc2349"
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