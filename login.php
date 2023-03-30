
 <?php
  require_once("Includes/config.php");
  require_once("Includes/session.php");
  
  ?>

<form action="index.php" class="navbar-form navbar-right" role="form" method="post">
    <div class="form-group">
        <input type="text" placeholder="Email" name="email" id="email" class="form-control">
    </div>
    <div class="form-group">
        <input type="password" placeholder="Password" name="pass" id="pass" class="form-control">
    </div>
    <button type="login_submit" class="btn btn-success" onclick=" validateForm();">Login</button>
</form>
<script>

</script>

