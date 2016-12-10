<?php

/* AppBundle:Registration:signup.html.twig */
class __TwigTemplate_bac3bad1875f4cd5c44f422b130fc56ef4b4694efde18b6c446ef5a0eea54786 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Registration:signup.html.twig", 2);
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
        echo "Registrate - Invierte PTY";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<div class=\"mg-page-title parallax\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2>REGÍSTRATE</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tCrear tu cuenta es sencillo
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

\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\" id=\"tablist\">
\t\t\t\t\t\t\t<li role=\"presentation\" class=\"active\">
\t\t\t\t\t\t\t\t<a href=\"#register\" aria-controls=\"login\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">1</span><span class=\"mg-bs-bar\"></span>Registro</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t<a href=\"#kyc\" aria-controls=\"personal-info\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">2</span><span class=\"mg-bs-bar\"></span>Detalles de Usuario</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t<a href=\"#fundwallet\" aria-controls=\"documents\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">3</span><span class=\"mg-bs-bar\"></span>Cartera de Inversión</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t<a href=\"#fullacess\" aria-controls=\"continue\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">4</span>Confirmación</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"register\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t\t\t";
        // line 45
        $this->loadTemplate("AppBundle:Registration:register.html.twig", "AppBundle:Registration:signup.html.twig", 45)->display($context);
        // line 46
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"kyc\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t<form role=\"form\" id=\"form_kyc\" action=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kyc_check");
        echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-personal\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Detalles de Usuario</h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Nombre</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "given_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Additional (e.g. Middle) Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "additional_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Apellido</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "family_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input date mg-check-in form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Fecha de nacimiento</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-datepicker\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Género</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "gender", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Teléfono fijo</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "phone_1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Teléfono móvil</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "phone_2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Dirección</h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Nombre/Número de edificio</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "address", array()), "building", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Calle</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "address", array()), "street_address", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Dirección 2</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "address", array()), "address_locality", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Ciudad</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "address", array()), "city", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Región</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "address", array()), "region", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Código Postal</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "address", array()), "postal_code", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 149
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>País</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "address", array()), "country", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#fundwallet\" class=\"btn btn-dark-main btn-next-tab pull-right\">Next</a>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 159
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 160
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), 'form_end');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-cart-container\">
\t\t\t\t\t\t\t\t\t\t\t<aside class=\"mg-widget mt50\" id=\"mg-room-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Lorem Ipsum</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit dictum sapien, ut ullamcorper ipsum facilisis eu. Mauris quis sapien sed nunc porttitor varius. Mauris eleifend nec dolor vitae imperdiet. Nulla iaculis felis eu aliquet gravida. Cras mi nunc, blandit ut suscipit sed, maximus id leo. Curabitur mattis tortor vitae est vulputate vulputate. Nam sed elit id augue venenatis mattis nec ut tellus.

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"fundwallet\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-billing\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Cartera de Inversión</h2>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<p>You will need to have funds available in your e-wallet to be able to make an investment with Yielders. You can deposit funds to your e-wallet at any time\". Please click on payment options below to proceed.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"PaymentType\">Método de Pago</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"card_type\" id=\"card_type\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"CB_VISA_MASTERCARD\">Visa/Master Card</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BANK_WIRE\">Pago por Transacción Bancaria</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Cantidad</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input date form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Moneda</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#fullacess\" class=\"btn btn-dark-main btn-next-tab pull-right\">Siguiente</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#kyc\" class=\"btn btn-default btn-prev-tab pull-left\">Atrás</a>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"fullacess\">
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"alert alert-success clearfix\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t\t\t<div class=\"mg-alert-icon\"><i class=\"fa fa-check\"></i></div>
\t\t\t\t\t\t\t\t\t<h3 class=\"mg-alert-payment\">Felicidades, completaste tu registro y puedes empezar a invertir de inmediato.</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">FEATURED OFFERINGS</h2>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"mg-room\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/room-1.png"), "html", null, true);
        echo "\" alt=\"img11\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t\t<h2>Super Deluxe</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\">Coming Soon</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
\t\t\t\t\t\t\t\t\t\t\t\t<p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offerings_overview");
        echo "\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 234
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offerings_overview");
        echo "\" class=\"btn btn-main\">Book</a>
\t\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"mg-room\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/room-2.png"), "html", null, true);
        echo "\" alt=\"img11\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t\t<h2>Super Deluxe</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\">Closing</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
\t\t\t\t\t\t\t\t\t\t\t\t<p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 246
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offerings_overview");
        echo "\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 247
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offerings_overview");
        echo "\" class=\"btn btn-main\">Book</a>
\t\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"mg-room\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/room-3.png"), "html", null, true);
        echo "\" alt=\"img11\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t\t<h2>Super Deluxe</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\">Closed</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
\t\t\t\t\t\t\t\t\t\t\t\t<p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 259
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offerings_overview");
        echo "\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 260
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offerings_overview");
        echo "\" class=\"btn btn-main\">Book</a>
\t\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
    }

    // line 276
    public function block_javascripts($context, array $blocks = array())
    {
        // line 277
        echo "\t<script>
\t\tvar currentTab = \"";
        // line 278
        echo twig_escape_filter($this->env, (isset($context["current_tab"]) ? $context["current_tab"] : $this->getContext($context, "current_tab")), "html", null, true);
        echo "\";
\t\t\$(document).ready(function() {
\t\t\t\$('.input-datepicker').datepicker({
\t\t\t\tstartDate: \"dateToday\",
\t\t\t\tautoclose: true
\t\t\t});
\t\t\t\$('#btn_signUp').on('click', function (e) {
\t\t\t\t\$('ul#tablist li:first a').click();
\t\t\t\t\$(this).css(\"color\", \"#FFF\");
\t\t\t\t\$(\"#form_sign_up\").submit();
\t\t\t});
\t\t\tif (currentTab == 'kyc') {
\t\t\t\t\$('ul#tablist li:nth-child(2) a').click();
\t\t\t\t\$('ul#tablist li:first a').click(function() { return false; });
\t\t\t} else {
\t\t\t\t\$('ul#tablist li:nth-child(2) a').on('click', function (e) {
\t\t\t\t\te.stopPropagation();
\t\t\t\t\t\$(\"#form_sign_up\").submit();
\t\t\t\t});
\t\t\t}
\t\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Registration:signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 278,  392 => 277,  389 => 276,  369 => 260,  365 => 259,  356 => 253,  347 => 247,  343 => 246,  334 => 240,  325 => 234,  321 => 233,  312 => 227,  242 => 160,  239 => 159,  229 => 151,  225 => 149,  220 => 144,  211 => 138,  202 => 132,  191 => 124,  182 => 118,  173 => 112,  161 => 103,  152 => 97,  141 => 89,  120 => 71,  111 => 65,  102 => 59,  92 => 52,  84 => 46,  82 => 45,  42 => 7,  39 => 6,  33 => 4,  29 => 2,  27 => 1,  11 => 2,);
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

{% block title %}Registrate - Invierte PTY{% endblock %}

{% block body %}
\t<div class=\"mg-page-title parallax\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2>REGÍSTRATE</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tCrear tu cuenta es sencillo
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

\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\" id=\"tablist\">
\t\t\t\t\t\t\t<li role=\"presentation\" class=\"active\">
\t\t\t\t\t\t\t\t<a href=\"#register\" aria-controls=\"login\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">1</span><span class=\"mg-bs-bar\"></span>Registro</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t<a href=\"#kyc\" aria-controls=\"personal-info\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">2</span><span class=\"mg-bs-bar\"></span>Detalles de Usuario</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t<a href=\"#fundwallet\" aria-controls=\"documents\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">3</span><span class=\"mg-bs-bar\"></span>Cartera de Inversión</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t<a href=\"#fullacess\" aria-controls=\"continue\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">4</span>Confirmación</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"register\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t\t\t{% include 'AppBundle:Registration:register.html.twig' %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"kyc\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t<form role=\"form\" id=\"form_kyc\" action=\"{{ path('kyc_check') }}\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-personal\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Detalles de Usuario</h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Nombre</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formUser.given_name, { 'attr':{'class':'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Additional (e.g. Middle) Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formUser.additional_name, { 'attr':{'class':'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Apellido</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formUser.family_name, { 'attr':{'class':'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input date mg-check-in form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Fecha de nacimiento</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-datepicker\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Género</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formUser.gender, { 'attr':{'class':'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Teléfono fijo</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formUser.phone_1, { 'attr':{'class':'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Teléfono móvil</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formUser.phone_2, { 'attr':{'class':'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Dirección</h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Nombre/Número de edificio</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formUser.address.building, { 'attr':{'class':'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Calle</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formUser.address.street_address, { 'attr':{'class':'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Dirección 2</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formUser.address.address_locality, { 'attr':{'class':'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Ciudad</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formUser.address.city, { 'attr':{'class':'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Región</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formUser.address.region, { 'attr':{'class':'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Código Postal</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formUser.address.postal_code, { 'attr':{'class':'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t{#<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-dark-main btn-block\">Address Lookup</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>#}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>País</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(formUser.address.country, { 'attr':{'class':'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#fundwallet\" class=\"btn btn-dark-main btn-next-tab pull-right\">Next</a>
\t\t\t\t\t\t\t\t\t\t\t{#<a href=\"#register\" class=\"btn btn-default btn-prev-tab pull-left\">Back</a>#}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{{ form_end(formUser) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-cart-container\">
\t\t\t\t\t\t\t\t\t\t\t<aside class=\"mg-widget mt50\" id=\"mg-room-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Lorem Ipsum</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit dictum sapien, ut ullamcorper ipsum facilisis eu. Mauris quis sapien sed nunc porttitor varius. Mauris eleifend nec dolor vitae imperdiet. Nulla iaculis felis eu aliquet gravida. Cras mi nunc, blandit ut suscipit sed, maximus id leo. Curabitur mattis tortor vitae est vulputate vulputate. Nam sed elit id augue venenatis mattis nec ut tellus.

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"fundwallet\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-billing\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Cartera de Inversión</h2>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<p>You will need to have funds available in your e-wallet to be able to make an investment with Yielders. You can deposit funds to your e-wallet at any time\". Please click on payment options below to proceed.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"PaymentType\">Método de Pago</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"card_type\" id=\"card_type\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"CB_VISA_MASTERCARD\">Visa/Master Card</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"BANK_WIRE\">Pago por Transacción Bancaria</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Cantidad</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input date form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Moneda</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#fullacess\" class=\"btn btn-dark-main btn-next-tab pull-right\">Siguiente</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#kyc\" class=\"btn btn-default btn-prev-tab pull-left\">Atrás</a>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"fullacess\">
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"alert alert-success clearfix\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t\t\t<div class=\"mg-alert-icon\"><i class=\"fa fa-check\"></i></div>
\t\t\t\t\t\t\t\t\t<h3 class=\"mg-alert-payment\">Felicidades, completaste tu registro y puedes empezar a invertir de inmediato.</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">FEATURED OFFERINGS</h2>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"mg-room\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('bundles/app/images/room-1.png') }}\" alt=\"img11\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t\t<h2>Super Deluxe</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\">Coming Soon</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
\t\t\t\t\t\t\t\t\t\t\t\t<p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('offerings_overview') }}\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('offerings_overview') }}\" class=\"btn btn-main\">Book</a>
\t\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"mg-room\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('bundles/app/images/room-2.png') }}\" alt=\"img11\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t\t<h2>Super Deluxe</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\">Closing</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
\t\t\t\t\t\t\t\t\t\t\t\t<p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('offerings_overview') }}\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('offerings_overview') }}\" class=\"btn btn-main\">Book</a>
\t\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"mg-room\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('bundles/app/images/room-3.png') }}\" alt=\"img11\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t\t<h2>Super Deluxe</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\">Closed</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
\t\t\t\t\t\t\t\t\t\t\t\t<p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('offerings_overview') }}\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('offerings_overview') }}\" class=\"btn btn-main\">Book</a>
\t\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
{% block javascripts %}
\t<script>
\t\tvar currentTab = \"{{ current_tab }}\";
\t\t\$(document).ready(function() {
\t\t\t\$('.input-datepicker').datepicker({
\t\t\t\tstartDate: \"dateToday\",
\t\t\t\tautoclose: true
\t\t\t});
\t\t\t\$('#btn_signUp').on('click', function (e) {
\t\t\t\t\$('ul#tablist li:first a').click();
\t\t\t\t\$(this).css(\"color\", \"#FFF\");
\t\t\t\t\$(\"#form_sign_up\").submit();
\t\t\t});
\t\t\tif (currentTab == 'kyc') {
\t\t\t\t\$('ul#tablist li:nth-child(2) a').click();
\t\t\t\t\$('ul#tablist li:first a').click(function() { return false; });
\t\t\t} else {
\t\t\t\t\$('ul#tablist li:nth-child(2) a').on('click', function (e) {
\t\t\t\t\te.stopPropagation();
\t\t\t\t\t\$(\"#form_sign_up\").submit();
\t\t\t\t});
\t\t\t}
\t\t});
\t</script>
{% endblock %}", "AppBundle:Registration:signup.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Registration/signup.html.twig");
    }
}
