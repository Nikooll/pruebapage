<?php
    // Aquí recuperamos el nombre de la asignatura desde la URL
    $nombre_asignatura = $_GET['nombre'];

    // Aquí podrías realizar consultas a una base de datos o definir el contenido de cada asignatura según tu lógica

    // Por simplicidad, aquí mostramos un mensaje genérico para cada asignatura
    switch ($nombre_asignatura) {
        case 'ProgramacionOrientadaObjetos':
            $contenido_asignatura = "Contenido de Programación Orientada a Objetos";
            break;
        case 'DiseñoCircuitos':
            $contenido_asignatura = "Contenido de Diseño de Circuitos";
            break;
        case 'EmprendimientoInnovacion':
            $contenido_asignatura = "Contenido de Emprendimiento e Innovación Tecnológica";
            break;
        case 'AnalisisMatematico':
            $contenido_asignatura = "Contenido de Análisis Matemático";
            break;
        case 'TeoriaDistribucionProbabilidad':
            $contenido_asignatura = "Contenido de Teoría de la Distribución y Probabilidad";
            break;
        default:
            $contenido_asignatura = "Asignatura no encontrada";
            break;
    }
?>

<div class="card mb-4 shadow-sm">
    <div class="card-body">
        <h5 class="card-title"><?php echo $nombre_asignatura; ?></h5>
        <p class="card-text"><?php echo $contenido_asignatura; ?></p>
    </div>
</div>

