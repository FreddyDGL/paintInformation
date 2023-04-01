function cerrarSesion() {
    var respuesta = confirm("¿Es seguro de que quieres cerrar sesion?");

    if (respuesta == true) {
        return true;
        
    }
    else {
        return false;
    }
}