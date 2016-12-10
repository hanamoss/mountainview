<?php

/* AppBundle:Offerings:residencial-santa-maria-panama.html.twig */
class __TwigTemplate_33ff340b354d132174e8e1e923765a08d1c80b851af69310775f322bfd312fa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Offerings:residencial-santa-maria-panama.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["active"] = "offerings";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Residencial Santa Maria - Invierte PTY";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/css/nivo-lightbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/css/nivo-lightbox-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"mg-page-santamariagolf parallax\" style=\"background-position: 36% -15vh;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Residencial Santa Maria</h2>
                                        
                </div>
            </div>
        </div>
    </div>
   <div class=\"mg-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                 <img class=\"img-responsive\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/proyectos/santamariagolf1.png"), "html", null, true);
        echo "\" />
                     <ul class=\"list-group\">
                    <li class=\"list-group-item\"><b>Precio:</b> \$23M</li>
                    <li class=\"list-group-item\"><b>TIR:</b> 14% - 16%</li>
                    <li class=\"list-group-item\"><b>Periodo de tendencia</b>3 a 4 años</li>
                    <li class=\"list-group-item\"><div class=\"progress\">
                                        <div class=\"progress-bar progress-bar-warning progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:60%;\">60% del total de los fondos
                                         </div>
                                 </div></li></ul>
                     <center>
                     <button class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-usd\"></span> Invertir</button>
                    <button class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-heart\"></span> Seguir</button>
                    </center>
                </div>
                <div class=\"col-md-offset-1 col-md-7\">
                  

                    <div class=\"col-md-12\">

  <!-- Nav tabs -->
  <ul class=\"nav nav-tabs\" role=\"tablist\">
    <li role=\"presentation\" class=\"active\"><a href=\"#ubicacion\" aria-controls=\"ubicacion\" role=\"tab\" data-toggle=\"tab\">Ubicación</a></li>
    <li role=\"presentation\"><a href=\"#proyecto\" aria-controls=\"proyecto\" role=\"tab\" data-toggle=\"tab\">Proyecto</a></li>
    <li role=\"presentation\"><a href=\"#desarrollador\" aria-controls=\"desarrollador\" role=\"tab\" data-toggle=\"tab\">Desarrollador de Proyecto</a></li>
   
  </ul>

  <!-- Tab panes -->
                <div class=\"tab-content tab-content-projects\">
                        <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"ubicacion\"><p>La mejor ubicación en la Ciudad de Panamá: entre el centro financiero de la capital, las mejores zonas de compras, y el aeropuerto de Tocumen.</p>
                    
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7880.792236191178!2d-79.454231!3d9.027582!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa77eba329c36bb69!2sSanta+Mar%C3%ADa+Golf+%26+Country+Club!5e0!3m2!1ses-419!2spa!4v1481009978739\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                    </div>
    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"proyecto\">
        <div class=\"col-md-5\"><img class=\"img-responsive\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/proyectos/santa-maria/santamaria-logo.png"), "html", null, true);
        echo "\" /></div>
        <div class=\"col-md-7\">Exclusivos complejos residenciales de baja densidad, ubicados frente a los hoyos 17 y 18 de una magnífica cancha de golf de 18 hoyos diseñada por la firma Nicklaus Design.</div>
  
        <div class=\"col-md-12\" style=\"margin-top:2vh\"><p>Los modelos “Legacy” y “Regent” contarán con diferentes números de niveles, apartamentos por complejo, componentes y metrajes para satisfacer los requerimientos particulares de su familia</p>.</div>
    </div>
                    
    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"desarrollador\">
      <p> </p>

        
        <div class=\"col-md-5\"><img class=\"img-responsive\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/proyectos/santa-maria/reserve-luxury-condos.png"), "html", null, true);
        echo "\" /></div>
        <div class=\"col-md-7\"><p>Ideal Living Corp. es una corporación panameña dedicada exclusivamente al desarrollo de Santa María Golf & Country Club con el sólido respaldo de inversionistas panameños y extranjeros.</p></div>
  
        <div class=\"col-md-12\" style=\"margin-top:2vh\"><p>The Reserve Luxury Condos es una de las diferentes edificaciones dentro del proyecto Santa María Golf & Country Club</p></div>
        
      </div>

    
                        </div>
               
                
                    
                    
                  
                    </div>       
                    
                    
                </div></div>
                <hr />

<div class=\"col-md-12 pp-estrategia-proyecto\">
    <h3>Estrategia del Proyecto</h3>
 <div class=\"col-md-4\">
     El Ideal Living Corp. adquirió el terreno por 284 hectáreas para desarrollar el proyecto.
    </div>


 <div class=\"col-md-4\">
El dinero recaudado en esta ronda de inversión será utilizado para la construcción de la etapa final del proyecto. </div>
 <div class=\"col-md-4\">
Se espera liquidar la inversión después de aproximadamente 3 a 4 años cuando el proyecto sea vendido en su totalidad.</div>  
    
    <div class=\"col-md-offset-1 col-md-10 pp-estrategia-proyecto\">
    <img class=\"img-responsive\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/proyectos/santa-maria/estructura-fondos.png"), "html", null, true);
        echo "\" />
    </div>
    <div class=\"col-md-4\"><p>En el orden de pago el inversionista esta segundo después del Banco, pero antes de Ideal Living Corp.</p></div>
    <div class=\"col-md-offset-4 col-md-4\">
    <p>De acuerdo al valor estimado del proyecto, el valor de venta debe estar por debajo del 70% proyectado para afectar al inversionista. El desarrollador del proyecto deberá absorber asta </p>
    </div>
    
    
</div>
                <hr />
                
                <div class=\"col-md-12 pp-estrategia-proyecto\">
 
 <div class=\"col-md-4\">
     <h4>Costo del Proyecto</h4>
     <p>\$12,000 000.00 67% “Banco”  </p>
     <p>\$1,500 000.00   8% “Inversionista”</p>
     <p>\$5,000 000.00 27% “Ideal Living Corp” </p>
    </div>


 <div class=\"col-md-4\">
 <h4>Precio de Venta del Proyecto</h4>
     <p>14,160 000.00 “Banco” 63%</p>
     <p>1,740 000.00 “Inversionista” 7%</p>
     <p>5,700 000.00 “Ideal Living Corp” 25%</p>
     <br />
     <p><b>1,400 000.00 “Ganancia Proyecto” 6%</b></p> </div>
                    
 <div class=\"col-md-4\">
 <h4>Precio de Venta Estimado</h4>
     <p>\$1,475 000.00 “Ganancia Proyecto” 20%</p>
     <p>\$2,000 000.00 “Grupo Vivir Equity “ 28%</p>
     <p>\$575,000.00 “Inversionista” 8.0%</p>
     <p>\$3,150 000.00 “Banco” 44%</p>
</div>
                   
                </div>           
                    
                    
                <div class=\"col-md-offset-2 col-md-8\">
               <center>
                     <button class=\"btn btn-lg btn-success\"><span class=\"glyphicon glyphicon-usd\"></span> Invertir en Proyecto</button>
                    <button class=\"btn btn-lg btn-danger\"><span class=\"glyphicon glyphicon-heart\"></span> Agregar a Favoritos</button>
                    </center>
                </div>
                
                
                    
                    
                    
                    <div class=\"row mg-list\">
                                                                    </div>
                </div>
            </div>


        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Offerings:residencial-santa-maria-panama.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 103,  122 => 70,  109 => 60,  72 => 26,  56 => 12,  53 => 11,  47 => 8,  42 => 7,  39 => 6,  33 => 4,  29 => 2,  27 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set active = 'offerings' %}
{% extends 'AppBundle::base.html.twig' %}

{% block title %}Residencial Santa Maria - Invierte PTY{% endblock %}

{% block stylesheets %}
    <link href=\"{{ asset('bundles/app/css/nivo-lightbox.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/app/css/nivo-lightbox-theme.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
<div class=\"mg-page-santamariagolf parallax\" style=\"background-position: 36% -15vh;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Residencial Santa Maria</h2>
                                        
                </div>
            </div>
        </div>
    </div>
   <div class=\"mg-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                 <img class=\"img-responsive\" src=\"{{ asset('bundles/app/images/proyectos/santamariagolf1.png') }}\" />
                     <ul class=\"list-group\">
                    <li class=\"list-group-item\"><b>Precio:</b> \$23M</li>
                    <li class=\"list-group-item\"><b>TIR:</b> 14% - 16%</li>
                    <li class=\"list-group-item\"><b>Periodo de tendencia</b>3 a 4 años</li>
                    <li class=\"list-group-item\"><div class=\"progress\">
                                        <div class=\"progress-bar progress-bar-warning progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:60%;\">60% del total de los fondos
                                         </div>
                                 </div></li></ul>
                     <center>
                     <button class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-usd\"></span> Invertir</button>
                    <button class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-heart\"></span> Seguir</button>
                    </center>
                </div>
                <div class=\"col-md-offset-1 col-md-7\">
                  

                    <div class=\"col-md-12\">

  <!-- Nav tabs -->
  <ul class=\"nav nav-tabs\" role=\"tablist\">
    <li role=\"presentation\" class=\"active\"><a href=\"#ubicacion\" aria-controls=\"ubicacion\" role=\"tab\" data-toggle=\"tab\">Ubicación</a></li>
    <li role=\"presentation\"><a href=\"#proyecto\" aria-controls=\"proyecto\" role=\"tab\" data-toggle=\"tab\">Proyecto</a></li>
    <li role=\"presentation\"><a href=\"#desarrollador\" aria-controls=\"desarrollador\" role=\"tab\" data-toggle=\"tab\">Desarrollador de Proyecto</a></li>
   
  </ul>

  <!-- Tab panes -->
                <div class=\"tab-content tab-content-projects\">
                        <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"ubicacion\"><p>La mejor ubicación en la Ciudad de Panamá: entre el centro financiero de la capital, las mejores zonas de compras, y el aeropuerto de Tocumen.</p>
                    
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7880.792236191178!2d-79.454231!3d9.027582!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa77eba329c36bb69!2sSanta+Mar%C3%ADa+Golf+%26+Country+Club!5e0!3m2!1ses-419!2spa!4v1481009978739\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                    </div>
    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"proyecto\">
        <div class=\"col-md-5\"><img class=\"img-responsive\" src=\"{{ asset('bundles/app/images/proyectos/santa-maria/santamaria-logo.png') }}\" /></div>
        <div class=\"col-md-7\">Exclusivos complejos residenciales de baja densidad, ubicados frente a los hoyos 17 y 18 de una magnífica cancha de golf de 18 hoyos diseñada por la firma Nicklaus Design.</div>
  
        <div class=\"col-md-12\" style=\"margin-top:2vh\"><p>Los modelos “Legacy” y “Regent” contarán con diferentes números de niveles, apartamentos por complejo, componentes y metrajes para satisfacer los requerimientos particulares de su familia</p>.</div>
    </div>
                    
    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"desarrollador\">
      <p> </p>

        
        <div class=\"col-md-5\"><img class=\"img-responsive\" src=\"{{ asset('bundles/app/images/proyectos/santa-maria/reserve-luxury-condos.png') }}\" /></div>
        <div class=\"col-md-7\"><p>Ideal Living Corp. es una corporación panameña dedicada exclusivamente al desarrollo de Santa María Golf & Country Club con el sólido respaldo de inversionistas panameños y extranjeros.</p></div>
  
        <div class=\"col-md-12\" style=\"margin-top:2vh\"><p>The Reserve Luxury Condos es una de las diferentes edificaciones dentro del proyecto Santa María Golf & Country Club</p></div>
        
      </div>

    
                        </div>
               
                
                    
                    
                  
                    </div>       
                    
                    
                </div></div>
                <hr />

<div class=\"col-md-12 pp-estrategia-proyecto\">
    <h3>Estrategia del Proyecto</h3>
 <div class=\"col-md-4\">
     El Ideal Living Corp. adquirió el terreno por 284 hectáreas para desarrollar el proyecto.
    </div>


 <div class=\"col-md-4\">
El dinero recaudado en esta ronda de inversión será utilizado para la construcción de la etapa final del proyecto. </div>
 <div class=\"col-md-4\">
Se espera liquidar la inversión después de aproximadamente 3 a 4 años cuando el proyecto sea vendido en su totalidad.</div>  
    
    <div class=\"col-md-offset-1 col-md-10 pp-estrategia-proyecto\">
    <img class=\"img-responsive\" src=\"{{ asset('bundles/app/images/proyectos/santa-maria/estructura-fondos.png') }}\" />
    </div>
    <div class=\"col-md-4\"><p>En el orden de pago el inversionista esta segundo después del Banco, pero antes de Ideal Living Corp.</p></div>
    <div class=\"col-md-offset-4 col-md-4\">
    <p>De acuerdo al valor estimado del proyecto, el valor de venta debe estar por debajo del 70% proyectado para afectar al inversionista. El desarrollador del proyecto deberá absorber asta </p>
    </div>
    
    
</div>
                <hr />
                
                <div class=\"col-md-12 pp-estrategia-proyecto\">
 
 <div class=\"col-md-4\">
     <h4>Costo del Proyecto</h4>
     <p>\$12,000 000.00 67% “Banco”  </p>
     <p>\$1,500 000.00   8% “Inversionista”</p>
     <p>\$5,000 000.00 27% “Ideal Living Corp” </p>
    </div>


 <div class=\"col-md-4\">
 <h4>Precio de Venta del Proyecto</h4>
     <p>14,160 000.00 “Banco” 63%</p>
     <p>1,740 000.00 “Inversionista” 7%</p>
     <p>5,700 000.00 “Ideal Living Corp” 25%</p>
     <br />
     <p><b>1,400 000.00 “Ganancia Proyecto” 6%</b></p> </div>
                    
 <div class=\"col-md-4\">
 <h4>Precio de Venta Estimado</h4>
     <p>\$1,475 000.00 “Ganancia Proyecto” 20%</p>
     <p>\$2,000 000.00 “Grupo Vivir Equity “ 28%</p>
     <p>\$575,000.00 “Inversionista” 8.0%</p>
     <p>\$3,150 000.00 “Banco” 44%</p>
</div>
                   
                </div>           
                    
                    
                <div class=\"col-md-offset-2 col-md-8\">
               <center>
                     <button class=\"btn btn-lg btn-success\"><span class=\"glyphicon glyphicon-usd\"></span> Invertir en Proyecto</button>
                    <button class=\"btn btn-lg btn-danger\"><span class=\"glyphicon glyphicon-heart\"></span> Agregar a Favoritos</button>
                    </center>
                </div>
                
                
                    
                    
                    
                    <div class=\"row mg-list\">
                                                                    </div>
                </div>
            </div>


        </div>
    </div>

{% endblock %}", "AppBundle:Offerings:residencial-santa-maria-panama.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Offerings/residencial-santa-maria-panama.html.twig");
    }
}
