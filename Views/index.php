<main class="d-flex align-items-center justify-content-center height-100">
    <div class="content">
        <header class="text-center">
            <h2>Segundo Parcial</h2>
        </header>

        <form action="<?php echo FRONT_ROOT ?>Auth/Login" method="post" class="login-form bg-dark-alpha p-5 bg-light">
            <div class="form-group">
                <label for="">Email</label>
                <input name="email" type="text" class="form-control form-control-lg" placeholder="Ingresar usuario" required>
            </div>
            <div class="form-group">
                <label for="">Contraseña</label>
                <input name="password" type="password" class="form-control form-control-lg" placeholder="Ingresar constraseña" required>
            </div>
            <button class="btn btn-primary btn-block btn-lg" type="submit">Iniciar Sesión</button>
        </form>

        <?php if (isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['error'];
                unset($_SESSION['error']); ?>
            </div>
        <?php } ?>
    </div>
</main>