var $formulario = $('#formulario'),
	$button = $('#mostrar-form');

	function mostrarFormulario()
	{
		$formulario.slideToggle();
		return  false;
	}
	$button.click(mostrarFormulario);