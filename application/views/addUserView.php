<?php

echo '<script type="text/javascript" src="/' . PATH_PUBLIC . '/js/addUser.js"></script>';

?>

<form method="POST" action="/user/addUser" class="needs-validation" novalidate>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="first-name">Prénom</label>
                <input type="text" class="form-control" id="first-name" name="first-name" required>
                <div class="invalid-feedback">
                    Le prénom est requis.
                </div>
            </div>
            <div class="form-group">
                <label for="last-name">Nom</label>
                <input type="text" class="form-control" id="last-name" name="last-name" required>
                <div class="invalid-feedback">
                    Le nom est requis.
                </div>
            </div>
            <div class="form-group">
                <label for="email">Adresse courriel</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="invalid-feedback">
                    Une adresse courriel valide est requise.
                </div>
            </div>
            <div class="form-group">
                <label for="phone">Numéro de téléphone</label>
                <input type="tel" class="form-control" id="phone" name="phone" pattern="^\d{7}(\d{3})?$" required>
                <div class="invalid-feedback">
                    Un numéro de téléphone valide de 7 ou 10 chiffres est requis.
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="address">Adresse</label>
                <input type="text" class="form-control" id="address" name="address" required>
                <div class="invalid-feedback">
                    Une adresse est requise.
                </div>
            </div>
            <div class="form-group">
                <label for="city">Ville</label>
                <input type="text" class="form-control" id="city" name="city" required>
                <div class="invalid-feedback">
                    Une ville est requise.
                </div>
            </div>
            <div class="form-group">
                <label for="postal-code">Code postal</label>
                <input type="text" class="form-control" id="postal-code" name="postal-code" required>
                <div class="invalid-feedback">
                    Un code postal valide sans espace (i.e. A2B3C4) est requis.
                </div>
            </div>
            <div class="form-group">
                <label for="age">Âge</label>
                <input type="number" class="form-control" id="age" name="age" required>
                <div class="invalid-feedback">
                    Vous devez avoir au moins 18 ans pour vous inscrire.
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
</form>