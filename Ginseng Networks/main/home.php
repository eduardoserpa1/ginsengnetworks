<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
	<link rel="stylesheet" type="text/css" href="../css/home_css.css">

	
</head>
<body>


	
	<header>
		
			<nav class="box-head">
				<a href="" id="nome_do_site">Ginseng Networks</a>
				<a class="nav-item" href="#pacotes" >Planos</a>
				<a class="nav-item" href="#solicitar_plano" >Solicitar plano/suporte</a>
				<a class="nav-item" href="#rodape" >Contato</a>
			</nav>
	
	</header>
	<main>
		<div class="box-1">
			<div class="box-text-1">	
				<b>FIBRA ÓPTICA</b>
				<p>Conheça agora mesmo a nova tecnologia de internet via Fibra Óptica com planos a partir de R$ 99,90. Pacotes de 20MB,40MB,50MB e 100MB disponíveis.</p>
				<br>
				<p>Entre em contato com a equipe Ginseng Networks para mais informações sobre planos de internet.
				</p>
				<br>
				<br>
			
				<a href="#pacotes" id="link-mais">Contratar plano</a>

			</div>
		</div>
		<div class="box-2" id="pacotes">
			
			<div class="box-subitem">
				<div>
					<img src="../graph/icon/radio.png">
				</div>
				<div>
					<p><b>INTERNET VIA RÁDIO</b></p>
				</div>
				<div>
					<p> Pacotes à partir de R$ 49,90.</p>
				</div>

				<div>
					<p>Planos disponíveis:</p>
				</div>	
				<div>
					<p>2MB, 3MB, 5MB, 10MB e 20MB</p>
				</div>
				<br>
				<br>
				<br>
				<br>
				<br>

				<div>
					<a href="">Solicitar</a>
				</div>
			</div>
			<div class="box-subitem">
				<div>
				<img src="../graph/icon/fibra.png">
				</div>
				<div>
					<p><b>FIBRA ÓPTICA</b></p>
				</div>
				<div>
					<p> Pacotes à partir de R$ 99,90.</p>
				</div>

				<div>
					<p>Planos disponíveis:</p>
				</div>	
				<div>
					<p>5MB, 10MB, 20MB, 50MB e 100MB</p>
				</div>
				<br>
				<br>
				<br>
				<br>
				<br>
					
				<div>
					<a href="">Solicitar</a>
				</div>

			</div>
			<div class="box-subitem">	
				<div>
				<img src="../graph/icon/telefone.png">
				</div>
				<div>
					<p><b>TELEFONIA</b></p>
				</div>
				<div>
					<p> Pacotes à partir de R$ 29,90.</p>
				</div>

				<div>
					<p>Planos de até 5 pontos disponíveis.</p>
				</div>	
				<div>
					<p></p>
				</div>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
					
				<div>
					<a href="">Solicitar</a>
				</div>
			</div>

		</div>




		<div class="box-3" id="solicitar_plano">
			
			<div class="box-subitem-plano">	

				<div>
					<b>SOLICITAR PLANO/MANUTENÇÃO</b>
				</div>

				<div>
					<form action="home.php" method="post" name="formulario_solicitar_plano">
						<input type="radio" name="radio_option" id="radio" value="radio" 
						onclick="mostra_velocidades(this.value)">
						<label>Rádio</label>&nbsp&nbsp&nbsp
						<input type="radio" name="radio_option" id="fibra" value="fibra"
						onclick="mostra_velocidades(this.value)">
						<label>Fibra Óptica</label>&nbsp&nbsp&nbsp
						<input type="radio" name="radio_option" id="telefone" value="telefone"
						onclick="mostra_velocidades(this.value)">
						<label>Telefone</label>
						<br>
						<select id="select_velocidade" name="select_velocidade">
							
							
						</select>

						<br>
						<select id="select_servico" name="tipo_de_servico">
							<option selected>Selecione o tipo de serviço...</option>
							<option value="Contratar plano">Contratar plano</option>
							<option value="Suporte/Manutenção">Solicitar suporte/manutenção</option>
						</select>
						<br>
						<textarea id="corpo_texto" name="corpo_texto" placeholder="Digite sua mensagem aqui (Opcional)">
							
						</textarea><br>
						<input type="submit" name="enviar">
					

					</form>
				</div>

			</div>


		</div>



	</main>

	<footer>
		<div class="box-4" id="rodape">
			<div class="box-subitem-4">
				<div>
					<p><b>Email: </b><i>ginsengnetworks@gmail.com</i></p>
				</div>
				<div>
					<p><b>Telefone: </b><i>[51] 9 9667-0746</i></p>
				</div>
				<div>
					<p><b>Endereço: </b><i>Rua. General Bal. 81</i></p>
				</div>
			</div>

			<div class="box-subitem-4" >
				<br>
				<p><i> Developed by Eduardo Serpa</i> - <b>© Copyright</b></p>
			</div>


		



		</div>
	</footer>







	
	<script type="text/javascript">
		document.getElementById('corpo_texto').innerHTML = "";

		function mostra_velocidades(value) {

			if (value == "radio") {
				document.getElementById('select_velocidade').innerHTML = 
				"<option value='none' selected>Selecione a velocidade do plano...</option>" ;

				document.getElementById('select_velocidade').innerHTML += 
				"<option value='2mb'>2MB</option>" ;

				document.getElementById('select_velocidade').innerHTML += 
				"<option value='3mb'>3MB</option>" ;

				document.getElementById('select_velocidade').innerHTML += 
				"<option value='5mb'>5MB</option>" ;

				document.getElementById('select_velocidade').innerHTML += 
				"<option value='10mb'>10MB</option>" ;

				document.getElementById('select_velocidade').innerHTML += 
				"<option value='20mb'>20MB</option>" ;
			}
			if (value == "fibra") {
				document.getElementById('select_velocidade').innerHTML = 
				"<option value='none' selected>Selecione a velocidade do plano...</option>" ;

				document.getElementById('select_velocidade').innerHTML += 
				"<option value='5mb'>5MB</option>" ;

				document.getElementById('select_velocidade').innerHTML += 
				"<option value='10mb'>10MB</option>" ;

				document.getElementById('select_velocidade').innerHTML += 
				"<option value='20mb'>20MB</option>" ;

				document.getElementById('select_velocidade').innerHTML += 
				"<option value='50mb'>50MB</option>" ;

				document.getElementById('select_velocidade').innerHTML += 
				"<option value='100mb'>100MB</option>" ;
			}
			if (value == "telefone") {
				document.getElementById('select_velocidade').innerHTML = 
				"<option value='none' selected>Selecione a quantidade de pontos...</option>" ;

				document.getElementById('select_velocidade').innerHTML += 
				"<option value='1 ponto'>1</option>" ;

				document.getElementById('select_velocidade').innerHTML += 
				"<option value='2 pontos'>2</option>" ;

				document.getElementById('select_velocidade').innerHTML += 
				"<option value='3 pontos'>3</option>" ;

				document.getElementById('select_velocidade').innerHTML += 
				"<option value='4 pontos'>4</option>" ;

				document.getElementById('select_velocidade').innerHTML += 
				"<option value='5 pontos'>5</option>" ;
			}

		}



	</script>

<?php

if (!empty($_POST['enviar'])) {


//1 – Definimos Para quem vai ser enviado o email
$destino = "dudu.rserpa@gmail.com";
 
//$assunto
$assunto = $_POST['tipo_de_servico'];

$mensagem = "Plano: ".$_POST['radio_option']."<br>";
$mensagem .= "Velocidade: ".$_POST['select_velocidade']."<br>";
$mensagem .= "Mensagem: \n \n".$_POST['corpo_texto'];
 
$headers_array  = array(
"From: contato@ginsengnetworks.com",
"Reply-To: dudu.rserpa@gmail.com",
"Subject: $mensagem",
"Return-Path: contao@ginsengnetworks.com",
"MIME-Version: 1.0",
"X-Priority: 3",
"Content-Type: text/html; charset=UTF-8"
); 

$headers = implode("\n",$headers_array);


mail($destino, $assunto, $mensagem, $headers);  //função que faz o envio do email.

}
?>
	

</body>
</html>
