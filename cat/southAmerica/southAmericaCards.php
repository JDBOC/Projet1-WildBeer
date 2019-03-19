<?php
$myArray = array_map('str_getcsv', file('southAmerica/data.csv'));

foreach ($myArray as $biere) {
?>


<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-1 py-2 ">
  <div class="card p-1">
    <div class="row m-0">
      <div class="col-sm-12  col-5 px-0 d-flex align-items-center">
        <img class="card-img-top " data-toggle="modal" data-target="#<?=str_replace(" ", "_",$biere[0])?>" src="<?=$biere[1]?>" alt="Card image">
      </div>
      <div class="card-body  col-sm-12  col-7 bg-dark text-white">
        <h4 class="card-title  text-center  "><?=$biere[0]?></h4>
        <p class="card-text text-justify"><?=$biere[2]?></p>

        <p class="text-success font-weight-bold text-center"><?=$biere[3]?> €</p>
        <button type="button" name="button" class="btn btn-warning btn-block  p-1"> Ajouter au Panier !</button>
      </div>
    </div>
  </div>
</div>
 <!-- DEBUT partie popup  -->
 <div id="<?=str_replace(" ", "_",$biere[0])?>" class="modal fade" role="dialog">
   <div class="modal-dialog modal-lg">
     <div class="modal-content">
       <div class="modal-header bg-dark text-light">
         <div class="container-fluid">
           <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-6 col-6">
               <!-- TITRE DU POPUP  -->
               <h4 class="modal-title"><?=$biere[0]?></h4>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-6 col-6">
               <!--  BOUTON CROIX FERMETURE -->
               <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
             </div>
           </div>
         </div>
       </div>
       <div class="modal-body">
         <!-- CORPS DU POP UP  -->
         <div class="container-fluid">
           <div class="row">
             <div class="col-lg-4 col-md-4 col-sm-4 col-4">
               <!--  IMAGE DANS LE POPUP -->
               <img class="card-img-top tom-image" src="<?=$biere[1]?>" alt="Card image">
             </div>
             <div class="col-lg-8 col-md-8 col-sm-8 col-8">
               <div class="row">
                 <table class="table table-borderless table-responsive">
                   <tr>
                     <td class="align-middle font-weight-bold">Note</td>
                     <td>
                       <table class="table table-bordered">
                         <!-- TABLEAU GOUT/SOIF  -->
                         <tr>
                           <td>Gout</td>
                           <td>Soif</td>
                           <td>Amertume</td>
                         </tr>
                         <tr>
                           <td><?=$biere[4]?></td>
                           <td><?=$biere[5]?>/2</td>
                           <td><?=$biere[6]?>/2</td>
                         </tr>
                       </table>
                     </td>
                   </tr>
                   <tr>
                     <td class="font-weight-bold">Alcool/volume</td>
                     <td><?=$biere[8]?>%</td>
                   </tr>
                   <tr>
                     <td class="font-weight-bold">fermentation</td>
                     <td><?=$biere[9]?></td>
                   </tr>
                 </table>
               </div>
               <div class="row">
                 <!-- BOUTON RESEAU SOCIAUX  -->
                 <button class="btn"><i class="fa fa-twitter"></i></button>
                 <button class="btn"><i class="fa fa-facebook"></i></button>
                 <button class="btn"><i class="fa fa-google-plus"></i></button>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <br><br>
               <table class="table">
                 <!--TABLEAU PRIX   -->
                 <tr>
                   <td class="font-weight-bold">Unité</td>
                   <td><?=$biere[3]?> €</td>
                 </tr>
                 <tr>
                   <td class="font-weight-bold">Caisse (x6)</td>
                   <td><?=$biere[10]?> €</td>
                 </tr>
                 <tr>
                   <td class="font-weight-bold">Fut</td>
                   <td><?=$biere[11]?></td>
                 </tr>
               </table>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
<?php } ?>
