<?php

/* AppBundle:Raisecapital:add_debt_offering.html.twig */
class __TwigTemplate_a60de77271754360b911cf87c6377b5c7b46c9a7572584fef7a8fb6bf9e59b92 extends Twig_Template
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
        echo "<form role=\"form\" id=\"form_add_debt_offering\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_offering");
        echo "\" method=\"POST\">
    <div class=\"row mt50\">
        <div class=\"col-md-6\">
            <div class=\"mg-book-form-input form-group\">
                <label>Organization <span class=\"asterisk\">*</span></label>
                ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDebtOffering"]) ? $context["formDebtOffering"] : $this->getContext($context, "formDebtOffering")), "id", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
            </div>
            <div class=\"mg-book-form-input form-group\">
                <label>Name of the Offering <span class=\"asterisk\">*</span></label>
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDebtOffering"]) ? $context["formDebtOffering"] : $this->getContext($context, "formDebtOffering")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
            </div>
            <div class=\"mg-book-form-input form-group\">
                <label>Funding Goal <span class=\"asterisk\">*</span></label>
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDebtOffering"]) ? $context["formDebtOffering"] : $this->getContext($context, "formDebtOffering")), "fundingGoal", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required number", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
            </div>
            <div class=\"mg-book-form-input form-group\">
                <label>Interest Rate <span class=\"asterisk\">*</span></label>
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDebtOffering"]) ? $context["formDebtOffering"] : $this->getContext($context, "formDebtOffering")), "interestRate", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required number", "data-validation-allowing" => "float", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"mg-book-form-input form-group\">
                        <label>Open Date <span class=\"asterisk\">*</span></label>
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDebtOffering"]) ? $context["formDebtOffering"] : $this->getContext($context, "formDebtOffering")), "openDate", array()), 'widget', array("attr" => array("class" => "form-control input-datepicker", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"mg-book-form-input form-group\">
                        <label>Close Date <span class=\"asterisk\">*</span></label>
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDebtOffering"]) ? $context["formDebtOffering"] : $this->getContext($context, "formDebtOffering")), "closeDate", array()), 'widget', array("attr" => array("class" => "form-control input-datepicker", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDebtOffering"]) ? $context["formDebtOffering"] : $this->getContext($context, "formDebtOffering")), "offeringDescription", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "required", "data-validation-error-msg-required" => "This field is mandatory.")));
        echo "
            </div>
            <div class=\"mg-book-form-input form-group\">
                <label>External Commitments</label>
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDebtOffering"]) ? $context["formDebtOffering"] : $this->getContext($context, "formDebtOffering")), "externalCommitments", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "number", "data-validation-optional" => "true")));
        echo "
            </div>
            <div class=\"mg-book-form-input form-group\">
                <label>Maximum Funding Amount</label>
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDebtOffering"]) ? $context["formDebtOffering"] : $this->getContext($context, "formDebtOffering")), "maximumOverfundingAmount", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "number", "data-validation-optional" => "true")));
        echo "
            </div>
        </div>
    </div>
    <div>
        <button id=\"btn_add_debt_offering\" type=\"submit\" class=\"btn btn-dark-main btn-next-tab pull-right\">Next</button>
    </div>
";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formDebtOffering"]) ? $context["formDebtOffering"] : $this->getContext($context, "formDebtOffering")), 'form_end');
    }

    public function getTemplateName()
    {
        return "AppBundle:Raisecapital:add_debt_offering.html.twig";
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
        return new Twig_Source("<form role=\"form\" id=\"form_add_debt_offering\" action=\"{{ path('add_offering') }}\" method=\"POST\">
    <div class=\"row mt50\">
        <div class=\"col-md-6\">
            <div class=\"mg-book-form-input form-group\">
                <label>Organization <span class=\"asterisk\">*</span></label>
                {{ form_widget(formDebtOffering.id, { 'attr':{'class':'form-control', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
            </div>
            <div class=\"mg-book-form-input form-group\">
                <label>Name of the Offering <span class=\"asterisk\">*</span></label>
                {{ form_widget(formDebtOffering.name, { 'attr':{'class':'form-control', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
            </div>
            <div class=\"mg-book-form-input form-group\">
                <label>Funding Goal <span class=\"asterisk\">*</span></label>
                {{ form_widget(formDebtOffering.fundingGoal, { 'attr':{'class':'form-control', 'data-validation':'required number', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
            </div>
            <div class=\"mg-book-form-input form-group\">
                <label>Interest Rate <span class=\"asterisk\">*</span></label>
                {{ form_widget(formDebtOffering.interestRate, { 'attr':{'class':'form-control', 'data-validation':'required number', 'data-validation-allowing':'float','data-validation-error-msg-required':'This field is mandatory.'} }) }}
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"mg-book-form-input form-group\">
                        <label>Open Date <span class=\"asterisk\">*</span></label>
                        {{ form_widget(formDebtOffering.openDate, { 'attr':{'class':'form-control input-datepicker', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"mg-book-form-input form-group\">
                        <label>Close Date <span class=\"asterisk\">*</span></label>
                        {{ form_widget(formDebtOffering.closeDate, { 'attr':{'class':'form-control input-datepicker', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
                    </div>
                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"mg-book-form-input form-group\">
                <label>Offering Description <span class=\"asterisk\">*</span></label>
                {{ form_widget(formDebtOffering.offeringDescription, { 'attr':{'class':'form-control', 'data-validation':'required', 'data-validation-error-msg-required':'This field is mandatory.'} }) }}
            </div>
            <div class=\"mg-book-form-input form-group\">
                <label>External Commitments</label>
                {{ form_widget(formDebtOffering.externalCommitments, { 'attr':{'class':'form-control', 'data-validation':'number', 'data-validation-optional':'true'} }) }}
            </div>
            <div class=\"mg-book-form-input form-group\">
                <label>Maximum Funding Amount</label>
                {{ form_widget(formDebtOffering.maximumOverfundingAmount, { 'attr':{'class':'form-control', 'data-validation':'number', 'data-validation-optional':'true'} }) }}
            </div>
        </div>
    </div>
    <div>
        <button id=\"btn_add_debt_offering\" type=\"submit\" class=\"btn btn-dark-main btn-next-tab pull-right\">Next</button>
    </div>
{{ form_end(formDebtOffering) }}", "AppBundle:Raisecapital:add_debt_offering.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Raisecapital/add_debt_offering.html.twig");
    }
}
