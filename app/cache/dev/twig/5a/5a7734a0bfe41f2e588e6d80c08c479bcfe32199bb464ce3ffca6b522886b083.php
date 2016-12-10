<?php

/* AppBundle:Public:about.html.twig */
class __TwigTemplate_e197ca241bb0771a9a6424e362d0689043ec288f27625994443e204889adc59a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Public:about.html.twig", 2);
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
        $context["active"] = "contact";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "About Us - Crowd Valley";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"mg-page-title parallax\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>NOSOTROS</h2>
                    <p>“INVIRTE-PTY  es una canal de acceso en el cual inversionistas pueden acceder a financiar proyectos con seguridad y transparencia. “

</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"mg-about-features\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Misión</h2>
                    <p>Ofrecer una plataforma en un ambiente en el cual las regulaciones panameñas permitan                     el florecimiento de financiamiento colectivo. Dar a conocer las oportunidades de                           inversión en panamá en bienes raíces de una forma transparente y segura.
                    </p>
                    
                    <h2>Visión</h2>
                    <p>La visión de Invierte-pty es ser la plataforma líder de financiamiento colectivo en                      Centro América y el Caribe en  proyectos inmobiliarios.</p>

                    <hr />
                </div>
            </div>
        </div>
    </div>
   


";
    }

    public function getTemplateName()
    {
        return "AppBundle:Public:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  38 => 6,  32 => 4,  28 => 2,  26 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set active = 'contact' %}
{% extends 'AppBundle::base.html.twig' %}

{% block title %}About Us - Crowd Valley{% endblock %}

{% block body %}

    <div class=\"mg-page-title parallax\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>NOSOTROS</h2>
                    <p>“INVIRTE-PTY  es una canal de acceso en el cual inversionistas pueden acceder a financiar proyectos con seguridad y transparencia. “

</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"mg-about-features\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Misión</h2>
                    <p>Ofrecer una plataforma en un ambiente en el cual las regulaciones panameñas permitan                     el florecimiento de financiamiento colectivo. Dar a conocer las oportunidades de                           inversión en panamá en bienes raíces de una forma transparente y segura.
                    </p>
                    
                    <h2>Visión</h2>
                    <p>La visión de Invierte-pty es ser la plataforma líder de financiamiento colectivo en                      Centro América y el Caribe en  proyectos inmobiliarios.</p>

                    <hr />
                </div>
            </div>
        </div>
    </div>
   


{% endblock %}", "AppBundle:Public:about.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Public/about.html.twig");
    }
}
