<?php
        require_once("templates/header.php")
        ?>
<link href="./assets/css/department.css" rel="stylesheet">
<router-outlet></router-outlet>
<app-dept-list class="ng-tns-c5-5 ng-star-inserted">
<div class="m-3 p-3 ng-tns-c5-5" style="box-shadow: 1px 3px 17px blue; border-radius: 22px; border: 3px solid lightsea green; min-height: 300px; margin-top:300px !important;padding:50px !important;">
<h2 class="ng-tns-c5-5">Departments</h2>
<div class="container">
  <div class="row">
    <div class="col-md-3 mb-4 ng-tns-c5-5 ng-star-inserted" style="border-radius: 12px; cursor: pointer;">
      <a class="ng-tns-c5-5" href="#">Department of Medicine</a>
    </div>
    <div class="col-md-3 mb-4 ng-tns-c5-5 ng-star-inserted" style="border-radius: 12px; cursor: pointer;">
      <a class="ng-tns-c5-5" href="#">Department of ENT</a>
    </div>
    <div class="col-md-3 mb-4 ng-tns-c5-5 ng-star-inserted" style="border-radius: 12px; cursor: pointer;">
      <a class="ng-tns-c5-5" href="#">Department of Neurology</a>
    </div>
    <div class="col-md-3 mb-4 ng-tns-c5-5 ng-star-inserted" style="border-radius: 12px; cursor: pointer;">
      <a class="ng-tns-c5-5" href="#">Department of Surgery</a>
    </div>
  </div>
</div>
</div>
</app-dept-list>
<?php
        require_once("templates/footer.php")
        ?>
