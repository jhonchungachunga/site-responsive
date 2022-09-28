<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width   ; initial-scale=1.0">
        <title>ejemplo de diseño adaptativo</title>
        <link href="colors.css" rel="stylesheet" type="text/css" />
        <link href="base.css" rel="stylesheet" type="text/css" />
        <link href="great.css" rel="stylesheet" type="text/css" media="screen and (min-width: 981px)"/>
        <link href="medium.css" rel="stylesheet" type="text/css" media="screen and (min-width: 481px) and (max-width: 980px)"/>
        <link href="mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)"/>
    </head>
    <body>
        <header>
            <h1>el titulo de mi sitio web</h1>
            <h2 class="display-great">Grande</h2>
            <h2 class="display-medium">Mediano</h2>
            <h2 class="display-mini">Mini</h2>
        </header>
        
        <div id="wrapper">
            
            <nav id="main-nav">
                <h2>Mi menu</h2>   
                <ul class="menu display-great display-medium">
                    <li><a href=""></a>uno</li>
                    <li><a href=""></a>dos</li>
                    <li><a href=""></a>tres</li>
                </ul>
                
                <select class="display-mini">
                    <option>uno</option>
                    <option>dos</option>
                    <option>tres</option>
                </select>
                
                
            </nav> 
            
            <section id="main-section">
                <h2>Mi contenido</h2>
                <article>
                    <h3><a href="">entrada 1</a></h3>
                    <p class="display-great display-medium">un resumen de la entrada</p>
                </article>
                <article>
                    <h3><a href="">entrada 2</a></h3>
                    <p class="display-great display-medium">un resumen de la entrada</p>
                </article>
                <article>
                    <h3><a href="">entrada 3</a></h3>
                    <p class="display-great display-medium">un resumen de la entrada</p>
                </article>
            </section>
        </div>
        
        <footer>
            <p> el tipico pie que nadie lee</p>
            <select class="display-mini">
                <option>uno</option>
                <option>tres</option>
                <option>dos</option>
            </select>
        </footer>
    </body>
</html>
