<?php 
$title = "Ny Artikel";
require "includes/header.php";

 ?>
<article class="container nyArtikel">
    <div class="row">
        <form action="includes/insertArticle.php" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="heading">Artiklens overskrift</label> 
                <div class="form-group col-lg-12">
                    <div class="p-0">
                        <input type="name" class="form-control" id="heading" name="heading" placeholder="Overskrift..">
                    </div>
                </div>

                <div class="form-group col-lg-12"><label for="imgSrc">Billedets sti</label>
                    <div class="p-0">
                        <input type="text" class="form-control" id="imgSrc" name="imgSrc" placeholder="Sti..">
                    </div>
                </div>
                <div class="form-group col-lg-12"><label for="imgAlt">Billedets alt-tekst</label>
                    <div class=" p-0">
                        <input type="text" class="form-control" id="imgAlt" name="imgAlt" placeholder="Alt..">
                    </div>
                </div>

                <div class="form-group col-lg-12"><label for="description">Beskrivelse</label>
                    <div class=" p-0">
                        <textarea class="form-control" id="description" name="description" placeholder="Beskrivelse.."></textarea>
                    </div>
                </div>
                <input type="submit" class="btn bt-success btn-large col-xs-2 col-xs-offset-5 ">
            </div>
        </form>
    </div>
</article>
<?php require "includes/footer.php" ?>