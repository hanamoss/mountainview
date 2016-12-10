<?php

/* AppBundle:Raisecapital:raise_capital.html.twig */
class __TwigTemplate_63760d2b1c74beed61f4c01d9937c8c28d26fc1cae7f7cfd6528b974f1cf03ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Raisecapital:raise_capital.html.twig", 2);
        $this->blocks = array(
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
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
        $context["active"] = "raise_capital";
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["formPrivateCompany"]) ? $context["formPrivateCompany"] : $this->getContext($context, "formPrivateCompany")), array(0 => $this));
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        <div>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 9
            echo "                ";
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                // line 10
                echo "                ";
            } else {
                // line 11
                echo "                ";
            }
            // line 12
            echo "
                ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 19
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        ob_start();
        // line 21
        echo "        ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 22
            echo "            ";
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 23
            echo "        ";
        }
        // line 24
        echo "        <label  for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
            <input type=\"checkbox\" class=\"checkbox\" ";
        // line 25
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "
        </label>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 30
    public function block_title($context, array $blocks = array())
    {
        echo "Raise Capital - Crowd Valley";
    }

    // line 31
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 32
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/css/s3.upload.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "\t<div class=\"mg-page-title parallax\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2>BORROWER APPLICATION FORM</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper mi quis mattis pharetra. Fusce at lectus eget diam efficitur tristique. Maecenas id turpis aliquam sem faucibus dapibus. In a pretium risus.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"mg-page\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"mg-booking-form\">
                        <div id=\"alert-errors\" class=\"alert alert-danger clearfix mt0 mb50\" >
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                            <div class=\"mg-alert-icon pull-left\"><i class=\"fa fa-exclamation\"></i></div>
                            <h3 id=\"errors\" style=\"display: table; padding-left: 20px; margin-top: 10px\">
                                You must validate your email address before completing your funding application
                            </h3>
                        </div>
\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\" id=\"tablist\">
\t\t\t\t\t\t\t<li role=\"presentation\" class=\"active\">
\t\t\t\t\t\t\t\t<a href=\"#register\" aria-controls=\"login\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">1</span><span class=\"mg-bs-bar\"></span>Register</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t<a href=\"#aboutbusiness\" aria-controls=\"personal-info\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">2</span><span class=\"mg-bs-bar\"></span>About Your Organization</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t<a href=\"#offering\" aria-controls=\"documents\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">3</span><span class=\"mg-bs-bar\"></span>Offering</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t<a href=\"#submitapplication\" aria-controls=\"continue\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">4</span>Submit Application</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<div class=\"tab-content\">
                            <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"register\">

                                <div class=\"row\">
                                    <div class=\"col-md-10 col-md-offset-1\">
                                        ";
        // line 81
        $this->loadTemplate("AppBundle:Registration:register.html.twig", "AppBundle:Raisecapital:raise_capital.html.twig", 81)->display($context);
        // line 82
        echo "                                    </div>
                                </div>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"aboutbusiness\">
                                <div class=\"text-center mt50\">
                                    <a class=\"btn btn-default btn-organization-type\" data-org=\"1\">Real Estate</a>
                                    <span>or</span>
                                    <a class=\"btn btn-default btn-organization-type\" data-org=\"2\">Private Company </a>
                                </div>
                                <div id=\"real-estate-type\" class=\"hide-all\">
                                    ";
        // line 92
        $this->loadTemplate("AppBundle:Raisecapital:add_org_real_estate.html.twig", "AppBundle:Raisecapital:raise_capital.html.twig", 92)->display($context);
        // line 93
        echo "                                </div>
                                <div id=\"private-company-type\" class=\"hide-all\">
                                    ";
        // line 95
        $this->loadTemplate("AppBundle:Raisecapital:add_org_private_company.html.twig", "AppBundle:Raisecapital:raise_capital.html.twig", 95)->display($context);
        // line 96
        echo "                                </div>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"offering\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"mg-book-form-billing\">
                                            <h2 class=\"mg-sec-left-title\">Your Offering</h2>
                                            ";
        // line 180
        echo "
                                            <h2 class=\"mg-sec-left-title mt10\">Offering type</h2>
                                            <div class=\"mt10\">
                                                <button class=\"btn btn-default btn-offering-type\" data-offering=\"1\">Debt</button>
                                                <span>or</span>
                                                <button class=\"btn btn-default btn-offering-type\" data-offering=\"2\">Equity </button>
                                            </div>
                                            <div id=\"debt-offering\" class=\"hide-all\">
                                                ";
        // line 188
        $this->loadTemplate("AppBundle:Raisecapital:add_debt_offering.html.twig", "AppBundle:Raisecapital:raise_capital.html.twig", 188)->display($context);
        // line 189
        echo "                                            </div>
                                            <div id=\"equity-offering\" class=\"hide-all\">
                                                ";
        // line 191
        $this->loadTemplate("AppBundle:Raisecapital:add_equity_offering.html.twig", "AppBundle:Raisecapital:raise_capital.html.twig", 191)->display($context);
        // line 192
        echo "                                            </div>
                                        </div>
                                        <div>
                                            ";
        // line 196
        echo "                                            <a href=\"#aboutbusiness\" class=\"btn btn-default btn-prev-tab pull-left\">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"submitapplication\">
                                <br>
                                <div class=\"alert alert-success clearfix\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <div class=\"mg-alert-icon\"><i class=\"fa fa-check\"></i></div>
                                    <h3 class=\"mg-alert-payment\">Congratulations! You have successfully submitted your application.</h3>
                                </div>
                            </div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
    }

    // line 218
    public function block_javascripts($context, array $blocks = array())
    {
        // line 219
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/js/s3.upload.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
\t<script>
        var currentTab = \"";
        // line 222
        echo twig_escape_filter($this->env, (isset($context["current_tab"]) ? $context["current_tab"] : $this->getContext($context, "current_tab")), "html", null, true);
        echo "\";
        var addMoreDocument = function(id, idLink, idContainer, type){
            var put_s3aws_url = \$('#put_s3aws_url').val();
            var accept = '';
            switch(type) {
                case 'image':
                    accept = 'accept=\"image/png, image/gif, image/jpeg\"';
                    break;
                case 'video':
                    accept = '';
                    break;
                default:
                    accept = '';
            }
            \$('#'+idLink).on('click', function (e) {
                e.preventDefault();
                var html = '<div class=\"span-button\"><span class=\"fileinput-button upload-signed\"><button class=\"btn btn-main btn-upload\" name=\"upload\">Upload file</button><p class=\"detail\"></p>';
                html += '<input id=\"'+ id +'\" '+ accept +' name=\"'+id+'[]\"' +'type=\"file\" class=\"s3_upload\" signurl='+ put_s3aws_url +' userCallback=\"s3upload3\">';
                html += '<div class=\"upload_status\"><div class=\"upload_info\"><strong class=\"upload_name\"></strong> - <span class=\"upload_text\"></span></div><div class=\"progress_bar\"><div class=\"percent\">0%</div></div></div></span>' +
                        '<a href=\"javascript:void(0)\" class=\"delete-document\">x Delete</a></div>';
                html += '';
                html += '</div>';
                \$('#'+idContainer).append(html);
            });
            \$('#'+idContainer).on('click', '.delete-document', function (e) {
                e.preventDefault();
                var \$container = \$('#'+idContainer);
                return deleteFile(\$container, \$(this));
            });
        }

        var deleteFile = function(\$target, el) {
            var \$numFiles = \$target.find('.fileinput-button').length;
            if (\$numFiles > 1) {
                el.parent().remove();
            } else {
                var \$parent = el.parent();
                var \$inputFile = \$parent.find('.s3_upload');
                \$inputFile.attr('filename', '');
                \$inputFile.attr('s3_url', '');
                \$parent.find('.upload_status').hide();
                el.remove();
            }
            return true;
        };


        \$(document).ready(function(){
            if (currentTab == 'aboutBusiness') {
                \$('ul#tablist li:nth-child(2) a').click();
                \$('ul#tablist li:first a').click(function() { return false; });
            } else if (currentTab == 'offering') {
                 \$('ul#tablist li:nth-child(3) a').click();
                 \$('ul#tablist li:first a').click(function() { return false; });
            }  else if (currentTab == 'submitapplication') {
                 \$('ul#tablist li:nth-child(4) a').click();
                 \$('ul#tablist li:first a').click(function() { return false; });
            } else {
                \$('ul#tablist li:nth-child(2) a').on('click', function (e) {
                    e.stopPropagation();
                    \$(\"#form_sign_up\").submit();
                });
            }

            \$('.input-datepicker').datepicker({
                startDate: \"dateToday\",
                autoclose: true
            });

            addMoreDocument('images', 'add_more_image', 'images_container', 'image');
            addMoreDocument('images', 'add_more_property_image', 'property_images_container', 'image');

            \$(\".btn-organization-type\").click(function(){
                var type = \$(this).data(\"org\");
                \$(\".hide-all\").hide();
                \$(\".btn-organization-type\").removeClass(\"btn-main\");
                \$(this).addClass(\"btn-main\");
                if(type == 1){
                    \$(\"#real-estate-type\").fadeIn();
                }
                else if(type ==2){
                    \$(\"#private-company-type\").fadeIn();
                }
            });

            \$(\".btn-offering-type\").click(function(){
                var type = \$(this).data(\"offering\");
                \$(\".hide-all\").hide();
                \$(\".btn-offering-type\").removeClass(\"btn-main\");
                \$(this).addClass(\"btn-main\");
                if(type == 1){
                    \$(\"#debt-offering\").fadeIn();
                }
                else if(type ==2){
                    \$(\"#equity-offering\").fadeIn();
                }
            });

            /*var validator = \$(\"#form-application\").validate({
                /!*errorElement: \"div\",
                errorPlacement: function(error, element) {
                    error.appendTo(\"div#errors\");
                },*!/
                rules: {
                    \"email\": {
                        required: true,
                        email: true
                    }
                }
            });*/

            \$(\".btn-nextTab\").click(function(){

                var currentTab = \$(this).parents('.tab-pane');
                var nextTab = \$(this).attr('href');

                var valid = true;
                \$('input[required]', currentTab).each(function(i, v){
                    valid = validator.element(v) && valid;
                });

                if(!valid){
                    \$(\"#alert-errors\").show();
                    return;
                }
                else{
                    \$(\"#alert-errors\").hide();
                    \$(this).tab('show');

                    \$('html, body').animate({
                        scrollTop: \$(\".mg-booking-form\").offset().top - 100
                    }, 300);

                    \$('a[href=\"'+nextTab+'\"]').parents('li').trigger('click');
                    \$('.mg-booking-form > ul > li.active').removeClass('active');
                    \$('a[href=\"'+nextTab+'\"]').parents('li').addClass('active');
                }
            });

            \$('#btn_signUp').on('click', function (e) {
                \$('ul#tablist li:first a').click();
                \$(this).css(\"color\", \"#FFF\");
                \$(\"#form_sign_up\").submit();
            });
            /*if (currentTab == 'aboutBusiness' || currentTab == 'offering' || currentTab == 'submitapplication') {
                //\$('ul#tablist li:nth-child(2) a').click();
                \$('ul#tablist li:first a').click(function() { return false; });
            } else if (currentTab == 'offering') {
                \$('ul#tablist li:nth-child(3) a').click();
                \$('ul#tablist li:first a').click(function() { return false; });
                \$('ul#tablist li:nth-child(2) a').click(function() { return false; });
            }  else if (currentTab == 'submitapplication') {
                \$('ul#tablist li:nth-child(4) a').click();
                \$('ul#tablist li:first a').click(function() { return false; });
                \$('ul#tablist li:nth-child(2) a').click(function() { return false; });
                \$('ul#tablist li:nth-child(3) a').click(function() { return false; });
            } else {
                \$('ul#tablist li:nth-child(2) a').on('click', function (e) {
                    e.stopPropagation();
                    \$(\"#form_sign_up\").submit();
                });
            }*/
            \$('#btn_add_org_real_estate').on('click', function (e) {
                /*\$('ul#tablist li:first a').click();
                \$(this).css(\"color\", \"#FFF\");*/
                \$(\"#form_add_org_real_estate\").submit();
            });
            \$('#btn_add_org_private_company').on('click', function (e) {
                /*\$('ul#tablist li:first a').click();
                 \$(this).css(\"color\", \"#FFF\");*/
                \$(\"#form_add_org_private_company\").submit();
            });
            \$('#btn_add_debt_offering').on('click', function (e) {
                /*\$('ul#tablist li:first a').click();
                 \$(this).css(\"color\", \"#FFF\");*/
                \$(\"#form_add_debt_offering\").submit();
            });
            \$('#btn_add_equity_offering').on('click', function (e) {
                /*\$('ul#tablist li:first a').click();
                 \$(this).css(\"color\", \"#FFF\");*/
                \$(\"#form_add_equity_offering\").submit();
            });
        });

        function s3upload3(target) {
            var \$this = \$(target),
                    filename = \$this.attr('filename'),
                    s3_url = \$this.attr('s3_url'),
                    fileType = \$this.attr('file_type');
            var fileTag = 'logo';
            if (\$this.attr('name') == 'floor_plan[]')
                fileTag = 'floor_plan';
            if (\$this.attr('name') == 'property_logo[]')
                fileTag = 'property_logo';
            var file_json = {\"file_name\": filename, \"url\": s3_url, \"file_type\": fileType, \"tag\": fileTag};
            var str_json = JSON.stringify(file_json);
            \$this.closest('div.file-container').find('input[type=\"hidden\"]').val(str_json);
        }

\t</script>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Raisecapital:raise_capital.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 222,  272 => 220,  267 => 219,  264 => 218,  239 => 196,  234 => 192,  232 => 191,  228 => 189,  226 => 188,  216 => 180,  207 => 96,  205 => 95,  201 => 93,  199 => 92,  187 => 82,  185 => 81,  138 => 36,  135 => 35,  129 => 33,  124 => 32,  121 => 31,  115 => 30,  97 => 25,  92 => 24,  89 => 23,  86 => 22,  83 => 21,  80 => 20,  77 => 19,  71 => 15,  63 => 13,  60 => 12,  57 => 11,  54 => 10,  51 => 9,  47 => 8,  44 => 7,  41 => 6,  38 => 5,  34 => 2,  32 => 3,  30 => 1,  11 => 2,);
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
{% form_theme formPrivateCompany _self %}

{% block choice_widget_expanded %}
    {% spaceless %}
        <div>
            {% for child in form %}
                {% if multiple %}
                {% else %}
                {% endif %}

                {{ form_widget(child) }}
            {% endfor %}
        </div>
    {% endspaceless %}
{% endblock choice_widget_expanded %}

{% block checkbox_widget %}
    {% spaceless %}
        {% if label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label  for=\"{{ id }}\">
            <input type=\"checkbox\" class=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} /> {{ label|trans({}, translation_domain) }}
        </label>
    {% endspaceless %}
{% endblock checkbox_widget %}

{% block title %}Raise Capital - Crowd Valley{% endblock %}
{% block stylesheets %}
    <link href=\"{{ asset('bundles/app/css/s3.upload.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/app/css/bootstrap-datepicker3.min.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
\t<div class=\"mg-page-title parallax\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2>BORROWER APPLICATION FORM</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper mi quis mattis pharetra. Fusce at lectus eget diam efficitur tristique. Maecenas id turpis aliquam sem faucibus dapibus. In a pretium risus.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"mg-page\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"mg-booking-form\">
                        <div id=\"alert-errors\" class=\"alert alert-danger clearfix mt0 mb50\" >
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                            <div class=\"mg-alert-icon pull-left\"><i class=\"fa fa-exclamation\"></i></div>
                            <h3 id=\"errors\" style=\"display: table; padding-left: 20px; margin-top: 10px\">
                                You must validate your email address before completing your funding application
                            </h3>
                        </div>
\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\" id=\"tablist\">
\t\t\t\t\t\t\t<li role=\"presentation\" class=\"active\">
\t\t\t\t\t\t\t\t<a href=\"#register\" aria-controls=\"login\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">1</span><span class=\"mg-bs-bar\"></span>Register</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t<a href=\"#aboutbusiness\" aria-controls=\"personal-info\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">2</span><span class=\"mg-bs-bar\"></span>About Your Organization</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t<a href=\"#offering\" aria-controls=\"documents\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">3</span><span class=\"mg-bs-bar\"></span>Offering</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t<a href=\"#submitapplication\" aria-controls=\"continue\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">4</span>Submit Application</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<div class=\"tab-content\">
                            <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"register\">

                                <div class=\"row\">
                                    <div class=\"col-md-10 col-md-offset-1\">
                                        {% include 'AppBundle:Registration:register.html.twig' %}
                                    </div>
                                </div>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"aboutbusiness\">
                                <div class=\"text-center mt50\">
                                    <a class=\"btn btn-default btn-organization-type\" data-org=\"1\">Real Estate</a>
                                    <span>or</span>
                                    <a class=\"btn btn-default btn-organization-type\" data-org=\"2\">Private Company </a>
                                </div>
                                <div id=\"real-estate-type\" class=\"hide-all\">
                                    {% include 'AppBundle:Raisecapital:add_org_real_estate.html.twig' %}
                                </div>
                                <div id=\"private-company-type\" class=\"hide-all\">
                                    {% include 'AppBundle:Raisecapital:add_org_private_company.html.twig' %}
                                </div>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"offering\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"mg-book-form-billing\">
                                            <h2 class=\"mg-sec-left-title\">Your Offering</h2>
                                            {#<div>
                                                <p>You will need to provide some documents in order to support our screening process.</p>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-3\">
                                                    <div class=\"mg-book-form-input form-group\">
                                                        <label for=\"PaymentType\">Proof of Identity</label>
                                                        <div class=\"upload-group fileinput-button\">
                                                            <button class=\"btn btn-main btn-block\" style=\"margin-bottom: 5px;\" >Upload Document</button>
                                                            <input id=\"\" class=\"s3_upload \" style=\"text-transform: none;cursor:pointer;\" type=\"file\" name=\"file_logo\" signUrl = \"\" userCallback=\"uploadAvatar\" accept=\"image/jpeg,image/png\"/>
                                                            <div class=\"upload_status\" style=\"display: none\">
                                                                <div class=\"upload_info\">
                                                                    <strong class=\"upload_name\"></strong> -
                                                                    <span id=\"id_upload_text\" class=\"upload_text\"></span>
                                                                </div>
                                                                <div class=\"progress_bar\">
                                                                    <div class=\"percent\">0%</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-3\">
                                                    <div class=\"mg-book-form-input form-group\">
                                                        <label>Proof of Registration</label>
                                                        <div class=\"upload-group fileinput-button\">
                                                            <button class=\"btn btn-main btn-block\" style=\"margin-bottom: 5px;\" >Upload Document</button>
                                                            <input id=\"\" class=\"s3_upload \" style=\"text-transform: none;cursor:pointer;\" type=\"file\" name=\"file_logo\" signUrl = \"\" userCallback=\"uploadAvatar\" accept=\"image/jpeg,image/png\"/>
                                                            <div class=\"upload_status\" style=\"display: none\">
                                                                <div class=\"upload_info\">
                                                                    <strong class=\"upload_name\"></strong> -
                                                                    <span id=\"id_upload_text\" class=\"upload_text\"></span>
                                                                </div>
                                                                <div class=\"progress_bar\">
                                                                    <div class=\"percent\">0%</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-3\">
                                                    <div class=\"mg-book-form-input form-group\">
                                                        <label>Articles of Association</label>
                                                        <div class=\"upload-group fileinput-button\">
                                                            <button class=\"btn btn-main btn-block\" style=\"margin-bottom: 5px;\" >Upload Document</button>
                                                            <input id=\"\" class=\"s3_upload \" style=\"text-transform: none;cursor:pointer;\" type=\"file\" name=\"file_logo\" signUrl = \"\" userCallback=\"uploadAvatar\" accept=\"image/jpeg,image/png\"/>
                                                            <div class=\"upload_status\" style=\"display: none\">
                                                                <div class=\"upload_info\">
                                                                    <strong class=\"upload_name\"></strong> -
                                                                    <span id=\"id_upload_text\" class=\"upload_text\"></span>
                                                                </div>
                                                                <div class=\"progress_bar\">
                                                                    <div class=\"percent\">0%</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-3\">
                                                    <div class=\"mg-book-form-input form-group\">
                                                        <label>Shareholder Declaration</label>
                                                        <div class=\"upload-group fileinput-button\">
                                                            <button class=\"btn btn-main btn-block\" style=\"margin-bottom: 5px;\" >Upload Document</button>
                                                            <input id=\"\" class=\"s3_upload \" style=\"text-transform: none;cursor:pointer;\" type=\"file\" name=\"file_logo\" signUrl = \"\" userCallback=\"uploadAvatar\" accept=\"image/jpeg,image/png\"/>
                                                            <div class=\"upload_status\" style=\"display: none\">
                                                                <div class=\"upload_info\">
                                                                    <strong class=\"upload_name\"></strong> -
                                                                    <span id=\"id_upload_text\" class=\"upload_text\"></span>
                                                                </div>
                                                                <div class=\"progress_bar\">
                                                                    <div class=\"percent\">0%</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>#}

                                            <h2 class=\"mg-sec-left-title mt10\">Offering type</h2>
                                            <div class=\"mt10\">
                                                <button class=\"btn btn-default btn-offering-type\" data-offering=\"1\">Debt</button>
                                                <span>or</span>
                                                <button class=\"btn btn-default btn-offering-type\" data-offering=\"2\">Equity </button>
                                            </div>
                                            <div id=\"debt-offering\" class=\"hide-all\">
                                                {% include 'AppBundle:Raisecapital:add_debt_offering.html.twig' %}
                                            </div>
                                            <div id=\"equity-offering\" class=\"hide-all\">
                                                {% include 'AppBundle:Raisecapital:add_equity_offering.html.twig' %}
                                            </div>
                                        </div>
                                        <div>
                                            {#<a href=\"#submitapplication\" class=\"btn btn-dark-main btn-nextTab pull-right\">Next</a>#}
                                            <a href=\"#aboutbusiness\" class=\"btn btn-default btn-prev-tab pull-left\">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"submitapplication\">
                                <br>
                                <div class=\"alert alert-success clearfix\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <div class=\"mg-alert-icon\"><i class=\"fa fa-check\"></i></div>
                                    <h3 class=\"mg-alert-payment\">Congratulations! You have successfully submitted your application.</h3>
                                </div>
                            </div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('bundles/app/js/s3.upload.js') }}\"></script>
    <script src=\"{{ asset('bundles/app/js/jquery.validate.min.js') }}\"></script>
\t<script>
        var currentTab = \"{{ current_tab }}\";
        var addMoreDocument = function(id, idLink, idContainer, type){
            var put_s3aws_url = \$('#put_s3aws_url').val();
            var accept = '';
            switch(type) {
                case 'image':
                    accept = 'accept=\"image/png, image/gif, image/jpeg\"';
                    break;
                case 'video':
                    accept = '';
                    break;
                default:
                    accept = '';
            }
            \$('#'+idLink).on('click', function (e) {
                e.preventDefault();
                var html = '<div class=\"span-button\"><span class=\"fileinput-button upload-signed\"><button class=\"btn btn-main btn-upload\" name=\"upload\">Upload file</button><p class=\"detail\"></p>';
                html += '<input id=\"'+ id +'\" '+ accept +' name=\"'+id+'[]\"' +'type=\"file\" class=\"s3_upload\" signurl='+ put_s3aws_url +' userCallback=\"s3upload3\">';
                html += '<div class=\"upload_status\"><div class=\"upload_info\"><strong class=\"upload_name\"></strong> - <span class=\"upload_text\"></span></div><div class=\"progress_bar\"><div class=\"percent\">0%</div></div></div></span>' +
                        '<a href=\"javascript:void(0)\" class=\"delete-document\">x Delete</a></div>';
                html += '';
                html += '</div>';
                \$('#'+idContainer).append(html);
            });
            \$('#'+idContainer).on('click', '.delete-document', function (e) {
                e.preventDefault();
                var \$container = \$('#'+idContainer);
                return deleteFile(\$container, \$(this));
            });
        }

        var deleteFile = function(\$target, el) {
            var \$numFiles = \$target.find('.fileinput-button').length;
            if (\$numFiles > 1) {
                el.parent().remove();
            } else {
                var \$parent = el.parent();
                var \$inputFile = \$parent.find('.s3_upload');
                \$inputFile.attr('filename', '');
                \$inputFile.attr('s3_url', '');
                \$parent.find('.upload_status').hide();
                el.remove();
            }
            return true;
        };


        \$(document).ready(function(){
            if (currentTab == 'aboutBusiness') {
                \$('ul#tablist li:nth-child(2) a').click();
                \$('ul#tablist li:first a').click(function() { return false; });
            } else if (currentTab == 'offering') {
                 \$('ul#tablist li:nth-child(3) a').click();
                 \$('ul#tablist li:first a').click(function() { return false; });
            }  else if (currentTab == 'submitapplication') {
                 \$('ul#tablist li:nth-child(4) a').click();
                 \$('ul#tablist li:first a').click(function() { return false; });
            } else {
                \$('ul#tablist li:nth-child(2) a').on('click', function (e) {
                    e.stopPropagation();
                    \$(\"#form_sign_up\").submit();
                });
            }

            \$('.input-datepicker').datepicker({
                startDate: \"dateToday\",
                autoclose: true
            });

            addMoreDocument('images', 'add_more_image', 'images_container', 'image');
            addMoreDocument('images', 'add_more_property_image', 'property_images_container', 'image');

            \$(\".btn-organization-type\").click(function(){
                var type = \$(this).data(\"org\");
                \$(\".hide-all\").hide();
                \$(\".btn-organization-type\").removeClass(\"btn-main\");
                \$(this).addClass(\"btn-main\");
                if(type == 1){
                    \$(\"#real-estate-type\").fadeIn();
                }
                else if(type ==2){
                    \$(\"#private-company-type\").fadeIn();
                }
            });

            \$(\".btn-offering-type\").click(function(){
                var type = \$(this).data(\"offering\");
                \$(\".hide-all\").hide();
                \$(\".btn-offering-type\").removeClass(\"btn-main\");
                \$(this).addClass(\"btn-main\");
                if(type == 1){
                    \$(\"#debt-offering\").fadeIn();
                }
                else if(type ==2){
                    \$(\"#equity-offering\").fadeIn();
                }
            });

            /*var validator = \$(\"#form-application\").validate({
                /!*errorElement: \"div\",
                errorPlacement: function(error, element) {
                    error.appendTo(\"div#errors\");
                },*!/
                rules: {
                    \"email\": {
                        required: true,
                        email: true
                    }
                }
            });*/

            \$(\".btn-nextTab\").click(function(){

                var currentTab = \$(this).parents('.tab-pane');
                var nextTab = \$(this).attr('href');

                var valid = true;
                \$('input[required]', currentTab).each(function(i, v){
                    valid = validator.element(v) && valid;
                });

                if(!valid){
                    \$(\"#alert-errors\").show();
                    return;
                }
                else{
                    \$(\"#alert-errors\").hide();
                    \$(this).tab('show');

                    \$('html, body').animate({
                        scrollTop: \$(\".mg-booking-form\").offset().top - 100
                    }, 300);

                    \$('a[href=\"'+nextTab+'\"]').parents('li').trigger('click');
                    \$('.mg-booking-form > ul > li.active').removeClass('active');
                    \$('a[href=\"'+nextTab+'\"]').parents('li').addClass('active');
                }
            });

            \$('#btn_signUp').on('click', function (e) {
                \$('ul#tablist li:first a').click();
                \$(this).css(\"color\", \"#FFF\");
                \$(\"#form_sign_up\").submit();
            });
            /*if (currentTab == 'aboutBusiness' || currentTab == 'offering' || currentTab == 'submitapplication') {
                //\$('ul#tablist li:nth-child(2) a').click();
                \$('ul#tablist li:first a').click(function() { return false; });
            } else if (currentTab == 'offering') {
                \$('ul#tablist li:nth-child(3) a').click();
                \$('ul#tablist li:first a').click(function() { return false; });
                \$('ul#tablist li:nth-child(2) a').click(function() { return false; });
            }  else if (currentTab == 'submitapplication') {
                \$('ul#tablist li:nth-child(4) a').click();
                \$('ul#tablist li:first a').click(function() { return false; });
                \$('ul#tablist li:nth-child(2) a').click(function() { return false; });
                \$('ul#tablist li:nth-child(3) a').click(function() { return false; });
            } else {
                \$('ul#tablist li:nth-child(2) a').on('click', function (e) {
                    e.stopPropagation();
                    \$(\"#form_sign_up\").submit();
                });
            }*/
            \$('#btn_add_org_real_estate').on('click', function (e) {
                /*\$('ul#tablist li:first a').click();
                \$(this).css(\"color\", \"#FFF\");*/
                \$(\"#form_add_org_real_estate\").submit();
            });
            \$('#btn_add_org_private_company').on('click', function (e) {
                /*\$('ul#tablist li:first a').click();
                 \$(this).css(\"color\", \"#FFF\");*/
                \$(\"#form_add_org_private_company\").submit();
            });
            \$('#btn_add_debt_offering').on('click', function (e) {
                /*\$('ul#tablist li:first a').click();
                 \$(this).css(\"color\", \"#FFF\");*/
                \$(\"#form_add_debt_offering\").submit();
            });
            \$('#btn_add_equity_offering').on('click', function (e) {
                /*\$('ul#tablist li:first a').click();
                 \$(this).css(\"color\", \"#FFF\");*/
                \$(\"#form_add_equity_offering\").submit();
            });
        });

        function s3upload3(target) {
            var \$this = \$(target),
                    filename = \$this.attr('filename'),
                    s3_url = \$this.attr('s3_url'),
                    fileType = \$this.attr('file_type');
            var fileTag = 'logo';
            if (\$this.attr('name') == 'floor_plan[]')
                fileTag = 'floor_plan';
            if (\$this.attr('name') == 'property_logo[]')
                fileTag = 'property_logo';
            var file_json = {\"file_name\": filename, \"url\": s3_url, \"file_type\": fileType, \"tag\": fileTag};
            var str_json = JSON.stringify(file_json);
            \$this.closest('div.file-container').find('input[type=\"hidden\"]').val(str_json);
        }

\t</script>
{% endblock %}", "AppBundle:Raisecapital:raise_capital.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Raisecapital/raise_capital.html.twig");
    }
}
