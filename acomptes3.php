<?php
include "verification.php";
 
?> 
<table border="1" id="bootstrap-data-table"  class="table table-bordered table-sm" style="font-size: 14px;">

    <?php 

 $sql = "SELECT * FROM acomptes ,contribuable  WHERE  matricule = NIU";
$req = mysqli_query($link,"$sql");
 while($data=mysqli_fetch_array($req)){ 
$niu = $data['matricule'];
$id2 = $data['id'];
$b12 = $data['b1'];
$p12 = $data['p1'];
$p22 = $data['p2'];
$p32 = $data['p3'];
$p42 = $data['p4'];
$p52 = $data['p5'];
$c12 = $data['c1'];
$c22 = $data['c2'];
$c32 = $data['c3'];
$pen12 = $data['pen1'];
$pen22 = $data['pen2'];
$pen32 = $data['pen3'];
$pen42 = $data['pen4'];
$pen52 = $data['pen5'];
$t12  = $p12+$c12+$pen12;
$t22  = $p22+$pen22;
$t32  = $p32+$pen32;
$t42  = $p42+$pen42;
$t52  = $p52+$pen52;
$st = $p12+$c12+$pen12+$p22+$pen22+$p32+$pen32+$p42+$pen42+$p52;
?>
<tr>
                                            <?php } ?>
                                        </tr>
                                        <tr>  
                                        <td style="font-weight: bold;" colspan="6">2)ACOMPTES ET PRECOMPTES A DEDUIRE</td></tr>
                                         <tr>
                                            <th colspan="6" style="width: 10px;">NATURE D'IMPOTS</th>
                                           <th style="width: 126px;"> BASE</th>
                                            <th style="width: 5px;">PRINCIPAL</th>
                                            <th style="width: 3px;">CAC</th>
                                            <th  style="width: 2px;">PENALTES</th>
                                            <th  >TOTAL</th>
                                        </tr>

                                        <tr>
                                        <tr>
                                            <td colspan="6">Report Credit Anterieur</td>
                                            <td> <?php echo $b12; ?></td>
                                            <td> <?php echo $p12; ?></td>
                                            <td> <?php echo $c12; ?> </td>
                                            <td>  <?php echo $pen12; ?></td>
                                            <td> <?php echo $t12; ?> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">Precompte Sur Achats</td>
                                           <td> </td>
                                            <td> <?php echo $p22; ?></td>
                                            <td>  </td>
                                            <td>  <?php echo $pen22; ?></td>
                                            <td> <?php echo $t22; ?> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">Acompte  sur CA Retenu a la source</td>
                                            <td></td>
                                            <td> <?php echo $p32; ?></td>
                                            <td> <?php echo $c22; ?></td>
                                            <td>  <?php echo $pen32; ?></td>
                                            <td> <?php echo $t32; ?> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">Precompte sur loyers 15%(deductible sur IR ) </td>
                                            <td></td>
                                            <td> <?php echo $p42; ?></td>
                                            <td> <?php echo $c32; ?> </td>
                                            <td>  <?php echo $pen42; ?></td>
                                            <td> <?php echo $t42; ?> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">Precomptes sur remunerations et honoraires (5%)</td>
                                            <td></td>
                                            <td> <?php echo $p52; ?></td>
                                            <td> <?php echo $c42; ?> </td>
                                            <td> <?php echo $pen52; ?> </td>
                                            <td> <?php echo $t52; ?> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">Sous total</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                              <td></td>
                                        </tr>
                                    </table>