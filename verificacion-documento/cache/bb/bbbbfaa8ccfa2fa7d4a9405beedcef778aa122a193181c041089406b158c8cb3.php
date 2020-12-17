<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* inicio.html.php */
class __TwigTemplate_5ea954e3a1d9adffa46c001e48ea0f741f4f333c4cd9e65afe89cc1ee03e98f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'logo' => [$this, 'block_logo'],
            'contenido' => [$this, 'block_contenido'],
            'piecera' => [$this, 'block_piecera'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.php";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.php", "inicio.html.php", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<img src=\"img/logo.png\" width=\"30\" height=\"30\" alt=\"\" class=\"logo\">Aplicación CCSM           
";
    }

    // line 7
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div class=\"container\">
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Buscar\" id=\"inputBuscador\">
            <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"botonBuscar\">
                <i class=\"fas fa-search\"></i>
            </button>
        </div>

        <div class=\"contenedorResultado text-center\">
                <div class=\"alert alert-success\" role=\"alert\" id=\"alertCorrecto\">
                    <span></span>
                </div>

                <div class=\"alert alert-danger\" role=\"alert\" id=\"alertError\">
                    <span></span>
                </div>
                
                <!-- Tabla para cargar los datos -->
                <table class=\"table table-responsive-sm table-responsive-md table-responsive-lg text-center\">
                    <thead class=\"bg-dark\">
                        <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">First</th>
                        <th scope=\"col\">Last</th>
                        <th scope=\"col\">Handle</th>
                        <th scope=\"col\">Last</th>
                        <th scope=\"col\">Handle</th>
                        <th scope=\"col\">Last</th>
                        <th scope=\"col\">Handle</th>
                        <th scope=\"col\">Last</th>
                        <th scope=\"col\">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>

        </div>        
    </div>
";
    }

    // line 61
    public function block_piecera($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "<ul class = \"list-inline\">
    <li class = \"list-inline-item\"><a href = \"https://www.ccsm.org.co\">CamComercioSM</a></li>
    <li class = \"list-inline-item\"><a href = \"#\">Terminos y Condiciones</a></li>
    <li class = \"list-inline-item\"><a href = \"https://pqrs.ccsm.org.co\">Contactanos</a></li>
</ul>
";
    }

    // line 69
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "<!-- <script type=\"text/javascript\">
    \$(document).ready(function() {
        setTimeout(ocultarCargando, 1234);        
    });
    var codigoExitoso = \"El codigo es correcto\";
    var codigoError= \"El codigo no es valido\";
    var codigo = \"ogYbS73RYb25KZyEFqrVHGwSRMnJPvPiPwSk3xz6T3uYogYbS73RYb25KZyEFqrVHGwSRMnJPvPiPwSk3xz6T3uY\"
    var inputCodigo = document.getElementById(\"inputBuscador\").value;

    document.getElementById(\"botonBuscar\").onclick=function() {buscador()};
    
    function buscador(){
        if(codigo === inputCodigo){
            document.getElementsByTagName(\"span\")[0].innerHTML = codigoExitoso;
        }else{
            document.getElementsByTagName(\"span\")[1].innerHTML = codigoError;
        }
    }

</script> -->

<script type=\"text/javascript\">
    \$(document).ready(function () {
        setTimeout(ocultarCargando, 1234);
        cargarVista(\"formulario-muestra\", \"formulario\", \"nuevo\");
    });
    // comprobar si codigo es igual
    document.getElementById(\"botonBuscar\").onclick=function(){buscador()};
     function buscador(){
        var codigo = \"0HImCzD4ky9R5KDtIsMx0tmwyd1t02HzTDap8UTNAPf7zBZ9AkhfEmL9PYp84yUOwA32y6TGSsEj15lrKFK0lizLnBhjk3dbE4o\";
        var codigoCorrecto =\"El codigo es correcto\"
        var codigoError = \"El codigo no es valido\"
        var inputCodigo = document.getElementById(\"inputBuscador\").value;

        if (codigo === inputCodigo){
            avisoExito(inputCodigo);
            document.getElementById(\"alertCorrecto\").style.display = \"block\";
            document.getElementById(\"alertError\").style.display = \"none\";
            document.getElementsByTagName(\"span\")[0].innerHTML = codigoCorrecto;
           

        }else{
            avisoError(\"Codigo no valido\");
            document.getElementById(\"alertError\").style.display = \"block\";
            document.getElementById(\"alertCorrecto\").style.display = \"none\";
            document.getElementsByTagName(\"span\")[1].innerHTML = codigoError;
        }
    } 

   /*  // bUSCADOR MUESTRA
    document.getElementById(\"btn\").onclick=function(){buscador()};
        var codigo = \"0HImCzD4ky9R5KDtIsMx0tmwyd1t02HzTDap8UTNAPf7zBZ9AkhfEmL9PYp84yUOwA32y6TGSsEj15lrKFK0lizLnBhjk3dbE4o\";
        var error = \"Este codigo no es valido\"
        function buscador(){
            
            var inputCodigo = document.getElementById(\"codigo\").value;
            if (codigo === inputCodigo){
                document.getElementById(\"contenedor\").style.display = \"inline\";
            }else{  
                document.getElementById(\"contenedor\").style.display = \"inline\";
                document.getElementById(\"fa-check-circle\").style.visibility = \"hidden\";
                document.getElementById(\"fa-times-circle\").style.visibility = \"visible\";
                document.getElementById(\"card\").style.background = \"#F88D9B\";
                document.getElementsByTagName(\"span\")[0].innerHTML = error; 
            }

        } */

</script>
";
    }

    public function getTemplateName()
    {
        return "inicio.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 70,  130 => 69,  121 => 62,  117 => 61,  62 => 8,  58 => 7,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.php\" %}

{% block logo %}
<img src=\"img/logo.png\" width=\"30\" height=\"30\" alt=\"\" class=\"logo\">Aplicación CCSM           
{% endblock %}
                 
{% block contenido %}
    <div class=\"container\">
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Buscar\" id=\"inputBuscador\">
            <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"botonBuscar\">
                <i class=\"fas fa-search\"></i>
            </button>
        </div>

        <div class=\"contenedorResultado text-center\">
                <div class=\"alert alert-success\" role=\"alert\" id=\"alertCorrecto\">
                    <span></span>
                </div>

                <div class=\"alert alert-danger\" role=\"alert\" id=\"alertError\">
                    <span></span>
                </div>
                
                <!-- Tabla para cargar los datos -->
                <table class=\"table table-responsive-sm table-responsive-md table-responsive-lg text-center\">
                    <thead class=\"bg-dark\">
                        <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">First</th>
                        <th scope=\"col\">Last</th>
                        <th scope=\"col\">Handle</th>
                        <th scope=\"col\">Last</th>
                        <th scope=\"col\">Handle</th>
                        <th scope=\"col\">Last</th>
                        <th scope=\"col\">Handle</th>
                        <th scope=\"col\">Last</th>
                        <th scope=\"col\">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>

        </div>        
    </div>
{% endblock %}

{% block piecera %}
<ul class = \"list-inline\">
    <li class = \"list-inline-item\"><a href = \"https://www.ccsm.org.co\">CamComercioSM</a></li>
    <li class = \"list-inline-item\"><a href = \"#\">Terminos y Condiciones</a></li>
    <li class = \"list-inline-item\"><a href = \"https://pqrs.ccsm.org.co\">Contactanos</a></li>
</ul>
{% endblock %}

{% block js%}
<!-- <script type=\"text/javascript\">
    \$(document).ready(function() {
        setTimeout(ocultarCargando, 1234);        
    });
    var codigoExitoso = \"El codigo es correcto\";
    var codigoError= \"El codigo no es valido\";
    var codigo = \"ogYbS73RYb25KZyEFqrVHGwSRMnJPvPiPwSk3xz6T3uYogYbS73RYb25KZyEFqrVHGwSRMnJPvPiPwSk3xz6T3uY\"
    var inputCodigo = document.getElementById(\"inputBuscador\").value;

    document.getElementById(\"botonBuscar\").onclick=function() {buscador()};
    
    function buscador(){
        if(codigo === inputCodigo){
            document.getElementsByTagName(\"span\")[0].innerHTML = codigoExitoso;
        }else{
            document.getElementsByTagName(\"span\")[1].innerHTML = codigoError;
        }
    }

</script> -->

<script type=\"text/javascript\">
    \$(document).ready(function () {
        setTimeout(ocultarCargando, 1234);
        cargarVista(\"formulario-muestra\", \"formulario\", \"nuevo\");
    });
    // comprobar si codigo es igual
    document.getElementById(\"botonBuscar\").onclick=function(){buscador()};
     function buscador(){
        var codigo = \"0HImCzD4ky9R5KDtIsMx0tmwyd1t02HzTDap8UTNAPf7zBZ9AkhfEmL9PYp84yUOwA32y6TGSsEj15lrKFK0lizLnBhjk3dbE4o\";
        var codigoCorrecto =\"El codigo es correcto\"
        var codigoError = \"El codigo no es valido\"
        var inputCodigo = document.getElementById(\"inputBuscador\").value;

        if (codigo === inputCodigo){
            avisoExito(inputCodigo);
            document.getElementById(\"alertCorrecto\").style.display = \"block\";
            document.getElementById(\"alertError\").style.display = \"none\";
            document.getElementsByTagName(\"span\")[0].innerHTML = codigoCorrecto;
           

        }else{
            avisoError(\"Codigo no valido\");
            document.getElementById(\"alertError\").style.display = \"block\";
            document.getElementById(\"alertCorrecto\").style.display = \"none\";
            document.getElementsByTagName(\"span\")[1].innerHTML = codigoError;
        }
    } 

   /*  // bUSCADOR MUESTRA
    document.getElementById(\"btn\").onclick=function(){buscador()};
        var codigo = \"0HImCzD4ky9R5KDtIsMx0tmwyd1t02HzTDap8UTNAPf7zBZ9AkhfEmL9PYp84yUOwA32y6TGSsEj15lrKFK0lizLnBhjk3dbE4o\";
        var error = \"Este codigo no es valido\"
        function buscador(){
            
            var inputCodigo = document.getElementById(\"codigo\").value;
            if (codigo === inputCodigo){
                document.getElementById(\"contenedor\").style.display = \"inline\";
            }else{  
                document.getElementById(\"contenedor\").style.display = \"inline\";
                document.getElementById(\"fa-check-circle\").style.visibility = \"hidden\";
                document.getElementById(\"fa-times-circle\").style.visibility = \"visible\";
                document.getElementById(\"card\").style.background = \"#F88D9B\";
                document.getElementsByTagName(\"span\")[0].innerHTML = error; 
            }

        } */

</script>
{% endblock %}", "inicio.html.php", "C:\\laragon\\www\\VerificarDocumento\\AppIndependiente\\plantilla\\inicio.html.php");
    }
}
