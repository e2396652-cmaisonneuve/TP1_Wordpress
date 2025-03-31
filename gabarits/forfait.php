<?php

/**
 * Template Name: Forfait
 */
?>
<section class="trouver-forfait">
    <div class="container__forfait">
        <h2>Trouver un forfait</h2>
        <form class="forfait-form">
            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" id="destination" name="destination" placeholder="Où souhaitez-vous aller ?" required>
            </div>
            <div class="form-group">
                <label for="depart">Départ (Mois de départ)</label>
                <select id="depart" name="depart" required>
                    <option value="" disabled selected>Sélectionnez un mois</option>
                    <option value="janvier">Janvier</option>
                    <option value="fevrier">Février</option>
                    <option value="mars">Mars</option>
                    <option value="avril">Avril</option>
                    <option value="mai">Mai</option>
                    <option value="juin">Juin</option>
                    <option value="juillet">Juillet</option>
                    <option value="aout">Août</option>
                    <option value="septembre">Septembre</option>
                    <option value="octobre">Octobre</option>
                    <option value="novembre">Novembre</option>
                    <option value="decembre">Décembre</option>
                </select>
            </div>
            <div class="form-group">
                <label for="duree">Durée</label>
                <select id="duree" name="duree" required>
                    <option value="" disabled selected>Sélectionnez la durée</option>
                    <option value="1-semaine">1 semaine</option>
                    <option value="2-semaines">2 semaines</option>
                    <option value="3-semaines">3 semaines</option>
                    <option value="1-mois">1 mois</option>
                </select>
            </div>
            <button type="submit" class="recherche__bouton">Rechercher</button>
        </form>
    </div>
</section>