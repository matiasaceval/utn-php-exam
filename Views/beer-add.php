<?php
require_once('nav.php');
?>
<main class="py-5">
    <section id="listado" class="mb-5">
        <div class="container">
            <h2 class="mb-4">Agregar cerveza</h2>
            <form method="post" action="<?php echo FRONT_ROOT ?>Beer/Add" class="bg-light-alpha p-5">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="">Tipo</label>
                            <select name="beerTypeId" class="form-control">
                                <?php
                                foreach ($beerTypeList as $beerType) {
                                    echo "<option value='" . $beerType->GetBeerTypeId() . "'>" . $beerType->GetDescription() . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input name="name" type="text" value="" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="">IBU</label>
                            <input name="ibu" type="number" value="" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="">Precio</label>
                            <input name="price" type="number" value="" class="form-control" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark ml-auto d-block">Agregar</button>
                <?php if (isset($_SESSION['added'])) { ?>
                    <div class="alert alert-success alert-dismissible fade show center-flex" role="alert">
                        <?php echo $_SESSION['added'];
                        unset($_SESSION['added']); ?>
                    </div>
                <?php } ?>
            </form>
        </div>
    </section>
</main>