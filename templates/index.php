<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- ชื่อตรงแท็บ -->
  <title>Sandy</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
  <script src="https://kit.fontawesome.com/893285bcd6.js" crossorigin="anonymous"></script>
  <script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
  <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    body {
      background: #68a49c;
    }
    .container{
      background-color: #68a49c;
    }
  </style>
</head>



<body>
  <!-- The surrounding HTML is left untouched by FirebaseUI.
     Your app may use that space for branding, controls and other customizations.-->

  <div class="container">
    <div class="row">
      <div id="logo" class="col-12">

        <nav class="navbar navbar-light bg-light">
          <a class="navbar-brand" href="#" id="logo"><span class="badge" style="font-size:1vw;background:#68a49c;color:white">แสนดี</span></a>
        </nav>
      </div>
    </div>
  </div>







  <div class="container" id="element">
    <div class="row justify-content-center">
      <div class="col-6" >
        <br>
        <!-- image -->
        <img id="logo" src="http://localhost/SANDY_BULLY/BullyModel%20%E0%B8%A5%E0%B9%88%E0%B8%B2%E0%B8%AA%E0%B8%B8%E0%B8%94/WEB/static/logo/logo-sandy.png" alt="logo" style="width: 100%">
        <h4  class="text-center" style="color: white;font-size:1.2vw">
          Sandy คือแอพพลิเคชั่นสำหรับตรวจสอบคำ Bully ภาษาไทยก่อนข้อความนั้นจะถูกโพสลงบน Twitter
        </h4>
      </div>

    </div>

    <div class="row justify-content-center">
      <div class="col-5 text-center">
        <br>
        <br>
        <button onclick='onSignInButtonClick()' style="border-radius: 40px;width: 100%;font-size:1vw  " class="btn btn-light btn-lg"><i class="fab fa-twitter" style="color: #1D9EED"></i> Log in with Twitter</>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-5 text-center">
        <br>
        <p  style="color: white;font-size:.7vw"><i class="fas fa-exclamation-circle"></i> ผู้ใช้งานจะต้องมีบัญชี Twitter ก่อน ถึงจะสามารถใช้งานได้</p>
      </div>
    </div>

  </div>


</body><!-- <script src="auth.js"></script> -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.16.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.16.1/firebase-auth.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.16.1/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyAhhPgjl9vXu7dd3Nc_PvG1a87qb9-2-tI",
    authDomain: "seniorproject-16a8b.firebaseapp.com",
    databaseURL: "https://seniorproject-16a8b.firebaseio.com",
    projectId: "seniorproject-16a8b",
    storageBucket: "seniorproject-16a8b.appspot.com",
    messagingSenderId: "399208134556",
    appId: "1:399208134556:web:d4ea7a5ea5e7be11c57a59",
    measurementId: "G-1MW3V3TJPH"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>

<script>
  function onSignInButtonClick() {
    var provider = new firebase.auth.TwitterAuthProvider();
    firebase.auth().useDeviceLanguage();
    firebase.auth().signInWithPopup(provider).then(function(result) {
      // This gives you a the Twitter OAuth 1.0 Access Token and Secret.
      // You can use these server side with your app's credentials to access the Twitter API.
      var token = result.credential.accessToken;
      var secret = result.credential.secret;
      var userName = result.user.displayName;
      window.location.assign('/main?token=' + token + '&secret=' + secret + '&user=' + userName);



    }).catch(function(error) {
      // Handle Errors here.
      var errorCode = error.code;
      var errorMessage = error.message;
      // The email of the user's account used.
      var email = error.email;
      // The firebase.auth.AuthCredential type that was used.
      var credential = error.credential;
      // ...
    });
  }
</script>

<!-- Animation GSAP -->
<script>
  gsap.from("#logo", {
    opacity: 0,
    x: 100,
    duration: 1,
    ease:"bounce"
  });

  gsap.from("#element", {
    opacity: 0,
    y: 100,
    duration: 1,
    ease:"bounce"
  });
</script>
</html>