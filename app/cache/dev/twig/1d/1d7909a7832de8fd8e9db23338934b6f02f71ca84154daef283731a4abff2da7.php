<?php

/* AppBundle:Raisecapital:add_org_real_estate.html.twig */
class __TwigTemplate_67347f5897081e8a0089866699522471716d0ef7aa4054cecf90c4b345b5d508 extends Twig_Template
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
        echo "<form role=\"form\" id=\"form_add_org_real_estate\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_organization");
        echo "\" method=\"POST\">
    <div class=\"mg-book-form-personal\">
        <h2 class=\"mg-sec-left-title\">Real Estate</h2>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"mg-book-form-input form-group\">
                    <label>Property Name <span class=\"asterisk\">*</span></label>
                    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRealEstate"]) ? $context["formRealEstate"] : $this->getContext($context, "formRealEstate")), "displayName", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
                </div>
                <div class=\"mg-book-form-input form-group\">
                    <label>Name of Holding Company <span class=\"asterisk\">*</span></label>
                    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRealEstate"]) ? $context["formRealEstate"] : $this->getContext($context, "formRealEstate")), "alternateName", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
                </div>
                <div class=\"mg-book-form-input form-group\">
                    <label>Holding Company Number <span class=\"asterisk\">*</span></label>
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRealEstate"]) ? $context["formRealEstate"] : $this->getContext($context, "formRealEstate")), "companyNumber", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
                </div>
                <div class=\"mg-book-form-input form-group\">
                    <label>Building Name or Number <span class=\"asterisk\">*</span></label>
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formRealEstate"]) ? $context["formRealEstate"] : $this->getContext($context, "formRealEstate")), "address", array()), "building", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
                </div>
                <div class=\"mg-book-form-input form-group\">
                    <label>Street Address <span class=\"asterisk\">*</span></label>
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formRealEstate"]) ? $context["formRealEstate"] : $this->getContext($context, "formRealEstate")), "address", array()), "streetAddress", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
                </div>
                <div class=\"mg-book-form-input form-group\">
                    <label>City <span class=\"asterisk\">*</span></label>
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formRealEstate"]) ? $context["formRealEstate"] : $this->getContext($context, "formRealEstate")), "address", array()), "city", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Postal Code <span class=\"asterisk\">*</span></label>
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formRealEstate"]) ? $context["formRealEstate"] : $this->getContext($context, "formRealEstate")), "address", array()), "postalCode", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Locality <span class=\"asterisk\">*</span></label>
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formRealEstate"]) ? $context["formRealEstate"] : $this->getContext($context, "formRealEstate")), "address", array()), "addressLocality", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Region <span class=\"asterisk\">*</span></label>
                            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formRealEstate"]) ? $context["formRealEstate"] : $this->getContext($context, "formRealEstate")), "address", array()), "region", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Country <span class=\"asterisk\">*</span></label>
                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formRealEstate"]) ? $context["formRealEstate"] : $this->getContext($context, "formRealEstate")), "address", array()), "country", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"mg-book-form-input form-group\">
                    <label>Total Amount of Shares <span class=\"asterisk\">*</span></label>
                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formRealEstate"]) ? $context["formRealEstate"] : $this->getContext($context, "formRealEstate")), "custom", array()), "total_amount_of_shares", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"mg-book-form-input form-group\">
                    <label>Brief description <span class=\"asterisk\">*</span></label>
                    ";
        // line 67
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRealEstate"]) ? $context["formRealEstate"] : $this->getContext($context, "formRealEstate")), "briefDescription", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
                </div>
                <div class=\"mg-book-form-input form-group file-container\">
                    <input type=\"hidden\" id=\"logo\" name=\"logo\"/>
                    <label>Logo <span class=\"asterisk\">*</span></label>
                    <div id=\"\" class=\"file-area\">
                        <div class=\"span-button\">
                            <span class=\"fileinput-button upload-signed\">
                                <button class=\"btn btn-main btn-upload\" name=\"upload\">Upload file</button>
                                 <p class=\"detail\"> </p>
                                 <input signurl=\"\" class=\"s3_upload\" name=\"logo\" id=\"images\" type=\"file\" accept=\"image/png, image/gif, image/jpeg\" userCallback=\"s3upload3\">
                                <div class=\"upload_status\">
                                    <div class=\"upload_info\"><strong class=\"upload_name\"></strong> - <span class=\"upload_text\"></span></div>
                                    <div class=\"progress_bar\"><div class=\"percent\">0%</div></div>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"mg-book-form-input form-group file-container\">
                    <input type=\"hidden\" id=\"floor_plan\" name=\"floor_plan\"/>
                    <label>Floorplans <span class=\"asterisk\">*</span></label>
                    <div id=\"images_container\" class=\"file-area\">
                        <div class=\"span-button\">
                            <span class=\"fileinput-button upload-signed\">
                                <button class=\"btn btn-main btn-upload\" name=\"upload\">Upload file</button>
                                 <p class=\"detail\"> </p>
                                 <input signurl=\"\" class=\"s3_upload\" name=\"floor_plan[]\" id=\"images\" type=\"file\" accept=\"image/png, image/gif, image/jpeg\" userCallback=\"s3upload3\">
                                <div class=\"upload_status\">
                                    <div class=\"upload_info\"><strong class=\"upload_name\"></strong> - <span class=\"upload_text\"></span></div>
                                    <div class=\"progress_bar\"><div class=\"percent\">0%</div></div>
                                </div>
                            </span>
                        </div>
                    </div>
                    <a href=\"javascript:void(0)\" class=\"btn btn-success\" id=\"add_more_image\"> + </a>
                </div>
                <div class=\"mg-book-form-input form-group file-container\">
                    <input type=\"hidden\" id=\"property_logo\" name=\"property_logo\"/>
                    <label>Property Logo <span class=\"asterisk\">*</span></label>
                    <div id=\"property_images_container\" class=\"file-area\">
                        <div class=\"span-button\">
                            <span class=\"fileinput-button upload-signed\">
                                <button class=\"btn btn-main btn-upload\" name=\"upload\">Upload file</button>
                                 <p class=\"detail\"> </p>
                                 <input signurl=\"\" class=\"s3_upload\" name=\"property_logo[]\" id=\"images\" type=\"file\" accept=\"image/png, image/gif, image/jpeg\" userCallback=\"s3upload3\">
                                <div class=\"upload_status\">
                                    <div class=\"upload_info\"><strong class=\"upload_name\"></strong> - <span class=\"upload_text\"></span></div>
                                    <div class=\"progress_bar\"><div class=\"percent\">0%</div></div>
                                </div>
                            </span>
                        </div>
                    </div>
                    <a href=\"javascript:void(0)\" class=\"btn btn-success\" id=\"add_more_property_image\"> + </a>
                </div>
            </div>
        </div>
    </div>
    <div>
        <button id=\"btn_add_org_real_estate\" type=\"submit\" class=\"btn btn-dark-main btn-next-tab pull-right\">Next</button>
    </div>
";
        // line 128
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRealEstate"]) ? $context["formRealEstate"] : $this->getContext($context, "formRealEstate")), 'form_end');
    }

    public function getTemplateName()
    {
        return "AppBundle:Raisecapital:add_org_real_estate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 128,  121 => 67,  114 => 62,  103 => 54,  94 => 48,  83 => 40,  74 => 34,  65 => 28,  58 => 24,  51 => 20,  44 => 16,  37 => 12,  30 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form role=\"form\" id=\"form_add_org_real_estate\" action=\"{{ path('add_organization') }}\" method=\"POST\">
    <div class=\"mg-book-form-personal\">
        <h2 class=\"mg-sec-left-title\">Real Estate</h2>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"mg-book-form-input form-group\">
                    <label>Property Name <span class=\"asterisk\">*</span></label>
                    {{ form_widget(formRealEstate.displayName, { 'attr':{'class':'form-control', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
                </div>
                <div class=\"mg-book-form-input form-group\">
                    <label>Name of Holding Company <span class=\"asterisk\">*</span></label>
                    {{ form_widget(formRealEstate.alternateName, { 'attr':{'class':'form-control', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
                </div>
                <div class=\"mg-book-form-input form-group\">
                    <label>Holding Company Number <span class=\"asterisk\">*</span></label>
                    {{ form_widget(formRealEstate.companyNumber, { 'attr':{'class':'form-control', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
                </div>
                <div class=\"mg-book-form-input form-group\">
                    <label>Building Name or Number <span class=\"asterisk\">*</span></label>
                    {{ form_widget(formRealEstate.address.building, { 'attr':{'class':'form-control', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
                </div>
                <div class=\"mg-book-form-input form-group\">
                    <label>Street Address <span class=\"asterisk\">*</span></label>
                    {{ form_widget(formRealEstate.address.streetAddress, { 'attr':{'class':'form-control', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
                </div>
                <div class=\"mg-book-form-input form-group\">
                    <label>City <span class=\"asterisk\">*</span></label>
                    {{ form_widget(formRealEstate.address.city, { 'attr':{'class':'form-control', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Postal Code <span class=\"asterisk\">*</span></label>
                            {{ form_widget(formRealEstate.address.postalCode, { 'attr':{'class':'form-control', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Locality <span class=\"asterisk\">*</span></label>
                            {{ form_widget(formRealEstate.address.addressLocality, { 'attr':{'class':'form-control', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Region <span class=\"asterisk\">*</span></label>
                            {{ form_widget(formRealEstate.address.region, { 'attr':{'class':'form-control', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mg-book-form-input form-group\">
                            <label>Country <span class=\"asterisk\">*</span></label>
                            {{ form_widget(formRealEstate.address.country, { 'attr':{'class':'form-control'} }) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"mg-book-form-input form-group\">
                    <label>Total Amount of Shares <span class=\"asterisk\">*</span></label>
                    {{ form_widget(formRealEstate.custom.total_amount_of_shares, { 'attr':{'class':'form-control'} }) }}
                </div>
                <div class=\"mg-book-form-input form-group\">
                    <label>Brief description <span class=\"asterisk\">*</span></label>
                    {#<textarea class=\"form-control\" style=\"min-height: 125px\"></textarea>#}
                    {{ form_widget(formRealEstate.briefDescription, { 'attr':{'class':'form-control', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
                </div>
                <div class=\"mg-book-form-input form-group file-container\">
                    <input type=\"hidden\" id=\"logo\" name=\"logo\"/>
                    <label>Logo <span class=\"asterisk\">*</span></label>
                    <div id=\"\" class=\"file-area\">
                        <div class=\"span-button\">
                            <span class=\"fileinput-button upload-signed\">
                                <button class=\"btn btn-main btn-upload\" name=\"upload\">Upload file</button>
                                 <p class=\"detail\"> </p>
                                 <input signurl=\"\" class=\"s3_upload\" name=\"logo\" id=\"images\" type=\"file\" accept=\"image/png, image/gif, image/jpeg\" userCallback=\"s3upload3\">
                                <div class=\"upload_status\">
                                    <div class=\"upload_info\"><strong class=\"upload_name\"></strong> - <span class=\"upload_text\"></span></div>
                                    <div class=\"progress_bar\"><div class=\"percent\">0%</div></div>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"mg-book-form-input form-group file-container\">
                    <input type=\"hidden\" id=\"floor_plan\" name=\"floor_plan\"/>
                    <label>Floorplans <span class=\"asterisk\">*</span></label>
                    <div id=\"images_container\" class=\"file-area\">
                        <div class=\"span-button\">
                            <span class=\"fileinput-button upload-signed\">
                                <button class=\"btn btn-main btn-upload\" name=\"upload\">Upload file</button>
                                 <p class=\"detail\"> </p>
                                 <input signurl=\"\" class=\"s3_upload\" name=\"floor_plan[]\" id=\"images\" type=\"file\" accept=\"image/png, image/gif, image/jpeg\" userCallback=\"s3upload3\">
                                <div class=\"upload_status\">
                                    <div class=\"upload_info\"><strong class=\"upload_name\"></strong> - <span class=\"upload_text\"></span></div>
                                    <div class=\"progress_bar\"><div class=\"percent\">0%</div></div>
                                </div>
                            </span>
                        </div>
                    </div>
                    <a href=\"javascript:void(0)\" class=\"btn btn-success\" id=\"add_more_image\"> + </a>
                </div>
                <div class=\"mg-book-form-input form-group file-container\">
                    <input type=\"hidden\" id=\"property_logo\" name=\"property_logo\"/>
                    <label>Property Logo <span class=\"asterisk\">*</span></label>
                    <div id=\"property_images_container\" class=\"file-area\">
                        <div class=\"span-button\">
                            <span class=\"fileinput-button upload-signed\">
                                <button class=\"btn btn-main btn-upload\" name=\"upload\">Upload file</button>
                                 <p class=\"detail\"> </p>
                                 <input signurl=\"\" class=\"s3_upload\" name=\"property_logo[]\" id=\"images\" type=\"file\" accept=\"image/png, image/gif, image/jpeg\" userCallback=\"s3upload3\">
                                <div class=\"upload_status\">
                                    <div class=\"upload_info\"><strong class=\"upload_name\"></strong> - <span class=\"upload_text\"></span></div>
                                    <div class=\"progress_bar\"><div class=\"percent\">0%</div></div>
                                </div>
                            </span>
                        </div>
                    </div>
                    <a href=\"javascript:void(0)\" class=\"btn btn-success\" id=\"add_more_property_image\"> + </a>
                </div>
            </div>
        </div>
    </div>
    <div>
        <button id=\"btn_add_org_real_estate\" type=\"submit\" class=\"btn btn-dark-main btn-next-tab pull-right\">Next</button>
    </div>
{{ form_end(formRealEstate) }}", "AppBundle:Raisecapital:add_org_real_estate.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Raisecapital/add_org_real_estate.html.twig");
    }
}
