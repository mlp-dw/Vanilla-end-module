<?php include "utils/header.php";?>
<?php include "utils/alerts.php";?>


<main class="form-signin m-3 d-flex justify-content-center ">
        <form action="/process/process_login.php" method="POST" class="me-3">

            <h1 class="h3 mb-3 fw-normal">Connexion</h1>

            <div class="m-2">
                <label for="message">Pseudo</label>
                <input type="text" name="pseudo" class="form-control" placeholder="Pseudo">
            </div>

            <div class="m-2">
                <label for="message">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>


            <div class="d-flex justify-content-center">
                <button class="w-30 btn btn-lg btn-primary" type="submit">Envoyer</button>
            </div>
            
        </form>
        <div class="card ms-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Bienvenue sur ce projet</h5>
                <p class="card-text text-center">Pour avoir accès aux fonctionnalités du site, je vous invite à vous connecter.</p>
                <div class="d-flex justify-content-center">
                    <p class="btn btn-primary">id : visiteur</p>
                    <p class="btn btn-primary">mdp : visiteur</p>
                </div>
            </div>
        </div>
</main>


<?php include "utils/footer.php";?>