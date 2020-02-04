<body onload="ConteoRegresivo()">
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-12 center">
            <br>
            <a href="<?= base_url()?>Cont">¿Quieres saber cuánto tiempo tenemos Juntos?</a>
            <br>
            <h2>Faltan</h2>
        </div>        
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <div class="card text-white bg-dark mb-3" style="max-width: 25rem;">
                    <div class="card-header">Días</div>
                    <div class="card-body">
                        <h5 id="dias" class="card-title"></h5>                
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="card text-white bg-dark mb-3" style="max-width: 25rem;">
                    <div class="card-header">Hrs.</div>
                    <div class="card-body">
                        <h5 id="horas" class="card-title"></h5>                
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="card text-white bg-dark mb-3" style="max-width: 25rem;">
                    <div class="card-header">Min.</div>
                    <div class="card-body">
                        <h5 id="minutos" class="card-title"></h5>                
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="card text-white bg-dark mb-3" style="max-width: 25rem;">
                    <div class="card-header">Seg.</div>
                    <div class="card-body">
                        <h5 id="segundos" class="card-title"></h5>                
                    </div>
                </div>
            </div>                                
        </div>
        <div class="col-md-12 center">
            <hr>
            <h4><i>¡FALTA MUY POCO!</i></h4>
            <hr>            
        </div>         
    </div>