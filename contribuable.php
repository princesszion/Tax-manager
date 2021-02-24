<?php
include "verification.php";
include "skeleton.php";

?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <div>
            <div style="background-color: #00c292;"><h3 style="text-align:center;"> Creation Du Contribuable </h3></div>


            <div class="card-body card-block">
                                <form action="contribuable2.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="col-12 col-md-6"><input type="text" name="mois" placeholder="Entrez le mois de L'exercise  en CHIFFRES" class="form-control" required="required"></div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label  class=" form-control-label"> NIU</label></div>
                                        <div class="col-12 col-md-3"><input type="text" name="niu" placeholder="" class="form-control"></div>
                                        <div class="col col-md-2"><label  class=" form-control-label"> RCCM</label></div>
                                        <div class="col-12 col-md-4"><input type="text" name="honoraires" placeholder="" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label  class=" form-control-label"> Regime d'impositions</label></div>
                                        <div class="col-12 col-md-3">
                                            <select name="centre"  class="form-control">
                                                <option value="0">Regime d'impositions</option>
                                                <option value="1"> REEL</option>
                                                <option value="2">SIMPLIFIEE</option>
                                                <option value="3">Option #3</option>
                                            </select>
                                        </div>
                                        <div class="col col-md-2"><label  class=" form-control-label"> Taux de patente</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="centre"  class="form-control">
                                                <option value="0">Taux de patentes</option>
                                                <option value="1"> Douala</option>
                                                <option value="2">Ndokoti</option>
                                                <option value="3">Option #3</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label  class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-9"><input type="email" name="email" placeholder="Entrez votre Email valide" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label  class=" form-control-label">Activite Principale</label></div>
                                        <div class="col-12 col-md-9"><input type="text" name="activite" placeholder="Activite Principale en cours" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label  class=" form-control-label"> Contact</label></div>
                                        <div class="col-12 col-md-3"><input type="text" name="contact" placeholder="contact"class="form-control"></div>
                                        <div class="col col-md-2"><label  class=" form-control-label"> BP</label></div>
                                        <div class="col-12 col-md-4"><input type="text" name="bp" placeholder="" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label  class=" form-control-label"> Taux d'Accomptes</label></div>
                                        <div class="col-12 col-md-3"><input type="text" name="acompte" placeholder="Taux d'acompte" class="form-control"></div>
                                        <div class="col col-md-2"><label  class=" form-control-label"> Taux d'IR ou IS</label></div>
                                        <div class="col-12 col-md-4"><input type="text" name="ir" placeholder="Taux d'IR annuel" class="form-control"></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label  class=" form-control-label"> Nombres des employes</label></div>
                                        <div class="col-12 col-md-3"><input type="text" name="employes" placeholder="Employes affilie a la CNPS" class="form-control"></div>
                                        <div class="col col-md-2"><label  class=" form-control-label"> Fiscalite Particulier</label></div>
                                        <div class="col-12 col-md-4"><input type="text" name="fiscalite" placeholder="" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label  class=" form-control-label">Centre de Ratachement</label></div>
                                        <div class="col-12 col-md-3">
                                            <select name="centre"  class="form-control">
                                                <option value="0">Direction Generale</option>
                                                <option value="1"> Douala</option>
                                                <option value="2">Ndokoti</option>
                                                <option value="3">Option #3</option>
                                            </select>
                                        </div>
                                        <div class="col col-md-3"><label  class=" form-control-label"> Location</label></div>
                                        <div class="col-12 col-md-3"><input type="text" name="location" placeholder="" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Autorization Prealable?</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check-inline form-check">
                                                <label  class="form-check-label ">
                                                    <input type="radio"  name="authorization" value="option1" class="form-check-input">Oui
                                                </label>
                                                <label for="inline-radio2" class="form-check-label ">
                                                    <input type="radio"  name="authorization" value="option2" class="form-check-input">Non
                                                </label>
                                               
                                            </div>
                                        </div>
                                    </div>
                                   <input name="" type="submit" class="btn btn-primary btn-sm" value="Enregistrer" <i class="fa fa-dot-circle-o"></i>
                                    
                            
                                </form>
                            </div>
                            
        </div>
    
        <?php
include "footer.php";
?>
    </body>
</html>
