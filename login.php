<?php

require_once('templates/header.php');


?>


<div class="form-signin w-100 m-auto">
    <form method="post">
        <img class="mb-4" src="assets/images/logo-okaz.png" alt="" width="100">
        <h1 class="h3 mb-3 fw-normal">Se connecter</h1>
        <div class="mb-3"> 
            <div class="form-floating mb-3">
                <input name="email" type="email" class="form-control p-3 border-bottom" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input name="password" type="password" class="form-control p-3 border-bottom" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Mot de passe</label>
            </div>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Connexion</button>
    </form>
</div>







<?php

require_once('templates/footer.php');

?>