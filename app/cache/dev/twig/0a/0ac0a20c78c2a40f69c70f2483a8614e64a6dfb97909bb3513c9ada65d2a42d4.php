<?php

/* AppBundle:Offerings:san-francisco-mall-panama.html.twig */
class __TwigTemplate_2a2ef50d903dd273983e0d5dd001f43541f819b5935264bda484b5e1a2eed730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Offerings:san-francisco-mall-panama.html.twig", 2);
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
        echo "San Francisco Mall - Invierte PTY";
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
        echo "<div class=\"mg-page-sanfranciscomall parallax\" style=\"background-position: 36% -15vh;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>San Francisco Mall</h2>
                                        
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/proyectos/san-francisco-mall-panama-proyecto.png"), "html", null, true);
        echo "\" />
                     <ul class=\"list-group\">
                    <li class=\"list-group-item\"><b>Precio:</b> \$8M</li>
                    <li class=\"list-group-item\"><b>TIR:</b> 7.5%</li>
                    <li class=\"list-group-item\"><b>Periodo de tendencia</b> 24 meses</li>
                    <li class=\"list-group-item\"><div class=\"progress\">
                                        <div class=\"progress-bar progress-bar-warning progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:30%;\">30% del total de los fondos
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
                        <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"ubicacion\"><p>El proyecto está ubicado en calle 74 San Fráncico, ciudad de Panamá, Panamá.  
</p>
                            <!-- 16:9 aspect ratio -->
<div class=\"embed-responsive embed-responsive-16by9\">
  <iframe class=\"embed-responsive-item\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.7805433383846!2d-79.50759408463657!3d8.992330893546294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8faca9063e7f5fb7%3A0x715dc38d9c49c4c9!2sCalle+74+Este%2C+Panam%C3%A1!5e0!3m2!1sen!2spa!4v1481080770437\"></iframe>
</div>
                    
                    </div>
    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"proyecto\">
        <p>Plaza comercial de elegante estructura con espacios exclusivos. La propiedad se beneficia de amplias zonas de estacionamientos que ofrecerá locales comerciales para alquiler desde 60 mt2.</p>
                    </div>
                      
    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"desarrollador\">
        <div class=\"col-md-6\"><img class=\"img-responsive\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/proyectos/san-francisco-mall/grupo-vivir-san-francisco-mall.png"), "html", null, true);
        echo "\" /></div>
        <div class=\"col-md-6\"><p> Grupo Vivir es un grupo Inmobiliario en Panamá de alto renombre y reconocimiento en Panamá. Con trayectoria desde el 2007 su portafolio inmobiliario cuenta un sin número de proyectos comerciales, residencial y playa en Panamá.  
</p>   </div> 
      </div>

    
                        </div>
               
                
                    
                    
                  
                    </div>       
                    
                    
</div>
                </div>
            </div>
             

            <div class=\"container\">
                    <hr />
                <div class=\"col-md-12 pp-estrategia-proyecto\">
    <h3>Estrategia del Proyecto</h3>
 <div class=\"col-md-4\">
     <p>Grupo Inmobiliario Vivir adquirió la propiedad en diciembre del 2015. El desarrollador ha adquirido todos los permisos de construcción y ambiente del proyecto.</p>
    </div>


 <div class=\"col-md-4\">
El dinero recaudado en esta ronda de inversión será utilizado para la construcción de la propiedad comercial. 
</div>
 <div class=\"col-md-4\">
Grupo inmobiliario Vivir espera vender la propiedad en marzo del 2020.</div>  
    
    <div class=\"col-md-offset-1 col-md-10 pp-estrategia-proyecto\">
    <img class=\"img-responsive\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/proyectos/santa-maria/estructura-fondos.png"), "html", null, true);
        echo "\" />
    </div>
    <div class=\"col-md-4\"><p>El retorno de capital invertido será por medio de la venta del proyecto.</p></div>
    <div class=\"col-md-4\" style=\"margin-top:5vh\">
    <p>En el orden de pago el inversionista esta segundo después del Banco, pero antes de Grupo Vivir.</p>
    </div>
                    
     <div class=\"col-md-4\">
    <p>De acuerdo al valor estimado del proyecto, el valor de venta debe estar por debajo del 48% proyectado para afectar al inversionista. El desarrollador del proyecto deberá absorber asta  </p>
    </div>
    
    
</div>
            </div>
            
                
          <div class=\"container\">
                  <hr />
             <div class=\"col-md-12 pp-estrategia-proyecto\">
 
 <div class=\"col-md-4\">
     <h4>Costo del Proyecto</h4>
     <p>\$1,500 000.00 “Grupo Vivir” 30% </p>
     <p>\$500 000.00 “Inversionista” 10%</p>
     <p>\$3,000 000.00 “Banco” 60%</p>
    </div>


 <div class=\"col-md-4\">
 <h4>Precio de Venta Estimado</h4>
     <p>\$1,475 000.00 “Ganancia Proyecto” 20%</p>
     <p>\$2,000 000.00 “Grupo Vivir Equity “ 28%</p>
     <p>\$575,000.00 “Inversionista” 8.0%</p>
     <p>\$3,150 000.00 “Banco” 44%</p> </div>
                   
                </div>     
       </div>
                    
                    
                <div class=\"col-md-offset-2 col-md-8\">
               <center>
                     <button class=\"btn btn-lg btn-success\"><span class=\"glyphicon glyphicon-usd\"></span> Invertir en Proyecto</button>
                    <button class=\"btn btn-lg btn-danger\"><span class=\"glyphicon glyphicon-heart\"></span> Agregar a Favoritos</button>
                    </center>
                </div>
                
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
        return "AppBundle:Offerings:san-francisco-mall-panama.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 104,  117 => 68,  72 => 26,  56 => 12,  53 => 11,  47 => 8,  42 => 7,  39 => 6,  33 => 4,  29 => 2,  27 => 1,  11 => 2,);
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

{% block title %}San Francisco Mall - Invierte PTY{% endblock %}

{% block stylesheets %}
    <link href=\"{{ asset('bundles/app/css/nivo-lightbox.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/app/css/nivo-lightbox-theme.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
<div class=\"mg-page-sanfranciscomall parallax\" style=\"background-position: 36% -15vh;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>San Francisco Mall</h2>
                                        
                </div>
            </div>
        </div>
    </div>
   <div class=\"mg-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                 <img class=\"img-responsive\" src=\"{{ asset('bundles/app/images/proyectos/san-francisco-mall-panama-proyecto.png') }}\" />
                     <ul class=\"list-group\">
                    <li class=\"list-group-item\"><b>Precio:</b> \$8M</li>
                    <li class=\"list-group-item\"><b>TIR:</b> 7.5%</li>
                    <li class=\"list-group-item\"><b>Periodo de tendencia</b> 24 meses</li>
                    <li class=\"list-group-item\"><div class=\"progress\">
                                        <div class=\"progress-bar progress-bar-warning progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:30%;\">30% del total de los fondos
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
                        <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"ubicacion\"><p>El proyecto está ubicado en calle 74 San Fráncico, ciudad de Panamá, Panamá.  
</p>
                            <!-- 16:9 aspect ratio -->
<div class=\"embed-responsive embed-responsive-16by9\">
  <iframe class=\"embed-responsive-item\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.7805433383846!2d-79.50759408463657!3d8.992330893546294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8faca9063e7f5fb7%3A0x715dc38d9c49c4c9!2sCalle+74+Este%2C+Panam%C3%A1!5e0!3m2!1sen!2spa!4v1481080770437\"></iframe>
</div>
                    
                    </div>
    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"proyecto\">
        <p>Plaza comercial de elegante estructura con espacios exclusivos. La propiedad se beneficia de amplias zonas de estacionamientos que ofrecerá locales comerciales para alquiler desde 60 mt2.</p>
                    </div>
                      
    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"desarrollador\">
        <div class=\"col-md-6\"><img class=\"img-responsive\" src=\"{{ asset('bundles/app/images/proyectos/san-francisco-mall/grupo-vivir-san-francisco-mall.png') }}\" /></div>
        <div class=\"col-md-6\"><p> Grupo Vivir es un grupo Inmobiliario en Panamá de alto renombre y reconocimiento en Panamá. Con trayectoria desde el 2007 su portafolio inmobiliario cuenta un sin número de proyectos comerciales, residencial y playa en Panamá.  
</p>   </div> 
      </div>

    
                        </div>
               
                
                    
                    
                  
                    </div>       
                    
                    
</div>
                </div>
            </div>
             

            <div class=\"container\">
                    <hr />
                <div class=\"col-md-12 pp-estrategia-proyecto\">
    <h3>Estrategia del Proyecto</h3>
 <div class=\"col-md-4\">
     <p>Grupo Inmobiliario Vivir adquirió la propiedad en diciembre del 2015. El desarrollador ha adquirido todos los permisos de construcción y ambiente del proyecto.</p>
    </div>


 <div class=\"col-md-4\">
El dinero recaudado en esta ronda de inversión será utilizado para la construcción de la propiedad comercial. 
</div>
 <div class=\"col-md-4\">
Grupo inmobiliario Vivir espera vender la propiedad en marzo del 2020.</div>  
    
    <div class=\"col-md-offset-1 col-md-10 pp-estrategia-proyecto\">
    <img class=\"img-responsive\" src=\"{{ asset('bundles/app/images/proyectos/santa-maria/estructura-fondos.png') }}\" />
    </div>
    <div class=\"col-md-4\"><p>El retorno de capital invertido será por medio de la venta del proyecto.</p></div>
    <div class=\"col-md-4\" style=\"margin-top:5vh\">
    <p>En el orden de pago el inversionista esta segundo después del Banco, pero antes de Grupo Vivir.</p>
    </div>
                    
     <div class=\"col-md-4\">
    <p>De acuerdo al valor estimado del proyecto, el valor de venta debe estar por debajo del 48% proyectado para afectar al inversionista. El desarrollador del proyecto deberá absorber asta  </p>
    </div>
    
    
</div>
            </div>
            
                
          <div class=\"container\">
                  <hr />
             <div class=\"col-md-12 pp-estrategia-proyecto\">
 
 <div class=\"col-md-4\">
     <h4>Costo del Proyecto</h4>
     <p>\$1,500 000.00 “Grupo Vivir” 30% </p>
     <p>\$500 000.00 “Inversionista” 10%</p>
     <p>\$3,000 000.00 “Banco” 60%</p>
    </div>


 <div class=\"col-md-4\">
 <h4>Precio de Venta Estimado</h4>
     <p>\$1,475 000.00 “Ganancia Proyecto” 20%</p>
     <p>\$2,000 000.00 “Grupo Vivir Equity “ 28%</p>
     <p>\$575,000.00 “Inversionista” 8.0%</p>
     <p>\$3,150 000.00 “Banco” 44%</p> </div>
                   
                </div>     
       </div>
                    
                    
                <div class=\"col-md-offset-2 col-md-8\">
               <center>
                     <button class=\"btn btn-lg btn-success\"><span class=\"glyphicon glyphicon-usd\"></span> Invertir en Proyecto</button>
                    <button class=\"btn btn-lg btn-danger\"><span class=\"glyphicon glyphicon-heart\"></span> Agregar a Favoritos</button>
                    </center>
                </div>
                
            </div>
                
                    
                    
                    
                    <div class=\"row mg-list\">
                                                                    </div>
                </div>
            </div>


        </div>
    </div>

{% endblock %}", "AppBundle:Offerings:san-francisco-mall-panama.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Offerings/san-francisco-mall-panama.html.twig");
    }
}
