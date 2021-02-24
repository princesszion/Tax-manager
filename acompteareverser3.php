<?php
include "verification.php";

 ?>
<table border="1" id="bootstrap-data-table"  class="table table-bordered table-sm" style="font-size: 14px;">
                                        <tr>  
                                        <td style="font-weight: bold;" colspan="6">3)ACOMPTES ET PRECOMPTES A REVERSER</td></tr>
                                        <tr>
                                        	 <tr>
                                        <th colspan="6"style="width: 10px;">NATURE D'IMPOTS</th>
                                           <th style="width: 126px;"> BASE</th>
                                            <th style="width: 5px;">PRINCIPAL</th>
                                            <th style="width: 3px;">CAC</th>
                                            <th style="width: 2px;">PENALTES</th>
                                            <th style="width: 5px;">TOTAL</th>
                                        </tr>
                                        <?php 

                                   $sql = "SELECT * FROM acompteareverser,contribuable  WHERE  matricule = NIU";
$req = mysqli_query($link,"$sql");
 while($data=mysqli_fetch_array($req)){ 
$id = $data['id'];
$niu = $data['matricule'];
$b13 = $data['base'];
$p13 = $data['p1'];
$p23 = $data['p2'];
$p33 = $data['p3'];
$p43 = $data['p4'];
$c13 = $data['cac'];
$pen13 = $data['penaltes'];
$t13 = $b13+$p13+$c13+$pen13;
?>
                                        <tr>
                                            <?php } ?>

                                            <td colspan="6">Acompte sur CA retenu a la source</td>
                                            <td><?php echo $b13; ?> </td>
                                            <td> <?php echo $p13; ?> </td>
                                            <td> <?php echo $c13; ?> </td>
                                            <td> <?php echo $pen13; ?> </td>
                                            <td> <?php echo $t13; ?> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">Precomptes sur achats retenus</td>
                                            <td><?php echo $b13; ?> </td>
                                            <td> <?php echo $p23; ?> </td>
                                            <td> <?php echo $c13; ?> </td>
                                            <td> <?php echo $pen13; ?> </td>
                                            <td> <?php echo $t13; ?> </td>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="6">Precompte sur loyers (15%) </td>
                                           <td><?php echo $b13; ?> </td>
                                            <td> <?php echo $p33; ?> </td>
                                            <td> <?php echo $c13; ?> </td>
                                            <td> <?php echo $pen13; ?> </td>
                                            <td> <?php echo $t13; ?> </td>
                                        </tr>
                                         <tr>
                                            <td colspan="6">Precomptes sur remunerations et honoraires (5%)</td>
                                            <td><?php echo $b13; ?> </td>
                                            <td> <?php echo $p43; ?> </td>
                                            <td> <?php echo $c13; ?> </td>
                                            <td> <?php echo $pen13; ?> </td>
                                            <td> <?php echo $t13; ?> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">TOTAL</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        </table>
