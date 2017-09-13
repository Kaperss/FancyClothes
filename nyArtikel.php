<?php require "includes/header.php" ?>
<article class="container nyArtikel">
    <div class="row">
        <form action="includes/insertCats.php" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="heading" class="control-label col-sm-2">Artiklens overskrift her</label> 
                <div class="form-group col-lg-12">
                    <div class="p-0 ">
                        <input type="name" class="form-control" id="heading" name="heading" placeholder="Überschreift hier">
                    </div>
                </div>
            </div>
            <div class="form-group col-lg-12"><label for="imgSrc">Billedets sti her</label>
                <div class="p-0">
                    <input type="text" class="form-control" id="imgSrc" name="imgSrc" placeholder="Bild hier">
                </div>
            </div>
            <div class="form-group col-lg-12"><label for="imgAlt">Billedets alt-tekst her</label>
                <div class=" p-0">
                    <input type="text" class="form-control" id="imgAlt" name="imgAlt" placeholder="Bild alt hier">
                </div>
            </div>

            <div class="form-group col-lg-12"><label for="description">Beskrivelse her</label>
                <div class=" p-0">
                    <textarea class="form-control" id="description" name="description" placeholder="Beschreifelse hier"></textarea>
                </div>
            </div>
            <input type="submit" class="btn bt-success btn-large col-sm-2 col-lg-6">

        </form>
    </div>
</article>
<?php require "includes/footer.php" ?>