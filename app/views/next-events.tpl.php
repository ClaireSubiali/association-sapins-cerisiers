<h2 class="next-events-title">Les évènements à venir</h2>
<div class="card-wrapper">
    <?php
    foreach ($event_list as $eventObject) : ?>
        <div class="card">
            <img class="card__image" src="assets/images/<?= $eventObject->getImage() ?>" alt="#">
            <div class="card__date">
                <?php           
                $fmt = new IntlDateFormatter('fr_FR', IntlDateFormatter::NONE, IntlDateFormatter::NONE);
                $fmt->setPattern('d MMMM YYYY');
                echo ($fmt->format(strtotime($eventObject->getDate())));
                ?>

            </div>

            <h3 class="card__title"><?= $eventObject->getTitle() ?></h3>
            <div class="card__location"><?= $eventObject->getLocation() ?></div>
        </div>
    <?php endforeach; ?>

    <!--
    <div class="card">
        <img class="card__image" src="assets/images/petanque.jpg" alt="#">
        <div class="card__date">9 juillet 2023</div>
        <h3 class="card__title">Concours de pétanque</h3>
        <div class="card__location">Fraize</div>
    </div>
    <div class="card">
        <img class="card__image" src="assets/images/petanque.jpg" alt="#">
        <div class="card__date">23 juillet 2023</div>
        <h3 class="card__title">Concours de pétanque</h3>
        <div class="card__location">Fraize</div>
    </div>
    <div class="card">
        <img class="card__image" src="assets/images/petanque.jpg" alt="#">
        <div class="card__date">13 aout 2023</div>
        <h3 class="card__title">Concours de pétanque</h3>
        <div class="card__location">Fraize</div>
    </div>
    <div class="card">
        <img class="card__image" src="assets/images/petanque.jpg" alt="#">
        <div class="card__date">20 aout 2023</div>
        <h3 class="card__title">Concours de pétanque</h3>
        <div class="card__location">Fraize</div>
    </div>
    <div class="card">
        <img class="card__image" src="assets/images/halloween.jpg" alt="#">
        <div class="card__date">28 octobre 2023</div>
        <h3 class="card__title">Marche de Halloween</h3>
        <div class="card__location">Fraize</div>
    </div> -->
</div>