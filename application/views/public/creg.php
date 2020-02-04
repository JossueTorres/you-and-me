<body onload="ConteoRegresivo()">
<div class="container"></div>
<div class="container h-100 align-self-center">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-12 text-center" style="margin-bottom:1%;margin-top:1%;">
            <br>
            <a href="<?= base_url()?>Cont" class="btn btn-outline-primary col-md-12">¿Quieres saber cuánto tiempo tenemos Juntos?</a>
            <br>
            <br>            
            <h2>Faltan</h2>
        </div>        
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <div class="card text-white bg-dark mb-3" style="min-width: 6rem;">
                    <div class="card-header">Días</div>
                    <div class="card-body text-center">
                        <h4 id="dias" class="card-title"></h4>                
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="card text-white bg-dark mb-3" style="min-width: 6rem;">
                    <div class="card-header">Hrs.</div>
                    <div class="card-body text-center">
                        <h4 id="horas" class="card-title"></h4>                
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="card text-white bg-dark mb-3" style="min-width: 6rem;">
                    <div class="card-header">Min.</div>
                    <div class="card-body text-center">
                        <h4 id="minutos" class="card-title"></h4>                
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="card text-white bg-dark mb-3" style="min-width: 6rem;">
                    <div class="card-header">Seg.</div>
                    <div class="card-body text-center">
                        <h4 id="segundos" class="card-title"></h4>                
                    </div>
                </div>
            </div>                                
        </div>
        <div class="col-md-12 text-center" style="margin-top:1%">
            <hr>
            <h4><i>¡FALTA MUY POCO!</i></h4>
            <hr>            
        </div>         
    </div>