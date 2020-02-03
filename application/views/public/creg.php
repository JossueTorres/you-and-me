<body onload="ConteoRegresivo()">
<div id="contenedor">
    <br>
    <a href="<?= base_url()?>/Cont">¿Quieres saber cuánto tiempo tenemos Juntos?</a>
    <br>
    <h2>Faltan</h2>
    <div id="contador" class="row">
        <div class="col-md-3">
            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Días</div>
                <div class="card-body">
                    <h5 id="dias" class="card-title"></h5>                
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Horas</div>
                <div class="card-body">
                    <h5 id="horas" class="card-title"></h5>                
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Min.</div>
                <div class="card-body">
                    <h5 id="minutos" class="card-title"></h5>                
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Seg.</div>
                <div class="card-body">
                    <h5 id="segundos" class="card-title"></h5>                
                </div>
            </div>
        </div>                                
    </div>
    <h4><i>¡FALTA MUY POCO!</i></h4>
    <div class="bottom">
        <hr>
        <hr>
    </div>
