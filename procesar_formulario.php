<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    // Verificar campos obligatorios
    if (empty($nombre) || empty($telefono) || empty($correo) || empty($mensaje)) {
        echo json_encode(['status' => 'error', 'message' => 'Todos los campos son obligatorios. Por favor, completa el formulario.']);
        exit;
    }

    // Destinatario y asunto del correo
    $destinatario = "nbokanegra@gmail.com";
    $asunto = "Nuevo mensaje de contacto";

    // Contenido del correo
    $contenido = "Nombre: $nombre\nTeléfono: $telefono\nCorreo: $correo\nMensaje: $mensaje";

    // Enviar el correo y manejar errores
    if (mail($destinatario, $asunto, $contenido)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Hubo un problema al enviar el correo. Por favor, inténtalo de nuevo.']);
    }
}
?>
