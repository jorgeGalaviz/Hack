<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Problema 4</title>
</head>

<body>
<?php
	include("cabezera.php");

	require_once('Stripe/lib/Stripe.php');
	if(isset($_POST["correo"])){
		Stripe::setApiKey("sk_test_BQokikJOvBiI2HlWgH4olfQ2");
		
		Stripe_Charge::create(array(
		  "amount" => 0,
		  "currency" => "usd",
		  "card" => array(
			"number" => $_POST["number"],
			"exp_month" => $_POST["exp-month"],
			"exp_year" => $_POST["exp-year"],
			"cvc" => $_POST["cvc"]
		  ),
		  "description" => "Charge for ".$_POST['correo'],
		));
	}
?>

<p>Escribe un programa que use los API's de Stripe, stamps.com y Mailchimp para un servicio de
suscripción (ventas cíclicas).</p>
<ol>
<li>Un usuario podrá suscribirse ingresando su correo, sus datos de pago y envío en el menos
numero de pasos posible.</li>
<li>Investiga que proveedores de pagos, envíos y correos podemos usar. Escribe algunos ejemplos
con el API de cada uno. Escribe un párrafo con tus recomendaciones y que recomendarais
hacer. Para Mexico.</li>
<li>Describe como implementarías un sistema de recomendaciones entre usuarios que permita que
tanto el usuario que invita como el que es invitado reciban recompensas al hacerlo.</li>
</ol>
<ul>
<li>Puntos extra: Lista de casos en los que un sistema así podrá ser abusado por los usuarios y como
!mitigarías esos abusos.</li>
</ul>

<h1>1.-</h1>

<form action="" method="POST" id="payment-form">
  <span class="payment-errors"></span>
  
  
  <div class="form-row">
    <label>
      <span>Correo</span>
      <input type="text" size="20" data-stripe="correo"/>
    </label>
  </div>
  
  <div class="form-row">
    <label>
      <span>Repetir Correo</span>
      <input type="text" size="20" data-stripe="correo"/>
    </label>
  </div>
  
  <div class="form-row">
    <label>
      <span>Direccion</span>
      <input type="text" size="20" data-stripe="correo"/>
    </label>
  </div>
  
  <div class="form-row">
    <label>
      <span>Contraseña</span>
      <input type="password" size="20" data-stripe="correo"/>
    </label>
  </div>
  
  <div class="form-row">
    <label>
      <span>Contraseña</span>
      <input type="password" size="20" data-stripe="correo"/>
    </label>
  </div>

  <div class="form-row">
    <label>
      <span>Card Number</span>
      <input type="text" size="20" data-stripe="number"/>
    </label>
  </div>

  <div class="form-row">
    <label>
      <span>CVC</span>
      <input type="text" size="4" data-stripe="cvc"/>
    </label>
  </div>

  <div class="form-row">
    <label>
      <span>Expiration (MM/YYYY)</span>
      <input type="text" size="2" data-stripe="exp-month"/>
    </label>
    <span> / </span>
    <input type="text" size="4" data-stripe="exp-year"/>
  </div>

  <button type="submit">Submit Payment</button>
</form>


<h1>2.-</h1>

<p>Como de pago paypal ya que es una aplicacion conocida en mexico y facil de implementar, para envios solo conosco DHL y Estafeta como empresas, y de correos suena muy bien MailChimp</p>



<h1>3.-</h1>

<p>Para implementar recomendacion serian regalos basado en cuanto a un usuario invite a un amigo y su amigo se subscriba con esto se le daria puntos, y ademas si su amigo recomienda se le darian puntos y/o descuentos dependiendo, asi como los classicos de postearlo en Facebook, Google++, Tweeter</p>

<p>Este sistema puede abusarce al crear cuentas repetidas esto podria cambiar con las IP para asignar las ip ya usadas, asi como el sistema de pago podria ser facil realizar robos de identidad, se deberia pedir mas informacion acerca del dueño de la tarjeta y verificar los datos para evitar esto</p>

</body>
</html>