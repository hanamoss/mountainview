<?php

/* AppBundle:Registration:complete_registration.html.twig */
class __TwigTemplate_f0dc29bc37244ce514e0591e91e8ad7fce307d34b6dba86457b0372315c8f07e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Registration:complete_registration.html.twig", 2);
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
        $context["active"] = "user";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Complete Registration - Crowd Valley";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<div class=\"mg-page-title parallax\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2>Completa tu Registro</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tEl proceso de creación de usuario es completamente enfocado a tu negocio y regulaciones requeridas.</p>
\t\t\t\t
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

\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t<li role=\"presentation\" class=\"active\">
\t\t\t\t\t\t\t\t<a href=\"#login\" aria-controls=\"login\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">1</span><span class=\"mg-bs-bar\"></span>Verificar teléfono</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t<a href=\"#personal\" aria-controls=\"personal-info\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">2</span><span class=\"mg-bs-bar\"></span>Información Personal</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t<a href=\"#documents\" aria-controls=\"documents\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">3</span><span class=\"mg-bs-bar\"></span>Identidad del inversor</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t<a href=\"#kyc\" aria-controls=\"continue\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">4</span>Prueba de Eligibilidad</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"login\">
\t\t\t\t\t\t\t\t<div class=\"mg-team pb70\">
\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Introduce el número de tu móvil aquí, incluyendo el código de área.</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div c>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#personal\" class=\"btn btn-dark-main btn-next-tab\">Verificar teléfono</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"personal\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-personal\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Información Personal</h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Nombre</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Segundo Nombre</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Apellido</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input date mg-check-in form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Fecha de Nacimiento</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Género</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"U\">Otro</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"M\">Masculino</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"F\">Femenino</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Telefono fijo</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Telefono celular</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Dirección</h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Nombre/Número de Edificio</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Calle</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Distrito</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Ciudad</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Región</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Código Postal</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-dark-main btn-block\">Buscar ubicación</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>País</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Elige tu País</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"United States\">United States</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"United Kingdom\">United Kingdom</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia\">Australia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Italy\">Italy</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Germany\">Germany</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Spain\">Spain</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Netherlands\">Netherlands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Brazil\">Brazil</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled=\"true\">────────</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Afghanistan\">Afghanistan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Åland Islands\">Åland Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Albania\">Albania</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Algeria\">Algeria</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"American Samoa\">American Samoa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Andorra\">Andorra</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Angola\">Angola</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Anguilla\">Anguilla</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica\">Antarctica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antigua and Barbuda\">Antigua and Barbuda</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Argentina\">Argentina</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Armenia\">Armenia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Aruba\">Aruba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia\">Australia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Austria\">Austria</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Azerbaijan\">Azerbaijan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Bahamas\">Bahamas</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Bahrain\">Bahrain</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Bangladesh\">Bangladesh</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Barbados\">Barbados</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Belarus\">Belarus</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Belgium\">Belgium</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Belize\">Belize</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Benin\">Benin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Bermuda\">Bermuda</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Bhutan\">Bhutan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Bolivia, Plurinational State of\">Bolivia, Plurinational State of</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Bonaire, Sint Eustatius and Saba\">Bonaire, Sint Eustatius and Saba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Bosnia and Herzegovina\">Bosnia and Herzegovina</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Botswana\">Botswana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Bouvet Island\">Bouvet Island</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Brazil\">Brazil</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"British Indian Ocean Territory\">British Indian Ocean Territory</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Brunei Darussalam\">Brunei Darussalam</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Bulgaria\">Bulgaria</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Burkina Faso\">Burkina Faso</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Burundi\">Burundi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Cabo Verde\">Cabo Verde</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Cambodia\">Cambodia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Cameroon\">Cameroon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Cayman Islands\">Cayman Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Central African Republic\">Central African Republic</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Chad\">Chad</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Chile\">Chile</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"China\">China</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Christmas Island\">Christmas Island</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Cocos (Keeling) Islands\">Cocos (Keeling) Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Colombia\">Colombia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Comoros\">Comoros</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Congo\">Congo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Congo, the Democratic Republic of the\">Congo, the Democratic Republic of the</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Cook Islands\">Cook Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Costa Rica\">Costa Rica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Côte d'Ivoire\">Côte d'Ivoire</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Croatia\">Croatia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Cuba\">Cuba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Curaçao\">Curaçao</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Cyprus\">Cyprus</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Czech Republic\">Czech Republic</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Denmark\">Denmark</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Djibouti\">Djibouti</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Dominica\">Dominica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Dominican Republic\">Dominican Republic</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Ecuador\">Ecuador</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Egypt\">Egypt</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"El Salvador\">El Salvador</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Equatorial Guinea\">Equatorial Guinea</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Eritrea\">Eritrea</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Estonia\">Estonia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Ethiopia\">Ethiopia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Falkland Islands (Malvinas)\">Falkland Islands (Malvinas)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Faroe Islands\">Faroe Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Fiji\">Fiji</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Finland\">Finland</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"French Guiana\">French Guiana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"French Polynesia\">French Polynesia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"French Southern Territories\">French Southern Territories</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Gabon\">Gabon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Gambia\">Gambia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Georgia\">Georgia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Germany\">Germany</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Ghana\">Ghana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Gibraltar\">Gibraltar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Greece\">Greece</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Greenland\">Greenland</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Grenada\">Grenada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Guadeloupe\">Guadeloupe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Guam\">Guam</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Guatemala\">Guatemala</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Guernsey\">Guernsey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Guinea\">Guinea</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Guinea-Bissau\">Guinea-Bissau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Guyana\">Guyana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Haiti\">Haiti</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Heard Island and McDonald Islands\">Heard Island and McDonald Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Holy See (Vatican City State)\">Holy See (Vatican City State)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Honduras\">Honduras</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Hong Kong\">Hong Kong</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Hungary\">Hungary</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Iceland\">Iceland</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"India\">India</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indonesia\">Indonesia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Iran, Islamic Republic of\">Iran, Islamic Republic of</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Iraq\">Iraq</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Ireland\">Ireland</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Isle of Man\">Isle of Man</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Israel\">Israel</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Italy\">Italy</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Jamaica\">Jamaica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Japan\">Japan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Jersey\">Jersey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Jordan\">Jordan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Kazakhstan\">Kazakhstan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Kenya\">Kenya</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Kiribati\">Kiribati</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Korea, Democratic People's Republic of\">Korea, Democratic People's Republic of</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Korea, Republic of\">Korea, Republic of</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Kosovo\">Kosovo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Kuwait\">Kuwait</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Kyrgyzstan\">Kyrgyzstan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Lao People's Democratic Republic\">Lao People's Democratic Republic</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Latvia\">Latvia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Lebanon\">Lebanon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Lesotho\">Lesotho</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Liberia\">Liberia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Libya\">Libya</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Liechtenstein\">Liechtenstein</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Lithuania\">Lithuania</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Luxembourg\">Luxembourg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Macao\">Macao</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Macedonia, the former Yugoslav Republic of\">Macedonia, the former Yugoslav Republic of</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Madagascar\">Madagascar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Malawi\">Malawi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Malaysia\">Malaysia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Maldives\">Maldives</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mali\">Mali</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Malta\">Malta</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Marshall Islands\">Marshall Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Martinique\">Martinique</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mauritania\">Mauritania</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mauritius\">Mauritius</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mayotte\">Mayotte</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mexico\">Mexico</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Micronesia, Federated States of\">Micronesia, Federated States of</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Moldova, Republic of\">Moldova, Republic of</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Monaco\">Monaco</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mongolia\">Mongolia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Montenegro\">Montenegro</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Montserrat\">Montserrat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Morocco\">Morocco</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mozambique\">Mozambique</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Myanmar\">Myanmar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Namibia\">Namibia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Nauru\">Nauru</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Nepal\">Nepal</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Netherlands\">Netherlands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"New Caledonia\">New Caledonia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"New Zealand\">New Zealand</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Nicaragua\">Nicaragua</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Niger\">Niger</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Nigeria\">Nigeria</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Niue\">Niue</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Norfolk Island\">Norfolk Island</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Northern Mariana Islands\">Northern Mariana Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Norway\">Norway</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Oman\">Oman</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pakistan\">Pakistan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Palau\">Palau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Palestine, State of\">Palestine, State of</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Panama\">Panama</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Papua New Guinea\">Papua New Guinea</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Paraguay\">Paraguay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Peru\">Peru</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Philippines\">Philippines</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pitcairn\">Pitcairn</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Poland\">Poland</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Portugal\">Portugal</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Puerto Rico\">Puerto Rico</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Qatar\">Qatar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Réunion\">Réunion</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Romania\">Romania</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Russian Federation\">Russian Federation</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Rwanda\">Rwanda</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Saint Barthélemy\">Saint Barthélemy</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Saint Helena, Ascension and Tristan da Cunha\">Saint Helena, Ascension and Tristan da Cunha</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Saint Kitts and Nevis\">Saint Kitts and Nevis</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Saint Lucia\">Saint Lucia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Saint Martin\">Saint Martin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Saint Pierre and Miquelon\">Saint Pierre and Miquelon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Saint Vincent and the Grenadines\">Saint Vincent and the Grenadines</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Samoa\">Samoa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"San Marino\">San Marino</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Sao Tome and Principe\">Sao Tome and Principe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Saudi Arabia\">Saudi Arabia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Senegal\">Senegal</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Serbia\">Serbia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Seychelles\">Seychelles</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Sierra Leone\">Sierra Leone</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Singapore\">Singapore</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Sint Maarten\">Sint Maarten</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Slovakia\">Slovakia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Slovenia\">Slovenia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Solomon Islands\">Solomon Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Somalia\">Somalia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"South Georgia and the South Sandwich Islands\">South Georgia and the South Sandwich Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"South Africa\">South Africa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"South Sudan\">South Sudan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Spain\">Spain</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Sri Lanka\">Sri Lanka</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Sudan\">Sudan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Suriname\">Suriname</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Svalbard and Jan Mayen\">Svalbard and Jan Mayen</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Swaziland\">Swaziland</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Sweden\">Sweden</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Switzerland\">Switzerland</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Syrian Arab Republic\">Syrian Arab Republic</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Taiwan\">Taiwan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Tajikistan\">Tajikistan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Tanzania, United Republic of\">Tanzania, United Republic of</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Thailand\">Thailand</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Timor-Leste\">Timor-Leste</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Togo\">Togo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Tokelau\">Tokelau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Tonga\">Tonga</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Trinidad and Tobago\">Trinidad and Tobago</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Tunisia\">Tunisia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Turkey\">Turkey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Turkmenistan\">Turkmenistan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Turks and Caicos Islands\">Turks and Caicos Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Tuvalu\">Tuvalu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Uganda\">Uganda</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Ukraine\">Ukraine</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"United Arab Emirates\">United Arab Emirates</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"United Kingdom\">United Kingdom</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"United States Minor Outlying Islands\">United States Minor Outlying Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"United States\">United States</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Uruguay\">Uruguay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Uzbekistan\">Uzbekistan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Vanuatu\">Vanuatu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Venezuela, Bolivarian Republic of\">Venezuela, Bolivarian Republic of</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Vietnam\">Vietnam</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Virgin Islands, British\">Virgin Islands, British</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Virgin Islands, U.S.\">Virgin Islands, U.S.</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Wallis and Futuna\">Wallis and Futuna</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Western Sahara\">Western Sahara</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Yemen\">Yemen</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Zambia\">Zambia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Zimbabwe\">Zimbabwe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#documents\" class=\"btn btn-dark-main btn-next-tab pull-right\">Siguiente</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#login\" class=\"btn btn-default btn-prev-tab pull-left\">Atrás</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-cart-container\">
\t\t\t\t\t\t\t\t\t\t\t<aside class=\"mg-widget mt50\" id=\"mg-room-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Cómo gunciona</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-cart-room\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Perfiles</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Información acerca de perfiles</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-cart-room\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Soporte en Países</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>GBG supports these countries: UK, US, ...</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"documents\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-billing\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Documentos de Identidad</h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Número de pasaporte</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>País del pasaporte</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input date form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Fecha de expiración del pasaporte</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-dark-main pull-left\">Ejemplo</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Licencia de conducir</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-dark-main  pull-left\">Ejemplo</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#kyc\" class=\"btn btn-dark-main btn-next-tab pull-right\">Siguiente</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#personal\" class=\"btn btn-default btn-prev-tab pull-left\">Atrás</a>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-cart-container\">
\t\t\t\t\t\t\t\t\t\t\t<aside class=\"mg-widget mt50\" id=\"mg-room-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Usando documentos de identidad</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-cart-room\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Pasaportes</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tInformación acerca de pasaportes.
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-cart-room\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Otras identificaciones nacionales</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>GBG soporta tarjetas de identificación cards in these countries: UK, US, ...</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"kyc\">
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"alert alert-success clearfix\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t\t\t<div class=\"mg-alert-icon\"><i class=\"fa fa-check\"></i></div>
\t\t\t\t\t\t\t\t\t<h3 class=\"mg-alert-payment\">Aprobaste el KYC Check</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mg-cart-container mg-paid\">
\t\t\t\t\t\t\t\t\t<aside class=\"mg-widget mt50\" id=\"mg-room-cart\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Detalles KYC</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"mg-payment-id\">Response: PASS</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>GBGroup actividad Log ID:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>124</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Fehca/Tiempo:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>2015-12-16 13:51:48</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Perfil:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>1234adsf1324</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Versión del perfil:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>1</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Revisión del perfil:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>2</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                    
\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                <div style=\"margin-top:28vh\" class=\"pull-right\"><a href=\"";
        // line 568
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_wallet");
        echo "\" class=\"btn btn-default\">Confirmar</a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</aside>
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

    public function getTemplateName()
    {
        return "AppBundle:Registration:complete_registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  604 => 568,  41 => 7,  38 => 6,  32 => 4,  28 => 2,  26 => 1,  11 => 2,);
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

{% block title %}Complete Registration - Crowd Valley{% endblock %}

{% block body %}
\t<div class=\"mg-page-title parallax\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2>Completa tu Registro</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tEl proceso de creación de usuario es completamente enfocado a tu negocio y regulaciones requeridas.</p>
\t\t\t\t
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

\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t<li role=\"presentation\" class=\"active\">
\t\t\t\t\t\t\t\t<a href=\"#login\" aria-controls=\"login\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">1</span><span class=\"mg-bs-bar\"></span>Verificar teléfono</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t<a href=\"#personal\" aria-controls=\"personal-info\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">2</span><span class=\"mg-bs-bar\"></span>Información Personal</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t<a href=\"#documents\" aria-controls=\"documents\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">3</span><span class=\"mg-bs-bar\"></span>Identidad del inversor</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t<a href=\"#kyc\" aria-controls=\"continue\" role=\"tab\" data-toggle=\"tab\"><span class=\"mg-bs-tab-num\">4</span>Prueba de Eligibilidad</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"login\">
\t\t\t\t\t\t\t\t<div class=\"mg-team pb70\">
\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Introduce el número de tu móvil aquí, incluyendo el código de área.</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div c>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#personal\" class=\"btn btn-dark-main btn-next-tab\">Verificar teléfono</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"personal\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-personal\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Información Personal</h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Nombre</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Segundo Nombre</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Apellido</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input date mg-check-in form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Fecha de Nacimiento</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Género</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"U\">Otro</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"M\">Masculino</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"F\">Femenino</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Telefono fijo</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Telefono celular</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Dirección</h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Nombre/Número de Edificio</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Calle</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Distrito</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Ciudad</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Región</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Código Postal</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-dark-main btn-block\">Buscar ubicación</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>País</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Elige tu País</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"United States\">United States</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"United Kingdom\">United Kingdom</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia\">Australia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Italy\">Italy</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Germany\">Germany</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Spain\">Spain</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Netherlands\">Netherlands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Brazil\">Brazil</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled=\"true\">────────</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Afghanistan\">Afghanistan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Åland Islands\">Åland Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Albania\">Albania</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Algeria\">Algeria</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"American Samoa\">American Samoa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Andorra\">Andorra</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Angola\">Angola</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Anguilla\">Anguilla</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica\">Antarctica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antigua and Barbuda\">Antigua and Barbuda</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Argentina\">Argentina</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Armenia\">Armenia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Aruba\">Aruba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia\">Australia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Austria\">Austria</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Azerbaijan\">Azerbaijan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Bahamas\">Bahamas</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Bahrain\">Bahrain</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Bangladesh\">Bangladesh</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Barbados\">Barbados</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Belarus\">Belarus</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Belgium\">Belgium</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Belize\">Belize</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Benin\">Benin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Bermuda\">Bermuda</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Bhutan\">Bhutan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Bolivia, Plurinational State of\">Bolivia, Plurinational State of</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Bonaire, Sint Eustatius and Saba\">Bonaire, Sint Eustatius and Saba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Bosnia and Herzegovina\">Bosnia and Herzegovina</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Botswana\">Botswana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Bouvet Island\">Bouvet Island</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Brazil\">Brazil</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"British Indian Ocean Territory\">British Indian Ocean Territory</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Brunei Darussalam\">Brunei Darussalam</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Bulgaria\">Bulgaria</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Burkina Faso\">Burkina Faso</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Burundi\">Burundi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Cabo Verde\">Cabo Verde</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Cambodia\">Cambodia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Cameroon\">Cameroon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Cayman Islands\">Cayman Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Central African Republic\">Central African Republic</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Chad\">Chad</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Chile\">Chile</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"China\">China</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Christmas Island\">Christmas Island</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Cocos (Keeling) Islands\">Cocos (Keeling) Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Colombia\">Colombia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Comoros\">Comoros</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Congo\">Congo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Congo, the Democratic Republic of the\">Congo, the Democratic Republic of the</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Cook Islands\">Cook Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Costa Rica\">Costa Rica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Côte d'Ivoire\">Côte d'Ivoire</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Croatia\">Croatia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Cuba\">Cuba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Curaçao\">Curaçao</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Cyprus\">Cyprus</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Czech Republic\">Czech Republic</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Denmark\">Denmark</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Djibouti\">Djibouti</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Dominica\">Dominica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Dominican Republic\">Dominican Republic</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Ecuador\">Ecuador</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Egypt\">Egypt</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"El Salvador\">El Salvador</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Equatorial Guinea\">Equatorial Guinea</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Eritrea\">Eritrea</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Estonia\">Estonia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Ethiopia\">Ethiopia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Falkland Islands (Malvinas)\">Falkland Islands (Malvinas)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Faroe Islands\">Faroe Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Fiji\">Fiji</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Finland\">Finland</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"French Guiana\">French Guiana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"French Polynesia\">French Polynesia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"French Southern Territories\">French Southern Territories</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Gabon\">Gabon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Gambia\">Gambia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Georgia\">Georgia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Germany\">Germany</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Ghana\">Ghana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Gibraltar\">Gibraltar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Greece\">Greece</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Greenland\">Greenland</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Grenada\">Grenada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Guadeloupe\">Guadeloupe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Guam\">Guam</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Guatemala\">Guatemala</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Guernsey\">Guernsey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Guinea\">Guinea</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Guinea-Bissau\">Guinea-Bissau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Guyana\">Guyana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Haiti\">Haiti</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Heard Island and McDonald Islands\">Heard Island and McDonald Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Holy See (Vatican City State)\">Holy See (Vatican City State)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Honduras\">Honduras</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Hong Kong\">Hong Kong</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Hungary\">Hungary</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Iceland\">Iceland</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"India\">India</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indonesia\">Indonesia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Iran, Islamic Republic of\">Iran, Islamic Republic of</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Iraq\">Iraq</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Ireland\">Ireland</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Isle of Man\">Isle of Man</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Israel\">Israel</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Italy\">Italy</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Jamaica\">Jamaica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Japan\">Japan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Jersey\">Jersey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Jordan\">Jordan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Kazakhstan\">Kazakhstan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Kenya\">Kenya</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Kiribati\">Kiribati</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Korea, Democratic People's Republic of\">Korea, Democratic People's Republic of</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Korea, Republic of\">Korea, Republic of</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Kosovo\">Kosovo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Kuwait\">Kuwait</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Kyrgyzstan\">Kyrgyzstan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Lao People's Democratic Republic\">Lao People's Democratic Republic</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Latvia\">Latvia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Lebanon\">Lebanon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Lesotho\">Lesotho</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Liberia\">Liberia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Libya\">Libya</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Liechtenstein\">Liechtenstein</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Lithuania\">Lithuania</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Luxembourg\">Luxembourg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Macao\">Macao</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Macedonia, the former Yugoslav Republic of\">Macedonia, the former Yugoslav Republic of</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Madagascar\">Madagascar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Malawi\">Malawi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Malaysia\">Malaysia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Maldives\">Maldives</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mali\">Mali</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Malta\">Malta</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Marshall Islands\">Marshall Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Martinique\">Martinique</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mauritania\">Mauritania</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mauritius\">Mauritius</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mayotte\">Mayotte</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mexico\">Mexico</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Micronesia, Federated States of\">Micronesia, Federated States of</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Moldova, Republic of\">Moldova, Republic of</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Monaco\">Monaco</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mongolia\">Mongolia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Montenegro\">Montenegro</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Montserrat\">Montserrat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Morocco\">Morocco</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mozambique\">Mozambique</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Myanmar\">Myanmar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Namibia\">Namibia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Nauru\">Nauru</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Nepal\">Nepal</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Netherlands\">Netherlands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"New Caledonia\">New Caledonia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"New Zealand\">New Zealand</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Nicaragua\">Nicaragua</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Niger\">Niger</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Nigeria\">Nigeria</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Niue\">Niue</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Norfolk Island\">Norfolk Island</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Northern Mariana Islands\">Northern Mariana Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Norway\">Norway</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Oman\">Oman</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pakistan\">Pakistan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Palau\">Palau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Palestine, State of\">Palestine, State of</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Panama\">Panama</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Papua New Guinea\">Papua New Guinea</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Paraguay\">Paraguay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Peru\">Peru</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Philippines\">Philippines</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pitcairn\">Pitcairn</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Poland\">Poland</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Portugal\">Portugal</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Puerto Rico\">Puerto Rico</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Qatar\">Qatar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Réunion\">Réunion</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Romania\">Romania</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Russian Federation\">Russian Federation</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Rwanda\">Rwanda</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Saint Barthélemy\">Saint Barthélemy</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Saint Helena, Ascension and Tristan da Cunha\">Saint Helena, Ascension and Tristan da Cunha</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Saint Kitts and Nevis\">Saint Kitts and Nevis</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Saint Lucia\">Saint Lucia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Saint Martin\">Saint Martin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Saint Pierre and Miquelon\">Saint Pierre and Miquelon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Saint Vincent and the Grenadines\">Saint Vincent and the Grenadines</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Samoa\">Samoa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"San Marino\">San Marino</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Sao Tome and Principe\">Sao Tome and Principe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Saudi Arabia\">Saudi Arabia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Senegal\">Senegal</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Serbia\">Serbia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Seychelles\">Seychelles</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Sierra Leone\">Sierra Leone</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Singapore\">Singapore</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Sint Maarten\">Sint Maarten</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Slovakia\">Slovakia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Slovenia\">Slovenia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Solomon Islands\">Solomon Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Somalia\">Somalia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"South Georgia and the South Sandwich Islands\">South Georgia and the South Sandwich Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"South Africa\">South Africa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"South Sudan\">South Sudan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Spain\">Spain</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Sri Lanka\">Sri Lanka</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Sudan\">Sudan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Suriname\">Suriname</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Svalbard and Jan Mayen\">Svalbard and Jan Mayen</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Swaziland\">Swaziland</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Sweden\">Sweden</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Switzerland\">Switzerland</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Syrian Arab Republic\">Syrian Arab Republic</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Taiwan\">Taiwan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Tajikistan\">Tajikistan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Tanzania, United Republic of\">Tanzania, United Republic of</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Thailand\">Thailand</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Timor-Leste\">Timor-Leste</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Togo\">Togo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Tokelau\">Tokelau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Tonga\">Tonga</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Trinidad and Tobago\">Trinidad and Tobago</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Tunisia\">Tunisia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Turkey\">Turkey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Turkmenistan\">Turkmenistan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Turks and Caicos Islands\">Turks and Caicos Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Tuvalu\">Tuvalu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Uganda\">Uganda</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Ukraine\">Ukraine</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"United Arab Emirates\">United Arab Emirates</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"United Kingdom\">United Kingdom</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"United States Minor Outlying Islands\">United States Minor Outlying Islands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"United States\">United States</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Uruguay\">Uruguay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Uzbekistan\">Uzbekistan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Vanuatu\">Vanuatu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Venezuela, Bolivarian Republic of\">Venezuela, Bolivarian Republic of</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Vietnam\">Vietnam</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Virgin Islands, British\">Virgin Islands, British</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Virgin Islands, U.S.\">Virgin Islands, U.S.</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Wallis and Futuna\">Wallis and Futuna</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Western Sahara\">Western Sahara</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Yemen\">Yemen</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Zambia\">Zambia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Zimbabwe\">Zimbabwe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#documents\" class=\"btn btn-dark-main btn-next-tab pull-right\">Siguiente</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#login\" class=\"btn btn-default btn-prev-tab pull-left\">Atrás</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-cart-container\">
\t\t\t\t\t\t\t\t\t\t\t<aside class=\"mg-widget mt50\" id=\"mg-room-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Cómo gunciona</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-cart-room\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Perfiles</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Información acerca de perfiles</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-cart-room\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Soporte en Países</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>GBG supports these countries: UK, US, ...</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"documents\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-billing\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Documentos de Identidad</h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Número de pasaporte</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>País del pasaporte</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input date form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Fecha de expiración del pasaporte</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-dark-main pull-left\">Ejemplo</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-book-form-input form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Licencia de conducir</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-dark-main  pull-left\">Ejemplo</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#kyc\" class=\"btn btn-dark-main btn-next-tab pull-right\">Siguiente</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#personal\" class=\"btn btn-default btn-prev-tab pull-left\">Atrás</a>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-cart-container\">
\t\t\t\t\t\t\t\t\t\t\t<aside class=\"mg-widget mt50\" id=\"mg-room-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Usando documentos de identidad</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-cart-room\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Pasaportes</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tInformación acerca de pasaportes.
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-cart-room\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Otras identificaciones nacionales</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>GBG soporta tarjetas de identificación cards in these countries: UK, US, ...</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"kyc\">
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"alert alert-success clearfix\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t\t\t<div class=\"mg-alert-icon\"><i class=\"fa fa-check\"></i></div>
\t\t\t\t\t\t\t\t\t<h3 class=\"mg-alert-payment\">Aprobaste el KYC Check</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mg-cart-container mg-paid\">
\t\t\t\t\t\t\t\t\t<aside class=\"mg-widget mt50\" id=\"mg-room-cart\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Detalles KYC</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"mg-payment-id\">Response: PASS</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>GBGroup actividad Log ID:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>124</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Fehca/Tiempo:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>2015-12-16 13:51:48</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Perfil:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>1234adsf1324</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Versión del perfil:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>1</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mg-widget-cart-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Revisión del perfil:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>2</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                    
\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                <div style=\"margin-top:28vh\" class=\"pull-right\"><a href=\"{{ path('my_wallet') }}\" class=\"btn btn-default\">Confirmar</a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
", "AppBundle:Registration:complete_registration.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Registration/complete_registration.html.twig");
    }
}
