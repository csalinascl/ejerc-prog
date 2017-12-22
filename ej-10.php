<?php $title = 'Ejercicios Programación II'; include("plantilla/top.php");?>

                <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--12-col">
                    <h5>Ingresar las cuentas del mes de un hogar y determinar si el saldo es positivo o negativo con respecto a un sueldo dado.</h5>
                  </div>
                  <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">

                    <form id="form1" name="form1" method="post" action="logica.php">
                      
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="sueldo" id="sueldo">
                        <label class="mdl-textfield__label" for="addr1">Sueldo</label>
                      </div>
                      
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="arriendo" id="arriendo">
                        <label class="mdl-textfield__label" for="addr1">Arriendo</label>
                      </div>
                      
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="luz" id="luz">
                        <label class="mdl-textfield__label" for="addr1">Luz</label>
                      </div>
                      
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="agua" id="agua">
                        <label class="mdl-textfield__label" for="addr1">Agua</label>
                      </div>
                      
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="gas" id="gas">
                        <label class="mdl-textfield__label" for="addr1">Gas</label>
                      </div>
                      
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="otros" id="otros">
                        <label class="mdl-textfield__label" for="addr1">Otros</label>
                      </div>
                      
                        <input hidden class="mdl-textfield__input" name="funcion" type="text" id="funcion" value="ctasHogar">
                        <div class="mdl-layout-spacer"></div>
                        <button onclick="enviar()" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                          Enviar
                        </button>
                    </form>
                  </div>
                </div>


<script type="text/javascript" charset="utf-8">
  
    
</script>

<?php include("plantilla/bottom.php");?>