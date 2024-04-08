<!--Tender start--->

<?php
        require_once("templates/header.php")
        ?>
<router-outlet ></router-outlet>
<app-tenders class="ng-star-inserted" > 

<div _class="container-fluid" style="text-align:center;" >

<div  class="container tender overflow-auto bg-light" style="border-radius: 17px; margin-top:250px; box-shadow:1px 3px 17px lightsteelblue, text-align:center; ">

<h3 id="tenders" style="padding-bottom: 13px; text-align:center; text-shadow:0 0 3px teal, 0 0 6px cadetblue; font-size:1.75rem; font-weight:500; line-height:1.2 " >Tenders</h3>

<div  class="display mb-3" style="text-align:right; ">

<h6  > Display# &nbsp; </h6>

<select >

<option  value="5">5</option> 
<option  value="10">10</option> 
<option  value="20">20</option> 
<option  value="30">30</option> 
<option  value="50">50</option>
</select>
</div>

<table  class="table table-hover table-bordered">
<thead>
<tr>
   <th  scope="col" style="text-align: left; width:52px;">*</th>
   <th scope="col" style="text-align: left;">Article Title</th>
   <th scope="col" id="date" style="text-align: right;">End date</th>
</tr>
</thead>
<tbody>
   <tr class="ng-star-inserted">
     <th  scope="row">1.</th>
     <td style="text-align:left;">
     <p  style="cursor:pointer;">
        faBuilding  faBuilding faBuilding  faBuilding   
    </p>
</td>
  <td style="text-align: right;">April 3, 2024</td>
</tr>
<tr class="ng-star-inserted">
     <th scope="row">2.</th>
     <td  style="text-align:left;">
     <p style="cursor:pointer;">
        new feature added new feature added  
    </p>
</td>
  <td  style="text-align: right;">April 10, 2024</td>
</tr>
 <tr class="ng-star-inserted">
     <th  scope="row">3.</th>
     <td  style="text-align:left;">
     <p  style="cursor:pointer;">
      this is tender for testing  
    </p>
     </td>
  <td  style="text-align: right;">April 18, 2024</td>
</tr>
<tr  class="ng-star-inserted">
     <th  scope="row">4.</th>
     <td  style="text-align:left;">
     <p  style="cursor:pointer;">
        this is  for testing  
    </p>
     </td>
  <td  style="text-align: right;">April 21, 2024</td>
</tr>
<tr  class="ng-star-inserted">
     <th  scope="row">5.</th>
     <td  style="text-align:left;">
     <p style="cursor:pointer;">
        this is tender for testing  
    </p>
     </td>
  <td  style="text-align: right;">April 28, 2024</td>
</tr>
     </tbody>
</table>
<br>
<br>
<ul class="pagination justify-content-center">
    <li class="page-item" disabled="false">
       <a  aria-label="Previous" class="page-link" href="#/tender5/1">
         <span aria-hidden="true">First</span>
      </a>
</li>
<li  class="page-item">
  <a  class="page-link active">1</a>
</li>
<li  class="page-item"> 
  <a  aria-label="last" class="page-link" href="#/tenders/5/1">
    <span  aria-hidden="true">Last</span>
  </a>
  </li>
 </ul>
 </div>
 </div>
</app-tenders>
<?php
        require_once("templates/footer.php")
        ?>
<!--tender end -->