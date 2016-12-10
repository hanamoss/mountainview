<?php

/* AppBundle:Profile:change_email.html.twig */
class __TwigTemplate_7dc2ce9f5d829b3efee44387b34827783414d5f14f29686247c1e1adc79843bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Profile:change_email.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $context["active"] = "profile";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Change Password - Crowd Valley";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"mg-page-title parallax\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Change Password</h2>
                    <p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"mg-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-sm-12 pull-right\">
                    <form name=\"\" method=\"post\" action=\"\" id=\"\" role=\"form\">
                        <div class=\"row mb20\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group mg-book-form-input\">
                                    <label for=\"currentEmail\">Current Email</label>
                                    <input type=\"text\" autocomplete=\"off\"  placeholder=\"\" class=\"form-control\" value=\"johndoe@email.com\" readonly=\"readonly\" name=\"\" id=\"\">
                                </div>
                                <div class=\"form-group mg-book-form-input\">
                                    <label for=\"newEmail\">New Email</label>
                                    <input type=\"text\" autocomplete=\"off\"  placeholder=\"\" class=\"form-control\" name=\"new_email\" id=\"new_email\">
                                </div>
                                <div class=\"form-group mg-book-form-input\">
                                    <label for=\"newEmailConfirm\">New Email Confirm</label>
                                    <input type=\"text\" autocomplete=\"off\" placeholder=\"\" class=\"form-control\" name=\"new_email_confirm\" id=\"new_email_confirm\">
                                </div>
                            </div>
                        </div>
                        <button type=\"submit\" id=\"\" name=\"\" class=\"btn btn-main\">Save</button>

                    </form>
                </div>
                <div class=\"col-md-3 col-sm-12 pull-left\">
                    <div class=\"mg-widget-area\">
                        <aside class=\"mg-widget\">
                            <h2 class=\"mg-widget-title\">MY ACCOUNT</h2>
                            <ul>
                                <li><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_profile");
        echo "\"><i class=\"fa fa-user\"></i> Overview</a></li>
                                <li><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_profile");
        echo "\"><i class=\"fa fa-money\"></i> Edit Profile</a></li>
                                <li><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("change_password");
        echo "\"><i class=\"fa fa-key\"></i> Change Password</a></li>
                                <li class=\"active\" ><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("change_email");
        echo "\"><i class=\"fa fa-money\"></i> Change Email</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>

";
    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AppBundle:Profile:change_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 60,  97 => 50,  93 => 49,  89 => 48,  85 => 47,  42 => 6,  39 => 5,  33 => 4,  29 => 2,  27 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set active = 'profile' %}
{% extends 'AppBundle::base.html.twig' %}

{% block title %}Change Password - Crowd Valley{% endblock %}
{% block body %}

    <div class=\"mg-page-title parallax\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Change Password</h2>
                    <p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"mg-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-sm-12 pull-right\">
                    <form name=\"\" method=\"post\" action=\"\" id=\"\" role=\"form\">
                        <div class=\"row mb20\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group mg-book-form-input\">
                                    <label for=\"currentEmail\">Current Email</label>
                                    <input type=\"text\" autocomplete=\"off\"  placeholder=\"\" class=\"form-control\" value=\"johndoe@email.com\" readonly=\"readonly\" name=\"\" id=\"\">
                                </div>
                                <div class=\"form-group mg-book-form-input\">
                                    <label for=\"newEmail\">New Email</label>
                                    <input type=\"text\" autocomplete=\"off\"  placeholder=\"\" class=\"form-control\" name=\"new_email\" id=\"new_email\">
                                </div>
                                <div class=\"form-group mg-book-form-input\">
                                    <label for=\"newEmailConfirm\">New Email Confirm</label>
                                    <input type=\"text\" autocomplete=\"off\" placeholder=\"\" class=\"form-control\" name=\"new_email_confirm\" id=\"new_email_confirm\">
                                </div>
                            </div>
                        </div>
                        <button type=\"submit\" id=\"\" name=\"\" class=\"btn btn-main\">Save</button>

                    </form>
                </div>
                <div class=\"col-md-3 col-sm-12 pull-left\">
                    <div class=\"mg-widget-area\">
                        <aside class=\"mg-widget\">
                            <h2 class=\"mg-widget-title\">MY ACCOUNT</h2>
                            <ul>
                                <li><a href=\"{{ path('my_profile') }}\"><i class=\"fa fa-user\"></i> Overview</a></li>
                                <li><a href=\"{{ path('edit_profile') }}\"><i class=\"fa fa-money\"></i> Edit Profile</a></li>
                                <li><a href=\"{{ path('change_password') }}\"><i class=\"fa fa-key\"></i> Change Password</a></li>
                                <li class=\"active\" ><a href=\"{{ path('change_email') }}\"><i class=\"fa fa-money\"></i> Change Email</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>

{% endblock %}

{% block javascripts %}
{% endblock %}", "AppBundle:Profile:change_email.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Profile/change_email.html.twig");
    }
}
