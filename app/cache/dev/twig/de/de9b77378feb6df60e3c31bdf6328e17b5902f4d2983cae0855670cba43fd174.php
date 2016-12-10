<?php

/* AppBundle:Public:repayment.html.twig */
class __TwigTemplate_ed36d2f5a93f0146495c79daffe6961f9e5991e891b578eeb191cf5d3987256f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Public:repayment.html.twig", 2);
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
        $context["active"] = "user";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Repayment";
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
                    <h2>REPAYMENT</h2>
                </div>
            </div>
        </div>
    </div>
    <div class=\"mg-page\">
        <div class=\"container\">
            <h1 class=\"text-center mb30\" style=\"color: #e7b315\">DIVIDEND REPAYMENT</h1>
            <form action=\"\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label for=\"\">Organization </label>
                            <select class=\"form-control\">
                                <option value=\"\">Option 1</option>
                                <option value=\"\">Option 2</option>
                                <option value=\"\">Option 3</option>
                                <option value=\"\">Option 4</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label for=\"\">Date</label>
                            <input type=\"text\" class=\"form-control input-datepicker\">
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label for=\"\">Amount</label>
                            <input type=\"text\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label for=\"\" style=\"display: block\">&nbsp;</label>
                            <button type=\"submit\" class=\"btn btn-main\">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
            <br>
            <h3 class=\"text-center mb30\">TRANSACTION HISTORY</h3>
            <table class=\"table\">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Repayment</th>
                    <th>Due Date</th>
                </tr>
                <tr>
                    <td>payment #1</td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td> Lipsum</td>
                    <td> 1/1/2016</td>
                </tr>
                <tr>
                    <td>payment #1</td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td> Lipsum</td>
                    <td> 1/1/2016</td>
                </tr>
                <tr>
                    <td>payment #1</td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td> Lipsum</td>
                    <td> 1/1/2016</td>
                </tr>
            </table>
        </div>
    </div>

";
    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        // line 88
        echo "    <script>
        \$(document).ready(function() {
            \$('.input-datepicker').datepicker({
                startDate: \"dateToday\",
                autoclose: true
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Public:repayment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 88,  125 => 87,  42 => 7,  39 => 6,  33 => 4,  29 => 2,  27 => 1,  11 => 2,);
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

{% block title %}Repayment{% endblock %}

{% block body %}

    <div class=\"mg-page-title parallax\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>REPAYMENT</h2>
                </div>
            </div>
        </div>
    </div>
    <div class=\"mg-page\">
        <div class=\"container\">
            <h1 class=\"text-center mb30\" style=\"color: #e7b315\">DIVIDEND REPAYMENT</h1>
            <form action=\"\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label for=\"\">Organization </label>
                            <select class=\"form-control\">
                                <option value=\"\">Option 1</option>
                                <option value=\"\">Option 2</option>
                                <option value=\"\">Option 3</option>
                                <option value=\"\">Option 4</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label for=\"\">Date</label>
                            <input type=\"text\" class=\"form-control input-datepicker\">
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label for=\"\">Amount</label>
                            <input type=\"text\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label for=\"\" style=\"display: block\">&nbsp;</label>
                            <button type=\"submit\" class=\"btn btn-main\">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
            <br>
            <h3 class=\"text-center mb30\">TRANSACTION HISTORY</h3>
            <table class=\"table\">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Repayment</th>
                    <th>Due Date</th>
                </tr>
                <tr>
                    <td>payment #1</td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td> Lipsum</td>
                    <td> 1/1/2016</td>
                </tr>
                <tr>
                    <td>payment #1</td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td> Lipsum</td>
                    <td> 1/1/2016</td>
                </tr>
                <tr>
                    <td>payment #1</td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td> Lipsum</td>
                    <td> 1/1/2016</td>
                </tr>
            </table>
        </div>
    </div>

{% endblock %}
{% block javascripts %}
    <script>
        \$(document).ready(function() {
            \$('.input-datepicker').datepicker({
                startDate: \"dateToday\",
                autoclose: true
            });
        });
    </script>
{% endblock %}", "AppBundle:Public:repayment.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Public/repayment.html.twig");
    }
}
