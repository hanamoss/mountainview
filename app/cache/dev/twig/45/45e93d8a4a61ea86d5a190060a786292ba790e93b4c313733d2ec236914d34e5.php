<?php

/* AppBundle:Profile:my_wallet.html.twig */
class __TwigTemplate_ca790278d4c00cb0cf638cd2b38f518d02b4012508ffcd61859270a8c1cec553 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Profile:my_wallet.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $context["active"] = "profile";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "My wallet - Crowd Valley";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/css/s3.upload.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
    <div class=\"mg-page-title parallax\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Mi Cartera de Inversión </h2>
                    <p>Transfiere dinero a tu cuenta y empieza a invertir en proyectos de tu preferencia.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"mg-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-sm-12 pull-right\">
                    <div class=\"mb50\">
                        <div class=\"wallet-total\">
                            <div class=\"row\">
                                <div class=\"col-md-7\">
                                    <div >Saldo Capital:</div>
                                    <div class=\"h1 mt0 mb0\">\$50,000</div>
                                </div>
                                <div class=\"col-md-5\">
                                    <div class=\"wallet-buttons text-right\">
                                        <button class=\"btn btn-default btn-modal-withdraw\" data-toggle=\"modal\" data-target=\"#modal_withdraw\">Retiro</button>
                                        <button class=\"btn btn-default btn-modal-addFunds\" data-toggle=\"modal\" data-target=\"#modal_addFunds\">Deposito</button>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class=\"mb30\">
                        <h2 class=\"mg-sec-left-title\">Estado de cuenta</h2>
                        <table class=\"table\" id=\"statement\">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Descripción</th>
                                    <th style=\"width:150px\">Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>16/10/16 13:07:46</td>
                                    <td>
                                        Investment in Home Grown Organization (ID: 104)
                                    </td>
                                    <td>£-200</td>
                                </tr>
                                <tr>
                                    <td>16/10/15 13:07:50</td>
                                    <td>
                                        Investment in Home Grown Organization (ID: 105)
                                    </td>
                                    <td>£-200</td>
                                </tr>
                                <tr>
                                    <td>20/10/15 10:19:51</td>
                                    <td>
                                        Investment in Shrubbery Road (ID: 119)
                                    </td>
                                    <td>£-200</td>
                                </tr>
                                <tr>
                                    <td>20/10/15 10:19:53</td>
                                    <td>
                                        Investment in Shrubbery Road (ID: 120)
                                    </td>
                                    <td>£-200</td>
                                </tr>
                                <tr>
                                    <td>20/10/15 10:12:38</td>
                                    <td>
                                        Investment in Shrubbery Road (ID: 118)
                                    </td>
                                    <td>£-900</td>
                                </tr>
                                <tr>
                                    <td>13/11/15 09:11:10</td>
                                    <td>
                                        Investment in Home Grown Organization (ID: 181)
                                    </td>
                                    <td>£-1,000</td>
                                </tr>
                                <tr>
                                    <td>08/02/16 10:51:03</td>
                                    <td>
                                        Investment in 11 London Road (ID: 493)
                                    </td>
                                    <td>£-10,000</td>
                                </tr>
                                <tr>
                                    <td>09/12/15 04:42:34</td>
                                    <td>
                                        Investment in Home Grown Organization (ID: 266)
                                    </td>
                                    <td>£-25,000</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th class=\"text-right\">Total</th>
                                    <th>£0</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class=\"mb30\">
                        <h2 class=\"mg-sec-left-title\">Personal Customer Referral Number</h2>
                        <div>
                            <span class=\"h4\">REF2755Ukc</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-12 pull-left\">
                    <div class=\"mg-widget-area\">
                        <aside class=\"mg-widget\">
                            <h2 class=\"mg-widget-title\">MI CUENTA</h2>
                            <ul>
                                <li><a href=\"";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_profile");
        echo "\"><i class=\"fa fa-user\"></i> Mi perfil</a></li>
                                <li><a href=\"";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("change_password");
        echo "\"><i class=\"fa fa-key\"></i> Contraseña y Seguridad</a></li>
                                <li class=\"active\"><a href=\"";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_wallet");
        echo "\"><i class=\"fa fa-money\"></i> Mi Cartera</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal withdraw -->
    <div class=\"modal fade\" id=\"modal_withdraw\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_withdraw\">
        <div class=\"modal-dialog modal-sm\" role=\"document\">
            <div class=\"modal-content \">
                <form id=\"form-withdraw\" action=\"\" method=\"POST\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\" id=\"\">Withdraw</h4>
                    </div>
                    <div class=\"modal-body text-left\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <p>
                                    Cash: £1000<br>
                                    Credits: £2000</br>
                                    <b>TOTAL: £3000</b>
                                </p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"Amount\">Amount</label>
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\"><i class=\"fa fa-dollar\"></i></span>
                                        <input type=\"text\" class=\"form-control format-currency\" id=\"withdraw-amount-field\" placeholder=\"\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"account_number\">Account Number</label>
                                    <input type=\"text\" class=\"form-control\" name=\"account_number\" id=\"account-number\" placeholder=\"XXXXXXXX\" >
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"sort_code\">Sort Code</label>
                                    <input type=\"text\" class=\"form-control\" id=\"sort-code-field\" placeholder=\"XX-XX-XX\">
                                </div>
                                <div class=\"text-italic\" style=\"margin-top: 15px\"><i>Please note that credit amounts cannot be withdrawn</i></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer \">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <button type=\"button\" class=\"btn btn-default btn-block\" data-dismiss=\"modal\">Close</button>
                            </div>
                            <div class=\"col-md-6\">
                                <button type=\"button\" id=\"btn-submit\" class=\"btn btn-main  btn-block\">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal withdraw -->
    <!-- Modal add fund -->
    <div class=\"modal fade\" id=\"modal_addFunds\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_withdraw\">
        <div class=\"modal-dialog modal-sm\" role=\"document\">
            <div class=\"modal-content \">
                <form id=\"form-withdraw\" action=\"\" method=\"POST\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\" id=\"\">Pay-in</h4>
                    </div>
                    <div class=\"modal-body text-left\">

                        <p>
                            Please fill in following information for transferring funds
                        </p>

                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"Amount\">Amount</label>
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\"><i class=\"fa fa-dollar\"></i></span>
                                        <input type=\"text\" class=\"form-control format-currency\" id=\"amount\" placeholder=\"\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"date\">Date</label>
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></span>
                                        <input type=\"text\" class=\"form-control input-datepicker\" name=\"date\" id=\"date\" placeholder=\"\" >
                                    </div>

                                </div>
                                <div class=\"form-group\">
                                    <label for=\"customerID\">Customer ID</label>
                                    <input type=\"text\" class=\"form-control\" id=\"customerID\" placeholder=\"\">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer \">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <button type=\"button\" class=\"btn btn-default btn-block\" data-dismiss=\"modal\">Cancel</button>
                            </div>
                            <div class=\"col-md-6\">
                                <button type=\"button\" id=\"btn-submit\" class=\"btn btn-main  btn-block\">Process</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal add fund -->
";
    }

    // line 252
    public function block_javascripts($context, array $blocks = array())
    {
        // line 253
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
        return "AppBundle:Profile:my_wallet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 253,  307 => 252,  184 => 132,  180 => 131,  176 => 130,  52 => 8,  49 => 7,  43 => 6,  40 => 5,  34 => 4,  30 => 2,  28 => 1,  11 => 2,);
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

{% block title %}My wallet - Crowd Valley{% endblock %}
{% block stylesheets %}
    <link href=\"{{ asset('bundles/app/css/s3.upload.css') }}\" rel=\"stylesheet\">{% endblock %}
{% block body %}

    <div class=\"mg-page-title parallax\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Mi Cartera de Inversión </h2>
                    <p>Transfiere dinero a tu cuenta y empieza a invertir en proyectos de tu preferencia.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"mg-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-sm-12 pull-right\">
                    <div class=\"mb50\">
                        <div class=\"wallet-total\">
                            <div class=\"row\">
                                <div class=\"col-md-7\">
                                    <div >Saldo Capital:</div>
                                    <div class=\"h1 mt0 mb0\">\$50,000</div>
                                </div>
                                <div class=\"col-md-5\">
                                    <div class=\"wallet-buttons text-right\">
                                        <button class=\"btn btn-default btn-modal-withdraw\" data-toggle=\"modal\" data-target=\"#modal_withdraw\">Retiro</button>
                                        <button class=\"btn btn-default btn-modal-addFunds\" data-toggle=\"modal\" data-target=\"#modal_addFunds\">Deposito</button>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class=\"mb30\">
                        <h2 class=\"mg-sec-left-title\">Estado de cuenta</h2>
                        <table class=\"table\" id=\"statement\">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Descripción</th>
                                    <th style=\"width:150px\">Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>16/10/16 13:07:46</td>
                                    <td>
                                        Investment in Home Grown Organization (ID: 104)
                                    </td>
                                    <td>£-200</td>
                                </tr>
                                <tr>
                                    <td>16/10/15 13:07:50</td>
                                    <td>
                                        Investment in Home Grown Organization (ID: 105)
                                    </td>
                                    <td>£-200</td>
                                </tr>
                                <tr>
                                    <td>20/10/15 10:19:51</td>
                                    <td>
                                        Investment in Shrubbery Road (ID: 119)
                                    </td>
                                    <td>£-200</td>
                                </tr>
                                <tr>
                                    <td>20/10/15 10:19:53</td>
                                    <td>
                                        Investment in Shrubbery Road (ID: 120)
                                    </td>
                                    <td>£-200</td>
                                </tr>
                                <tr>
                                    <td>20/10/15 10:12:38</td>
                                    <td>
                                        Investment in Shrubbery Road (ID: 118)
                                    </td>
                                    <td>£-900</td>
                                </tr>
                                <tr>
                                    <td>13/11/15 09:11:10</td>
                                    <td>
                                        Investment in Home Grown Organization (ID: 181)
                                    </td>
                                    <td>£-1,000</td>
                                </tr>
                                <tr>
                                    <td>08/02/16 10:51:03</td>
                                    <td>
                                        Investment in 11 London Road (ID: 493)
                                    </td>
                                    <td>£-10,000</td>
                                </tr>
                                <tr>
                                    <td>09/12/15 04:42:34</td>
                                    <td>
                                        Investment in Home Grown Organization (ID: 266)
                                    </td>
                                    <td>£-25,000</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th class=\"text-right\">Total</th>
                                    <th>£0</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class=\"mb30\">
                        <h2 class=\"mg-sec-left-title\">Personal Customer Referral Number</h2>
                        <div>
                            <span class=\"h4\">REF2755Ukc</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-12 pull-left\">
                    <div class=\"mg-widget-area\">
                        <aside class=\"mg-widget\">
                            <h2 class=\"mg-widget-title\">MI CUENTA</h2>
                            <ul>
                                <li><a href=\"{{ path('my_profile') }}\"><i class=\"fa fa-user\"></i> Mi perfil</a></li>
                                <li><a href=\"{{ path('change_password') }}\"><i class=\"fa fa-key\"></i> Contraseña y Seguridad</a></li>
                                <li class=\"active\"><a href=\"{{ path('my_wallet') }}\"><i class=\"fa fa-money\"></i> Mi Cartera</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal withdraw -->
    <div class=\"modal fade\" id=\"modal_withdraw\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_withdraw\">
        <div class=\"modal-dialog modal-sm\" role=\"document\">
            <div class=\"modal-content \">
                <form id=\"form-withdraw\" action=\"\" method=\"POST\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\" id=\"\">Withdraw</h4>
                    </div>
                    <div class=\"modal-body text-left\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <p>
                                    Cash: £1000<br>
                                    Credits: £2000</br>
                                    <b>TOTAL: £3000</b>
                                </p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"Amount\">Amount</label>
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\"><i class=\"fa fa-dollar\"></i></span>
                                        <input type=\"text\" class=\"form-control format-currency\" id=\"withdraw-amount-field\" placeholder=\"\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"account_number\">Account Number</label>
                                    <input type=\"text\" class=\"form-control\" name=\"account_number\" id=\"account-number\" placeholder=\"XXXXXXXX\" >
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"sort_code\">Sort Code</label>
                                    <input type=\"text\" class=\"form-control\" id=\"sort-code-field\" placeholder=\"XX-XX-XX\">
                                </div>
                                <div class=\"text-italic\" style=\"margin-top: 15px\"><i>Please note that credit amounts cannot be withdrawn</i></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer \">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <button type=\"button\" class=\"btn btn-default btn-block\" data-dismiss=\"modal\">Close</button>
                            </div>
                            <div class=\"col-md-6\">
                                <button type=\"button\" id=\"btn-submit\" class=\"btn btn-main  btn-block\">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal withdraw -->
    <!-- Modal add fund -->
    <div class=\"modal fade\" id=\"modal_addFunds\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_withdraw\">
        <div class=\"modal-dialog modal-sm\" role=\"document\">
            <div class=\"modal-content \">
                <form id=\"form-withdraw\" action=\"\" method=\"POST\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\" id=\"\">Pay-in</h4>
                    </div>
                    <div class=\"modal-body text-left\">

                        <p>
                            Please fill in following information for transferring funds
                        </p>

                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"Amount\">Amount</label>
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\"><i class=\"fa fa-dollar\"></i></span>
                                        <input type=\"text\" class=\"form-control format-currency\" id=\"amount\" placeholder=\"\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"date\">Date</label>
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></span>
                                        <input type=\"text\" class=\"form-control input-datepicker\" name=\"date\" id=\"date\" placeholder=\"\" >
                                    </div>

                                </div>
                                <div class=\"form-group\">
                                    <label for=\"customerID\">Customer ID</label>
                                    <input type=\"text\" class=\"form-control\" id=\"customerID\" placeholder=\"\">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer \">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <button type=\"button\" class=\"btn btn-default btn-block\" data-dismiss=\"modal\">Cancel</button>
                            </div>
                            <div class=\"col-md-6\">
                                <button type=\"button\" id=\"btn-submit\" class=\"btn btn-main  btn-block\">Process</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal add fund -->
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
{% endblock %}", "AppBundle:Profile:my_wallet.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Profile/my_wallet.html.twig");
    }
}
