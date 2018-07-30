 <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div  class="background">
        <img src="img/fudlogo.png">
        </div>      
      <a href="#user"><img class="circle" src="img/fud.jpeg"></a>

      <?php if (!empty($_SESSION['logged'])): ?>
         <a href="user_dash.php"><span class="white-text name"><strong style="color: #f44336;background: #fafafa" ><?php echo strtoupper($_SESSION['name']) ?></strong></span></a>
      <?php $sql = mysqli_query($con, "SELECT * FROM `users` WHERE fname = '".$_SESSION['name']."' ");
      $retrieve= mysqli_fetch_array($sql);
       ?>
      <a href="#email"><span  class="white-text email"><strong style="color: #f44336;background: #fafafa"><?php echo $retrieve['email'];  ?></strong></span></a>
            <?php else: ?>
          <a href="#name"><span style="color: #880e4f" class="white-text name"><?php echo "Guest User"; ?></span></a>
      <?php endif ?>
     </div></li>
    <form method="POST" action="login.php" class=" col s12"> 
   
     <div class="col s6">
        <div class="input-field col s3">
          <input id="reg_no" name="reg_no" type="text" class="validate" required>
          <label for="reg_no">Enter Registration Number</label>
        </div>
        <div class="input-field col s3">
          <input id="password" type="password" name="password" class="validate">
          <label for="password">Password</label>
        </div>

      </div>
      <button  style="margin-right: 50px" type="submit" name="submit" id="submit" class="btn-large">Login</button>
</form>
<hr>
<li><a href="user_dash.php"><i class="material-icons">account_circle</i>Account</a></li>
<li><div class="divider"></div></li>
    <li><a href="intro.php"><i class="material-icons">cloud</i>Intro to E-learning</a></li>
    <li><a href="#!"><i class="material-icons">book</i>C.S Books</a></li>
    <li><a href="videos.php"><i class="material-icons">live_tv</i>Video Tutorials</a></li>
    <li><a href="journals.php"><i class="material-icons">book</i>Journals</a></li>
    <li><a href="#!"><i class="material-icons">people</i>Allumni</a></li>
    <li><a href="#!"><i class="material-icons">subject</i>Time Table</a></li>
    <li><a href="#!"><i class="material-icons">forum</i>News</a></li>
    <li><div class="divider"></div></li>
    <li><a href="upload.php"><i class="material-icons">cloud</i>Upload E-Material</a></li>
    <li><div class="divider"></div></li>
    <li><a href="#!"><i class="material-icons">public</i>About</a></li>
    <li><a href="#!"><i class="material-icons">place</i>contact Us</a></li>
    <li><a class="subheader"></a></li>
    <li><a class="waves-effect" href="#!"></a></li>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#" data-target="nav-mobile"></a></li>
        <?php if(!empty($_SESSION['logged'] )): ?>
          <li><a href="logout.php">Logout</a></li>
          
          <?php else: ?>
            <a href="" class="sidenav-trigger" data-target="slide-out"><li>Sign in</li></a>

        <?php endif ?>

      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>