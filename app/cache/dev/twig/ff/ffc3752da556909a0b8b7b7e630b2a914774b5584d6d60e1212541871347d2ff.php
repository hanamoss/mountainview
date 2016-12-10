<?php

/* AppBundle:Registration:email_verification.html.twig */
class __TwigTemplate_ff3b7bea38dd48e9b3d9624b96340b97883ca1e062df1fe98790322e67489314 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Registration:email_verification.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $context["active"] = "user";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Verificación de Email - Invierte PTY";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"mg-page-title parallax\">
        <div class=\"mg-page\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"mg-404-error-txt\">
                        <div class=\"col-md-3\">
                            <div class=\"mg-404-badg pull-left\">
                                <i class=\"fa fa-envelope\" style=\"font-size: 90px\"></i>
                            </div>
                        </div>
                        <div class=\"col-md-9\">
                        \t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"mg-404-txt-search\">
\t\t\t\t\t\t\t\t\t<strong>Gracias por unirte a la red de Invierte PTY. La plataforma en línea, los usuarios automaticamente reciben una activación por email, la cual contiene un enlace en el que debeberán hacer click para verificar su correo electrónico.</strong>
\t\t\t\t\t\t\t\t\t<p>En este demo, puedes continuar a las siguientes páginas sin verificar tu correo electrónico.</p>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
        // line 23
        if ((isset($context["resent_email"]) ? $context["resent_email"] : $this->getContext($context, "resent_email"))) {
            // line 24
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Tu email ha sido re-enviado</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 30
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resend_verification_email");
            echo "\" class=\"btn btn-main-clean btn-block\"> Re-enviar Email de Verificación</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mg-404-search-form\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("complete_registration");
        echo "\" class=\"btn btn-main\"> Continuar Proceso de Registro</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Registration:email_verification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 37,  78 => 34,  72 => 31,  69 => 30,  61 => 24,  59 => 23,  41 => 7,  38 => 6,  32 => 4,  28 => 2,  26 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set active = 'user' %}
{% extends 'AppBundle::base.html.twig' %}

{% block title %}Verificación de Email - Invierte PTY{% endblock %}

{% block body %}
    <div class=\"mg-page-title parallax\">
        <div class=\"mg-page\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"mg-404-error-txt\">
                        <div class=\"col-md-3\">
                            <div class=\"mg-404-badg pull-left\">
                                <i class=\"fa fa-envelope\" style=\"font-size: 90px\"></i>
                            </div>
                        </div>
                        <div class=\"col-md-9\">
                        \t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"mg-404-txt-search\">
\t\t\t\t\t\t\t\t\t<strong>Gracias por unirte a la red de Invierte PTY. La plataforma en línea, los usuarios automaticamente reciben una activación por email, la cual contiene un enlace en el que debeberán hacer click para verificar su correo electrónico.</strong>
\t\t\t\t\t\t\t\t\t<p>En este demo, puedes continuar a las siguientes páginas sin verificar tu correo electrónico.</p>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t{% if resent_email %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Tu email ha sido re-enviado</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('resend_verification_email') }}\" class=\"btn btn-main-clean btn-block\"> Re-enviar Email de Verificación</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mg-404-search-form\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('complete_registration') }}\" class=\"btn btn-main\"> Continuar Proceso de Registro</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "AppBundle:Registration:email_verification.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Registration/email_verification.html.twig");
    }
}
