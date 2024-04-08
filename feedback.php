<?php
        require_once("templates/header.php")
        ?>

<router-outlet ></router-outlet> 
<link href="./assets/css/feedback.css" rel="stylesheet">
<app-feedback  class="ng-star-inserted"> 
<div  class="container-Fluid" >
<form class="ng-untouched ng-pristine ng-invalid" >
<div  class="container fcontent mt-5 mb-5 pb-5" >
   <h3  id="feedback">Feedback Form</h3>

<div  class="mb-3">
<label form="name" class="form-label" >Name:</label>
<input type="text" placeholder="Enter your name" formcontrolname="name" class="form-control form-control-lg ng-untouched ng-pristine ng-invalid ng-touched" >
<div>
    <div>
        <div class="help-block text-danger"> Required</div>
    </div>
</div> 
</div>

<div  class="mb-3">
<label form="address" class="form-label" style="font-weight: 700; font-size: larger;"> Address: </label>
<input type="text" placeholder="Enter your address" formcontrolname="address" class="form-control form-control-lg ng-untouched ng-pr istine ng-invalid" >
<div>
    <div>
        <div class="help-block text-danger"> Required</div>
    </div>
</div> 
</div>


<div  class="mb-3">
<label form="Email" class="form-label">Email address:</label><br>
<input type="email" placeholder="yourEmail@example.com" id="Email" aria-describedby="emailHelp" formcontrolname="email" class="form-control form-control-lg ng-untouched ng-pr istine ng-invalid">
<div  id="emailHelp" class="form-text"> We'll never share your email with anyone else. </div>
 </div>


<div  class="mb-3">
<label form="address" class="form-label"> Contact number:</label>
<input type="phone no" formcontrolname="contact Number" class="form-control form-control-lg ng-untouched ng-pristine ng invalid">
 
</div>

<div class="mb-3">
<label form="message" class="form-label">Message:</label>
<textarea  rows="5" id="comment" name="text" formcontrolname="message" class="form-control ng-untouched ng-pristine ng-invalid">
</textarea>

</div>

<button class="btn btn-primary">Submit</button>
</div>
</form>
</div>

</app-feedback>
<app-footer> </app-footer>
</app-main-site>
<?php
        require_once("templates/footer.php")
        ?>
