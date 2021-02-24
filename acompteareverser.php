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

        
    		}
    	</style>
        <div>
            <div style="background-color: #00c292;"><h3 style="text-align:center;"> ACOMPTES ET PRECOMPTES A REVERSER</h3></div>


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
                                <form action="acompteareverser2.php" method="post"  >
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
                                   <td> <h5 > Acompte sur CA Retenu  </h5></td>
                                 <td>  
                                    <div class="row form-group">
                                        <div class="col-12 "><input type="text"  name="b13" placeholder="" class="form-control"></div>
                                    </div>
                                </td>

                                 <td>
                                    <div class="row form-group">
                                        <div class="col-12 "><input type="text" name="p13" placeholder="" class="form-control"></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="row form-group">
                                        <div class="col-12 "><input type="text" name="c13" placeholder="" class="form-control"></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="row form-group">
                                        <div class="col-12 "><input type="text" name="pen13" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        
                                        <div class="col-12 "><input type="text" name="t13" placeholder="" class="form-control"></div>
                                        
                                    </div>
                                </td>
                                    </tr>
                                           
                                           <tr>

                                 <td>   <h5 >   Precompte Sur Achat/Vente Retenus</h5>  </td>
                                   
                                   <td>
                                    <div class="row form-group">
                                        
                                        <div class="col-12 "><input type="text"  name="b23" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        
                                        <div class="col-12 "><input type="text" name="p23" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-12 "><input type="text" name="c23" placeholder="" class="form-control"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        
                                        <div class="col-12 "><input type="text" name="pen23" placeholder="" class="form-control"></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="row form-group">
                                       
                                        <div class="col-12 "><input type="text" name="t23" placeholder="" class="form-control"></div>
                                        
                                    </div>
                                </td>

                                </tr>

                                <tr>
                                   <td> <h5 > Precompte Sur Loyer(15%) </h5> </td>

                                   <td>
                                    <div class="row form-group">
                                        
                                        <div class="col-12 "><input type="text"  name="b33" placeholder="" class="form-control"></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="row form-group">
                                        
                                        <div class="col-12 "><input type="text" name="p33" placeholder="" class="form-control"></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="row form-group">
                                        
                                        <div class="col-12 "><input type="text" name="c33" placeholder="" class="form-control"></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="row form-group">
                                        <div class="col-12 "><input type="text" name="pen33" placeholder="" class="form-control"></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="row form-group">
                                       
                                        <div class="col-12 "><input type="text" name="t33" placeholder="" class="form-control"></div>
                                        
                                    </div>
                                </td>
                                </tr>

                                <tr>
                                    <td> <h5 > Precomptes Sur Remeneration Honoraires </h5> </td>
                                    <td>
                                    <div class="row form-group">
                                        
                                        <div class="col-12 "><input type="text"  name="b43" placeholder="" class="form-control"></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="row form-group">
                                        
                                        <div class="col-12 "><input type="text" name="p43" placeholder="" class="form-control"></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="row form-group">
                                       
                                        <div class="col-12 "><input type="text" name="c43" placeholder="" class="form-control"></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="row form-group">
                                        
                                        <div class="col-12 "><input type="text" name="pen43" placeholder="" class="form-control"></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="row form-group">
                    
                                        <div class="col-12 "><input type="text" name="t43" placeholder="" class="form-control"></div>
                                        
                                    </div>
                                </td>


                                </tr>

                                <tr>
                                    <td> <input type="submit" class="btn btn-primary btn-sm" value="Submit"></td>
                                </tr>
                                   
                                
                                    
                             </tbody>
                         </table>

                                </form>
                            
                            </div>
                            
  
        </div>
    
        <?php
include "footer.php";
?>

    </body>
</html>



