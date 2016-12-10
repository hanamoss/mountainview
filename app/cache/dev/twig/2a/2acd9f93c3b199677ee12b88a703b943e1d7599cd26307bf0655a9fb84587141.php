<?php

/* AppBundle:Public:forgot_password.html.twig */
class __TwigTemplate_5829002bd306d226c3b62e5d46ffb41ad011a848fee9a708ee45b140118d9db1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Public:forgot_password.html.twig", 2);
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
        $context["active"] = "";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Forgot Password - Crowd Valley";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"mg-page-title parallax\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Forgot password</h2>
                    <p>Please enter your e-mail address and instructions to reset your password will be sent to you.</p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"mg-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-5\">
                    <form class=\"clearfix\">
                        <div class=\"mg-contact-form-input\">
                            <label for=\"\">Your email address</label>
                            <input type=\"email\" class=\"form-control\" id=\"\">
                        </div>
                        <input type=\"submit\" class=\"btn btn-dark-main\" value=\"Reset\">
                    </form>
                </div>

            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Public:forgot_password.html.twig";
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
        return new Twig_Source("{% set active = '' %}
{% extends 'AppBundle::base.html.twig' %}

{% block title %}Forgot Password - Crowd Valley{% endblock %}

{% block body %}
    <div class=\"mg-page-title parallax\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Forgot password</h2>
                    <p>Please enter your e-mail address and instructions to reset your password will be sent to you.</p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"mg-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-5\">
                    <form class=\"clearfix\">
                        <div class=\"mg-contact-form-input\">
                            <label for=\"\">Your email address</label>
                            <input type=\"email\" class=\"form-control\" id=\"\">
                        </div>
                        <input type=\"submit\" class=\"btn btn-dark-main\" value=\"Reset\">
                    </form>
                </div>

            </div>
        </div>
    </div>

{% endblock %}", "AppBundle:Public:forgot_password.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Public/forgot_password.html.twig");
    }
}
