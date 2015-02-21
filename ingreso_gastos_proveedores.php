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
                <p class="titulos">Ingresar Gasto Proveedor</p>
            </div>
            <div class="proveedor">
                <input title="text" class="texto_ingresar" placeholder="Proveedor">
            </div>
            <div class="gasto_proveedor">
                <input title="text" type="number" class="texto_ingresar" placeholder="Gastos/Pagos Proveedor">
            </div>
            <div class="radio_form_gastos">
                <input type="radio" id="check3" value="con" name="radioproveedordia" autocomplete="off" checked="checked">
                <label for="check3">Con</label>
                <input type="radio" id="check4" value="Sin" name="radioproveedordia" autocomplete="off">
                <label for="check4">Sin</label>
            </div>
            <div class="boton_submit">
                <button class="boton">Agregar</button>
            </div>
        </div>
        <div class="listado">
            <!--comienza el cartel con los datos del consumidor
            para repetir todas la veces que sea necesario
            en el id_cons va el id del consumidor-->
                                          <!--finaliza el cartel con los datos del consumidor-->
                <div class="cartel">
                    <div class="datos_gastos_proveedor">
                        <div class="nombre">martin diego</div>
                        <div class="precio">$ 250</div>
                    </div>
                </div>
            </div>
            <div class="base_listados"></div>
        </div>
    </body>
</html>