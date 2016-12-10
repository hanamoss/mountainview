<?php

/* AppBundle:Public:contact.html.twig */
class __TwigTemplate_70eddff511b00b0b80078a812954dac9606eb01fcd9accdc6c7ff78750bf18b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Public:contact.html.twig", 2);
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
        $context["active"] = "contact";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Contact - Crowd Valley";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"mg-page-title parallax\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Contact Us</h2>
                    <p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"mg-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-5\">
                    <h2 class=\"mg-sec-left-title\">Send an E-mail</h2>
                    <form class=\"clearfix\">
                        <div class=\"mg-contact-form-input\">
                            <label for=\"full-name\">Full Name</label>
                            <input type=\"text\" class=\"form-control\" id=\"full-name\">
                        </div>
                        <div class=\"mg-contact-form-input\">
                            <label for=\"email\">E-mail</label>
                            <input type=\"text\" class=\"form-control\" id=\"email\">
                        </div>
                        <div class=\"mg-contact-form-input\">
                            <label for=\"subject\">Subject</label>
                            <input type=\"text\" class=\"form-control\" id=\"subject\">
                        </div>
                        <div class=\"mg-contact-form-input\">
                            <label for=\"subject\">Message</label>
                            <textarea class=\"form-control\" id=\"subject\" rows=\"5\"></textarea>
                        </div>
                        <input type=\"submit\" class=\"btn btn-dark-main pull-right\" value=\"Send\">
                    </form>
                </div>
                <div class=\"col-md-7\">
                    <h2 class=\"mg-sec-left-title\">Office Address</h2>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"addr-txt\">
                                <h5>HEADQUARTERS</h5>
                                <span class=\"addr-str\">One Market Plaza, Spear Tower</span>
                                <span class=\"addr-state\">San Francisco, CA 94105</span>
                                <span class=\"addr-country\">UNITED STATES</span>
                                <div class=\"addr-hr\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"addr-txt\">
                                <h5>EUROPE</h5>
                                <span class=\"addr-str\">1 Ropemaker Street, Moorgate</span>
                                <span class=\"addr-state\">London</span>
                                <span class=\"addr-country\">UNITED KINGDOM</span>
                                <div class=\"addr-hr\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"addr-txt\">
                                <h5>ASIA</h5>
                                <span class=\"addr-str\">3905 Two Exchange Square</span>
                                <span class=\"addr-state\">8 Connaught Place</span>
                                <span class=\"addr-country\">HONG KONG</span>
                                <div class=\"addr-hr\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"addr-txt\">
                                <h5>INQUIRIES</h5>
                                <span class=\"addr-str\">+1 (415) 580 0087</span>
                                <span class=\"addr-str\">sales[at]crowdvalley.com</span>
                                <span class=\"addr-str\">partner[at]crowdvalley.com</span>
                                <span class=\"addr-country\"></span>
                                <div class=\"addr-hr\"></div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 92
        echo "                    <div id=\"mg-map\" class=\"mg-map mt10\"></div>
                </div>
            </div>


        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Public:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 92,  41 => 7,  38 => 6,  32 => 4,  28 => 2,  26 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set active = 'contact' %}
{% extends 'AppBundle::base.html.twig' %}

{% block title %}Contact - Crowd Valley{% endblock %}

{% block body %}
    <div class=\"mg-page-title parallax\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Contact Us</h2>
                    <p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"mg-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-5\">
                    <h2 class=\"mg-sec-left-title\">Send an E-mail</h2>
                    <form class=\"clearfix\">
                        <div class=\"mg-contact-form-input\">
                            <label for=\"full-name\">Full Name</label>
                            <input type=\"text\" class=\"form-control\" id=\"full-name\">
                        </div>
                        <div class=\"mg-contact-form-input\">
                            <label for=\"email\">E-mail</label>
                            <input type=\"text\" class=\"form-control\" id=\"email\">
                        </div>
                        <div class=\"mg-contact-form-input\">
                            <label for=\"subject\">Subject</label>
                            <input type=\"text\" class=\"form-control\" id=\"subject\">
                        </div>
                        <div class=\"mg-contact-form-input\">
                            <label for=\"subject\">Message</label>
                            <textarea class=\"form-control\" id=\"subject\" rows=\"5\"></textarea>
                        </div>
                        <input type=\"submit\" class=\"btn btn-dark-main pull-right\" value=\"Send\">
                    </form>
                </div>
                <div class=\"col-md-7\">
                    <h2 class=\"mg-sec-left-title\">Office Address</h2>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"addr-txt\">
                                <h5>HEADQUARTERS</h5>
                                <span class=\"addr-str\">One Market Plaza, Spear Tower</span>
                                <span class=\"addr-state\">San Francisco, CA 94105</span>
                                <span class=\"addr-country\">UNITED STATES</span>
                                <div class=\"addr-hr\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"addr-txt\">
                                <h5>EUROPE</h5>
                                <span class=\"addr-str\">1 Ropemaker Street, Moorgate</span>
                                <span class=\"addr-state\">London</span>
                                <span class=\"addr-country\">UNITED KINGDOM</span>
                                <div class=\"addr-hr\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"addr-txt\">
                                <h5>ASIA</h5>
                                <span class=\"addr-str\">3905 Two Exchange Square</span>
                                <span class=\"addr-state\">8 Connaught Place</span>
                                <span class=\"addr-country\">HONG KONG</span>
                                <div class=\"addr-hr\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"addr-txt\">
                                <h5>INQUIRIES</h5>
                                <span class=\"addr-str\">+1 (415) 580 0087</span>
                                <span class=\"addr-str\">sales[at]crowdvalley.com</span>
                                <span class=\"addr-str\">partner[at]crowdvalley.com</span>
                                <span class=\"addr-country\"></span>
                                <div class=\"addr-hr\"></div>
                            </div>
                        </div>
                    </div>
                    {#<p>Consulatu quietem ipsas obruamus. Controversia unam queo firmam videri, afranius derigatur sine sentit inliberali beatam scribendi splendide. Recusabo maximisque ferentur arbitraretur vellem oritur cupiditatibus copulatas.</p>
                    <ul class=\"mg-contact-info\">
                        <li><i class=\"fa fa-map-marker\"></i> Level 13, 2 Elizabeth St, Melbourne, Victoria 3000 Australia</li>
                        <li><i class=\"fa fa-phone\"></i> +000-123-456-789 (Sale)</li>
                        <li><i class=\"fa fa-envelope\"></i> <a href=\"mailto:#\">example@example.com</a></li>
                    </ul>#}
                    <div id=\"mg-map\" class=\"mg-map mt10\"></div>
                </div>
            </div>


        </div>
    </div>

{% endblock %}", "AppBundle:Public:contact.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Public/contact.html.twig");
    }
}
