<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Sandy</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
  <style>
    body {
      background: #68a49c
    }
  </style>
</head>

<body>
  <!-- แถบด้านบน -->

  <div class="container">
    <div class="row">
      <div id="logo" class="col col-sm col-md">
        <nav class="navbar navbar-light bg-light justify-content-between">
          <a class="navbar-brand"  href="#"><span class="badge" id="logo" style="font-size:1vw;background:#68a49c;color:white">แสนดี</span></a>
          <h4 style="color: #68a49c;font-size:1vw">Welcome {{show_name}}</h4>
          <button class=" btn btn-danger" onclick="signOut()" style="font-size:1vw">Log Out</button>
        </nav>
      </div>
    </div>
  </div>
  <!-- กล่อง component หลัก -->
  <br><br><br>
  <div class="container ">

    <div class="row justify-content-center ">
      <div class="col-5">
        <br>
        <!-- Image -->
        <img id="logo" src="static/logo/logo-sandy.png" alt="logo" style="max-width: 100%">
        <!-- <img src="http://localhost/SANDY_BULLY/BullyModel%20%E0%B8%A5%E0%B9%88%E0%B8%B2%E0%B8%AA%E0%B8%B8%E0%B8%94/WEB/static/logo/logo-sandy.png" alt="logo" style="max-width: 100%"> -->
        <br>
        <br>
      </div>
    </div>


    <div class="row justify-content-center">
      <div id="element" class="col-5 text-center">
        <!-- ช่องกรอกคำบูลลี่ -->

        <form action="{{url_for('output_word')}}" method="post">
          <div class="form-group">
            <input type="text" class="form-control text-center" style="border-radius: 40px;font-size:1vw" name="bully" id="bully" placeholder="กรอกประโยคที่ต้องการ Tweet" required>
            <!-- ปุ่มกดตรวจสอบ -->
            <br>
            <input class="btn btn-success btn-lg" style="border-radius: 40px;background:#adc965;font-size:1vw" type="submit" value="TWEET ON TWITTER">
          </div>
        </form>

      </div>
    </div>

  </div>





  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
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
  function signOut() {
    firebase
      .auth()
      .signOut()
      .then(function() {
        window.location.assign('/');
      })
      .catch(function(error) {
        // An error happened.
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