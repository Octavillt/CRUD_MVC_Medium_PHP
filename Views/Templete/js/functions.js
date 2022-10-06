function fntDelusuario(id){
	swal({
		title: "¿Desea Eliminar al Usuario?",
		icon: "error",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			swal("Usuario Eliminado Correctamente", {
				icon: "success",
			});
		} 
	});
}