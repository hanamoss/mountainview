<?php

/* AppBundle:Raisecapital:my_applications.html.twig */
class __TwigTemplate_291777d9e2d4c2bc0df1226c72ca5d133df6a5c3096d43cae2d356c536c9207c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Raisecapital:my_applications.html.twig", 2);
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
        $context["active"] = "raise_capital";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "My Applications - Crowd Valley";
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
                    <h2>My Applications</h2>
                    <p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"mg-about-features\">
        <div class=\"container\">
            <table class=\"table table-responsive\">
                <tr style=\"text-transform: uppercase\">
                    <th style=\"width: 30px\"></th>
                    <th>Application ID</th>
                    <th>Created At</th>
                    <th>Application Name</th>
                    <th>Status</th>
                    <th style=\"width: 260px\">Action</th>
                </tr>
                <tr>
                    <td><i class=\"fa fa-arrow-circle-down btn-pull-up\" data-id=\"1\"></i></td>
                    <td>1234</td>
                    <td>1st January 2016</td>
                    <td>Project Tomorrow</td>
                    <td><span class=\"label label-warning font-normal\">Draft</span></td>
                    <td>
                        <a class=\" btn-sm btn-dark-main\">Submit</a>
                        <a class=\" btn-sm btn-dark-main\">Edit</a>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("repayment");
        echo "\" class=\" btn-sm btn-dark-main\">Create Repayment</a>
                    </td>
                </tr>
                <tr class=\"tb-1 tb-hide\">
                    <td></td>
                    <td colspan=\"5\">
                        <table class=\"table table-detail\">
                            <tr>
                                <th>ID</th>
                                <th>Created At</th>
                                <th>Offering Name</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>123456</td>
                                <td>1st January 2016</td>
                                <td>Funding Round 1</td>
                                <td>Debt</td>
                                <td><span class=\"label label-warning font-normal\">Draft</span></td>
                                <td>
                                    <a class=\" btn-sm btn-dark-main\">Submit</a>
                                    <a class=\" btn-sm btn-dark-main\">Edit</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td><i class=\"fa fa-arrow-circle-down btn-pull-up\" data-id=\"2\"></i></td>
                    <td>1234</td>
                    <td>1st January 2016</td>
                    <td>Project Tomorrow</td>
                    <td><span class=\"label label-warning font-normal\">Draft</span></td>
                    <td>
                        <a class=\" btn-sm btn-dark-main\">Submit</a>
                        <a class=\" btn-sm btn-dark-main\">Edit</a>
                        <a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("repayment");
        echo "\" class=\" btn-sm btn-dark-main\">Create Repayment</a>
                    </td>
                </tr>
                <tr class=\"tb-2 tb-hide\">
                    <td></td>
                    <td colspan=\"5\">
                        <table class=\"table table-detail\" >
                            <tr>
                                <th>ID</th>
                                <th>Created At</th>
                                <th>Offering Name</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>123456</td>
                                <td>1st January 2016</td>
                                <td>Funding Round 1</td>
                                <td>Debt</td>
                                <td><span class=\"label label-warning font-normal\">Draft</span></td>
                                <td>
                                    <a class=\" btn-sm btn-dark-main\">Submit</a>
                                    <a class=\" btn-sm btn-dark-main\">Edit</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>


";
    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        // line 113
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$(\".btn-pull-up\").click(function(){
                var tableId = \$(this).data('id');
                if(\$(this).hasClass('open')){
                    \$(\".tb-\"+tableId).hide();
                    \$(this).addClass(\"fa-arrow-circle-down\");
                    \$(this).removeClass(\"open fa-arrow-circle-up\");
                }
                else{
                    \$(\".tb-\"+tableId).show();
                    \$(this).addClass(\"open fa-arrow-circle-up\");
                    \$(this).removeClass(\"fa-arrow-circle-down\");
                }

            });
        })
    </script>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Raisecapital:my_applications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 113,  155 => 112,  116 => 76,  75 => 38,  42 => 7,  39 => 6,  33 => 4,  29 => 2,  27 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set active = 'raise_capital' %}
{% extends 'AppBundle::base.html.twig' %}

{% block title %}My Applications - Crowd Valley{% endblock %}

{% block body %}

    <div class=\"mg-page-title parallax\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>My Applications</h2>
                    <p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"mg-about-features\">
        <div class=\"container\">
            <table class=\"table table-responsive\">
                <tr style=\"text-transform: uppercase\">
                    <th style=\"width: 30px\"></th>
                    <th>Application ID</th>
                    <th>Created At</th>
                    <th>Application Name</th>
                    <th>Status</th>
                    <th style=\"width: 260px\">Action</th>
                </tr>
                <tr>
                    <td><i class=\"fa fa-arrow-circle-down btn-pull-up\" data-id=\"1\"></i></td>
                    <td>1234</td>
                    <td>1st January 2016</td>
                    <td>Project Tomorrow</td>
                    <td><span class=\"label label-warning font-normal\">Draft</span></td>
                    <td>
                        <a class=\" btn-sm btn-dark-main\">Submit</a>
                        <a class=\" btn-sm btn-dark-main\">Edit</a>
                        <a href=\"{{ path(\"repayment\") }}\" class=\" btn-sm btn-dark-main\">Create Repayment</a>
                    </td>
                </tr>
                <tr class=\"tb-1 tb-hide\">
                    <td></td>
                    <td colspan=\"5\">
                        <table class=\"table table-detail\">
                            <tr>
                                <th>ID</th>
                                <th>Created At</th>
                                <th>Offering Name</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>123456</td>
                                <td>1st January 2016</td>
                                <td>Funding Round 1</td>
                                <td>Debt</td>
                                <td><span class=\"label label-warning font-normal\">Draft</span></td>
                                <td>
                                    <a class=\" btn-sm btn-dark-main\">Submit</a>
                                    <a class=\" btn-sm btn-dark-main\">Edit</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td><i class=\"fa fa-arrow-circle-down btn-pull-up\" data-id=\"2\"></i></td>
                    <td>1234</td>
                    <td>1st January 2016</td>
                    <td>Project Tomorrow</td>
                    <td><span class=\"label label-warning font-normal\">Draft</span></td>
                    <td>
                        <a class=\" btn-sm btn-dark-main\">Submit</a>
                        <a class=\" btn-sm btn-dark-main\">Edit</a>
                        <a href=\"{{ path(\"repayment\") }}\" class=\" btn-sm btn-dark-main\">Create Repayment</a>
                    </td>
                </tr>
                <tr class=\"tb-2 tb-hide\">
                    <td></td>
                    <td colspan=\"5\">
                        <table class=\"table table-detail\" >
                            <tr>
                                <th>ID</th>
                                <th>Created At</th>
                                <th>Offering Name</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>123456</td>
                                <td>1st January 2016</td>
                                <td>Funding Round 1</td>
                                <td>Debt</td>
                                <td><span class=\"label label-warning font-normal\">Draft</span></td>
                                <td>
                                    <a class=\" btn-sm btn-dark-main\">Submit</a>
                                    <a class=\" btn-sm btn-dark-main\">Edit</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>


{% endblock %}

{% block javascripts %}
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$(\".btn-pull-up\").click(function(){
                var tableId = \$(this).data('id');
                if(\$(this).hasClass('open')){
                    \$(\".tb-\"+tableId).hide();
                    \$(this).addClass(\"fa-arrow-circle-down\");
                    \$(this).removeClass(\"open fa-arrow-circle-up\");
                }
                else{
                    \$(\".tb-\"+tableId).show();
                    \$(this).addClass(\"open fa-arrow-circle-up\");
                    \$(this).removeClass(\"fa-arrow-circle-down\");
                }

            });
        })
    </script>
{% endblock %}", "AppBundle:Raisecapital:my_applications.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Raisecapital/my_applications.html.twig");
    }
}
