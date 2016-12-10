<?php

/* AppBundle:Secondarymarket:secondary_market.html.twig */
class __TwigTemplate_783fbdb9b77feed993bd556cecb20ca2057e65968deab19f9413ea6d287ef0a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Secondarymarket:secondary_market.html.twig", 2);
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
        $context["active"] = "offerings";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Secondary Market - Crowd Valley";
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
                    <h2>Secondary Market</h2>
                    <p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"mg-about-features\">
        <div class=\"container\">
            <table class=\"table table-responsive\">
                <tr>
                    <th style=\"width: 90px\">Loan Part ID</th>
                    <th>Organization</th>
                    <th>Share Price</th>
                    <th>Shares <br> Available</th>
                    <th>Cost of <br> Shares</th>
                    <th>Fees</th>
                    <th>Total <br> Investment</th>
                    <th style=\"width: 95px\">Projected Returns</th>
                    <th style=\"width: 50px\">Status</th>
                    <th style=\"width: 155px\">Action</th>
                </tr>
                <tr>
                    <td>1234</td>
                    <td>Project Tomorrow</td>
                    <td>£550.00</td>
                    <td>1,000</td>
                    <td>£550,000.00</td>
                    <td>£13,750.00</td>
                    <td>£563,750.00</td>
                    <td>3.50%</td>
                    <td><span class=\"label label-success font-normal\">Open</span></td>
                    <td>
                        <a class=\"btn-sm btn-dark-main\">Invest</a>
                        <a class=\"btn-sm btn-dark-main\">See More</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "AppBundle:Secondarymarket:secondary_market.html.twig";
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
        return new Twig_Source("{% set active = 'offerings' %}
{% extends 'AppBundle::base.html.twig' %}

{% block title %}Secondary Market - Crowd Valley{% endblock %}

{% block body %}

    <div class=\"mg-page-title parallax\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Secondary Market</h2>
                    <p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"mg-about-features\">
        <div class=\"container\">
            <table class=\"table table-responsive\">
                <tr>
                    <th style=\"width: 90px\">Loan Part ID</th>
                    <th>Organization</th>
                    <th>Share Price</th>
                    <th>Shares <br> Available</th>
                    <th>Cost of <br> Shares</th>
                    <th>Fees</th>
                    <th>Total <br> Investment</th>
                    <th style=\"width: 95px\">Projected Returns</th>
                    <th style=\"width: 50px\">Status</th>
                    <th style=\"width: 155px\">Action</th>
                </tr>
                <tr>
                    <td>1234</td>
                    <td>Project Tomorrow</td>
                    <td>£550.00</td>
                    <td>1,000</td>
                    <td>£550,000.00</td>
                    <td>£13,750.00</td>
                    <td>£563,750.00</td>
                    <td>3.50%</td>
                    <td><span class=\"label label-success font-normal\">Open</span></td>
                    <td>
                        <a class=\"btn-sm btn-dark-main\">Invest</a>
                        <a class=\"btn-sm btn-dark-main\">See More</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>


{% endblock %}", "AppBundle:Secondarymarket:secondary_market.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Secondarymarket/secondary_market.html.twig");
    }
}
