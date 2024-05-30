<?php


// Verificar si el formulario ha sido enviado
if (!empty($_POST["namepe"]) && !empty ($_POST["contra"])    ) {
    // Obtener los datos del formulario
    $username = $_POST['namepe'];
    $password = $_POST['contra'];

    // Validar las credenciales (puedes implementar tu lógica de autenticación aquí)
    // En este ejemplo, vamos a comprobar si el usuario y la contraseña son "usuario" y "contraseña"
    if ($username == 'user' && $password === '123') {
        $error = "OK";
        echo "accedió";
    } else {
        // Credenciales incorrectas, redirigir de vuelta al formulario de inicio de sesión con un mensaje de error
        
        $error = "incorrecto";
        header("Location: index.php?error=$error");
       
    }
} else {
    // Si el formulario no ha sido enviado correctamente, redirigir de vuelta al formulario de inicio de sesión
    $error = "vacio";
    header("Location: index.php?error=$error");
}
?>
