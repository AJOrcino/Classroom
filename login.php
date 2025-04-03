<?php
$Image = [
    'picture' => 'Asset/sample.png', 
];

$Team = [
  [ 
  'name' => 'Jacob Alocon',
  'position' => 'Lead Developer'
  ],
  [
    'name' => 'Allen Jefferson C. Orcino',
    'position' => 'Frontend|Backend Developer'
  ],
  [
    'name' => "Lemuel Doblada",
    'position' => 'Frontend Developer'
  ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Name ng System-->
 <title></title>
<!-- Logo Picture-->
 <link rel="icon" href=<?php echo$Image['picture']; ?> type="image/png">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<!-- Link for login css-->
 <link rel="stylesheet" href="login.css">
</head>

<body>
   <!-- Navigation Bar -->
   <nav class="navbar">
        <div class="logo">
            <img src="Asset/sample.png" alt="PLMUN Logo">
            <div>
                <div class="logo-text"></div>
                <div class="logo-subtext"></div>
            </div>
        </div>
    </nav>
<!-- Register -->
 <div class="container" id="signup" style="display:none;">
  <h1 class="form-title">Register</h1>
  <form method="post" action="" onsubmit="return validateSignUp()">
   <div class="input-group">
    <i class="fas fa-user"></i>
    <input type="text" name="fName" id="fName" placeholder="First Name" required>
    <label for="fname">First Name</label>
   </div>
   <div class="input-group">
    <i class="fas fa-user"></i>
    <input type="text" name="lName" id="lName" placeholder="Last Name" required>
    <label for="lName">Last Name</label>
   </div>
   <div class="input-group">
    <i class="fas fa-envelope"></i>
    <input type="email" name="email" id="signupEmail" placeholder="Email" required>
    <label for="email">Email</label>
   </div>
   <div class="input-group">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" id="signupPassword" placeholder="Password" required>
    <label for="password">Password</label>
   </div>
   <input type="submit" class="btn" value="Sign Up" name="signUp">
  </form>
  <p class="or">
   --------------or--------------
  </p>
  <div class="icons">
   <a href="https://accounts.google.com/ServiceLogin" target="_blank">
    <i class="fab fa-google"></i>
   </a>
   <a href="https://www.facebook.com/login" target="_blank">
    <i class="fab fa-facebook"></i>
   </a>
  </div>
  <div class="links">
   <p>Already Have Account ?</p>
   <button id="signInButton">Sign In</button>
  </div>
 </div>
<!-- Sign In-->
 <div class="container" id="signIn">
<!-- Logo -->
  <img src=<?php echo$Image['picture']; ?> alt="Sign In Image" class="sign-in-image">
  <h1 class="form-title">Sign In</h1>
  <form method="post" action="" onsubmit="return validateSignIn()">
   <div class="input-group">
    <i class="fas fa-envelope"></i>
    <input type="email" name="email" id="signinEmail" placeholder="Email" required>
    <label for="email">Email</label>
   </div>
   <div class="input-group">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" id="signinPassword" placeholder="Password" required>
    <label for="password">Password</label>
   </div>
   <p class="recover">
    <a href="#">Recover Password</a>
   </p>
   <input type="submit" class="btn" value="Sign In" name="signIn">
  </form>
  <p class="or">
   ----------or--------
  </p>
  <div class="icons">
   <a href="https://accounts.google.com/ServiceLogin" target="_blank">
    <i class="fab fa-google"></i>
   </a>
   <a href="https://www.facebook.com/login" target="_blank">
    <i class="fab fa-facebook"></i>
   </a>
  </div>
  <div class="links">
   <p>Don't have account yet?</p>
   <button id="signUpButton">Sign Up</button>
  </div>
 </div>
 
 <!-- Developer Button -->
 <button class="developer-btn" id="developerBtn">
  <i class="fas fa-code"></i>
 </button>

 <!-- Developer Modal -->
 <div class="developer-modal" id="developerModal">
  <div class="modal-content">
   <span class="close-btn" id="closeModal">&times;</span>
   <h3>Development Team</h3>
   <ul>
    <!--Team List-->
      <?php foreach ($Team as $member): ?>
          <li><strong><?php echo htmlspecialchars($member['name']); ?></strong> - <?php echo htmlspecialchars($member['position']); ?></li>
      <?php endforeach; ?>
   </ul>
  </div>
 </div>
<!-- Link for login js-->
 <script src="login.js"></script>
</body>

</html>