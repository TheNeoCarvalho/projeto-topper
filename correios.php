<?php 
session_start();
$cep_destino = $_POST['cep_destino'];
$cep_origem  = '63460000';
$url  = 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?';
$url .= 'nCdEmpresa=0&';
$url .= 'sDsSenha=0&';
$url .= 'nCdServico=41106&';
$url .= 'sCepOrigem='.$cep_origem.'&';
$url .= 'sCepDestino='.$cep_destino.'&';
$url .= 'nVlPeso=2&';
$url .= 'nCdFormato=1&';
$url .= 'nVlComprimento=16&';
$url .= 'nVlAltura=16&';
$url .= 'nVlLargura=21&';
$url .= 'nVlDiametro=11&';
$url .= 'sCdMaoPropria=S&';
$url .= 'nVlValorDeclarado=0&';
$url .= 'sCdAvisoRecebimento=N&';
$url .= 'StrRetorno=xml&';
$url .= 'nIndicaCalculo=3';

$xml   = simplexml_load_file($url);

$frete = $xml->cServico;

$valor = $frete->Valor;
$prazo = $frete->PrazoEntrega;

echo "
	<p><b>Valor:</b> R$ $valor</p>
	<p><b>Prazo:</b> $prazo Dias</p>
  ";

?>