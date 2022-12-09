<?xml version="1.1" encoding="UTF-8"?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="es">
<head>

   <!-- <link rel="stylesheet" type="text/css" href="css/listado_de_consumidores.css"> -->
    <title>Listado de Consumidores</title>
</head>
<body>

    <div class="contenedor_lista">

        <div id="buscador_lista_consumidor"><!--contenedor del input para buscar en-->
            <div id="barra_lista_consumidor" class="barra_superior">
                <p class="titulos">Lista General Consumidores</p>
            </div>
            <div id="buscador_consumidor" class="buscador">
            <input title="text" id="buscar_consumidor" class="texto_ingresar" placeholder="Buscar Consumidores">			<!--la lista del consumidor-->
            </div>
        </div>
        <div class="listado">

                                                                <!--comienza el cartel con los datos del consumidor
                                                                    para repetir todas la veces que sea necesario
                                                                    en el id_cons va el id del consumidor probando-->
            <div class="cartel">
                <div class="fecha_ultimo_ingreso_consumidor">
                    <p class="dia_consumidor">01</p>
                    <p class="fecha_consumidor">Ene, 2015</p>
                </div>
                <div class="debe_consumidor">
                    <div class="nombre">diego</div>
                    <div class="precio">$ 45</div>
                </div>
            </div>
                                                                <!--finaliza el cartel con los datos del consumidor-->
            <div class="cartel">
                <div class="fecha_ultimo_ingreso_consumidor">
                    <p class="dia_consumidor">22</p>
                    <p class="fecha_consumidor">Ene, 2015</p>
                </div>
                <div class="datos_consumidor">
                    <div class="nombre">marti diego</div>
                    <div class="precio">$ 20</div>
                </div>
            </div>

        </div>
        <div class="base_listados"></div>
    </div>
</body>
</html>
