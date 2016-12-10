<?php

/* AppBundle:Raisecapital:add_equity_offering.html.twig */
class __TwigTemplate_454751fcc8103ef9f7bc3e09b3d10b262e9e641a31f5a8e332264c629a15926d extends Twig_Template
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
        echo "<form role=\"form\" id=\"form_add_equity_offering\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_offering");
        echo "\" method=\"POST\">
    <div class=\"row mt50\">
        <div class=\"col-md-6\">
            <div class=\"mg-book-form-input form-group\">
                <label>Organization <span class=\"asterisk\">*</span></label>
                ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEquityOffering"]) ? $context["formEquityOffering"] : $this->getContext($context, "formEquityOffering")), "id", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
            </div>
            <div class=\"mg-book-form-input form-group\">
                <label>Name of the Offering <span class=\"asterisk\">*</span></label>
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEquityOffering"]) ? $context["formEquityOffering"] : $this->getContext($context, "formEquityOffering")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
            </div>
            <div class=\"mg-book-form-input form-group\">
                <label>Funding Goal <span class=\"asterisk\">*</span></label>
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEquityOffering"]) ? $context["formEquityOffering"] : $this->getContext($context, "formEquityOffering")), "fundingGoal", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required number", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
            </div>
            <div class=\"mg-book-form-input form-group\">
                <label>Interest Rate <span class=\"asterisk\">*</span></label>
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEquityOffering"]) ? $context["formEquityOffering"] : $this->getContext($context, "formEquityOffering")), "interestRate", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required", "data-validation-allowing" => "float", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"mg-book-form-input form-group\">
                        <label>Open Date <span class=\"asterisk\">*</span></label>
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEquityOffering"]) ? $context["formEquityOffering"] : $this->getContext($context, "formEquityOffering")), "openDate", array()), 'widget', array("attr" => array("class" => "form-control input-datepicker", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"mg-book-form-input form-group\">
                        <label>Close Date <span class=\"asterisk\">*</span></label>
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEquityOffering"]) ? $context["formEquityOffering"] : $this->getContext($context, "formEquityOffering")), "closeDate", array()), 'widget', array("attr" => array("class" => "form-control input-datepicker", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
                    </div>
                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"mg-book-form-input form-group\">
                <label>Offering Description <span class=\"asterisk\">*</span></label>
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEquityOffering"]) ? $context["formEquityOffering"] : $this->getContext($context, "formEquityOffering")), "offeringDescription", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
            </div>
            <div class=\"mg-book-form-input form-group\">
                <label>External Commitments</label>
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEquityOffering"]) ? $context["formEquityOffering"] : $this->getContext($context, "formEquityOffering")), "externalCommitments", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "number", "data-validation-optional" => "true")));
        echo "
            </div>
            <div class=\"mg-book-form-input form-group\">
                <label>Maximum Funding Amount</label>
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEquityOffering"]) ? $context["formEquityOffering"] : $this->getContext($context, "formEquityOffering")), "maximumOverfundingAmount", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "number", "data-validation-optional" => "true")));
        echo "
            </div>
        </div>
    </div>
    <div>
        <button id=\"btn_add_equity_offering\" type=\"submit\" class=\"btn btn-dark-main btn-next-tab pull-right\">Next</button>
    </div>
";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEquityOffering"]) ? $context["formEquityOffering"] : $this->getContext($context, "formEquityOffering")), 'form_end');
    }

    public function getTemplateName()
    {
        return "AppBundle:Raisecapital:add_equity_offering.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 54,  93 => 47,  86 => 43,  79 => 39,  67 => 30,  58 => 24,  49 => 18,  42 => 14,  35 => 10,  28 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form role=\"form\" id=\"form_add_equity_offering\" action=\"{{ path('add_offering') }}\" method=\"POST\">
    <div class=\"row mt50\">
        <div class=\"col-md-6\">
            <div class=\"mg-book-form-input form-group\">
                <label>Organization <span class=\"asterisk\">*</span></label>
                {{ form_widget(formEquityOffering.id, { 'attr':{'class':'form-control', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
            </div>
            <div class=\"mg-book-form-input form-group\">
                <label>Name of the Offering <span class=\"asterisk\">*</span></label>
                {{ form_widget(formEquityOffering.name, { 'attr':{'class':'form-control', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
            </div>
            <div class=\"mg-book-form-input form-group\">
                <label>Funding Goal <span class=\"asterisk\">*</span></label>
                {{ form_widget(formEquityOffering.fundingGoal, { 'attr':{'class':'form-control', 'data-validation':'required number', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
            </div>
            <div class=\"mg-book-form-input form-group\">
                <label>Interest Rate <span class=\"asterisk\">*</span></label>
                {{ form_widget(formEquityOffering.interestRate, { 'attr':{'class':'form-control', 'data-validation':'required', 'data-validation-allowing':'float', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"mg-book-form-input form-group\">
                        <label>Open Date <span class=\"asterisk\">*</span></label>
                        {{ form_widget(formEquityOffering.openDate, { 'attr':{'class':'form-control input-datepicker', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"mg-book-form-input form-group\">
                        <label>Close Date <span class=\"asterisk\">*</span></label>
                        {{ form_widget(formEquityOffering.closeDate, { 'attr':{'class':'form-control input-datepicker', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
                    </div>
                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"mg-book-form-input form-group\">
                <label>Offering Description <span class=\"asterisk\">*</span></label>
                {{ form_widget(formEquityOffering.offeringDescription, { 'attr':{'class':'form-control', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
            </div>
            <div class=\"mg-book-form-input form-group\">
                <label>External Commitments</label>
                {{ form_widget(formEquityOffering.externalCommitments, { 'attr':{'class':'form-control', 'data-validation':'number', 'data-validation-optional':'true'} }) }}
            </div>
            <div class=\"mg-book-form-input form-group\">
                <label>Maximum Funding Amount</label>
                {{ form_widget(formEquityOffering.maximumOverfundingAmount, { 'attr':{'class':'form-control', 'data-validation':'number', 'data-validation-optional':'true'} }) }}
            </div>
        </div>
    </div>
    <div>
        <button id=\"btn_add_equity_offering\" type=\"submit\" class=\"btn btn-dark-main btn-next-tab pull-right\">Next</button>
    </div>
{{ form_end(formEquityOffering) }}", "AppBundle:Raisecapital:add_equity_offering.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Raisecapital/add_equity_offering.html.twig");
    }
}
