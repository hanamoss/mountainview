<?php

/* AppBundle:Offerings:offerings.html.twig */
class __TwigTemplate_8e3c1c99d4b3ed8aabf3ecc5661afa644a540f911deec643f634d737dcb3eb4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Offerings:offerings.html.twig", 2);
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
        echo "Properties - Invierte PTY";
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
        echo "<div class=\"mg-page-title parallax\" style=\"background-position: 50% 0px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Propiedades</h2>
                </div>
            </div>
        </div>
    </div>
   <div class=\"mg-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-2\">
                    <div class=\"mg-widget-area\">
                        <div class=\"mg-widget-v1\">
                            <h5 class=\"mt0\">MOSTRAR </h5>
                            <div class=\"checkbox checkbox-list\">
                                <label for=\"All\">
                                    <input type=\"checkbox\" class=\"radio\" id=\"All\" name=\"metric\" value=\"All\">Todos
                                </label>
                                <label for=\"Closed\">
                                    <input type=\"checkbox\" class=\"radio\" id=\"Closed\" name=\"metric\" value=\"Closed\">Cerrados
                                </label>
                                <label for=\"Completed\">
                                    <input type=\"checkbox\" class=\"radio\" id=\"Completed\" name=\"metric\" value=\"Completed\"> Completados
                                </label>
                            </div>
                        </div>
                        <div class=\"mg-widget-v1\">
                            <h5 class=\"mt0\">BUSCAR POR </h5>
                            <div class=\"checkbox checkbox-list\">
                                <label for=\"Most_Recent\">
                                    <input type=\"checkbox\" class=\"checkbox\" id=\"Most_Recent\" name=\"metric\" value=\"Most Recent\">Más Recientes
                                </label>
                                <label for=\"Most_popular\">
                                    <input type=\"checkbox\" class=\"checkbox\" id=\"Most_popular\" name=\"metric\" value=\"Most_popular\">Más populares
                                </label>
                                <label for=\"Ending_soonest\">
                                    <input type=\"checkbox\" class=\"checkbox\" id=\"Ending_soonest\" name=\"metric\" value=\"Ending soonest\"> Por terminar
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-10\">
                    
                    <div class=\"col-md-12\">
\t\t\t\t\t
                    <div class=\"projectview-box row\">
                        <div class=\"col-md-6\" style=\"padding-right: 11px;padding-left: 3px;\"> 
                                <img class=\"img-responsive\" style=\"width:100%\" src=\"/mountainview/web/bundles/app/images/proyectos/santa-maria-panama-proyecto.PNG\" alt=\"The                                     Assemblage\">
                        </div>
                        <div class=\"col-md-4\"> <h3>Santa María Golf & Country Club
</h3></div>
                        <div class=\"col-md-2 disponibilidad\" style=\"
    padding-bottom: 2vh;
\"><p><span style=\"color:green\" class=\"glyphicon glyphicon-ok\"></span> DISPONIBILIDAD</p></div>
                        <div class=\"col-md-3 projectbox-data\">
                        <div>
                            <p><span class=\"glyphicon glyphicon-globe\"></span> Estatus de la oferta</p>
                            <div class=\"col-md-2\"><p>0M </p></div>
                            <div class=\"col-md-7\">
                                <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:60%;\">60%%
                                         </div>
                                 </div>
                                </div>
                                <div class=\"col-md-1\">23M</div>    
                            </div><!-- ends projectview-box row -->
                            </div><!-- ends offset-1 col-md-6 column -->
                        <div class=\"col-md-3\">
                            <div class=\"col-md-12 projectbox-data\">
                                <p><span class=\"glyphicon glyphicon-calendar\"></span> Tiempo aprox. 3-4                                   años</p>
                            </div>
                            <div class=\"col-md-12 projectbox-data\">
                                <p><span class=\"glyphicon glyphicon-stats\"></span> TIR proyectada 14-16%                                    </p>
                            </div>
                          </div>
                        <div class=\"col-md-3 projectbox-data\"><p><span class=\"glyphicon glyphicon-usd\">                                 </span> Inversion minima 25K</p>
                         </div>
                        <div class=\"col-md-3\">
                           <a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("santa-maria");
        echo "\"><button class=\"btn btn-block btn-primary\"> 
                               <span class=\"glyphicon glyphicon-open\"></span> Ver Proyecto</button></a>                                   </div>
                     </div>          
\t\t\t\t</div>
                
                    
                     <div class=\"col-md-12\">
\t\t\t\t\t
                    <div class=\"projectview-box row\">
                        <div class=\"col-md-6\" style=\"padding-right: 11px;padding-left: 3px;\"> 
                                <img class=\"img-responsive\" style=\"width:100%\" src=\"/mountainview/web/bundles/app/images/proyectos/san-francisco-mall-panama-proyecto.PNG\" alt=\"The                                     Assemblage\">
                        </div>
                        <div class=\"col-md-4\"> <h3>San Francisco Mall</h3></div>
                        <div class=\"col-md-2 disponibilidad\" style=\"
    padding-bottom: 2vh;
\"><p><span style=\"color:green\" class=\"glyphicon glyphicon-ok\"></span> DISPONIBILIDAD</p></div>
                        <div class=\"col-md-3 projectbox-data\">
                        <div>
                            <p><span class=\"glyphicon glyphicon-globe\"></span> Estatus de la oferta</p>
                            <div class=\"col-md-2\"><p>0M </p></div>
                            <div class=\"col-md-7\">
                                <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:17%;\">17%
                                         </div>
                                 </div>
                                </div>
                                <div class=\"col-md-1\">52M</div>    
                            </div><!-- ends projectview-box row -->
                            </div><!-- ends offset-1 col-md-6 column -->
                        <div class=\"col-md-3\">
                            <div class=\"col-md-12 projectbox-data\">
                                <p><span class=\"glyphicon glyphicon-calendar\"></span> Tiempo aprox. 3-4                                   años</p>
                            </div>
                            <div class=\"col-md-12 projectbox-data\">
                                <p><span class=\"glyphicon glyphicon-stats\"></span> TIR proyectada 12-16%                                    </p>
                            </div>
                          </div>
                        <div class=\"col-md-3 projectbox-data\"><p><span class=\"glyphicon glyphicon-usd\">                                 </span> Inversion minima 50K</p>
                         </div>
                        <div class=\"col-md-3\">
                            <a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("san-francisco-mall");
        echo "\" class=\"btn btn-block btn-primary\">
                                <span class=\"glyphicon glyphicon-open\"></span> Ver Proyecto</a>                                   </div>
                     </div>          
\t\t\t\t</div>
                    
                    
                    <div class=\"col-md-12\">
\t\t\t\t\t
                    <div class=\"projectview-box row\">
                        <div class=\"col-md-6\" style=\"padding-right: 11px;padding-left: 3px;\"> 
                                <img class=\"img-responsive\" style=\"width:100%\" src=\"/mountainview/web/bundles/app/images/proyectos/western-logistic/western-logistic-center-panama-proyecto.PNG\" alt=\"Western Logistic Center\">
                        </div>
                        <div class=\"col-md-4\"> <h3>Western Logistic Center</h3></div>
                        <div class=\"col-md-2 disponibilidad\" style=\"
    padding-bottom: 2vh;
\"><p><span style=\"color:green\" class=\"glyphicon glyphicon-ok\"></span> DISPONIBILIDAD</p></div>
                        <div class=\"col-md-3 projectbox-data\">
                        <div>
                            <p><span class=\"glyphicon glyphicon-globe\"></span> Estatus de la oferta</p>
                            <div class=\"col-md-2\"><p>0M </p></div>
                            <div class=\"col-md-7\">
                                <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:17%;\">17%
                                         </div>
                                 </div>
                                </div>
                                <div class=\"col-md-1\">52M</div>    
                            </div><!-- ends projectview-box row -->
                            </div><!-- ends offset-1 col-md-6 column -->
                        <div class=\"col-md-3\">
                            <div class=\"col-md-12 projectbox-data\">
                                <p><span class=\"glyphicon glyphicon-calendar\"></span> Tiempo aprox. 3-4                                   años</p>
                            </div>
                            <div class=\"col-md-12 projectbox-data\">
                                <p><span class=\"glyphicon glyphicon-stats\"></span> TIR proyectada 12-16%                                    </p>
                            </div>
                          </div>
                        <div class=\"col-md-3 projectbox-data\"><p><span class=\"glyphicon glyphicon-usd\">                                 </span> Inversion minima 50K</p>
                         </div>
                        <div class=\"col-md-3\">
                          <a href=\"";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("western-logistic-center");
        echo "\" class=\"btn btn-block btn-primary\">
                               <span class=\"glyphicon glyphicon-open\"></span> Ver Proyecto</a>                                   </div>
                     </div>          
\t\t\t\t</div>
                    
                    <div class=\"col-md-12\">
\t\t\t\t\t
                    <div class=\"projectview-box row\">
                        <div class=\"col-md-6\" style=\"padding-right: 11px;padding-left: 3px;\"> 
                                <img class=\"img-responsive\" style=\"width:100%\" src=\"/mountainview/web/bundles/app/images/proyectos/ocean-view-small.PNG\" alt=\"The                                     Assemblage\">
                        </div>
                        <div class=\"col-md-4\"> <h3>The Port Village</h3></div>
                        <div class=\"col-md-2 disponibilidad\" style=\"
    padding-bottom: 2vh;
\"><p><span style=\"color:green\" class=\"glyphicon glyphicon-ok\"></span> DISPONIBILIDAD</p></div>
                        <div class=\"col-md-3 projectbox-data\">
                        <div>
                            <p><span class=\"glyphicon glyphicon-globe\"></span> Estatus de la oferta</p>
                            <div class=\"col-md-2\"><p>0M </p></div>
                            <div class=\"col-md-7\">
                                <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:17%;\">17%
                                         </div>
                                 </div>
                                </div>
                                <div class=\"col-md-1\">52M</div>    
                            </div><!-- ends projectview-box row -->
                            </div><!-- ends offset-1 col-md-6 column -->
                        <div class=\"col-md-3\">
                            <div class=\"col-md-12 projectbox-data\">
                                <p><span class=\"glyphicon glyphicon-calendar\"></span> Tiempo aprox. 3-4                                   años</p>
                            </div>
                            <div class=\"col-md-12 projectbox-data\">
                                <p><span class=\"glyphicon glyphicon-stats\"></span> TIR proyectada 12-16%                                    </p>
                            </div>
                          </div>
                        <div class=\"col-md-3 projectbox-data\"><p><span class=\"glyphicon glyphicon-usd\">                                 </span> Inversion minima 50K</p>
                         </div>
                        <div class=\"col-md-3\">
                           <button class=\"btn btn-block btn-primary\"> 
                               <span class=\"glyphicon glyphicon-open\"></span> Ver Proyecto</button>                                   </div>
                     </div>          
\t\t\t\t</div>
                    
                    
                    
                
                
                
                    
                    
                    
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
        return "AppBundle:Offerings:offerings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 173,  182 => 133,  139 => 93,  56 => 12,  53 => 11,  47 => 8,  42 => 7,  39 => 6,  33 => 4,  29 => 2,  27 => 1,  11 => 2,);
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

{% block title %}Properties - Invierte PTY{% endblock %}

{% block stylesheets %}
    <link href=\"{{ asset('bundles/app/css/nivo-lightbox.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/app/css/nivo-lightbox-theme.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
<div class=\"mg-page-title parallax\" style=\"background-position: 50% 0px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Propiedades</h2>
                </div>
            </div>
        </div>
    </div>
   <div class=\"mg-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-2\">
                    <div class=\"mg-widget-area\">
                        <div class=\"mg-widget-v1\">
                            <h5 class=\"mt0\">MOSTRAR </h5>
                            <div class=\"checkbox checkbox-list\">
                                <label for=\"All\">
                                    <input type=\"checkbox\" class=\"radio\" id=\"All\" name=\"metric\" value=\"All\">Todos
                                </label>
                                <label for=\"Closed\">
                                    <input type=\"checkbox\" class=\"radio\" id=\"Closed\" name=\"metric\" value=\"Closed\">Cerrados
                                </label>
                                <label for=\"Completed\">
                                    <input type=\"checkbox\" class=\"radio\" id=\"Completed\" name=\"metric\" value=\"Completed\"> Completados
                                </label>
                            </div>
                        </div>
                        <div class=\"mg-widget-v1\">
                            <h5 class=\"mt0\">BUSCAR POR </h5>
                            <div class=\"checkbox checkbox-list\">
                                <label for=\"Most_Recent\">
                                    <input type=\"checkbox\" class=\"checkbox\" id=\"Most_Recent\" name=\"metric\" value=\"Most Recent\">Más Recientes
                                </label>
                                <label for=\"Most_popular\">
                                    <input type=\"checkbox\" class=\"checkbox\" id=\"Most_popular\" name=\"metric\" value=\"Most_popular\">Más populares
                                </label>
                                <label for=\"Ending_soonest\">
                                    <input type=\"checkbox\" class=\"checkbox\" id=\"Ending_soonest\" name=\"metric\" value=\"Ending soonest\"> Por terminar
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-10\">
                    
                    <div class=\"col-md-12\">
\t\t\t\t\t
                    <div class=\"projectview-box row\">
                        <div class=\"col-md-6\" style=\"padding-right: 11px;padding-left: 3px;\"> 
                                <img class=\"img-responsive\" style=\"width:100%\" src=\"/mountainview/web/bundles/app/images/proyectos/santa-maria-panama-proyecto.PNG\" alt=\"The                                     Assemblage\">
                        </div>
                        <div class=\"col-md-4\"> <h3>Santa María Golf & Country Club
</h3></div>
                        <div class=\"col-md-2 disponibilidad\" style=\"
    padding-bottom: 2vh;
\"><p><span style=\"color:green\" class=\"glyphicon glyphicon-ok\"></span> DISPONIBILIDAD</p></div>
                        <div class=\"col-md-3 projectbox-data\">
                        <div>
                            <p><span class=\"glyphicon glyphicon-globe\"></span> Estatus de la oferta</p>
                            <div class=\"col-md-2\"><p>0M </p></div>
                            <div class=\"col-md-7\">
                                <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:60%;\">60%%
                                         </div>
                                 </div>
                                </div>
                                <div class=\"col-md-1\">23M</div>    
                            </div><!-- ends projectview-box row -->
                            </div><!-- ends offset-1 col-md-6 column -->
                        <div class=\"col-md-3\">
                            <div class=\"col-md-12 projectbox-data\">
                                <p><span class=\"glyphicon glyphicon-calendar\"></span> Tiempo aprox. 3-4                                   años</p>
                            </div>
                            <div class=\"col-md-12 projectbox-data\">
                                <p><span class=\"glyphicon glyphicon-stats\"></span> TIR proyectada 14-16%                                    </p>
                            </div>
                          </div>
                        <div class=\"col-md-3 projectbox-data\"><p><span class=\"glyphicon glyphicon-usd\">                                 </span> Inversion minima 25K</p>
                         </div>
                        <div class=\"col-md-3\">
                           <a href=\"{{ path('santa-maria') }}\"><button class=\"btn btn-block btn-primary\"> 
                               <span class=\"glyphicon glyphicon-open\"></span> Ver Proyecto</button></a>                                   </div>
                     </div>          
\t\t\t\t</div>
                
                    
                     <div class=\"col-md-12\">
\t\t\t\t\t
                    <div class=\"projectview-box row\">
                        <div class=\"col-md-6\" style=\"padding-right: 11px;padding-left: 3px;\"> 
                                <img class=\"img-responsive\" style=\"width:100%\" src=\"/mountainview/web/bundles/app/images/proyectos/san-francisco-mall-panama-proyecto.PNG\" alt=\"The                                     Assemblage\">
                        </div>
                        <div class=\"col-md-4\"> <h3>San Francisco Mall</h3></div>
                        <div class=\"col-md-2 disponibilidad\" style=\"
    padding-bottom: 2vh;
\"><p><span style=\"color:green\" class=\"glyphicon glyphicon-ok\"></span> DISPONIBILIDAD</p></div>
                        <div class=\"col-md-3 projectbox-data\">
                        <div>
                            <p><span class=\"glyphicon glyphicon-globe\"></span> Estatus de la oferta</p>
                            <div class=\"col-md-2\"><p>0M </p></div>
                            <div class=\"col-md-7\">
                                <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:17%;\">17%
                                         </div>
                                 </div>
                                </div>
                                <div class=\"col-md-1\">52M</div>    
                            </div><!-- ends projectview-box row -->
                            </div><!-- ends offset-1 col-md-6 column -->
                        <div class=\"col-md-3\">
                            <div class=\"col-md-12 projectbox-data\">
                                <p><span class=\"glyphicon glyphicon-calendar\"></span> Tiempo aprox. 3-4                                   años</p>
                            </div>
                            <div class=\"col-md-12 projectbox-data\">
                                <p><span class=\"glyphicon glyphicon-stats\"></span> TIR proyectada 12-16%                                    </p>
                            </div>
                          </div>
                        <div class=\"col-md-3 projectbox-data\"><p><span class=\"glyphicon glyphicon-usd\">                                 </span> Inversion minima 50K</p>
                         </div>
                        <div class=\"col-md-3\">
                            <a href=\"{{ path('san-francisco-mall') }}\" class=\"btn btn-block btn-primary\">
                                <span class=\"glyphicon glyphicon-open\"></span> Ver Proyecto</a>                                   </div>
                     </div>          
\t\t\t\t</div>
                    
                    
                    <div class=\"col-md-12\">
\t\t\t\t\t
                    <div class=\"projectview-box row\">
                        <div class=\"col-md-6\" style=\"padding-right: 11px;padding-left: 3px;\"> 
                                <img class=\"img-responsive\" style=\"width:100%\" src=\"/mountainview/web/bundles/app/images/proyectos/western-logistic/western-logistic-center-panama-proyecto.PNG\" alt=\"Western Logistic Center\">
                        </div>
                        <div class=\"col-md-4\"> <h3>Western Logistic Center</h3></div>
                        <div class=\"col-md-2 disponibilidad\" style=\"
    padding-bottom: 2vh;
\"><p><span style=\"color:green\" class=\"glyphicon glyphicon-ok\"></span> DISPONIBILIDAD</p></div>
                        <div class=\"col-md-3 projectbox-data\">
                        <div>
                            <p><span class=\"glyphicon glyphicon-globe\"></span> Estatus de la oferta</p>
                            <div class=\"col-md-2\"><p>0M </p></div>
                            <div class=\"col-md-7\">
                                <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:17%;\">17%
                                         </div>
                                 </div>
                                </div>
                                <div class=\"col-md-1\">52M</div>    
                            </div><!-- ends projectview-box row -->
                            </div><!-- ends offset-1 col-md-6 column -->
                        <div class=\"col-md-3\">
                            <div class=\"col-md-12 projectbox-data\">
                                <p><span class=\"glyphicon glyphicon-calendar\"></span> Tiempo aprox. 3-4                                   años</p>
                            </div>
                            <div class=\"col-md-12 projectbox-data\">
                                <p><span class=\"glyphicon glyphicon-stats\"></span> TIR proyectada 12-16%                                    </p>
                            </div>
                          </div>
                        <div class=\"col-md-3 projectbox-data\"><p><span class=\"glyphicon glyphicon-usd\">                                 </span> Inversion minima 50K</p>
                         </div>
                        <div class=\"col-md-3\">
                          <a href=\"{{ path('western-logistic-center') }}\" class=\"btn btn-block btn-primary\">
                               <span class=\"glyphicon glyphicon-open\"></span> Ver Proyecto</a>                                   </div>
                     </div>          
\t\t\t\t</div>
                    
                    <div class=\"col-md-12\">
\t\t\t\t\t
                    <div class=\"projectview-box row\">
                        <div class=\"col-md-6\" style=\"padding-right: 11px;padding-left: 3px;\"> 
                                <img class=\"img-responsive\" style=\"width:100%\" src=\"/mountainview/web/bundles/app/images/proyectos/ocean-view-small.PNG\" alt=\"The                                     Assemblage\">
                        </div>
                        <div class=\"col-md-4\"> <h3>The Port Village</h3></div>
                        <div class=\"col-md-2 disponibilidad\" style=\"
    padding-bottom: 2vh;
\"><p><span style=\"color:green\" class=\"glyphicon glyphicon-ok\"></span> DISPONIBILIDAD</p></div>
                        <div class=\"col-md-3 projectbox-data\">
                        <div>
                            <p><span class=\"glyphicon glyphicon-globe\"></span> Estatus de la oferta</p>
                            <div class=\"col-md-2\"><p>0M </p></div>
                            <div class=\"col-md-7\">
                                <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:17%;\">17%
                                         </div>
                                 </div>
                                </div>
                                <div class=\"col-md-1\">52M</div>    
                            </div><!-- ends projectview-box row -->
                            </div><!-- ends offset-1 col-md-6 column -->
                        <div class=\"col-md-3\">
                            <div class=\"col-md-12 projectbox-data\">
                                <p><span class=\"glyphicon glyphicon-calendar\"></span> Tiempo aprox. 3-4                                   años</p>
                            </div>
                            <div class=\"col-md-12 projectbox-data\">
                                <p><span class=\"glyphicon glyphicon-stats\"></span> TIR proyectada 12-16%                                    </p>
                            </div>
                          </div>
                        <div class=\"col-md-3 projectbox-data\"><p><span class=\"glyphicon glyphicon-usd\">                                 </span> Inversion minima 50K</p>
                         </div>
                        <div class=\"col-md-3\">
                           <button class=\"btn btn-block btn-primary\"> 
                               <span class=\"glyphicon glyphicon-open\"></span> Ver Proyecto</button>                                   </div>
                     </div>          
\t\t\t\t</div>
                    
                    
                    
                
                
                
                    
                    
                    
                    <div class=\"row mg-list\">
                                                                    </div>
                </div>
            </div>


        </div>
    </div>

{% endblock %}", "AppBundle:Offerings:offerings.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Offerings/offerings.html.twig");
    }
}
