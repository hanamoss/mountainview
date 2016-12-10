<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_a50672cbb45c857ad0eedc1eae43487cd93541ced77c063ac524582634d99dfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"author\" content=\"Crowd Valley\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 10
        $this->displayBlock('description', $context, $blocks);
        echo "\">
    <meta name=\"author\" content=\"Crowd Valley\">
    <meta name=\"keywords\" content=\"\" />

    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Playfair+Display:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!--[if lt IE 9]>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/js/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/js/modernizr.custom.min.js"), "html", null, true);
        echo "\"></script>
</head>

<body>
<div class=\"preloader\"></div>
";
        // line 31
        $context["authenticated"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "authenticated"), "method");
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('header', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('footer', $context, $blocks);
        // line 43
        echo "
";
        // line 45
        echo "<div class=\"modal fade\" id=\"modal-code\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-code\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
        </div>
    </div>
</div>
<!-- Alert modal -->
<div class=\"modal fade\" id=\"modal-error\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-error\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm\">
        <div class=\"alert alert-info fade in\">
            <div id=\"modal-message\">
            </div>
        </div>
    </div>
</div>

";
        // line 62
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "authenticated"), "method")) {
            // line 63
            echo "\t<!-- begin:modal-signin -->
\t<div class=\"modal fade\" id=\"modal-login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-login\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-sm\">
\t\t\t<div class=\"modal-content\">

\t\t\t\t";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Public:signIn"));
            echo "

\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 74
        echo "
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/js/jssor.slider.mini.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/js/classie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/js/selectFx.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/js/starrr.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/js/nivo-lightbox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/js/jquery.shuffle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/js/gmaps.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/js/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/js/jquery.form-validator.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/js/script.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function () {

        \$(document).ajaxError(function myErrorHandler(event, jqXHR, ajaxOptions, thrownError) {
            var msg = '';
            if (jqXHR.status === 0) {
                msg = 'Unable to connect to the Internet.';
            } else if (jqXHR.status == 404) {
                msg = 'Requested page not found. [404]';
            } else if (jqXHR.status == 500) {
                msg = 'Internal Server Error [500].';
            } else if (exception === 'parsererror') {
                msg = 'Requested JSON parse failed.';
            } else if (exception === 'timeout') {
                msg = 'Time out error.';
            } else if (exception === 'abort') {
                msg = 'Ajax request aborted.';
            } else {
                msg = 'Uncaught Error.\\n' + jqXHR.responseText;
            }
            \$(\"#modal-message\").html(msg);
            \$('#modal-error').modal({show: true});
        });
    })
</script>
";
        // line 115
        $this->displayBlock('javascripts', $context, $blocks);
        // line 116
        echo "</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Crowd Valley Starter App";
    }

    // line 10
    public function block_description($context, array $blocks = array())
    {
        echo "Crowd Valley Demo App";
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 33
    public function block_header($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $this->loadTemplate("AppBundle:Common:header.html.twig", "AppBundle::base.html.twig", 34)->display($context);
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $this->loadTemplate("AppBundle:Common:footer.html.twig", "AppBundle::base.html.twig", 41)->display($context);
    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 115,  265 => 41,  262 => 40,  257 => 37,  252 => 34,  249 => 33,  244 => 19,  238 => 10,  232 => 9,  227 => 116,  225 => 115,  196 => 89,  192 => 88,  188 => 87,  184 => 86,  179 => 84,  175 => 83,  171 => 82,  167 => 81,  163 => 80,  159 => 79,  155 => 78,  151 => 77,  147 => 76,  143 => 75,  140 => 74,  131 => 68,  124 => 63,  122 => 62,  104 => 45,  101 => 43,  99 => 40,  96 => 39,  94 => 37,  91 => 36,  89 => 33,  86 => 32,  84 => 31,  76 => 26,  71 => 24,  67 => 23,  60 => 20,  58 => 19,  53 => 17,  49 => 16,  40 => 10,  36 => 9,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"author\" content=\"Crowd Valley\">
    <title>{% block title %}Crowd Valley Starter App{% endblock %}</title>
    <meta name=\"description\" content=\"{% block description %}Crowd Valley Demo App{% endblock %}\">
    <meta name=\"author\" content=\"Crowd Valley\">
    <meta name=\"keywords\" content=\"\" />

    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Playfair+Display:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href=\"{{ asset('bundles/app/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/app/css/font-awesome.min.css') }}\" rel=\"stylesheet\">

    {% block stylesheets %}{% endblock %}
    <link href=\"{{ asset('bundles/app/css/style.css') }}\" rel=\"stylesheet\">

    <!--[if lt IE 9]>
    <script src=\"{{ asset('bundles/app/js/html5shiv.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/app/js/respond.min.js') }}\"></script>
    <![endif]-->
    <script src=\"{{ asset('bundles/app/js/modernizr.custom.min.js') }}\"></script>
</head>

<body>
<div class=\"preloader\"></div>
{% set authenticated = app.session.get('authenticated') %}

{% block header %}
    {% include('AppBundle:Common:header.html.twig') %}
{% endblock %}

{% block body %}
{% endblock %}

{% block footer %}
    {% include('AppBundle:Common:footer.html.twig') %}
{% endblock %}

{# Code popup #}
<div class=\"modal fade\" id=\"modal-code\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-code\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
        </div>
    </div>
</div>
<!-- Alert modal -->
<div class=\"modal fade\" id=\"modal-error\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-error\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm\">
        <div class=\"alert alert-info fade in\">
            <div id=\"modal-message\">
            </div>
        </div>
    </div>
</div>

{# Log In popup #}
{% if not app.session.get('authenticated') %}
\t<!-- begin:modal-signin -->
\t<div class=\"modal fade\" id=\"modal-login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-login\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-sm\">
\t\t\t<div class=\"modal-content\">

\t\t\t\t{{ render(controller('AppBundle:Public:signIn')) }}

\t\t\t</div>
\t\t</div>
\t</div>
{% endif %}

<script src=\"{{ asset('bundles/app/js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('bundles/app/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('bundles/app/js/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('bundles/app/js/jssor.slider.mini.js') }}\"></script>
<script src=\"{{ asset('bundles/app/js/classie.js') }}\"></script>
<script src=\"{{ asset('bundles/app/js/selectFx.js') }}\"></script>
<script src=\"{{ asset('bundles/app/js/bootstrap-datepicker.min.js') }}\"></script>
<script src=\"{{ asset('bundles/app/js/starrr.min.js') }}\"></script>
<script src=\"{{ asset('bundles/app/js/nivo-lightbox.min.js') }}\"></script>
<script src=\"{{ asset('bundles/app/js/jquery.shuffle.min.js') }}\"></script>
<script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
<script src=\"{{ asset('bundles/app/js/gmaps.min.js') }}\"></script>
<script src=\"{{ asset('bundles/app/js/jquery.parallax-1.1.3.js') }}\"></script>
<script src=\"{{ asset('bundles/app/js/jquery.form-validator.js') }}\"></script>
<script src=\"{{ asset('bundles/app/js/script.js') }}\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function () {

        \$(document).ajaxError(function myErrorHandler(event, jqXHR, ajaxOptions, thrownError) {
            var msg = '';
            if (jqXHR.status === 0) {
                msg = 'Unable to connect to the Internet.';
            } else if (jqXHR.status == 404) {
                msg = 'Requested page not found. [404]';
            } else if (jqXHR.status == 500) {
                msg = 'Internal Server Error [500].';
            } else if (exception === 'parsererror') {
                msg = 'Requested JSON parse failed.';
            } else if (exception === 'timeout') {
                msg = 'Time out error.';
            } else if (exception === 'abort') {
                msg = 'Ajax request aborted.';
            } else {
                msg = 'Uncaught Error.\\n' + jqXHR.responseText;
            }
            \$(\"#modal-message\").html(msg);
            \$('#modal-error').modal({show: true});
        });
    })
</script>
{% block javascripts %}{% endblock %}
</body>
</html>", "AppBundle::base.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/base.html.twig");
    }
}
