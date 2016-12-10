<?php

/* AppBundle:Raisecapital:add_org_private_company.html.twig */
class __TwigTemplate_e700f995597bdd454481306103019bc3ea89fcbe85905a1c98b44d9757ed0126 extends Twig_Template
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
        echo "<form role=\"form\" id=\"form_add_org_private_company\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_organization");
        echo "\" method=\"POST\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"mg-book-form-personal\">
                <h2 class=\"mg-sec-left-title\">About Your Organization</h2>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Legal Name</label>
                            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPrivateCompany"]) ? $context["formPrivateCompany"] : $this->getContext($context, "formPrivateCompany")), "displayName", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Registration Number</label>
                            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPrivateCompany"]) ? $context["formPrivateCompany"] : $this->getContext($context, "formPrivateCompany")), "companyNumber", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"mg-book-form-input mg-check-in form-group\">
                            <label>Founding Date</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></div>
                                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPrivateCompany"]) ? $context["formPrivateCompany"] : $this->getContext($context, "formPrivateCompany")), "foundingDate", array()), 'widget', array("attr" => array("class" => "form-control input-datepicker", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
                            </div>

                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"mg-book-form-input  mg-check-in form-group\">
                            <label>Total Amount of Shares</label>
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formPrivateCompany"]) ? $context["formPrivateCompany"] : $this->getContext($context, "formPrivateCompany")), "custom", array()), "total_amount_of_shares", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"mg-book-form-input  mg-check-in form-group\">
                            <label>Website</label>
                            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPrivateCompany"]) ? $context["formPrivateCompany"] : $this->getContext($context, "formPrivateCompany")), "website", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Brief Description</label>
                            ";
        // line 45
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPrivateCompany"]) ? $context["formPrivateCompany"] : $this->getContext($context, "formPrivateCompany")), "briefDescription", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"mg-book-form-input \">
                            <label>Sector</label>
                        </div>
                        <div class=\"checkbox sector3cols\">
                            <label><input type=\"checkbox\"> Apparel, Fashion & Textiles</label>
                            <label><input type=\"checkbox\"> Art & Craft, Luxury Goods & Jewelry</label>
                            <label><input type=\"checkbox\"> Automotive, Aviation & Aerospace</label>
                            <label><input type=\"checkbox\"> Chemicals</label>
                            <label><input type=\"checkbox\"> Computer, Network & Telecommunications</label>
                            <label><input type=\"checkbox\"> Construction</label>
                            <label><input type=\"checkbox\"> Consumer Goods</label>
                            <label><input type=\"checkbox\"> Electrical/Electronical Manufacturing</label>
                            <label><input type=\"checkbox\"> Environmentals & Facilities Services</label>
                            <label><input type=\"checkbox\"> Farming & Fishery</label>
                            <label><input type=\"checkbox\"> Financial Services</label>
                            <label><input type=\"checkbox\"> Food & Beverages</label>
                            <label><input type=\"checkbox\"> Health, Wellness and Fitness</label>
                            <label><input type=\"checkbox\"> Industrial Goods</label>
                            <label><input type=\"checkbox\"> Leisure, Travel & Tourism</label>
                            <label><input type=\"checkbox\"> Logistics And Supply Chain</label>
                            <label><input type=\"checkbox\"> Oil & Energy</label>
                            <label><input type=\"checkbox\"> Pharmaceuticals</label>
                            <label><input type=\"checkbox\"> Renewables & Environment</label>
                            <label><input type=\"checkbox\"> Wholesale & Retail</label>
                            ";
        // line 76
        echo "                        </div>
                    </div>
                </div>
                <br>
                <br>
                <h2 class=\"mg-sec-left-title\">Address</h2>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Building Name/Number</label>
                            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formPrivateCompany"]) ? $context["formPrivateCompany"] : $this->getContext($context, "formPrivateCompany")), "address", array()), "building", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Street Address</label>
                            ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formPrivateCompany"]) ? $context["formPrivateCompany"] : $this->getContext($context, "formPrivateCompany")), "address", array()), "streetAddress", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Address Locality</label>
                            ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formPrivateCompany"]) ? $context["formPrivateCompany"] : $this->getContext($context, "formPrivateCompany")), "address", array()), "addressLocality", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>City</label>
                            ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formPrivateCompany"]) ? $context["formPrivateCompany"] : $this->getContext($context, "formPrivateCompany")), "address", array()), "city", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Region</label>
                            ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formPrivateCompany"]) ? $context["formPrivateCompany"] : $this->getContext($context, "formPrivateCompany")), "address", array()), "region", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Postal Code</label>
                            ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formPrivateCompany"]) ? $context["formPrivateCompany"] : $this->getContext($context, "formPrivateCompany")), "address", array()), "postalCode", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        ";
        // line 123
        echo "                        <div class=\"mg-book-form-input form-group\">
                            <label>Country</label>
                            ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formPrivateCompany"]) ? $context["formPrivateCompany"] : $this->getContext($context, "formPrivateCompany")), "address", array()), "country", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <button id=\"btn_add_org_private_company\" type=\"submit\" class=\"btn btn-dark-main btn-next-tab pull-right\">Next</button>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"mg-cart-container\">
                <aside class=\"mg-widget mt50\" id=\"mg-room-cart\">
                    <h2 class=\"mg-widget-title\">Lorem Ipsum</h2>
                    <div>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit dictum sapien, ut ullamcorper ipsum facilisis eu. Mauris quis sapien sed nunc porttitor varius. Mauris eleifend nec dolor vitae imperdiet. Nulla iaculis felis eu aliquet gravida. Cras mi nunc, blandit ut suscipit sed, maximus id leo. Curabitur mattis tortor vitae est vulputate vulputate. Nam sed elit id augue venenatis mattis nec ut tellus.
                    </div>
                </aside>
            </div>
        </div>
    </div>
";
        // line 145
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formPrivateCompany"]) ? $context["formPrivateCompany"] : $this->getContext($context, "formPrivateCompany")), 'form_end');
    }

    public function getTemplateName()
    {
        return "AppBundle:Raisecapital:add_org_private_company.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 145,  183 => 125,  179 => 123,  174 => 118,  165 => 112,  156 => 106,  145 => 98,  136 => 92,  127 => 86,  115 => 76,  81 => 45,  72 => 38,  65 => 34,  52 => 24,  41 => 16,  32 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form role=\"form\" id=\"form_add_org_private_company\" action=\"{{ path('add_organization') }}\" method=\"POST\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"mg-book-form-personal\">
                <h2 class=\"mg-sec-left-title\">About Your Organization</h2>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Legal Name</label>
                            {{ form_widget(formPrivateCompany.displayName, { 'attr':{'class':'form-control', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Registration Number</label>
                            {{ form_widget(formPrivateCompany.companyNumber, { 'attr':{'class':'form-control', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"mg-book-form-input mg-check-in form-group\">
                            <label>Founding Date</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></div>
                                {{ form_widget(formPrivateCompany.foundingDate, { 'attr':{'class':'form-control input-datepicker', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
                            </div>

                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"mg-book-form-input  mg-check-in form-group\">
                            <label>Total Amount of Shares</label>
                            {{ form_widget(formPrivateCompany.custom.total_amount_of_shares, { 'attr':{'class':'form-control'} }) }}
                        </div>
                        <div class=\"mg-book-form-input  mg-check-in form-group\">
                            <label>Website</label>
                            {{ form_widget(formPrivateCompany.website, { 'attr':{'class':'form-control'} }) }}
                        </div>
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Brief Description</label>
                            {#<textarea class=\"form-control\" style=\"min-height: 125px\"></textarea>#}
                            {{ form_widget(formPrivateCompany.briefDescription, { 'attr':{'class':'form-control', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"mg-book-form-input \">
                            <label>Sector</label>
                        </div>
                        <div class=\"checkbox sector3cols\">
                            <label><input type=\"checkbox\"> Apparel, Fashion & Textiles</label>
                            <label><input type=\"checkbox\"> Art & Craft, Luxury Goods & Jewelry</label>
                            <label><input type=\"checkbox\"> Automotive, Aviation & Aerospace</label>
                            <label><input type=\"checkbox\"> Chemicals</label>
                            <label><input type=\"checkbox\"> Computer, Network & Telecommunications</label>
                            <label><input type=\"checkbox\"> Construction</label>
                            <label><input type=\"checkbox\"> Consumer Goods</label>
                            <label><input type=\"checkbox\"> Electrical/Electronical Manufacturing</label>
                            <label><input type=\"checkbox\"> Environmentals & Facilities Services</label>
                            <label><input type=\"checkbox\"> Farming & Fishery</label>
                            <label><input type=\"checkbox\"> Financial Services</label>
                            <label><input type=\"checkbox\"> Food & Beverages</label>
                            <label><input type=\"checkbox\"> Health, Wellness and Fitness</label>
                            <label><input type=\"checkbox\"> Industrial Goods</label>
                            <label><input type=\"checkbox\"> Leisure, Travel & Tourism</label>
                            <label><input type=\"checkbox\"> Logistics And Supply Chain</label>
                            <label><input type=\"checkbox\"> Oil & Energy</label>
                            <label><input type=\"checkbox\"> Pharmaceuticals</label>
                            <label><input type=\"checkbox\"> Renewables & Environment</label>
                            <label><input type=\"checkbox\"> Wholesale & Retail</label>
                            {#{{ form_widget(formPrivateCompany.sector, { 'attr':{'class':'form-control'} }) }}#}
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <h2 class=\"mg-sec-left-title\">Address</h2>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Building Name/Number</label>
                            {{ form_widget(formPrivateCompany.address.building, { 'attr':{'class':'form-control'} }) }}
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Street Address</label>
                            {{ form_widget(formPrivateCompany.address.streetAddress, { 'attr':{'class':'form-control'} }) }}
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Address Locality</label>
                            {{ form_widget(formPrivateCompany.address.addressLocality, { 'attr':{'class':'form-control'} }) }}
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>City</label>
                            {{ form_widget(formPrivateCompany.address.city, { 'attr':{'class':'form-control'} }) }}
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Region</label>
                            {{ form_widget(formPrivateCompany.address.region, { 'attr':{'class':'form-control'} }) }}
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Postal Code</label>
                            {{ form_widget(formPrivateCompany.address.postalCode, { 'attr':{'class':'form-control'} }) }}
                        </div>
                        {#<div class=\"form-group\">
                            <a href=\"\" class=\"btn btn-dark-main btn-block\">Address Lookup</a>
                        </div>#}
                        <div class=\"mg-book-form-input form-group\">
                            <label>Country</label>
                            {{ form_widget(formPrivateCompany.address.country, { 'attr':{'class':'form-control'} }) }}
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <button id=\"btn_add_org_private_company\" type=\"submit\" class=\"btn btn-dark-main btn-next-tab pull-right\">Next</button>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"mg-cart-container\">
                <aside class=\"mg-widget mt50\" id=\"mg-room-cart\">
                    <h2 class=\"mg-widget-title\">Lorem Ipsum</h2>
                    <div>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit dictum sapien, ut ullamcorper ipsum facilisis eu. Mauris quis sapien sed nunc porttitor varius. Mauris eleifend nec dolor vitae imperdiet. Nulla iaculis felis eu aliquet gravida. Cras mi nunc, blandit ut suscipit sed, maximus id leo. Curabitur mattis tortor vitae est vulputate vulputate. Nam sed elit id augue venenatis mattis nec ut tellus.
                    </div>
                </aside>
            </div>
        </div>
    </div>
{{ form_end(formPrivateCompany) }}", "AppBundle:Raisecapital:add_org_private_company.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Raisecapital/add_org_private_company.html.twig");
    }
}
