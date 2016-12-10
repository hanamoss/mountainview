<?php

/* AppBundle:Registration:register.html.twig */
class __TwigTemplate_fa41d3d1839f70b5d7cd9e787efdae6bc87d5d392fed389f5c94991475227cb2 extends Twig_Template
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
        echo "<form role=\"form\" id=\"form_sign_up\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_sign_up");
        echo "\" method=\"POST\">
    <div class=\"mg-book-form-personal\">
        <p style=\"color:red; display: none;\" id=\"pError_signup\"></p>
        <h2 class=\"mg-sec-left-title\">Proceso de Registro</h2>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"mg-book-form-input form-group\">
                    <label>Nombre</label>
                    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSignUp"]) ? $context["formSignUp"] : $this->getContext($context, "formSignUp")), "given_name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"mg-book-form-input form-group\">
                    <label>Apellido</label>
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSignUp"]) ? $context["formSignUp"] : $this->getContext($context, "formSignUp")), "family_name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"mg-book-form-input form-group\">
                    <label>Contraseña</label>
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSignUp"]) ? $context["formSignUp"] : $this->getContext($context, "formSignUp")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "", "data-validation" => "custom", "data-validation-error-msg-custom" => "Your password must contain a minimum of 8 characters and at least one number and one upper case letter.", "data-validation-regexp" => "^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(.{8,30})\$")));
        echo "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"mg-book-form-input form-group\">
                    <label>Confirmar contraseña</label>
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSignUp"]) ? $context["formSignUp"] : $this->getContext($context, "formSignUp")), "confirmPassword", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "", "data-validation" => "confirmation", "data-validation-confirm" => "sign_up_type[password]", "data-validation-error-msg" => "Passwords do not match.")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"mg-book-form-input form-group\">
                    <label>Correo electrónico</label>
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSignUp"]) ? $context["formSignUp"] : $this->getContext($context, "formSignUp")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "", "data-validation" => "email")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"checkbox\">
                    <label>
                        <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"ck_agree\" data-validation=\"required\" data-validation-error-msg=\"Please tick the box to confirm that you have read and agree with our terms and privacy policy.\"> Aceptar nuestros <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("terms");
        echo "\" title=\"Terms of use\" target=\"_blank\">términos de uso</a> y <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("privacy");
        echo "\" title=\"privacy policy\" target=\"_blank\">políticas de privacidad</a>
                    </label>
                </div>
            </div>
        </div>

    </div>
    <div>
   <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_verification");
        echo "\" class=\"btn btn-primary pull-right\">Continuar</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 53,  82 => 45,  71 => 37,  60 => 29,  51 => 23,  40 => 15,  31 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form role=\"form\" id=\"form_sign_up\" action=\"{{ path('app_sign_up') }}\" method=\"POST\">
    <div class=\"mg-book-form-personal\">
        <p style=\"color:red; display: none;\" id=\"pError_signup\"></p>
        <h2 class=\"mg-sec-left-title\">Proceso de Registro</h2>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"mg-book-form-input form-group\">
                    <label>Nombre</label>
                    {{ form_widget(formSignUp.given_name, {'attr': {'class': 'form-control','placeholder':'', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'}}) }}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"mg-book-form-input form-group\">
                    <label>Apellido</label>
                    {{ form_widget(formSignUp.family_name, {'attr': {'class': 'form-control','placeholder':'', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'}}) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"mg-book-form-input form-group\">
                    <label>Contraseña</label>
                    {{ form_widget(formSignUp.password, {'attr': {'class': 'form-control','placeholder':'', 'data-validation':'custom', 'data-validation-error-msg-custom':'Your password must contain a minimum of 8 characters and at least one number and one upper case letter.','data-validation-regexp':'^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(.{8,30})\$' }}) }}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"mg-book-form-input form-group\">
                    <label>Confirmar contraseña</label>
                    {{ form_widget(formSignUp.confirmPassword, {'attr': {'class': 'form-control','placeholder':'', 'data-validation':'confirmation', 'data-validation-confirm':'sign_up_type[password]', 'data-validation-error-msg':'Passwords do not match.'}}) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"mg-book-form-input form-group\">
                    <label>Correo electrónico</label>
                    {{ form_widget(formSignUp.email, {'attr': {'class': 'form-control','placeholder':'', 'data-validation':'email'}}) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"checkbox\">
                    <label>
                        <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"ck_agree\" data-validation=\"required\" data-validation-error-msg=\"Please tick the box to confirm that you have read and agree with our terms and privacy policy.\"> Aceptar nuestros <a href=\"{{ path('terms') }}\" title=\"Terms of use\" target=\"_blank\">términos de uso</a> y <a href=\"{{ path('privacy') }}\" title=\"privacy policy\" target=\"_blank\">políticas de privacidad</a>
                    </label>
                </div>
            </div>
        </div>

    </div>
    <div>
   <a href=\"{{ path('email_verification') }}\" class=\"btn btn-primary pull-right\">Continuar</a>
    </div>
", "AppBundle:Registration:register.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Registration/register.html.twig");
    }
}
