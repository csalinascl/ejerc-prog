<?php $title = 'Ejercicios Programación II'; include("plantilla/top.php");?>

                <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--12-col">
                    <h5>Programa contador de imágenes, ingresa URL de página y contar imágenes contenidas.</h5>
                  </div>
                  <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">

                    <form id="form1" name="form1" method="post" action="logica.php">

                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input onfocus="httpizador()" class="mdl-textfield__input" name="url" type="text" id="url">
                        <label class="mdl-textfield__label" for="">Ingrese URL</label>
                      </div>

                        <input hidden class="mdl-textfield__input" name="funcion" type="text" id="funcion" value="urlImagenes">
                        <div class="mdl-layout-spacer"></div>
                        <button onclick="enviar()" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                          Enviar
                        </button>
                    </form>
                  </div>
                </div>


<script type="text/javascript" charset="utf-8">
  
    function httpizador(){
      document.getElementById('url').value = "http://";
    }
</script>

<?php include("plantilla/bottom.php");?>