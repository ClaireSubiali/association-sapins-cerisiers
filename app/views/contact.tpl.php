<h2 class="contact__title">Contactez-nous</h1>
<form class="contact__form" action="/envoyer-message" method="POST">
    <div class="contact__part">
        <div class="contact__field contact__part--first">
            <label class="contact__label" for="nom">Nom:</label>
            <input class="contact__input contact__input--nom" type="text" id="nom" name="nom" required>
        </div>

        <div class="contact__field">
            <label class="contact__label" for="prenom">Prénom:</label>
            <input class="contact__input contact__input--prenom" type="text" id="prenom" name="prenom" required>
        </div>
    </div>
    <div class="contact__part contact__part--second">

        <div class="contact__field">
            <label class="contact__label" for="email">Email:</label>
            <input class="contact__input contact__input--email" type="email" id="email" name="email" required>
        </div>

        <div class="contact__field">
            <label class="contact__label" for="titre">Titre:</label>
            <input class="contact__input contact__input--titre" type="text" id="titre" name="titre" required>
        </div>

        <div class="contact__field">
            <label class="contact__label" for="message">Votre message:</label>
            <textarea class="contact__input contact__input--message" id="message" name="message" required></textarea>
        </div>

        <input class="contact__submit" type="submit" value="Envoyer">
    </div>
</form>