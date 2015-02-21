<?xml version="1.1" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="es">
    <head>

      <!--  <link rel="stylesheet" type="text/css" href="css/listado_gastos_consumidores.css"> -->
        <title>Listado de Gastos Consumidores</title>
    </head>
    <body>
        <div class="contenedor_lista">
            <div class="form_gasto"><!--contenedor de los input para ingresar gastos de los consumidores-->
            <div class="barra_superior">
                <p class="titulos">Ingresar Gasto Consumidor</p>
            </div>
            <div class="consumidor">
                <input title="text" class="texto_ingresar" placeholder="Consumidor">
            </div>
            <div class="gasto_consumidor">
                <input title="text" type="number" class="texto_ingresar" placeholder="Gastos/Pagos Consumidor">
            </div>
            <div class="radio_form_gastos">
                <input type="radio" id="check1" value="debe" name="radioconsumidordia" autocomplete="off" checked="checked">
                <label for="check1" class="izquierda">debe</label>
                <input type="radio" id="check2" value="pago" name="radioconsumidordia" autocomplete="off">
                <label for="check2" class="derecha">paga</label>
            </div>
            <div class="boton_submit">
                <button class="boton">Agregar</button>
            </div>
        </div>
        <div class="listado">
        
            <!--comienza el cartel con los datos del consumidor
            para repetir todas la veces que sea necesario
            en el id_cons va el id del consumidor-->
            <div class="cartel">
                <div class="debe_gastos_consumidor">
                    <div class="nombre">diego</div>
                    <div class="precio">$ 45</div>
                </div>
                </div>                                           <!--finaliza el cartel con los datos del consumidor-->
                <div class="cartel">
                    <div class="datos_gastos_consumidor">
                        <div class="nombre">martin diego</div>
                        <div class="precio">$ 250</div>
                    </div>
                </div>
            </div>
            <div class="base_listados"></div>
        </div>
    </body>
</html>