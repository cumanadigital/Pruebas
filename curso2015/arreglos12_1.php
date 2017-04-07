<html>
    <head>
        <title>Ejercicio 12: Arreglos o Arrays en PHP. </title>
        <meta content="utf8">
    </head>
    <body>
    <p>Ejercicio 12: Arreglos o Arrays en PHP</p>
    <p>
    <?php
    $ciudad[] = "Barcelona";            // Indice 0
    $ciudad[] = "Caracas";              // Indice 1
    $ciudad[] = "Maracaibo";            // Indice 2
    $ciudad[] = "Valencia";             // Indice 3
    $ciudad[] = "Cumaná";               // Indice 4
    $ciudad[] = "Merida";               // Indice 5
    $ciudad[] = "Los Teques";           // Indice 6
    $ciudad[] = "Porlamar";             // Indice 7
    $ciudad[] = "Ciudad Bolivar";       // Indice 8
    $ciudad[] = "Puerto Ayacucho";  // Indice 9
    $indice = rand(0,9);
    print ("Indice <b>" . $indice . "</b><br>\n");
    print ("Yo vivo en <b>" . $ciudad[$indice] . "</b><br>\n");
    print("<br><br>");    // agregamos 2 saltos de lineas en html
    
    // Recorremos el arreglo para mostrar sus valores
    print ("Mostrando todo el arreglo <br>\n");
    for ($i=0;$i<10;$i++) {
        print ("Ciudad $i <b>" . $ciudad[$i] . "</b><br>\n");
    }
    
    /* Creamos una función para esas rutinas comunes */
    function mostrararreglo($miarreglo) {
        $num_elementos = count($miarreglo);
        for ($i=0 ; $i<$num_elementos ; $i++) {
            print ("Indice $i --> <b>" . $miarreglo[$i] . "</b><br>\n");
        }
        return null;
    }
    
    print("<br><br>");    // agregamos 2 saltos de lineas en html
    
    // Declarando arreglos directamente con lista de valores
    $colores=array("Amarillo","Azul","Rojo","Verde","Blanco","Marrón","Naranja","Rosado");
    
    //Llamamos a la funcion y le pasamos como parametro el arreglo
    print ("Mostrando otro arreglo usando una función<br>\n");
    mostrararreglo($colores);
    
    //Podemos seguir agregando valores a un arreglo, o modificando algun elemento existente
    $colores[]="Morado";
    $colores[]="Violeta";
    $colores[1]="Azul Cielo";
    $colores[4]="Negro";
    
    print("<br><br>");    // agregamos 2 saltos de lineas en html
    // Volvemos a invocar la función y ver el nuevo contenido del arreglo
    print ("Mostrando el mismo arreglo con nuevos valores<br>\n");
    mostrararreglo($colores);
    
    print("<br><br>");    // agregamos 2 saltos de lineas en html
    print ("Mostrando el primer arreglo<br>\n");
    mostrararreglo($ciudad);
    ?>
    </p>
    <p><a href="index.html">Inicio</a>
<pre><p>***************************************************************************************</p><pre/>
<pre style="background:#fff;color:#000"><span style="color:#1c02ff">&lt;<span style="font-weight:700">html</span>></span>
    <span style="color:#1c02ff">&lt;<span style="font-weight:700">head</span>></span>
        <span style="color:#1c02ff">&lt;<span style="font-weight:700">title</span>></span>Ejercicio 12: Arreglos o Arrays en PHP. <span style="color:#1c02ff">&lt;/<span style="font-weight:700">title</span>></span>
        <span style="color:#1c02ff">&lt;<span style="font-weight:700">meta</span> <span style="font-style:italic">content</span>=<span style="color:#d80800">"utf8"</span>></span>
    <span style="color:#1c02ff">&lt;/<span style="font-weight:700">head</span>></span>
    <span style="color:#1c02ff">&lt;<span style="font-weight:700">body</span>></span>
    <span style="color:#1c02ff">&lt;<span style="font-weight:700">p</span>></span>Ejercicio 12: Arreglos o Arrays en PHP<span style="color:#1c02ff">&lt;/<span style="font-weight:700">p</span>></span>
    <span style="color:#1c02ff">&lt;<span style="font-weight:700">p</span>></span>
    &lt;?php
    <span style="color:#0206ff;font-style:italic">$ciudad</span>[] <span style="color:#0100b6;font-weight:700">=</span> <span style="color:#d80800">"Barcelona"</span>;            <span style="color:#00b418">// Indice 0</span>
    <span style="color:#0206ff;font-style:italic">$ciudad</span>[] <span style="color:#0100b6;font-weight:700">=</span> <span style="color:#d80800">"Caracas"</span>;              <span style="color:#00b418">// Indice 1</span>
    <span style="color:#0206ff;font-style:italic">$ciudad</span>[] <span style="color:#0100b6;font-weight:700">=</span> <span style="color:#d80800">"Maracaibo"</span>;            <span style="color:#00b418">// Indice 2</span>
    <span style="color:#0206ff;font-style:italic">$ciudad</span>[] <span style="color:#0100b6;font-weight:700">=</span> <span style="color:#d80800">"Valencia"</span>;             <span style="color:#00b418">// Indice 3</span>
    <span style="color:#0206ff;font-style:italic">$ciudad</span>[] <span style="color:#0100b6;font-weight:700">=</span> <span style="color:#d80800">"Cumaná"</span>;               <span style="color:#00b418">// Indice 4</span>
    <span style="color:#0206ff;font-style:italic">$ciudad</span>[] <span style="color:#0100b6;font-weight:700">=</span> <span style="color:#d80800">"Merida"</span>;               <span style="color:#00b418">// Indice 5</span>
    <span style="color:#0206ff;font-style:italic">$ciudad</span>[] <span style="color:#0100b6;font-weight:700">=</span> <span style="color:#d80800">"Los Teques"</span>;           <span style="color:#00b418">// Indice 6</span>
    <span style="color:#0206ff;font-style:italic">$ciudad</span>[] <span style="color:#0100b6;font-weight:700">=</span> <span style="color:#d80800">"Porlamar"</span>;             <span style="color:#00b418">// Indice 7</span>
    <span style="color:#0206ff;font-style:italic">$ciudad</span>[] <span style="color:#0100b6;font-weight:700">=</span> <span style="color:#d80800">"Ciudad Bolivar"</span>;       <span style="color:#00b418">// Indice 8</span>
    <span style="color:#0206ff;font-style:italic">$ciudad</span>[] <span style="color:#0100b6;font-weight:700">=</span> <span style="color:#d80800">"Puerto Ayacucho"</span>;  <span style="color:#00b418">// Indice 9</span>
    <span style="color:#0206ff;font-style:italic">$indice</span> <span style="color:#0100b6;font-weight:700">=</span> <span style="color:#3c4c72;font-weight:700">rand</span>(<span style="color:#cd0000;font-style:italic">0</span>,<span style="color:#cd0000;font-style:italic">9</span>);
    <span style="color:#3c4c72;font-weight:700">print</span> (<span style="color:#d80800">"Indice &lt;b>"</span> <span style="color:#0100b6;font-weight:700">.</span> <span style="color:#0206ff;font-style:italic">$indice</span> <span style="color:#0100b6;font-weight:700">.</span> <span style="color:#d80800">"&lt;/b>&lt;br><span style="color:#26b31a">\n</span>"</span>);
    <span style="color:#3c4c72;font-weight:700">print</span> (<span style="color:#d80800">"Yo vivo en &lt;b>"</span> <span style="color:#0100b6;font-weight:700">.</span> <span style="color:#0206ff;font-style:italic">$ciudad</span>[<span style="color:#0206ff;font-style:italic">$indice</span>] <span style="color:#0100b6;font-weight:700">.</span> <span style="color:#d80800">"&lt;/b>&lt;br><span style="color:#26b31a">\n</span>"</span>);
    <span style="color:#3c4c72;font-weight:700">print</span>(<span style="color:#d80800">"&lt;br>&lt;br>"</span>);    <span style="color:#00b418">// agregamos 2 saltos de lineas en html</span>
    
    <span style="color:#00b418">// Recorremos el arreglo para mostrar sus valores</span>
    <span style="color:#3c4c72;font-weight:700">print</span> (<span style="color:#d80800">"Mostrando todo el arreglo &lt;br><span style="color:#26b31a">\n</span>"</span>);
<span style="color:#0100b6;font-weight:700">    for</span> (<span style="color:#0206ff;font-style:italic">$i</span><span style="color:#0100b6;font-weight:700">=</span><span style="color:#cd0000;font-style:italic">0</span>;<span style="color:#0206ff;font-style:italic">$i</span><span style="color:#0100b6;font-weight:700">&lt;</span><span style="color:#cd0000;font-style:italic">10</span>;<span style="color:#0206ff;font-style:italic">$i</span><span style="color:#0100b6;font-weight:700">++</span>) {
        <span style="color:#3c4c72;font-weight:700">print</span> (<span style="color:#d80800">"Ciudad <span style="color:#0206ff;font-style:italic">$i</span> &lt;b>"</span> <span style="color:#0100b6;font-weight:700">.</span> <span style="color:#0206ff;font-style:italic">$ciudad</span>[<span style="color:#0206ff;font-style:italic">$i</span>] <span style="color:#0100b6;font-weight:700">.</span> <span style="color:#d80800">"&lt;/b>&lt;br><span style="color:#26b31a">\n</span>"</span>);
    }
    
    <span style="color:#00b418">/* Creamos una función para esas rutinas comunes */</span>
    function <span style="color:#0000a2;font-weight:700">mostrararreglo</span>(<span style="color:#0206ff;font-style:italic">$miarreglo</span>) {
        <span style="color:#0206ff;font-style:italic">$num_elementos</span> <span style="color:#0100b6;font-weight:700">=</span> <span style="color:#3c4c72;font-weight:700">count</span>(<span style="color:#0206ff;font-style:italic">$miarreglo</span>);
<span style="color:#0100b6;font-weight:700">        for</span> (<span style="color:#0206ff;font-style:italic">$i</span><span style="color:#0100b6;font-weight:700">=</span><span style="color:#cd0000;font-style:italic">0</span> ; <span style="color:#0206ff;font-style:italic">$i</span><span style="color:#0100b6;font-weight:700">&lt;</span><span style="color:#0206ff;font-style:italic">$num_elementos</span> ; <span style="color:#0206ff;font-style:italic">$i</span><span style="color:#0100b6;font-weight:700">++</span>) {
            <span style="color:#3c4c72;font-weight:700">print</span> (<span style="color:#d80800">"Indice <span style="color:#0206ff;font-style:italic">$i</span> --> &lt;b>"</span> <span style="color:#0100b6;font-weight:700">.</span> <span style="color:#0206ff;font-style:italic">$miarreglo</span>[<span style="color:#0206ff;font-style:italic">$i</span>] <span style="color:#0100b6;font-weight:700">.</span> <span style="color:#d80800">"&lt;/b>&lt;br><span style="color:#26b31a">\n</span>"</span>);
        }
<span style="color:#0100b6;font-weight:700">        return</span> <span style="color:#585cf6;font-style:italic">null</span>;
    }
    
    <span style="color:#3c4c72;font-weight:700">print</span>(<span style="color:#d80800">"&lt;br>&lt;br>"</span>);    <span style="color:#00b418">// agregamos 2 saltos de lineas en html</span>
    
    <span style="color:#00b418">// Declarando arreglos directamente con lista de valores</span>
    <span style="color:#0206ff;font-style:italic">$colores</span><span style="color:#0100b6;font-weight:700">=</span><span style="color:#3c4c72;font-weight:700">array</span>(<span style="color:#d80800">"Amarillo"</span>,<span style="color:#d80800">"Azul"</span>,<span style="color:#d80800">"Rojo"</span>,<span style="color:#d80800">"Verde"</span>,<span style="color:#d80800">"Blanco"</span>,<span style="color:#d80800">"Marrón"</span>,<span style="color:#d80800">"Naranja"</span>,<span style="color:#d80800">"Rosado"</span>);
    
    <span style="color:#00b418">//Llamamos a la funcion y le pasamos como parametro el arreglo</span>
    <span style="color:#3c4c72;font-weight:700">print</span> (<span style="color:#d80800">"Mostrando otro arreglo usando una función&lt;br><span style="color:#26b31a">\n</span>"</span>);
    mostrararreglo(<span style="color:#0206ff;font-style:italic">$colores</span>);
    
    <span style="color:#00b418">//Podemos seguir agregando valores a un arreglo, o modificando algun elemento existente</span>
    <span style="color:#0206ff;font-style:italic">$colores</span>[]<span style="color:#0100b6;font-weight:700">=</span><span style="color:#d80800">"Morado"</span>;
    <span style="color:#0206ff;font-style:italic">$colores</span>[]<span style="color:#0100b6;font-weight:700">=</span><span style="color:#d80800">"Violeta"</span>;
    <span style="color:#0206ff;font-style:italic">$colores</span>[<span style="color:#cd0000;font-style:italic">1</span>]<span style="color:#0100b6;font-weight:700">=</span><span style="color:#d80800">"Azul Cielo"</span>;
    <span style="color:#0206ff;font-style:italic">$colores</span>[<span style="color:#cd0000;font-style:italic">4</span>]<span style="color:#0100b6;font-weight:700">=</span><span style="color:#d80800">"Negro"</span>;
    
    <span style="color:#3c4c72;font-weight:700">print</span>(<span style="color:#d80800">"&lt;br>&lt;br>"</span>);    <span style="color:#00b418">// agregamos 2 saltos de lineas en html</span>
    <span style="color:#00b418">// Volvemos a invocar la función y ver el nuevo contenido del arreglo</span>
    <span style="color:#3c4c72;font-weight:700">print</span> (<span style="color:#d80800">"Mostrando el mismo arreglo con nuevos valores&lt;br><span style="color:#26b31a">\n</span>"</span>);
    mostrararreglo(<span style="color:#0206ff;font-style:italic">$colores</span>);
    
    <span style="color:#3c4c72;font-weight:700">print</span>(<span style="color:#d80800">"&lt;br>&lt;br>"</span>);    <span style="color:#00b418">// agregamos 2 saltos de lineas en html</span>
    <span style="color:#3c4c72;font-weight:700">print</span> (<span style="color:#d80800">"Mostrando el primer arreglo&lt;br><span style="color:#26b31a">\n</span>"</span>);
    mostrararreglo(<span style="color:#0206ff;font-style:italic">$ciudad</span>);
    ?>
    <span style="color:#1c02ff">&lt;/<span style="font-weight:700">p</span>></span>
    <span style="color:#1c02ff">&lt;<span style="font-weight:700">p</span>></span><span style="color:#1c02ff">&lt;<span style="font-weight:700">a</span> <span style="font-style:italic">href</span>=<span style="color:#d80800">"index.html"</span>></span>Inicio<span style="color:#1c02ff">&lt;/<span style="font-weight:700">a</span>></span>
    <span style="color:#1c02ff">&lt;/<span style="font-weight:700">body</span>></span>
<span style="color:#1c02ff">&lt;/<span style="font-weight:700">html</span>></span>
</pre>
    </body>
</html>
