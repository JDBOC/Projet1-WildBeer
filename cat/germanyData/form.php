<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 20/03/19
 * Time: 14:59
 */


?>

<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive tom-cat-title font-weight-bold tom-caviar text-center my-4">Proposez nous une biere</h2>
    <!--Section description-->
    <div class="row">

        <!--Grid column-->
        <div class="col-md-12 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">

                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" id="nameLabel" class="tom-caviar">Nom de la biere</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="country" name="country" class="form-control" >
                                    <label for="country" id="countryLabel" class="tom-caviar">Pays d'origine</label>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-7">
                        <div class="md-form mb-0">
                            <textarea type="text" id="desc" name="desc" class="form-control md-textarea"
                                      rows="2" ></textarea>
                            <label for="desc" class="tom-caviar" id="descLabel">Description</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
                    <br/>
                <!--Grid row-->
                <div class="row">
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" name="file"
                                       aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label tom-caviar" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>

                </div>
                <!--Grid row-->
                <br/>
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-8">
                                <label for="customRange2" class="tom-caviar">Gout</label>
                                <input type="range" class="custom-range" min="0" max="5" step="0.5" id="gout" name="gout">
                            </div>
                            <div class="col-4 d-flex justify-content-center"> <span class="tom-caviar" style="margin-top: auto;" id="goutField"></span> </div>

                        </div>
                        <div class="row">
                            <div class="col-8">
                                <label for="customRange2" class="tom-caviar">Soif</label>
                                <input type="range" class="custom-range" min="0" max="2" step="0.5" id="soif" name="soif">
                            </div>
                            <div class="col-4 d-flex justify-content-center"> <span class="tom-caviar" style="margin-top: auto;" id="soifField"></span> </div>

                        </div>
                        <div class="row">
                            <div class="col-8">
                                <label for="customRange2" class="tom-caviar">Amertume</label>
                                <input type="range" class="custom-range" min="0" max="2" step="0.5" id="amertume" name="amertume">
                            </div>
                            <div class="col-4 d-flex justify-content-center"> <span class="tom-caviar" style="margin-top: auto;" id="amertumeField"></span> </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <label for="customRange2" class="tom-caviar">Alcohol</label>
                                <input type="range" class="custom-range" min="0" max="15" step="0.5" id="alcohol">
                            </div>
                            <div class="col-4 d-flex justify-content-center"> <span class="tom-caviar" style="margin-top: auto;" id="alcoholField"></span> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="beerPrice" name="beerPrice" class="form-control">
                                    <label for="beerPrice" class="tom-caviar" id="beerPriceLabel">Prix unitaire</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="sixPackPrice" name="sixPackPrice" class="form-control">
                                    <label for="sixPackPrice" class="tom-caviar" id="sixPackPriceLabel">Prix du pack</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="kegPrice" name="kegPrice" class="form-control">
                                    <label for="kegPrice" class="tom-caviar" id="kegPriceLabel">Prix du fut</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

            </form>
            <div class="text-center text-md-left d-flex justify-content-center">
                <a class="btn btn-primary" id="submitBtn" onclick="validateForm();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->