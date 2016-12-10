<?php

/* AppBundle:Public:index.html.twig */
class __TwigTemplate_4dc94ae0dc81f4b55017e93d696687269dde013a1e5bb01ece4f563a852b1a81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Public:index.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["active"] = "home";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/css/owl.theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/css/owl.transitions.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/css/cs-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/css/freepik.hotels.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "\t";
        if (((isset($context["authenticated"]) ? $context["authenticated"] : $this->getContext($context, "authenticated")) == false)) {
            // line 13
            echo "\t\t<div id=\"mega-slider\" class=\"carousel slide \" data-ride=\"carousel\">
\t\t\t<!-- Indicators -->
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#mega-slider\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#mega-slider\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#mega-slider\" data-slide-to=\"2\"></li>
\t\t\t</ol>

\t\t\t<!-- Wrapper for slides -->
\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t<div class=\"item beactive\">
\t\t\t\t\t<img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/slide-ciudad-panama2.png"), "html", null, true);
            echo "\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/stars.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t<h2>Invierte en proyectos inmobiliarios</h2>
\t\t\t\t\t\t<p>Ahora puedes participar en la fundacion de proyectos inmobiliarios de todo Panamá con unos cuantos clicks.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<!-- HIDE SLIDES\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/slide-2.png"), "html", null, true);
            echo "\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/stars.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t<h2>Support for equity and debt transactions</h2>
\t\t\t\t\t\t<p>Manage private transactions efficiently and provide dynamic reporting and visibility to key stakeholders.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/slide-3.png"), "html", null, true);
            echo "\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/stars.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t<h2>From origination & on boarding, to deal room and closing</h2>
\t\t\t\t\t\t<p>Support for the full securities transaction lifecycle.</p>
\t\t\t\t\t</div>
\t\t\t\t</div> -->
\t\t\t</div>

\t\t\t<!-- Controls -->
\t\t\t<a class=\"left carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"prev\">
\t\t\t</a>
\t\t\t<a class=\"right carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"next\">
\t\t\t</a>
\t\t</div>

\t\t<!-- HIDE SIGNUP <div class=\"mg-book-now\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<h2 class=\"mg-bn-title\">SIGN UP <span class=\"mg-bn-big\">TO ACCESS ALL PAGES</span></h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"mg-bn-forms\">
\t\t\t\t\t\t\t<form role=\"form\" id=\"form_sign_up\" action=\"";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("process_sign_up");
            echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group \">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\"><i class=\"fa fa-envelope\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 69
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["signup_form"]) ? $context["signup_form"] : $this->getContext($context, "signup_form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email address", "id" => "emailAddress")));
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\"><i class=\"fa fa-key\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["signup_form"]) ? $context["signup_form"] : $this->getContext($context, "signup_form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Password", "id" => "password")));
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t";
            // line 79
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["signup_form"]) ? $context["signup_form"] : $this->getContext($context, "signup_form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-main btn-block"), "label" => "Sign Up"));
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t";
        } else {
            // line 89
            echo " 
\t
\t\t<div class=\"mg-page-title parallax\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<h2>WELCOME BACK</h2>\t
\t\t\t\t\t\t<h4 style=\"color:white\">";
            // line 96
            if (($this->getAttribute((isset($context["self"]) ? $context["self"] : $this->getContext($context, "self")), "fullName", array()) != " ")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["self"]) ? $context["self"] : $this->getContext($context, "self")), "fullName", array()), "html", null, true);
            } else {
                echo "<a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("complete_registration");
                echo "\">Please complete the registration process</a>";
            }
            echo "</h4>\t\t
\t\t\t\t\t</div>
                    <div class=\"col-md-8\" style=\"color:black\">
                        <div class=\"row\">
                            <div class=\"col-md-4 col-sm-4 col-xs-4\">
                                <div class=\"well relative\">
                                    <a href=\"";
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_wallet");
            echo "\" class=\"well-link\"></a>
                                    <h3><i class=\"fa fa-dollar\"> ";
            // line 103
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 5000), "html", null, true);
            echo "</i></h3>
                                    <div>Wallet Balance</div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-sm-4 col-xs-4\">
                                <div class=\"well relative\">
                                    <a href=\"";
            // line 109
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_investments");
            echo "\" class=\"well-link\"></a>
                                    <h3><i class=\"fa fa-line-chart\"> 3</i></h3>
                                    <div>Investments</div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-sm-4 col-xs-4\">
                                <div class=\"well relative\">
                                    <a href=\"";
            // line 116
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_investments");
            echo "\" class=\"well-link\"></a>
                                    <h3><i class=\"fa fa-dollar\"> ";
            // line 117
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["dividends_received"]) ? $context["dividends_received"] : $this->getContext($context, "dividends_received"))), "html", null, true);
            echo "</i></h3>
                                    <div>Dividends Received</div>
                                </div>
                            </div>
                        </div>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
\t
\t";
        }
        // line 128
        echo "
\t<div class=\"mg-best-rooms\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"mg-sec-title\">
\t\t\t\t\t\t<h2>Featured Offerings</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["featured_offerings"]) ? $context["featured_offerings"] : $this->getContext($context, "featured_offerings")));
        foreach ($context['_seq'] as $context["_key"] => $context["offering"]) {
            // line 138
            echo "\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<figure class=\"mg-room\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/room-1.png"), "html", null, true);
            echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h2>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["offering"], "name", array()), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\">Opens in ";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\TemplateExtension')->daysLeft($this->getAttribute($context["offering"], "openDate", array())), "html", null, true);
            echo " days</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\$";
            // line 144
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["offering"], "fundingGoal", array())), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["offering"], "offeringDescription", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offerings_overview", array("offering_id" => $this->getAttribute($context["offering"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offering'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>-->

\t<!-- <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <hr>
            </div>
        </div>
    </div> -->


    <div class=\"mg-projectbox parallax\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<h2 class=\"mg-sec-left-title\">EL PROYECTO MÁS RECIENTE</h2>
\t\t\t\t\t<p>Esta es una oportunidad para invertir en The Port Village, un innovador proyecto                         frente al mar Caribe, en Isla Kahuna, Bocas del Toro, Panamá.</p>
                    <p>Veggies es bonus vobis, proinde vos postulo essum magis kohlrabi welsh onion daikon                      amaranth tatsoi tomatillo melon azuki bean garlic.</p>

                    <p>Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea                     sprouts fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber                           earthnut pea peanut soko zucchini.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t
                    <div class=\"projectview-box row\">
                        <div class=\"col-md-12\" style=\"padding-right: 3px;padding-left: 3px;\"> 
                                <img class=\"img-responsive\" style=\"width:100%\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/proyectos/ocean-view-small.PNG"), "html", null, true);
        echo "\" alt=\"The                                     Assemblage\">
                        </div>
                        <div class=\"col-md-6\"> <h3>The Port Village</h3></div>
                        <div class=\"col-md-offset-1 col-md-5 disponibilidad\"><p><span style=\"color:green\"                              class=\"glyphicon glyphicon-ok\"></span> DISPONIBILIDAD</p></div>
                        <div class=\"col-md-7 projectbox-data\">
                        <div>
                            <p><span class=\"glyphicon glyphicon-globe\"></span> Estatus de la oferta</p>
                            <div class=\"col-md-2\"><p>0M </p></div>
                            <div class=\"col-md-8\">
                                <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\"                                                 aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:17%;\">17%
                                         </div>
                                 </div>
                                </div>
                                <div class=\"col-md-1\">52M</div>    
                            </div><!-- ends projectview-box row -->
                            </div><!-- ends offset-1 col-md-6 column -->
                        <div class=\"col-md-5\">
                            <div class=\"col-md-12 projectbox-data\">
                                <p><span class=\"glyphicon glyphicon-calendar\"></span> Tiempo aprox. 3-4                                   años</p>
                            </div>
                            <div class=\"col-md-12 projectbox-data\">
                                <p><span class=\"glyphicon glyphicon-stats\"></span> TIR proyectada 12-16%                                    </p>
                            </div>
                          </div>
                        <div class=\"col-md-7 projectbox-data\"><p><span class=\"glyphicon glyphicon-usd\">                                 </span> Inversion minima 50K</p>
                         </div>
                        <div class=\"col-md-5\">
                           <button class=\"btn btn-block btn-primary\"> 
                               <span class=\"glyphicon glyphicon-open\"></span> Ver Proyecto</button>                                   </div>
                     </div>          
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
            
\t</div>

\t<div class=\"mg-about parallax\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t<h2 class=\"mg-sec-left-title\"> INVIERTE PTY</h2>
\t\t\t\t\t<p>“En el 2015, la inversión en crowdfunding en bienes y raíces alcanzo un monto de \$2.5 Billones de dólares y se estima un total de \$3.5 billones “</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/backoffice.png"), "html", null, true);
        echo "\" alt=\"Crowd Valley\"></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- HIDES TILL FOOTER <div class=\"mg-features platform-features\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"mg-sec-title\">
\t\t\t\t\t\t<h2>Platform features</h2>
\t\t\t\t\t\t<p>Robust tools to support full transaction workflows</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t<i class=\"fp-ht-receptionist\"></i>
\t\t\t\t\t\t\t\t\t<h3 style=\"margin-top: 6px\">Powerful Compliance tools</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Deploy sophisticated compliance processes with state of the art data sources at your teams disposal.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cogs\"></i>
\t\t\t\t\t\t\t\t\t<h3>Fully Configurable</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Serve your clients with your bespoke workflows and processes tailored to their needs.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-external-link\"></i>
\t\t\t\t\t\t\t\t\t<h3>Scalable and Modular</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Expand your service and tap more functionality in the digital back office.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o \"></i>
\t\t\t\t\t\t\t\t\t<h3>Investor Communication</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Provide your investors unrivaled dynamic information, reporting and dashboards 24/7.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-database\"></i>
\t\t\t\t\t\t\t\t\t<h3>Robust Data Rooms</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Efficient work flows with rigorous access rights controls streamline closing deals.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-lock\"></i>
\t\t\t\t\t\t\t\t\t<h3>Secure and Compliant</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>State of the art security, modular infrastructure design and continuous investments in R&D.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"mg-testi-partners parallax\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Testimonial</h2>
\t\t\t\t\t<div class=\"mg-testimonial-slider\" id=\"mg-testimonial-slider\">
\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t<p>Crowd Valley helped us navigate these complexities to develop a strong final product that will serve investors across private, public, and philanthropic sectors.</p>
\t\t\t\t\t\t\t<footer>Andrew Stern, CEO Convergence</footer>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t";
        // line 320
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Our Partners</h2>
\t\t\t\t\t<ul class=\"mg-part-logos\" id=\"mg-part-logos\">
\t\t\t\t\t\t<li><img src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/partners/gcen-logo.png"), "html", null, true);
        echo "\" alt=\"gcen\"></li>
\t\t\t\t\t\t<li><img src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/partners/xignite-logo.png"), "html", null, true);
        echo "\" alt=\"xignite\"></li>
\t\t\t\t\t\t<li><img src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/partners/fundamerica-logo.png"), "html", null, true);
        echo "\" alt=\"fundamerica\"></li>
\t\t\t\t\t\t<li><img src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/partners/contego-logo.png"), "html", null, true);
        echo "\" alt=\"contego\"></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"mg-news-gallery\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Recent Front-End Templates</h2>
\t\t\t\t\t<ul class=\"mg-recnt-posts\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t<h3><a href=\"http://fundingthemeshub.com/themes/sanfrancisco/index.html\" target=\"_blank\">San Francisco</a></h3>
\t\t\t\t\t\t\t\t<p>Responsive Equity Offerings Template</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t<h3><a href=\"http://fundingthemeshub.com/themes/newyork/index.html\" target=\"_blank\">New York</a></h3>
\t\t\t\t\t\t\t\t<p>Responsive Equity Offerings Template</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t<h3><a href=\"http://fundingthemeshub.com/themes/fortworth/index.html\" target=\"_blank\">Fort Worth</a></h3>
\t\t\t\t\t\t\t\t<p>Responsive Real Estate Template</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Gallery</h2>

\t\t\t\t\t<div class=\"mg-gallery-container\">
\t\t\t\t\t\t<ul class=\"mg-gallery\" id=\"mg-gallery\">
\t\t\t\t\t\t\t<li><img src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/templates/sanfrancisco.png"), "html", null, true);
        echo "\" alt=\"San Francisco\"></li>
\t\t\t\t\t\t\t<li><img src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/templates/newyork.png"), "html", null, true);
        echo "\" alt=\"New York\"></li>
\t\t\t\t\t\t\t<li><img src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/templates/fortworth.png"), "html", null, true);
        echo "\" alt=\"Fort Worth\"></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul class=\"mg-gallery-thumb\" id=\"mg-gallery-thumb\">
\t\t\t\t\t\t\t<li><img src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/templates/sanfrancisco-thumb.png"), "html", null, true);
        echo "\" alt=\"San Francisco\"></li>
\t\t\t\t\t\t\t<li><img src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/templates/newyork-thumb.png"), "html", null, true);
        echo "\" alt=\"New York\"></li>
\t\t\t\t\t\t\t<li><img src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/templates/fortworth-thumb.png"), "html", null, true);
        echo "\" alt=\"Fort Worth\"></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div> -->

";
    }

    // line 383
    public function block_javascripts($context, array $blocks = array())
    {
        // line 384
        echo "
    <script type=\"text/javascript\">
        \$(function () {
            var requiredLogin = '";
        // line 387
        echo twig_escape_filter($this->env, (isset($context["login_required"]) ? $context["login_required"] : $this->getContext($context, "login_required")), "html", null, true);
        echo "';
            if (requiredLogin == true) {
                // Show login popup
                \$('#modal-login').modal('show');
            }
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Public:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  566 => 387,  561 => 384,  558 => 383,  545 => 373,  541 => 372,  537 => 371,  531 => 368,  527 => 367,  523 => 366,  482 => 328,  478 => 327,  474 => 326,  470 => 325,  463 => 320,  373 => 225,  325 => 180,  294 => 151,  283 => 146,  279 => 145,  275 => 144,  271 => 143,  267 => 142,  262 => 140,  258 => 138,  254 => 137,  243 => 128,  229 => 117,  225 => 116,  215 => 109,  206 => 103,  202 => 102,  187 => 96,  178 => 89,  164 => 79,  157 => 75,  148 => 69,  140 => 64,  115 => 42,  110 => 40,  101 => 34,  96 => 32,  87 => 26,  82 => 24,  69 => 13,  66 => 12,  63 => 11,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  41 => 5,  36 => 4,  33 => 3,  29 => 2,  27 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set active = 'home' %}
{% extends 'AppBundle::base.html.twig' %}
{% block stylesheets %}
    <link href=\"{{ asset('bundles/app/css/owl.carousel.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/app/css/owl.theme.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/app/css/owl.transitions.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/app/css/cs-select.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/app/css/bootstrap-datepicker3.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/app/css/freepik.hotels.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
\t{% if authenticated == false %}
\t\t<div id=\"mega-slider\" class=\"carousel slide \" data-ride=\"carousel\">
\t\t\t<!-- Indicators -->
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#mega-slider\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#mega-slider\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#mega-slider\" data-slide-to=\"2\"></li>
\t\t\t</ol>

\t\t\t<!-- Wrapper for slides -->
\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t<div class=\"item beactive\">
\t\t\t\t\t<img src=\"{{ asset('bundles/app/images/slide-ciudad-panama2.png') }}\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"{{ asset('bundles/app/images/stars.png') }}\" alt=\"\">
\t\t\t\t\t\t<h2>Invierte en proyectos inmobiliarios</h2>
\t\t\t\t\t\t<p>Ahora puedes participar en la fundacion de proyectos inmobiliarios de todo Panamá con unos cuantos clicks.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<!-- HIDE SLIDES\t<div class=\"item\">
\t\t\t\t\t<img src=\"{{ asset('bundles/app/images/slide-2.png') }}\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"{{ asset('bundles/app/images/stars.png') }}\" alt=\"\">
\t\t\t\t\t\t<h2>Support for equity and debt transactions</h2>
\t\t\t\t\t\t<p>Manage private transactions efficiently and provide dynamic reporting and visibility to key stakeholders.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"{{ asset('bundles/app/images/slide-3.png') }}\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"{{ asset('bundles/app/images/stars.png') }}\" alt=\"\">
\t\t\t\t\t\t<h2>From origination & on boarding, to deal room and closing</h2>
\t\t\t\t\t\t<p>Support for the full securities transaction lifecycle.</p>
\t\t\t\t\t</div>
\t\t\t\t</div> -->
\t\t\t</div>

\t\t\t<!-- Controls -->
\t\t\t<a class=\"left carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"prev\">
\t\t\t</a>
\t\t\t<a class=\"right carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"next\">
\t\t\t</a>
\t\t</div>

\t\t<!-- HIDE SIGNUP <div class=\"mg-book-now\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<h2 class=\"mg-bn-title\">SIGN UP <span class=\"mg-bn-big\">TO ACCESS ALL PAGES</span></h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"mg-bn-forms\">
\t\t\t\t\t\t\t<form role=\"form\" id=\"form_sign_up\" action=\"{{ path('process_sign_up') }}\" method=\"POST\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group \">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\"><i class=\"fa fa-envelope\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(signup_form.email, {'attr': {'class': 'form-control','placeholder':'Email address', 'id': 'emailAddress' }}) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\"><i class=\"fa fa-key\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(signup_form.password, {'attr': {'class': 'form-control','placeholder':'Password', 'id': 'password' }}) }}\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(signup_form.submit, {'attr': {'class': 'btn btn-main btn-block'}, 'label': 'Sign Up'} ) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t{% else %} 
\t
\t\t<div class=\"mg-page-title parallax\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<h2>WELCOME BACK</h2>\t
\t\t\t\t\t\t<h4 style=\"color:white\">{% if self.fullName != ' ' %}{{ self.fullName }}{% else %}<a href=\"{{path('complete_registration')}}\">Please complete the registration process</a>{% endif %}</h4>\t\t
\t\t\t\t\t</div>
                    <div class=\"col-md-8\" style=\"color:black\">
                        <div class=\"row\">
                            <div class=\"col-md-4 col-sm-4 col-xs-4\">
                                <div class=\"well relative\">
                                    <a href=\"{{ path('my_wallet') }}\" class=\"well-link\"></a>
                                    <h3><i class=\"fa fa-dollar\"> {{ 5000|number_format }}</i></h3>
                                    <div>Wallet Balance</div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-sm-4 col-xs-4\">
                                <div class=\"well relative\">
                                    <a href=\"{{ path('my_investments') }}\" class=\"well-link\"></a>
                                    <h3><i class=\"fa fa-line-chart\"> 3</i></h3>
                                    <div>Investments</div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-sm-4 col-xs-4\">
                                <div class=\"well relative\">
                                    <a href=\"{{ path('my_investments') }}\" class=\"well-link\"></a>
                                    <h3><i class=\"fa fa-dollar\"> {{ dividends_received|number_format }}</i></h3>
                                    <div>Dividends Received</div>
                                </div>
                            </div>
                        </div>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
\t
\t{% endif %}

\t<div class=\"mg-best-rooms\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"mg-sec-title\">
\t\t\t\t\t\t<h2>Featured Offerings</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t{% for offering in featured_offerings %}
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<figure class=\"mg-room\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('bundles/app/images/room-1.png') }}\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h2>{{ offering.name }}</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\">Opens in {{ offering.openDate|days_left }} days</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\${{ offering.fundingGoal|number_format }}</div>
\t\t\t\t\t\t\t\t\t\t<p>{{ offering.offeringDescription }}</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('offerings_overview', {'offering_id': offering.id} ) }}\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>-->

\t<!-- <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <hr>
            </div>
        </div>
    </div> -->


    <div class=\"mg-projectbox parallax\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<h2 class=\"mg-sec-left-title\">EL PROYECTO MÁS RECIENTE</h2>
\t\t\t\t\t<p>Esta es una oportunidad para invertir en The Port Village, un innovador proyecto                         frente al mar Caribe, en Isla Kahuna, Bocas del Toro, Panamá.</p>
                    <p>Veggies es bonus vobis, proinde vos postulo essum magis kohlrabi welsh onion daikon                      amaranth tatsoi tomatillo melon azuki bean garlic.</p>

                    <p>Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea                     sprouts fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber                           earthnut pea peanut soko zucchini.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t
                    <div class=\"projectview-box row\">
                        <div class=\"col-md-12\" style=\"padding-right: 3px;padding-left: 3px;\"> 
                                <img class=\"img-responsive\" style=\"width:100%\" src=\"{{                                                                         asset('bundles/app/images/proyectos/ocean-view-small.PNG') }}\" alt=\"The                                     Assemblage\">
                        </div>
                        <div class=\"col-md-6\"> <h3>The Port Village</h3></div>
                        <div class=\"col-md-offset-1 col-md-5 disponibilidad\"><p><span style=\"color:green\"                              class=\"glyphicon glyphicon-ok\"></span> DISPONIBILIDAD</p></div>
                        <div class=\"col-md-7 projectbox-data\">
                        <div>
                            <p><span class=\"glyphicon glyphicon-globe\"></span> Estatus de la oferta</p>
                            <div class=\"col-md-2\"><p>0M </p></div>
                            <div class=\"col-md-8\">
                                <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\"                                                 aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:17%;\">17%
                                         </div>
                                 </div>
                                </div>
                                <div class=\"col-md-1\">52M</div>    
                            </div><!-- ends projectview-box row -->
                            </div><!-- ends offset-1 col-md-6 column -->
                        <div class=\"col-md-5\">
                            <div class=\"col-md-12 projectbox-data\">
                                <p><span class=\"glyphicon glyphicon-calendar\"></span> Tiempo aprox. 3-4                                   años</p>
                            </div>
                            <div class=\"col-md-12 projectbox-data\">
                                <p><span class=\"glyphicon glyphicon-stats\"></span> TIR proyectada 12-16%                                    </p>
                            </div>
                          </div>
                        <div class=\"col-md-7 projectbox-data\"><p><span class=\"glyphicon glyphicon-usd\">                                 </span> Inversion minima 50K</p>
                         </div>
                        <div class=\"col-md-5\">
                           <button class=\"btn btn-block btn-primary\"> 
                               <span class=\"glyphicon glyphicon-open\"></span> Ver Proyecto</button>                                   </div>
                     </div>          
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
            
\t</div>

\t<div class=\"mg-about parallax\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t<h2 class=\"mg-sec-left-title\"> INVIERTE PTY</h2>
\t\t\t\t\t<p>“En el 2015, la inversión en crowdfunding en bienes y raíces alcanzo un monto de \$2.5 Billones de dólares y se estima un total de \$3.5 billones “</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<img src=\"{{ asset('bundles/app/images/backoffice.png') }}\" alt=\"Crowd Valley\"></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- HIDES TILL FOOTER <div class=\"mg-features platform-features\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"mg-sec-title\">
\t\t\t\t\t\t<h2>Platform features</h2>
\t\t\t\t\t\t<p>Robust tools to support full transaction workflows</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t<i class=\"fp-ht-receptionist\"></i>
\t\t\t\t\t\t\t\t\t<h3 style=\"margin-top: 6px\">Powerful Compliance tools</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Deploy sophisticated compliance processes with state of the art data sources at your teams disposal.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cogs\"></i>
\t\t\t\t\t\t\t\t\t<h3>Fully Configurable</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Serve your clients with your bespoke workflows and processes tailored to their needs.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-external-link\"></i>
\t\t\t\t\t\t\t\t\t<h3>Scalable and Modular</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Expand your service and tap more functionality in the digital back office.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o \"></i>
\t\t\t\t\t\t\t\t\t<h3>Investor Communication</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Provide your investors unrivaled dynamic information, reporting and dashboards 24/7.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-database\"></i>
\t\t\t\t\t\t\t\t\t<h3>Robust Data Rooms</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Efficient work flows with rigorous access rights controls streamline closing deals.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-lock\"></i>
\t\t\t\t\t\t\t\t\t<h3>Secure and Compliant</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>State of the art security, modular infrastructure design and continuous investments in R&D.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"mg-testi-partners parallax\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Testimonial</h2>
\t\t\t\t\t<div class=\"mg-testimonial-slider\" id=\"mg-testimonial-slider\">
\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t<p>Crowd Valley helped us navigate these complexities to develop a strong final product that will serve investors across private, public, and philanthropic sectors.</p>
\t\t\t\t\t\t\t<footer>Andrew Stern, CEO Convergence</footer>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t{#<blockquote>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sol magnum gustare pararetur statuam, morbi patriam omittantur.</p>
\t\t\t\t\t\t\t<footer>John Doe, Example Inc</footer>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Stabilem monet, petat excepturi nudus expeteremus fabellas vexetur.</p>
\t\t\t\t\t\t\t<footer>John Doe, Example Inc</footer>
\t\t\t\t\t\t</blockquote>#}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Our Partners</h2>
\t\t\t\t\t<ul class=\"mg-part-logos\" id=\"mg-part-logos\">
\t\t\t\t\t\t<li><img src=\"{{ asset('bundles/app/images/partners/gcen-logo.png') }}\" alt=\"gcen\"></li>
\t\t\t\t\t\t<li><img src=\"{{ asset('bundles/app/images/partners/xignite-logo.png') }}\" alt=\"xignite\"></li>
\t\t\t\t\t\t<li><img src=\"{{ asset('bundles/app/images/partners/fundamerica-logo.png') }}\" alt=\"fundamerica\"></li>
\t\t\t\t\t\t<li><img src=\"{{ asset('bundles/app/images/partners/contego-logo.png') }}\" alt=\"contego\"></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"mg-news-gallery\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Recent Front-End Templates</h2>
\t\t\t\t\t<ul class=\"mg-recnt-posts\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t<h3><a href=\"http://fundingthemeshub.com/themes/sanfrancisco/index.html\" target=\"_blank\">San Francisco</a></h3>
\t\t\t\t\t\t\t\t<p>Responsive Equity Offerings Template</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t<h3><a href=\"http://fundingthemeshub.com/themes/newyork/index.html\" target=\"_blank\">New York</a></h3>
\t\t\t\t\t\t\t\t<p>Responsive Equity Offerings Template</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t<h3><a href=\"http://fundingthemeshub.com/themes/fortworth/index.html\" target=\"_blank\">Fort Worth</a></h3>
\t\t\t\t\t\t\t\t<p>Responsive Real Estate Template</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Gallery</h2>

\t\t\t\t\t<div class=\"mg-gallery-container\">
\t\t\t\t\t\t<ul class=\"mg-gallery\" id=\"mg-gallery\">
\t\t\t\t\t\t\t<li><img src=\"{{ asset('bundles/app/images/templates/sanfrancisco.png') }}\" alt=\"San Francisco\"></li>
\t\t\t\t\t\t\t<li><img src=\"{{ asset('bundles/app/images/templates/newyork.png') }}\" alt=\"New York\"></li>
\t\t\t\t\t\t\t<li><img src=\"{{ asset('bundles/app/images/templates/fortworth.png') }}\" alt=\"Fort Worth\"></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul class=\"mg-gallery-thumb\" id=\"mg-gallery-thumb\">
\t\t\t\t\t\t\t<li><img src=\"{{ asset('bundles/app/images/templates/sanfrancisco-thumb.png') }}\" alt=\"San Francisco\"></li>
\t\t\t\t\t\t\t<li><img src=\"{{ asset('bundles/app/images/templates/newyork-thumb.png') }}\" alt=\"New York\"></li>
\t\t\t\t\t\t\t<li><img src=\"{{ asset('bundles/app/images/templates/fortworth-thumb.png') }}\" alt=\"Fort Worth\"></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div> -->

{% endblock %}

{% block javascripts %}

    <script type=\"text/javascript\">
        \$(function () {
            var requiredLogin = '{{ login_required }}';
            if (requiredLogin == true) {
                // Show login popup
                \$('#modal-login').modal('show');
            }
        });
    </script>

{% endblock %}


", "AppBundle:Public:index.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Public/index.html.twig");
    }
}
