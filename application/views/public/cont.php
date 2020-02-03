<body onload="Conteo()">
<div id="contenedor">
    <br>
    <a href="<?= base_url()?>/Creg">¿Quieres saber cuánto tiempo falta para el gran día?</a>
    <br>
    <h2>Tenemos</h2>
    <div class="row">
        <div class="col-md-3">
            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Días</div>
                <div class="card-body">
                    <h5 id="adias" class="card-title"></h5>                
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Horas</div>
                <div class="card-body">
                    <h5 id="ahoras" class="card-title"></h5>                
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Min.</div>
                <div class="card-body">
                    <h5 id="aminutos" class="card-title"></h5>                
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Seg.</div>
                <div class="card-body">
                    <h5 id="asegundos" class="card-title"></h5>                
                </div>
            </div>
        </div>                                
    </div>
    <h4><i>¡JUNTOS!</i></h4>
