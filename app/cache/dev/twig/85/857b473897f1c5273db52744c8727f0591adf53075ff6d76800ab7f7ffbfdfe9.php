<?php

/* AppBundle:Common:header.html.twig */
class __TwigTemplate_9e9cc1df0da5789109b5f6b81a0c54d6d1202dd359ae14119aa6235bf042b15d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header class=\"header transp sticky\"> <!-- available class for header: .sticky .center-content .transp -->
    <nav class=\"navbar navbar-inverse\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                <img class=\"img-responsive\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/logo.png"), "html", null, true);
        echo "\" />
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    ";
        // line 19
        if ( !array_key_exists("active", $context)) {
            // line 20
            echo "                        ";
            $context["active"] = "";
            // line 21
            echo "                    ";
        }
        // line 22
        echo "                    <li  class=\"";
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Inicio</a></li>
                    <li class=\"";
        // line 23
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "about")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">Nosotros </a></li>
                    <li class=\"";
        // line 24
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "comofunciona")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comofunciona");
        echo "\">Cómo funciona</a></li>
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("companies-debt");
        echo "\">Propiedades</a></li>
                    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comofunciona");
        echo "\">Inmobiliarias</a></li>
                    
                   <!-- apagar Mi Perfil, Offerings, Raise Capital <li class=\"dropdown ";
        // line 28
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "profile")) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_profile");
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Mi Perfil<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_profile");
        echo "\">Mi Perfil</a></li>
                            <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_investments");
        echo "\">Mis Inversiones</a></li>
                            <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_wallet");
        echo "\">Mi Cartera</a></li>
                        </ul>
                    </li> 
                    
                    <li class=\"dropdown ";
        // line 37
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "offerings")) {
            echo "active";
        }
        echo "\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Ofertas <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"#\">Bienes Raíces</a>
                                <ul class=\"sub-menu list-unstyled\">
                                    <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("properties-debt");
        echo "\">Debt</a></li>
                                    <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("properties-equity");
        echo "\">Equity</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\">Compañías Privadas</a>
                                <ul class=\"sub-menu list-unstyled\">
                                    <li><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("companies-debt");
        echo "\">Debt</a></li>
                                    <li><a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("companies-equity");
        echo "\">Equity</a></li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secondary_market");
        echo "\">Secondary Market</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown ";
        // line 57
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "raise_capital")) {
            echo "active";
        }
        echo "\">
                        <a href=\"#\">Levantar Capital <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("raise_capital");
        echo "\">Iniciar Aplicación</a></li>
                            <li><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_applications");
        echo "\">Mis Aplicaciones</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown ";
        // line 64
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "contact")) {
            echo "active";
        }
        echo "\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">About <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("terms");
        echo "\">Términos</a></li>
                            <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("privacy");
        echo "\">Política de Privacidad</a></li>
                            <li><a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contacto</a></li>
                        </ul>
                    </li> --> 
                    <li class=\"dropdown ";
        // line 72
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "user")) {
            echo "active";
        }
        echo "\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Registrarse <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                        \t";
        // line 75
        if ((isset($context["authenticated"]) ? $context["authenticated"] : $this->getContext($context, "authenticated"))) {
            // line 76
            echo "\t                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Cerrar Sesión</a></li>                    \t                        \t
                            \t<li><a href=\"";
            // line 77
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_verification");
            echo "\">Verificación de Correo Electrónico</a></li>
                            \t<li><a href=\"";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("complete_registration");
            echo "\">Completar Registro</a></li>
                        \t";
        } else {
            // line 80
            echo "\t                            <li><a href=\"#modal-login\" data-toggle=\"modal\" data-target=\"#modal-login\">Iniciar Sesión</a></li>                    \t
                            \t<li><a href=\"";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("signup");
            echo "\">Registrate</a></li>
                        \t";
        }
        // line 83
        echo "                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "AppBundle:Common:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 83,  220 => 81,  217 => 80,  212 => 78,  208 => 77,  203 => 76,  201 => 75,  193 => 72,  187 => 69,  183 => 68,  179 => 67,  171 => 64,  165 => 61,  161 => 60,  153 => 57,  147 => 54,  141 => 51,  137 => 50,  128 => 44,  124 => 43,  113 => 37,  106 => 33,  102 => 32,  98 => 31,  93 => 29,  87 => 28,  82 => 26,  78 => 25,  70 => 24,  62 => 23,  53 => 22,  50 => 21,  47 => 20,  45 => 19,  36 => 13,  32 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"header transp sticky\"> <!-- available class for header: .sticky .center-content .transp -->
    <nav class=\"navbar navbar-inverse\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">
                <img class=\"img-responsive\" src=\"{{ asset('bundles/app/images/logo.png') }}\" />
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    {% if active is not defined %}
                        {% set active = '' %}
                    {% endif %}
                    <li  class=\"{% if active == 'home' %}active{% endif %}\"><a href=\"{{ path('homepage') }}\">Inicio</a></li>
                    <li class=\"{% if active == 'about' %}active{% endif %}\"><a href=\"{{ path('about') }}\">Nosotros </a></li>
                    <li class=\"{% if active == 'comofunciona' %}active{% endif %}\"><a href=\"{{ path('comofunciona') }}\">Cómo funciona</a></li>
                    <li><a href=\"{{ path('companies-debt') }}\">Propiedades</a></li>
                    <li><a href=\"{{ path('comofunciona') }}\">Inmobiliarias</a></li>
                    
                   <!-- apagar Mi Perfil, Offerings, Raise Capital <li class=\"dropdown {% if active == 'profile' %}active{% endif %}\">
                        <a href=\"{{ path('my_profile') }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Mi Perfil<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"{{ path('my_profile') }}\">Mi Perfil</a></li>
                            <li><a href=\"{{ path('my_investments') }}\">Mis Inversiones</a></li>
                            <li><a href=\"{{ path('my_wallet') }}\">Mi Cartera</a></li>
                        </ul>
                    </li> 
                    
                    <li class=\"dropdown {% if active == 'offerings' %}active{% endif %}\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Ofertas <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"#\">Bienes Raíces</a>
                                <ul class=\"sub-menu list-unstyled\">
                                    <li><a href=\"{{ path('properties-debt') }}\">Debt</a></li>
                                    <li><a href=\"{{ path('properties-equity') }}\">Equity</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\">Compañías Privadas</a>
                                <ul class=\"sub-menu list-unstyled\">
                                    <li><a href=\"{{ path('companies-debt') }}\">Debt</a></li>
                                    <li><a href=\"{{ path('companies-equity') }}\">Equity</a></li>
                                </ul>
                            </li>
                            <li><a href=\"{{ path('secondary_market') }}\">Secondary Market</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown {% if active == 'raise_capital' %}active{% endif %}\">
                        <a href=\"#\">Levantar Capital <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"{{ path('raise_capital') }}\">Iniciar Aplicación</a></li>
                            <li><a href=\"{{ path('my_applications') }}\">Mis Aplicaciones</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown {% if active == 'contact' %}active{% endif %}\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">About <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"{{ path('terms') }}\">Términos</a></li>
                            <li><a href=\"{{ path('privacy') }}\">Política de Privacidad</a></li>
                            <li><a href=\"{{ path('contact') }}\">Contacto</a></li>
                        </ul>
                    </li> --> 
                    <li class=\"dropdown {% if active == 'user' %}active{% endif %}\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Registrarse <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                        \t{% if authenticated %}
\t                            <li><a href=\"{{ path('logout') }}\">Cerrar Sesión</a></li>                    \t                        \t
                            \t<li><a href=\"{{ path('email_verification') }}\">Verificación de Correo Electrónico</a></li>
                            \t<li><a href=\"{{ path('complete_registration') }}\">Completar Registro</a></li>
                        \t{% else %}
\t                            <li><a href=\"#modal-login\" data-toggle=\"modal\" data-target=\"#modal-login\">Iniciar Sesión</a></li>                    \t
                            \t<li><a href=\"{{ path('signup') }}\">Registrate</a></li>
                        \t{% endif %}
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>", "AppBundle:Common:header.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Common/header.html.twig");
    }
}
