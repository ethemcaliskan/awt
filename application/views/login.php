
<div class="container">
	<div style="margin-top:5%;" class="row"><div class="col-4"></div><div class="col-4">
<!-- Material form login -->
<div class="card bounceIn animated">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Sign in</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form method="post" action="/Login/Control" class="text-center" style="color: #757575;">

      <!-- Email -->
      <div class="md-form">
        <input type="text" name="username"  class="form-control">
        <label for="materialLoginFormEmail">Username</label>
      </div>

      <!-- Password -->
      <div class="md-form">
        <input type="password" name="password" id="password" class="form-control">
        <label for="materialLoginFormPassword">Password</label>
      </div>

      <div class="d-flex justify-content-around">
        <div>
          <!-- Remember me -->
     
        </div>
        <div>
          <!-- Forgot password -->
         
        </div>
      </div>

      <!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

      <!-- Register -->
      <p>Not a member?
        <a href="/Login/register">Register</a>
      </p>

    

    </form>
    <!-- Form -->

  </div>

		</div></div><div class="col-4"></div></div>
	
</div>
<!-- Material form login -->