<?php
include "verification.php";
include "skeleton.php";

?>
<html>
    <head>
        <title></title>
    </head>
    <body>
    	<style type="text/css">
    		h5{
    			text-align: center;

       font-weight: bold;

        width: 200px;


       margin: auto;

    margin-bottom: auto;

margin-bottom: 20px;

    		}
    	</style>
        <div>
            <div style="background-color: #00c292;"><h3 style="text-align:center;"> ACOMPTES ET PRECOMPTE A DEDUIRE </h3></div>


            <div class="card-body card-block">
                 <table border="1" id="bootstrap-data-table"  class="table table-bordered" style="font-size: 14px;">
                                  <thead>
                                        <tr>
                                            <th>NATURE D'IMPOTS A LA SOURCE</th>
                                            <th> BASE</th>
                                            <th>PRINCIPAL</th>
                                            <th>CAC</th>
                                            <th>PENALTES</th>
                                            <th>TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>



                                <form action="acomptes2.php" method="post">
                                     <tr>
                                        <td colspan="6">
                                    <div class="row form-group">
                                        
                                        <div class="col-12 "><input type="text"  name="niu" placeholder="Entrez le NIU du contribuable" class="form-control" required="required"></div>
                                    </div>
                                    <div class="row form-group">
                                        
                                        <div class="col-12 "><input type="text"  name="mois" placeholder="Entrez le MOIS de lexercise (EN CHIFRRES)" class="form-control" required="required"></div>
                                    </div>

                                </td>
                                    </tr>
                                    <tr>
                                  <td>  <h5 > Report Credit Anterieur </h5> </td>
                                      <td>
                                    <div class="row form-group">
                                        <div class="col-12"><input type="text"  name="b12" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-12"><input type="text" name="p12" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-12"><input type="text" name="c12" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-12 "><input type="text" name="pen12" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-12 "><input type="text" name="t12" placeholder="" class="form-control"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                  <td>  <h5 > Precompte sur Achat </h5> </td>
                                    <td>
                                    <div class="row form-group">
                                        <div class="col-12"><input type="text"  name="b22" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-12 "><input type="text" name="p22" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-123"><input type="text" name="c22" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-12"><input type="text" name="pen22" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-12 "><input type="text" name="t22" placeholder="" class="form-control"></div>
                                        
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                  <td>  <h5 > Acompte Sur CA Retenus a la Source </h5> </td>
                                  <td>
                                    <div class="row form-group">
                                        <div class="col-12 "><input type="text"  name="b32" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-12"><input type="text" name="p32" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-12 "><input type="text" name="c32" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        
                                        <div class="col-12 "><input type="text" name="pen32" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                     
                                        <div class="col-12"><input type="text" name="t32" placeholder="" class="form-control"></div>
                                        
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                  <td>  <h5 > Precomptes Sur Loyer 15%(deductible sur IR) </h5> </td>
                                  <td>
                                    <div class="row form-group">
                                        <div class="col-12"><input type="text"  name="b42" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        
                                        <div class="col-12"><input type="text" name="p42" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        
                                        <div class="col-12 "><input type="text" name="c42" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-12 "><input type="text" name="pen42" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                       
                                        <div class="col-12 "><input type="text" name="t42" placeholder="" class="form-control"></div>
                                        
                                    </div>
                                </td>
                            </tr>
                                    
                                    <tr>
                                  <td> <h5 > Precomptes Sur Remeneration et Honoraires </h5> </td>
                                    <td>
                                    <div class="row form-group">
                                       
                                        <div class="col-12 "><input type="text"  name="b52" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                       
                                        <div class="col-12 "><input type="text" name="p52" placeholder="" class="form-control"></div>
                                    </div>

                                </td>
                                <td>
                                    <div class="row form-group">
                                       
                                        <div class="col-12"><input type="text" name="c52" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        
                                        <div class="col-12 "><input type="text" name="pen52" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                       
                                        <div class="col-12"><input type="text" name="t52" placeholder="" class="form-control"></div>
                                        
                                    </div>
                                </td>
                            </tr>

                                    
                               <tr>
                                   <td>  <input type="submit" class="btn btn-primary btn-sm" value="Submit"></td>
                               </tr>
                                    
                             
                                </form>
                            </tbody>
                        </table>
                            </div>
                            
  
        </div>
    
        <?php
include "footer.php";
?>

    </body>
</html>



