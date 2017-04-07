<html>
    <head>
        <title>Ejercicio 12-2: Matrices (Arreglos  Multidimensionales) en PHP. </title>
        <meta content="utf8">
    </head>
    <body>
    <p>Ejercicio 12-2: Matrices (Arreglos  Multidimensionales) en PHP</p>
    <p>Tabla de Valores de Notas. Debemos convertir esta tabla html en un array php</p>
    <table border=1>
        <tr>
            <td>Materia</td>
            <td>Lapso 1</td>
            <td>Lapso 2</td>
            <td>Lapso 3</td></tr>
        <tr>
            <td>Matemática</td>
            <td>10</td>
            <td>12</td>
            <td>15</td>
        </tr>
        <tr>
            <td>Física</td>
            <td>14</td>
            <td>11</td>
            <td>16</td>
        </tr>
        <tr>
            <td>Química</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
        </tr>
    </table>
    <p>
    <?php
    
    // Creamos un array de notas por cada materia, equivalente a a la tabla en html, pero en php
    $notas[0] = array("materia"=>"Matemática","Lapso1"=>10,"Lapso2"=>12,"Lapso3"=>15);              // Indice 0
    $notas[1] = array("materia"=>"Física","Lapso1"=>14,"Lapso2"=>11,"Lapso3"=>16);                      // Indice 1
    $notas[2] = array("materia"=>"Química","Lapso1"=>16,"Lapso2"=>17,"Lapso3"=>18);                  // Indice 2
    
    print("Podemos visualizar la estructura y contenido de un array con print_r");
    print_r("<pre>");                       // <pre> muestra el texto preformateado (texto crudo sin formato, ni estilos)
    print_r ($notas);
    print_r("</pre>");
    
    print("<br>");                              // agregamos saltos de lineas en html
    print ("Podemos acceder a cualquier elemento con \$array[indice]['clave']<br>");
    print ("Nota de Matemática 1er Lapso <b>" . $notas[0]["Lapso1"]. "</b><br>\n");
    print ("Nota de Física 2do Lapso <b>" . $notas[1]['Lapso2']. "</b><br>\n");
    print ("Nota de Química 3er Lapso <b>" . $notas[2]['Lapso3']. "</b><br>\n");
    
    print("<br>");                              // agregamos saltos de lineas en html
    print ("Se puede recorrer el arreglo con un For + Foreach y mostramos los valores<br>");
    for ($i=0 ; $i<count($notas);$i++) {
        foreach($notas[$i] as $valor) 
        {
              print_r($valor."<br />");
        }    
    }
    
    print("<br><br>");                      // agregamos 2 saltos de lineas en html
    print("Función que permite recorrer la matriz e imprimir en pantallas los datos<br>");
    print("Incluyendo las etiquetas HTML para construir una tabla. Con sus cálculos adicionales<br>");
          
    mostrarmatriz($notas);                          // llamada a la función, con el arreglo como parametro
    
    /* Creamos una función para esas rutinas comunes
        Las funciones puedes estar al inicio, medio o final del programa    */ 
    function mostrarmatriz($arreglo) {
        //print_r("<pre>");
        $num_elementos = count($arreglo);                   //contamos la cantidad de elementos del arreglo (por filas)
        print ("Cantidad de Filas $num_elementos <br> \n");     
        
        print("<table border='1'>");                            // creamos la tabla para que sea vista en html
         print("<tr>");                                                 //  abrimos  la pŕimera fila - para los encabezados
         print("<td><b>Materia</b></td>");              //creamos cada columna del encabezado
         print("<td><b>Lapso 1</b></td>");              //creamos cada columna del encabezado
         print("<td><b>Lapso 2</b></td>");              //creamos cada columna del encabezado
         print("<td><b>Lapso 3</b></td>");              //creamos cada columna del encabezado
         print("<td><b>Nota Final</b></td>");           // incluyendo una nueva columna, aqui val los cálculos 
         print("</tr>");                                                //cerramos la primera fila - row
         
         // recorremos el arreglo empezando por las filas
         for ($i=0 ; $i<count($arreglo);$i++) {
            print("<tr>");                                          // imprimir la etiqueta para abrir la fila - row
            $notafinal=0;                                           // inicializo un acumulador en 0
            // ahora recorremos el arreglo por las columnas
            foreach($arreglo[$i] as $valor)  {  
                print("<td>");                                  // imprimir la etiqueta para abrir la columna
                print($valor."<br />");                     // imprimir su contenido
                print("</td>");                                 // imprimir cierre de etiqueta columna
                $notafinal+=$valor;                         // acumulamos la nota de cada lapso 
            }
            $notafinal  = round($notafinal / 3 , 2);                // calculamos el promedio de esa materia,
                                                                                        // redondeando el resultado a 2 decimales
            print("<td><b>".$notafinal."</b></td>");        // creamos una nueva columna  con la nota final
            print("</tr>");                                                     //cerramos la fila - row
            $promedio+=$notafinal;                                     // acumulamos cada nota final
        }
        $promedio=round($promedio / count($arreglo),2);                 //calculamos el promedio general del alumno
        print("<tr><td colspan=4><b>Promedio</b></td>");            // creamos una nueva fila, agrupamos las 4 columnas
        print("<td><b>".$promedio."</b></td></tr>");                        // creamos la quienta columna con la nota gneral
        print("</table>");                                                          // cerramos la tabla
        return null;
    }
    ?>
    </p>
    <p><a href="index.html">Inicio</a>
    <pre><p>***************************************************************************************</p><pre/>
<pre style="background:#000;color:#f8f8f8"><span style="color:#89bdff">&lt;<span style="color:#89bdff">html</span>></span>
    <span style="color:#89bdff">&lt;<span style="color:#89bdff">head</span>></span>
        <span style="color:#e0c589">&lt;<span style="color:#e0c589">title</span>></span>Ejercicio 12-2: Matrices (Arreglos  Multidimensionales) en PHP. <span style="color:#e0c589">&lt;/<span style="color:#e0c589">title</span>></span>
        <span style="color:#e0c589">&lt;<span style="color:#e0c589">meta</span> <span style="color:#e0c589">content</span>=<span style="color:#65b042">"utf8"</span>></span>
    <span style="color:#89bdff">&lt;/<span style="color:#89bdff">head</span>></span>
    <span style="color:#89bdff">&lt;<span style="color:#89bdff">body</span>></span>
    <span style="color:#89bdff">&lt;<span style="color:#89bdff">p</span>></span>Ejercicio 12-2: Matrices (Arreglos  Multidimensionales) en PHP<span style="color:#89bdff">&lt;/<span style="color:#89bdff">p</span>></span>
    <span style="color:#89bdff">&lt;<span style="color:#89bdff">p</span>></span>Tabla de Valores de Notas. Debemos convertir esta tabla html en un array php<span style="color:#89bdff">&lt;/<span style="color:#89bdff">p</span>></span>
    <span style="color:#e0c589">&lt;<span style="color:#e0c589">table</span> <span style="color:#e0c589">border</span>=1></span>
        <span style="color:#e0c589">&lt;<span style="color:#e0c589">tr</span>></span>
            <span style="color:#e0c589">&lt;<span style="color:#e0c589">td</span>></span>Materia<span style="color:#e0c589">&lt;/<span style="color:#e0c589">td</span>></span>
            <span style="color:#e0c589">&lt;<span style="color:#e0c589">td</span>></span>Lapso 1<span style="color:#e0c589">&lt;/<span style="color:#e0c589">td</span>></span>
            <span style="color:#e0c589">&lt;<span style="color:#e0c589">td</span>></span>Lapso 2<span style="color:#e0c589">&lt;/<span style="color:#e0c589">td</span>></span>
            <span style="color:#e0c589">&lt;<span style="color:#e0c589">td</span>></span>Lapso 3<span style="color:#e0c589">&lt;/<span style="color:#e0c589">td</span>></span><span style="color:#e0c589">&lt;/<span style="color:#e0c589">tr</span>></span>
        <span style="color:#e0c589">&lt;<span style="color:#e0c589">tr</span>></span>
            <span style="color:#e0c589">&lt;<span style="color:#e0c589">td</span>></span>Matemática<span style="color:#e0c589">&lt;/<span style="color:#e0c589">td</span>></span>
            <span style="color:#e0c589">&lt;<span style="color:#e0c589">td</span>></span>10<span style="color:#e0c589">&lt;/<span style="color:#e0c589">td</span>></span>
            <span style="color:#e0c589">&lt;<span style="color:#e0c589">td</span>></span>12<span style="color:#e0c589">&lt;/<span style="color:#e0c589">td</span>></span>
            <span style="color:#e0c589">&lt;<span style="color:#e0c589">td</span>></span>15<span style="color:#e0c589">&lt;/<span style="color:#e0c589">td</span>></span>
        <span style="color:#e0c589">&lt;/<span style="color:#e0c589">tr</span>></span>
        <span style="color:#e0c589">&lt;<span style="color:#e0c589">tr</span>></span>
            <span style="color:#e0c589">&lt;<span style="color:#e0c589">td</span>></span>Física<span style="color:#e0c589">&lt;/<span style="color:#e0c589">td</span>></span>
            <span style="color:#e0c589">&lt;<span style="color:#e0c589">td</span>></span>14<span style="color:#e0c589">&lt;/<span style="color:#e0c589">td</span>></span>
            <span style="color:#e0c589">&lt;<span style="color:#e0c589">td</span>></span>11<span style="color:#e0c589">&lt;/<span style="color:#e0c589">td</span>></span>
            <span style="color:#e0c589">&lt;<span style="color:#e0c589">td</span>></span>16<span style="color:#e0c589">&lt;/<span style="color:#e0c589">td</span>></span>
        <span style="color:#e0c589">&lt;/<span style="color:#e0c589">tr</span>></span>
        <span style="color:#e0c589">&lt;<span style="color:#e0c589">tr</span>></span>
            <span style="color:#e0c589">&lt;<span style="color:#e0c589">td</span>></span>Química<span style="color:#e0c589">&lt;/<span style="color:#e0c589">td</span>></span>
            <span style="color:#e0c589">&lt;<span style="color:#e0c589">td</span>></span>16<span style="color:#e0c589">&lt;/<span style="color:#e0c589">td</span>></span>
            <span style="color:#e0c589">&lt;<span style="color:#e0c589">td</span>></span>17<span style="color:#e0c589">&lt;/<span style="color:#e0c589">td</span>></span>
            <span style="color:#e0c589">&lt;<span style="color:#e0c589">td</span>></span>18<span style="color:#e0c589">&lt;/<span style="color:#e0c589">td</span>></span>
        <span style="color:#e0c589">&lt;/<span style="color:#e0c589">tr</span>></span>
    <span style="color:#e0c589">&lt;/<span style="color:#e0c589">table</span>></span>
    <span style="color:#89bdff">&lt;<span style="color:#89bdff">p</span>></span>
    &lt;?php
    
    <span style="color:#aeaeae;font-style:italic">// Creamos un array de notas por cada materia, equivalente a a la tabla en html, pero en php</span>
    <span style="color:#3e87e3">$notas</span>[<span style="color:#3387cc">0</span>] <span style="color:#e28964">=</span> <span style="color:#dad085">array</span>(<span style="color:#65b042">"materia"</span><span style="color:#e28964">=></span><span style="color:#65b042">"Matemática"</span>,<span style="color:#65b042">"Lapso1"</span><span style="color:#e28964">=></span><span style="color:#3387cc">10</span>,<span style="color:#65b042">"Lapso2"</span><span style="color:#e28964">=></span><span style="color:#3387cc">12</span>,<span style="color:#65b042">"Lapso3"</span><span style="color:#e28964">=></span><span style="color:#3387cc">15</span>);              <span style="color:#aeaeae;font-style:italic">// Indice 0</span>
    <span style="color:#3e87e3">$notas</span>[<span style="color:#3387cc">1</span>] <span style="color:#e28964">=</span> <span style="color:#dad085">array</span>(<span style="color:#65b042">"materia"</span><span style="color:#e28964">=></span><span style="color:#65b042">"Física"</span>,<span style="color:#65b042">"Lapso1"</span><span style="color:#e28964">=></span><span style="color:#3387cc">14</span>,<span style="color:#65b042">"Lapso2"</span><span style="color:#e28964">=></span><span style="color:#3387cc">11</span>,<span style="color:#65b042">"Lapso3"</span><span style="color:#e28964">=></span><span style="color:#3387cc">16</span>);                      <span style="color:#aeaeae;font-style:italic">// Indice 1</span>
    <span style="color:#3e87e3">$notas</span>[<span style="color:#3387cc">2</span>] <span style="color:#e28964">=</span> <span style="color:#dad085">array</span>(<span style="color:#65b042">"materia"</span><span style="color:#e28964">=></span><span style="color:#65b042">"Química"</span>,<span style="color:#65b042">"Lapso1"</span><span style="color:#e28964">=></span><span style="color:#3387cc">16</span>,<span style="color:#65b042">"Lapso2"</span><span style="color:#e28964">=></span><span style="color:#3387cc">17</span>,<span style="color:#65b042">"Lapso3"</span><span style="color:#e28964">=></span><span style="color:#3387cc">18</span>);                  <span style="color:#aeaeae;font-style:italic">// Indice 2</span>
    
    <span style="color:#dad085">print</span>(<span style="color:#65b042">"Podemos visualizar la estructura y contenido de un array con print_r"</span>);
    <span style="color:#dad085">print_r</span>(<span style="color:#65b042">"&lt;pre>"</span>);                       <span style="color:#aeaeae;font-style:italic">// &lt;pre> muestra el texto preformateado (texto crudo sin formato, ni estilos)</span>
    <span style="color:#dad085">print_r</span> (<span style="color:#3e87e3">$notas</span>);
    <span style="color:#dad085">print_r</span>(<span style="color:#65b042">"&lt;/pre>"</span>);
    
    <span style="color:#dad085">print</span>(<span style="color:#65b042">"&lt;br>"</span>);                              <span style="color:#aeaeae;font-style:italic">// agregamos saltos de lineas en html</span>
    <span style="color:#dad085">print</span> (<span style="color:#65b042">"Podemos acceder a cualquier elemento con <span style="color:#ddf2a4">\$</span>array[indice]['clave']&lt;br>"</span>);
    <span style="color:#dad085">print</span> (<span style="color:#65b042">"Nota de Matemática 1er Lapso &lt;b>"</span> <span style="color:#e28964">.</span> <span style="color:#3e87e3">$notas</span>[<span style="color:#3387cc">0</span>][<span style="color:#65b042">"Lapso1"</span>]<span style="color:#e28964">.</span> <span style="color:#65b042">"&lt;/b>&lt;br><span style="color:#ddf2a4">\n</span>"</span>);
    <span style="color:#dad085">print</span> (<span style="color:#65b042">"Nota de Física 2do Lapso &lt;b>"</span> <span style="color:#e28964">.</span> <span style="color:#3e87e3">$notas</span>[<span style="color:#3387cc">1</span>][<span style="color:#65b042">'Lapso2'</span>]<span style="color:#e28964">.</span> <span style="color:#65b042">"&lt;/b>&lt;br><span style="color:#ddf2a4">\n</span>"</span>);
    <span style="color:#dad085">print</span> (<span style="color:#65b042">"Nota de Química 3er Lapso &lt;b>"</span> <span style="color:#e28964">.</span> <span style="color:#3e87e3">$notas</span>[<span style="color:#3387cc">2</span>][<span style="color:#65b042">'Lapso3'</span>]<span style="color:#e28964">.</span> <span style="color:#65b042">"&lt;/b>&lt;br><span style="color:#ddf2a4">\n</span>"</span>);
    
    <span style="color:#dad085">print</span>(<span style="color:#65b042">"&lt;br>"</span>);                              <span style="color:#aeaeae;font-style:italic">// agregamos saltos de lineas en html</span>
    <span style="color:#dad085">print</span> (<span style="color:#65b042">"Se puede recorrer el arreglo con un For + Foreach y mostramos los valores&lt;br>"</span>);
<span style="color:#e28964">    for</span> (<span style="color:#3e87e3">$i</span><span style="color:#e28964">=</span><span style="color:#3387cc">0</span> ; <span style="color:#3e87e3">$i</span><span style="color:#e28964">&lt;</span><span style="color:#dad085">count</span>(<span style="color:#3e87e3">$notas</span>);<span style="color:#3e87e3">$i</span><span style="color:#e28964">++</span>) {
<span style="color:#e28964">        foreach</span>(<span style="color:#3e87e3">$notas</span>[<span style="color:#3e87e3">$i</span>] <span style="color:#e28964">as</span> <span style="color:#3e87e3">$valor</span>) 
        {
              <span style="color:#dad085">print_r</span>(<span style="color:#3e87e3">$valor</span><span style="color:#e28964">.</span><span style="color:#65b042">"&lt;br />"</span>);
        }    
    }
    
    <span style="color:#dad085">print</span>(<span style="color:#65b042">"&lt;br>&lt;br>"</span>);                      <span style="color:#aeaeae;font-style:italic">// agregamos 2 saltos de lineas en html</span>
    <span style="color:#dad085">print</span>(<span style="color:#65b042">"Función que permite recorrer la matriz e imprimir en pantallas los datos&lt;br>"</span>);
    <span style="color:#dad085">print</span>(<span style="color:#65b042">"Incluyendo las etiquetas HTML para construir una tabla. Con sus cálculos adicionales&lt;br>"</span>);
          
    mostrarmatriz(<span style="color:#3e87e3">$notas</span>);                          <span style="color:#aeaeae;font-style:italic">// llamada a la función, con el arreglo como parametro</span>
    
    <span style="color:#aeaeae;font-style:italic">/* Creamos una función para esas rutinas comunes
        Las funciones puedes estar al inicio, medio o final del programa    */</span> 
    <span style="color:#99cf50">function</span> <span style="color:#89bdff">mostrarmatriz</span>(<span style="color:#3e87e3">$arreglo</span>) {
        <span style="color:#aeaeae;font-style:italic">//print_r("&lt;pre>");</span>
        <span style="color:#3e87e3">$num_elementos</span> <span style="color:#e28964">=</span> <span style="color:#dad085">count</span>(<span style="color:#3e87e3">$arreglo</span>);                   <span style="color:#aeaeae;font-style:italic">//contamos la cantidad de elementos del arreglo (por filas)</span>
        <span style="color:#dad085">print</span> (<span style="color:#65b042">"Cantidad de Filas <span style="color:#8a9a95">$num_elementos</span> &lt;br> <span style="color:#ddf2a4">\n</span>"</span>);     
        
        <span style="color:#dad085">print</span>(<span style="color:#65b042">"&lt;table border='1'>"</span>);                            <span style="color:#aeaeae;font-style:italic">// creamos la tabla para que sea vista en html</span>
         <span style="color:#dad085">print</span>(<span style="color:#65b042">"&lt;tr>"</span>);                                                 <span style="color:#aeaeae;font-style:italic">//  abrimos  la pŕimera fila - para los encabezados</span>
         <span style="color:#dad085">print</span>(<span style="color:#65b042">"&lt;td>&lt;b>Materia&lt;/b>&lt;/td>"</span>);              <span style="color:#aeaeae;font-style:italic">//creamos cada columna del encabezado</span>
         <span style="color:#dad085">print</span>(<span style="color:#65b042">"&lt;td>&lt;b>Lapso 1&lt;/b>&lt;/td>"</span>);              <span style="color:#aeaeae;font-style:italic">//creamos cada columna del encabezado</span>
         <span style="color:#dad085">print</span>(<span style="color:#65b042">"&lt;td>&lt;b>Lapso 2&lt;/b>&lt;/td>"</span>);              <span style="color:#aeaeae;font-style:italic">//creamos cada columna del encabezado</span>
         <span style="color:#dad085">print</span>(<span style="color:#65b042">"&lt;td>&lt;b>Lapso 3&lt;/b>&lt;/td>"</span>);              <span style="color:#aeaeae;font-style:italic">//creamos cada columna del encabezado</span>
         <span style="color:#dad085">print</span>(<span style="color:#65b042">"&lt;td>&lt;b>Nota Final&lt;/b>&lt;/td>"</span>);           <span style="color:#aeaeae;font-style:italic">// incluyendo una nueva columna, aqui val los cálculos </span>
         <span style="color:#dad085">print</span>(<span style="color:#65b042">"&lt;/tr>"</span>);                                                <span style="color:#aeaeae;font-style:italic">//cerramos la primera fila - row</span>
         
         <span style="color:#aeaeae;font-style:italic">// recorremos el arreglo empezando por las filas</span>
<span style="color:#e28964">         for</span> (<span style="color:#3e87e3">$i</span><span style="color:#e28964">=</span><span style="color:#3387cc">0</span> ; <span style="color:#3e87e3">$i</span><span style="color:#e28964">&lt;</span><span style="color:#dad085">count</span>(<span style="color:#3e87e3">$arreglo</span>);<span style="color:#3e87e3">$i</span><span style="color:#e28964">++</span>) {
            <span style="color:#dad085">print</span>(<span style="color:#65b042">"&lt;tr>"</span>);                                          <span style="color:#aeaeae;font-style:italic">// imprimir la etiqueta para abrir la fila - row</span>
            <span style="color:#3e87e3">$notafinal</span><span style="color:#e28964">=</span><span style="color:#3387cc">0</span>;                                           <span style="color:#aeaeae;font-style:italic">// inicializo un acumulador en 0</span>
            <span style="color:#aeaeae;font-style:italic">// ahora recorremos el arreglo por las columnas</span>
<span style="color:#e28964">            foreach</span>(<span style="color:#3e87e3">$arreglo</span>[<span style="color:#3e87e3">$i</span>] <span style="color:#e28964">as</span> <span style="color:#3e87e3">$valor</span>)  {  
                <span style="color:#dad085">print</span>(<span style="color:#65b042">"&lt;td>"</span>);                                  <span style="color:#aeaeae;font-style:italic">// imprimir la etiqueta para abrir la columna</span>
                <span style="color:#dad085">print</span>(<span style="color:#3e87e3">$valor</span><span style="color:#e28964">.</span><span style="color:#65b042">"&lt;br />"</span>);                     <span style="color:#aeaeae;font-style:italic">// imprimir su contenido</span>
                <span style="color:#dad085">print</span>(<span style="color:#65b042">"&lt;/td>"</span>);                                 <span style="color:#aeaeae;font-style:italic">// imprimir cierre de etiqueta columna</span>
                <span style="color:#3e87e3">$notafinal</span><span style="color:#e28964">+</span><span style="color:#e28964">=</span><span style="color:#3e87e3">$valor</span>;                         <span style="color:#aeaeae;font-style:italic">// acumulamos la nota de cada lapso </span>
            }
            <span style="color:#3e87e3">$notafinal</span>  <span style="color:#e28964">=</span> <span style="color:#dad085">round</span>(<span style="color:#3e87e3">$notafinal</span> <span style="color:#e28964">/</span> <span style="color:#3387cc">3</span> , <span style="color:#3387cc">2</span>);                <span style="color:#aeaeae;font-style:italic">// calculamos el promedio de esa materia,</span>
                                                                                        <span style="color:#aeaeae;font-style:italic">// redondeando el resultado a 2 decimales</span>
            <span style="color:#dad085">print</span>(<span style="color:#65b042">"&lt;td>&lt;b>"</span><span style="color:#e28964">.</span><span style="color:#3e87e3">$notafinal</span><span style="color:#e28964">.</span><span style="color:#65b042">"&lt;/b>&lt;/td>"</span>);        <span style="color:#aeaeae;font-style:italic">// creamos una nueva columna  con la nota final</span>
            <span style="color:#dad085">print</span>(<span style="color:#65b042">"&lt;/tr>"</span>);                                                     <span style="color:#aeaeae;font-style:italic">//cerramos la fila - row</span>
            <span style="color:#3e87e3">$promedio</span><span style="color:#e28964">+</span><span style="color:#e28964">=</span><span style="color:#3e87e3">$notafinal</span>;                                     <span style="color:#aeaeae;font-style:italic">// acumulamos cada nota final</span>
        }
        <span style="color:#3e87e3">$promedio</span><span style="color:#e28964">=</span><span style="color:#dad085">round</span>(<span style="color:#3e87e3">$promedio</span> <span style="color:#e28964">/</span> <span style="color:#dad085">count</span>(<span style="color:#3e87e3">$arreglo</span>),<span style="color:#3387cc">2</span>);                 <span style="color:#aeaeae;font-style:italic">//calculamos el promedio general del alumno</span>
        <span style="color:#dad085">print</span>(<span style="color:#65b042">"&lt;tr>&lt;td colspan=4>&lt;b>Promedio&lt;/b>&lt;/td>"</span>);            <span style="color:#aeaeae;font-style:italic">// creamos una nueva fila, agrupamos las 4 columnas</span>
        <span style="color:#dad085">print</span>(<span style="color:#65b042">"&lt;td>&lt;b>"</span><span style="color:#e28964">.</span><span style="color:#3e87e3">$promedio</span><span style="color:#e28964">.</span><span style="color:#65b042">"&lt;/b>&lt;/td>&lt;/tr>"</span>);                        <span style="color:#aeaeae;font-style:italic">// creamos la quienta columna con la nota gneral</span>
        <span style="color:#dad085">print</span>(<span style="color:#65b042">"&lt;/table>"</span>);                                                          <span style="color:#aeaeae;font-style:italic">// cerramos la tabla</span>
<span style="color:#e28964">        return</span> <span style="color:#3387cc">null</span>;
    }
    ?>
    <span style="color:#89bdff">&lt;/<span style="color:#89bdff">p</span>></span>
    <span style="color:#89bdff">&lt;<span style="color:#89bdff">p</span>></span><span style="color:#e0c589">&lt;<span style="color:#e0c589">a</span> <span style="color:#e0c589">href</span>=<span style="color:#65b042">"index.html"</span>></span>Inicio<span style="color:#e0c589">&lt;/<span style="color:#e0c589">a</span>></span>
    <span style="color:#89bdff">&lt;<span style="color:#89bdff">pre</span>></span><span style="color:#89bdff">&lt;<span style="color:#89bdff">p</span>></span>***************************************************************************************<span style="color:#89bdff">&lt;/<span style="color:#89bdff">p</span>></span><span style="color:#89bdff">&lt;<span style="color:#89bdff">pre</span>/></span>
    <span style="color:#89bdff">&lt;/<span style="color:#89bdff">body</span>></span>
<span style="color:#89bdff">&lt;/<span style="color:#89bdff">html</span>></span>
</pre>
    </body>
</html>
