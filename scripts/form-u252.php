<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.0.0.309
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Transporte Formulário envio',
	'heading' => 'Envio de novo formulário',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Marcado',
		'checkbox_unchecked' => 'Desmarcado',
		'submitted_from' => 'Formulário enviado do site: %s',
		'submitted_by' => 'Endereço IP do visitante: %s',
		'too_many_submissions' => 'Muitos envios recentes deste IP',
		'failed_to_send_email' => 'Falha no envio do email',
		'invalid_reCAPTCHA_private_key' => 'Chave privada do reCAPTCHA inválida.',
		'invalid_field_type' => 'Tipo de campo desconhecido \"%s\".',
		'invalid_form_config' => 'O campo \"%s\" possui uma configuração inválida.',
		'unknown_method' => 'Método de solicitação de servidor desconhecido'
	),
	'email' => array(
		'from' => '',
		'to' => ''
	),
	'fields' => array(
		'custom_U284' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Tipo',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Tipo\" é obrigatório.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Capacidade',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Capacidade\" é obrigatório.',
				'format' => 'O campo \"Capacidade\" possui um email inválido.'
			)
		),
		'custom_U279' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Valor',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Valor\" é obrigatório.'
			)
		),
		'custom_U263' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Evento',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Evento\" é obrigatório.'
			)
		)
	)
);

process_form($form);
?>
