<?php

/* AppBundle:Public:signin.html.twig */
class __TwigTemplate_cea89ce17b9ae65afdb3322862206df29c71f9d7422c7b73d8cc147315ed5701 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form role=\"form\" id=\"form_sign_in\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sign_in");
        echo "\" method=\"POST\">
\t<div class=\"modal-header\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t<h4 class=\"modal-title\">Login</h4> </div>
\t<div class=\"modal-body\">
\t\t<p style=\"color:red\" id=\"pError\"></p>     
\t\t<div class=\"form-group\">
\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email address", "id" => "emailAddress", "value" => "")));
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Password", "id" => "password", "value" => "")));
        echo "
\t\t</div>
\t\t<div style=\"visibility: hidden\">
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "redirect", array()), 'widget', array("attr" => array("class" => "form-control", "value" => ((array_key_exists("signin_redirect", $context)) ? (_twig_default_filter((isset($context["signin_redirect"]) ? $context["signin_redirect"] : $this->getContext($context, "signin_redirect")), "homepage")) : ("homepage")))));
        echo "
\t\t</div>\t
\t</div>
\t<div class=\"modal-footer  text-left\">
\t\t<p class=\"text-left\">Don't have an account?  <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("signup");
        echo "\">Sign up here.</a></p>
\t\t<p class=\"text-left\"><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("forgot_pwd");
        echo "\" >Forgot password?</a></p>
\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-dark-main btn-block btn-lg"), "label" => "Log In"));
        echo "
\t</div>
</form>            

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Public:signin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  53 => 19,  49 => 18,  42 => 14,  36 => 11,  30 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form role=\"form\" id=\"form_sign_in\" action=\"{{ path('sign_in') }}\" method=\"POST\">
\t<div class=\"modal-header\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t<h4 class=\"modal-title\">Login</h4> </div>
\t<div class=\"modal-body\">
\t\t<p style=\"color:red\" id=\"pError\"></p>     
\t\t<div class=\"form-group\">
\t\t\t{{ form_widget(form.email, {'attr': {'class': 'form-control','placeholder':'Email address', 'id': 'emailAddress', 'value' : ''}}) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_widget(form.password, {'attr': {'class': 'form-control','placeholder':'Password', 'id': 'password', 'value' : ''}}) }}
\t\t</div>
\t\t<div style=\"visibility: hidden\">
\t\t\t{{ form_widget(form.redirect, {'attr': {'class': 'form-control','value': signin_redirect|default('homepage') }}) }}
\t\t</div>\t
\t</div>
\t<div class=\"modal-footer  text-left\">
\t\t<p class=\"text-left\">Don't have an account?  <a href=\"{{ path('signup') }}\">Sign up here.</a></p>
\t\t<p class=\"text-left\"><a href=\"{{ path('forgot_pwd') }}\" >Forgot password?</a></p>
\t\t{{ form_widget(form.submit, {'attr': {'class': 'btn btn-dark-main btn-block btn-lg'}, 'label': 'Log In'} ) }}
\t</div>
</form>            

{#
<script>
    \$(document).ready(function () {
        \$('#form_sign_in').on('submit', function (e) {
            \$('#pError').hide();
            var \$form = \$(this);
            e.stopPropagation();
            \$.ajax({
                type: \"POST\",
                url: \$form.attr('action'),
                data: \$form.serialize(), // serializes the form's elements.
                success: function (data)
                {
                    var obj = JSON.parse(data);
                    //\$('#modal-signup .modal-content').html(data);
                    if (!obj['success']) {
                        \$('#pError').html(obj['error']);
                        \$('#pError').show();
                        return false;
                    } else {
                        __insp.push(['identify', \$('#sign_in_type_email').val()]);
                        // Redirect
                        window.location.href = obj['url'];
                    }
                }
            });

            return false;
        });

        \$('.lk-signup').click(function () {
            \$('#modal-login').modal('hide');
        });
    });
</script>
#}", "AppBundle:Public:signin.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Public/signin.html.twig");
    }
}
