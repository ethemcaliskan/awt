
<div class="container">
	<div style="margin-top:5%;" class="row"><div class="col-3"></div><div class="col-6">


<!-- Default form register -->
<form method="post" action="/Login/registerProcess" class="text-center border border-light p-5">

    <p class="h4 mb-4">Sign up</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" name="firstname" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" name="lastname" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
        </div>
    </div>

    <!-- E-mail -->
    <input name="email" type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input name="password" type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        At least 8 characters and 1 digit
    </small>

  


    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Sign Up</button>

    <!-- Social register -->
    
    <hr>

    <!-- Terms of service -->
    

</form>
<!-- Default form register -->


</div><div class="col-3"></div></div>
	
</div>
<!-- Material form login -->