<html>
<head>
<script language="JavaScript" type="text/javascript">
function confirmar_ventana()
{
	if (!confirm("Desea entrar a esta página, presione ACEPTAR, si no presione CANCELAR")) 
		history.go(-1);
	return " " 
}
document.writeln(confirmar_ventana())
</script>

<script type="text/javascript">
alert("Hola Mundo!");
</script>

<title>Algo de JavaScript</title>
</head>
<body>
<p>CODIGO FUENTE</p>
<pre style='color:#000000;background:#ffffff;'><span style='color:#7f0055; '>&lt;</span><span style='color:#7f0055; font-weight:bold; '>html</span><span style='color:#7f0055; '>></span>
<span style='color:#7f0055; '>&lt;</span><span style='color:#7f0055; font-weight:bold; '>head</span><span style='color:#7f0055; '>></span>
<span style='color:#7f0055; '>&lt;</span><span style='color:#7f0055; font-weight:bold; '>script language="</span><span style='color:#2a00ff; '>JavaScript</span><span style='color:#7f0055; font-weight:bold; '>" type="text/javascript"</span><span style='color:#7f0055; '>></span>
<span style='color:#7f0055; font-weight:bold; '>function</span> confirmar_ventana()
{
    <span style='color:#7f0055; font-weight:bold; '>if</span> (!confirm(<span style='color:#2a00ff; '>"</span><span style='color:#2a00ff; '>Desea entrar a esta página, presione ACEPTAR, si no presione CANCELAR</span><span style='color:#2a00ff; '>"</span>)) 
        history.go(-1);
    <span style='color:#7f0055; font-weight:bold; '>return</span> <span style='color:#2a00ff; '>"</span><span style='color:#2a00ff; '> </span><span style='color:#2a00ff; '>"</span> 
}
document.writeln(confirmar_ventana())
<span style='color:#7f0055; '>&lt;/</span><span style='color:#7f0055; font-weight:bold; '>script</span><span style='color:#7f0055; '>></span>

<span style='color:#7f0055; '>&lt;</span><span style='color:#7f0055; font-weight:bold; '>script type="text/javascript"</span><span style='color:#7f0055; '>></span>
alert(<span style='color:#2a00ff; '>"</span><span style='color:#2a00ff; '>Hola Mundo!</span><span style='color:#2a00ff; '>"</span>);
<span style='color:#7f0055; '>&lt;/</span><span style='color:#7f0055; font-weight:bold; '>script</span><span style='color:#7f0055; '>></span>

<span style='color:#7f0055; '>&lt;</span><span style='color:#7f0055; font-weight:bold; '>title</span><span style='color:#7f0055; '>></span>Algo de JavaScript<span style='color:#7f0055; '>&lt;/</span><span style='color:#7f0055; font-weight:bold; '>title</span><span style='color:#7f0055; '>></span>
<span style='color:#7f0055; '>&lt;/</span><span style='color:#7f0055; font-weight:bold; '>head</span><span style='color:#7f0055; '>></span>
<span style='color:#7f0055; '>&lt;</span><span style='color:#7f0055; font-weight:bold; '>body</span><span style='color:#7f0055; '>></span>
<span style='color:#7f0055; '>&lt;</span><span style='color:#7f0055; font-weight:bold; '>p</span><span style='color:#7f0055; '>></span>Script para imprimir
<span style='color:#7f0055; '>&lt;</span><span style='color:#7f0055; font-weight:bold; '>a</span> href=<span style='color:#2a00ff; '>"javascript:print()"</span><span style='color:#7f0055; '>></span>Imprimir<span style='color:#7f0055; '>&lt;/</span><span style='color:#7f0055; font-weight:bold; '>a</span><span style='color:#7f0055; '>></span><span style='color:#7f0055; '>&lt;/</span><span style='color:#7f0055; font-weight:bold; '>p</span><span style='color:#7f0055; '>></span>
<span style='color:#7f0055; '>&lt;</span><span style='color:#7f0055; font-weight:bold; '>br</span><span style='color:#7f0055; '>></span>
<span style='color:#7f0055; '>&lt;</span><span style='color:#7f0055; font-weight:bold; '>p</span><span style='color:#7f0055; '>></span><span style='color:#7f0055; '>&lt;</span><span style='color:#7f0055; font-weight:bold; '>b</span><span style='color:#7f0055; '>></span>Scrpit para enviar un Alert al hacer click - <span style='color:#7f0055; '>&lt;/</span><span style='color:#7f0055; font-weight:bold; '>b</span><span style='color:#7f0055; '>></span>
<span style='color:#7f0055; '>&lt;</span><span style='color:#7f0055; font-weight:bold; '>p</span> onClick=<span style='color:#2a00ff; '>"alert('Un mensaje de prueba')"</span><span style='color:#7f0055; '>></span>Haz click para ver un mensaje<span style='color:#7f0055; '>&lt;/</span><span style='color:#7f0055; font-weight:bold; '>p</span><span style='color:#7f0055; '>></span>
<span style='color:#7f0055; '>&lt;</span><span style='color:#7f0055; font-weight:bold; '>br</span><span style='color:#7f0055; '>></span>
<span style='color:#7f0055; '>&lt;</span><span style='color:#7f0055; font-weight:bold; '>p</span><span style='color:#7f0055; '>></span><span style='color:#7f0055; '>&lt;</span><span style='color:#7f0055; font-weight:bold; '>b</span><span style='color:#7f0055; '>></span>Script para Volver atras<span style='color:#7f0055; '>&lt;/</span><span style='color:#7f0055; font-weight:bold; '>b</span><span style='color:#7f0055; '>></span>
<span style='color:#7f0055; '>&lt;</span><span style='color:#7f0055; font-weight:bold; '>a</span> href=<span style='color:#2a00ff; '>"javascript:history.back(1)"</span><span style='color:#7f0055; '>></span>Volver Atrás<span style='color:#7f0055; '>&lt;/</span><span style='color:#7f0055; font-weight:bold; '>a</span><span style='color:#7f0055; '>></span>
<span style='color:#7f0055; '>&lt;/</span><span style='color:#7f0055; font-weight:bold; '>p</span><span style='color:#7f0055; '>></span>
<span style='color:#7f0055; '>&lt;</span><span style='color:#7f0055; font-weight:bold; '>br</span><span style='color:#7f0055; '>></span>
<span style='color:#7f0055; '>&lt;</span><span style='color:#7f0055; font-weight:bold; '>p</span><span style='color:#7f0055; '>></span> Script Boton Volver Atras<span style='color:#7f0055; '>&lt;/</span><span style='color:#7f0055; font-weight:bold; '>p</span><span style='color:#7f0055; '>></span>
<span style='color:#7f0055; '>&lt;</span><span style='color:#7f0055; font-weight:bold; '>form</span><span style='color:#7f0055; '>></span>
<span style='color:#7f0055; '>&lt;</span><span style='color:#7f0055; font-weight:bold; '>input</span> type=<span style='color:#2a00ff; '>"button"</span> value=<span style='color:#2a00ff; '>"volver atrás"</span> name=<span style='color:#2a00ff; '>"volver atrás2"</span> onClick=<span style='color:#2a00ff; '>"history.back()"</span> <span style='color:#7f0055; '>/></span>
<span style='color:#7f0055; '>&lt;/</span><span style='color:#7f0055; font-weight:bold; '>form</span><span style='color:#7f0055; '>></span>
<span style='color:#7f0055; '>&lt;</span><span style='color:#7f0055; font-weight:bold; '>br</span><span style='color:#7f0055; '>></span>
<span style='color:#7f0055; '>&lt;/</span><span style='color:#7f0055; font-weight:bold; '>body</span><span style='color:#7f0055; '>></span>
<span style='color:#7f0055; '>&lt;/</span><span style='color:#7f0055; font-weight:bold; '>html</span><span style='color:#7f0055; '>></span>
</pre>	
<pre>****************************************************************************************************</pre>
<pre>Resultado</pre>
<pre>****************************************************************************************************</pre>

<p>Script para imprimir
<a href="javascript:print()">Imprimir</a></p>
<br>
<p><b>Scrpit para enviar un Alert al hacer click - </b>
<p onClick="alert('Un mensaje de prueba')">Haz click para ver un mensaje</p>
<br>
<p><b>Script para Volver atras</b>
<a href="javascript:history.back(1)">Volver Atrás</a>
</p>
<br>
<p> Script Boton Volver Atras</p>
<form>
<input type="button" value="volver atrás" name="volver atrás2" onClick="history.back()" />
</form>
<br>
<p>******************************************************************************</p>

</body>
</html>
