<?php $title = 'Ejercicios Programación II'; include("plantilla/top.php");?>

                <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--12-col">
                    <h5>En la fabrica de sillas Bibliomodel, el pago a sus empleados está basado en una tarifa diaria más un incentivo que depende del número de sillas producidas durante el día.</h5>
                    <span> 
                    Calcule el salario de cada empleados para X una cantidad de sillas.<br>                                         
                    Por ejemplo, a un salario básico de $3,5 Dólares por hora y con 0,6 Dólares de incentivo por cada silla producida por encima de 50 unidades, un empleado que ensamble 76 sillas recibirá: (3,5)*(8)+(76-50)*(0,6)=28,00+15,60=$43,60
                    </span>
                  </div>
                  <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">

                    <form id="form1" name="form1" method="post" action="logica.php">

                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" name="sueldo" type="text" id="sueldo" onkeypress="return soloNumeros(event)">
                        <label class="mdl-textfield__label" for="">Salario base x hora</label>
                      </div>

                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" name="sillas" type="text" id="sillas" onkeypress="return soloNumeros(event)">
                        <label class="mdl-textfield__label" for="">Cantidad de sillas</label>
                      </div>

                        <input hidden class="mdl-textfield__input" name="funcion" type="text" id="funcion" value="calcSueldo">
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