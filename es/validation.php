<?php 

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used
	| by the validator class. Some of the rules contain multiple versions,
	| such as the size (max, min, between) rules. These versions are used
	| for different input types such as strings and files.
	|
	| These language lines may be easily changed to provide custom error
	| messages in your application. Error messages for custom validation
	| rules may also be added to this file.
	|
	*/

	"accepted"       => "El campo :attribute debe ser aceptado.",
	"active_url"     => "El campo :attribute no es una URL válida.",
	"after"          => "El campo :attribute debe ser una fecha después de :date.",
	"alpha"          => "El campo :attribute sólo puede contener letras.",
	"alpha_dash"     => "El campo :attribute sólo puede contener letras, números y guiones.",
	"alpha_num"      => "El campo :attribute sólo puede contener letras y números.",
	"array"                => "El campo :attribute sólo puede contener un arreglo.",
	"before"         => "El campo :attribute debe ser una fecha antes :date.",
	"between"        => array(
		"numeric" => "El campo :attribute debe estar entre :min y :max.",
		"file"    => "El campo :attribute debe estar entre :min y :max kilobytes.",
		"string"  => "El campo :attribute debe estar entre :min y :max caracteres.",
		"array"   => "El campo :attribute debe tener entre :min y :max items.",
	),
	"confirmed"            => "El campo :attribute confirmación no coincide.",
	"date"                 => "El campo :attribute no es una fecha válida.",
	"date_format"          => "El campo :attribute no coincide con el formato :format.",
	"different"            => "El campo :attribute y :other debe ser diferente.",
	"digits"               => "El campo :attribute debe ser de :digits digitos.",
	"digits_between"       => "El campo :attribute debe estar entre :min y :max digitos.",
	"email"                => "El campo :attribute debe ser una correo electrónico válido.",
	"exists"               => "El campo :attribute seleccionado es inválido.",
	"image"                => "El campo :attribute debe ser una imagen.",
	"in"                   => "El campo :attribute seleccionado es inválido.",
	"integer"              => "El campo :attribute debe ser un entero.",
	"ip"                   => "El campo :attribute debe ser una dirección IP válida.",
	"match"                => "El formato :attribute es inválido.",
	"max"            => array(
		"numeric" => "El campo :attribute debe ser menor que :max.",
		"file"    => "El campo :attribute debe ser menor que :max kilobytes.",
		"string"  => "El campo :attribute debe ser menor que :max caracteres.",
		"array"   => "El campo :attribute no puede tener más de :max items.",
	),
	"mimes"          => "El campo :attribute debe ser un archivo de tipo :values.",
	"min"            => array(
		"numeric" => "El campo :attribute debe tener al menos :min.",
		"file"    => "El campo :attribute debe tener al menos :min kilobytes.",
		"string"  => "El campo :attribute debe tener al menos :min caracteres.",
		"array"   => "El campo :attribute debe tener al menos :min items.",
	),
	"not_in"               => "El campo :attribute seleccionado es inválido.",
	"numeric"              => "El campo :attribute debe ser un numero.",
	"required"             => "El campo :attribute es requerido",
	"required_if"          => "El campo :attribute es requerido cuando :other es :value.",
	"required_with"        => "El campo :attribute es requerido cuando :values están presentes.",
	"required_with_all"    => "El campo :attribute es requerido cuando :values están presentes.",
	"required_without"     => "El campo :attribute es requerido cuando :values no están presentes.",
	"required_without_all" => "El campo :attribute se requiere cuando ninguno de :values están presentes.",
	"same"                 => "El campo :attribute y :other debe coincidir.",
	"size"                 => array(
		"numeric" => "El campo :attribute debe ser :size.",
		"file"    => "El campo :attribute debe ser :size kilobyte.",
		"string"  => "El campo :attribute debe ser :size caracteres.",
		"array"   => "El campo :attribute debe contener :size items.",
	),
	"unique"         => "El campo :attribute ya ha sido tomado.",
	"url"            => "El formato de :attribute es inválido.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute_rule" to name the lines. This helps keep your
	| custom validation clean and tidy.
	|
	| So, say you want to use a custom validation message when validating that
	| the "email" attribute is unique. Just add "email_unique" to this array
	| with your custom message. The Validator will handle the rest!
	|
	*/

	'custom' => array(
		'attribute-name' => array(
			'rule-name' => 'custom-message',
		),
	),

	/*
	|--------------------------------------------------------------------------
	| Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as "E-Mail Address" instead
	| of "email". Your users will thank you.
	|
	| The Validator class will automatically search this array of lines it
	| is attempting to replace the :attribute place-holder in messages.
	| It's pretty slick. We think you'll like it.
	|
	*/

	'attributes' => array(),

);
