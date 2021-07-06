<?php for ($i = 0; $i < 5; $i++) : ?>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Servicio #<?= $i ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">Subtítulo del servicio #<?= $i ?></h6>
            <p class="card-text">Texto descriptivo del servicio #<?= $i ?></p>
        </div>
    </div>

<?php endfor; ?>