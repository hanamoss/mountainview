<?php

/* AppBundle:Profile:my_profile.html.twig */
class __TwigTemplate_b5a378019b3830e6ca309273f1f21925d3038ccef1fd274a3381243d36e27cdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Profile:my_profile.html.twig", 2);
        $this->blocks = array(
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
        $context["active"] = "profile";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "My Profile - Crowd Valley";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/css/s3.upload.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
    <div class=\"mg-page-title parallax\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>My Profile</h2>
                </div>
            </div>
        </div>
    </div>
    <div class=\"mg-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-sm-12 pull-right\">
                    <div class=\"row mb70 \">
                        <div class=\"col-md-3 col-sm-4 \">
                            <div class=\"avatar-profile\">
                                <figure >
                                    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/images/member1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\" alt=\"Avatar User\">
                                </figure>
                                <div class=\"file-container\">
                                    <input type=\"hidden\" id=\"offering_type_deal_doc\" name=\"\" />
                                    <div class=\"\">
                                        <div class=\"fileinput-button file-input-button f\">
                                            <button name=\"upload\" class=\"btn btn-default btn-block btn-upload-avatar\"><i class=\"fa fa-cloud-upload\"></i> Upload Avatar</button>
                                            <input id=\"file_logo\" class=\"s3_upload\" style=\"text-transform: none;cursor:pointer;\" type=\"file\" name=\"file_logo\" signUrl = \"/s3-url/convergence\" userCallback=\"multiUpload\" />
                                            <div class=\"upload_status\" style=\"display: none\">
                                                <div class=\"upload_info\"><strong class=\"upload_name\"></strong> - <span id=\"id_upload_text\" class=\"upload_text\"></span></div>
                                                <div class=\"progress_bar\"><div class=\"percent\">0%</div></div>
                                            </div>
                                            <div class=\"delete_deal_doc\" style=\"color: red; display: none; cursor: pointer\">
                                                <button class=\"btn btn-danger\" type=\"button\"> <i class=\"fa fa-times\"></i> Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-9 col-sm-8\">
                            <div class=\"profile-info \">
                                <div class=\"mb20\">
                                    <h3 class=\"mb20\">";
        // line 50
        if (($this->getAttribute((isset($context["self"]) ? $context["self"] : $this->getContext($context, "self")), "fullName", array()) != " ")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["self"]) ? $context["self"] : $this->getContext($context, "self")), "fullName", array()), "html", null, true);
        } else {
            echo "<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("complete_registration");
            echo "\">Please complete the registration process</a>";
        }
        echo "</h3>
                                    <p class=\"h5\"><i class=\"fa fa-envelope icon-profile\"></i> ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["self"]) ? $context["self"] : $this->getContext($context, "self")), "email", array()), "html", null, true);
        echo "</p>
                                    <p class=\"h5\"><i class=\"fa fa-phone icon-profile\"></i> ";
        // line 52
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["self"]) ? $context["self"] : null), "phone1", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["self"]) ? $context["self"] : null), "phone1", array()), "No phone number provided")) : ("No phone number provided")), "html", null, true);
        echo "</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb30\">
                        <h2 class=\"mg-sec-left-title\">My Documents</h2>
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Document name</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 69
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "fileAlias", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"col-download-doc\"><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "url", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-download\"></i> Download</a></td>
\t\t\t\t\t\t\t\t</tr>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                            </tbody>
                        </table>
                    </div>
                    <div class=\"text-right\">
                        <a href=\"javascript:void(0)\" id=\"btn-delete-account\" class=\"btn btn-danger\">
                            <i class=\"fa fa-times\"></i> Delete Account
                        </a>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-12 pull-left\">
                    <div class=\"mg-widget-area\">
                        <aside class=\"mg-widget\">
                            <h2 class=\"mg-widget-title\">MY PROFILE</h2>
                            <ul>
                                <li class=\"active\"><a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_profile");
        echo "\"><i class=\"fa fa-user\"></i> Overview</a></li>
                                <li><a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_profile");
        echo "\"><i class=\"fa fa-money\"></i> Edit Profile</a></li>
                                <li><a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("change_password");
        echo "\"><i class=\"fa fa-key\"></i> Change Password</a></li>
                                <li><a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("change_email");
        echo "\"><i class=\"fa fa-money\"></i> Change Email</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
";
    }

    // line 104
    public function block_javascripts($context, array $blocks = array())
    {
        // line 105
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/js/s3.upload.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Profile:my_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 105,  220 => 104,  205 => 92,  201 => 91,  197 => 90,  193 => 89,  177 => 75,  160 => 72,  156 => 71,  152 => 70,  149 => 69,  132 => 68,  113 => 52,  109 => 51,  99 => 50,  73 => 27,  53 => 9,  50 => 8,  43 => 6,  40 => 5,  34 => 4,  30 => 2,  28 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set active = 'profile' %}
{% extends 'AppBundle::base.html.twig' %}

{% block title %}My Profile - Crowd Valley{% endblock %}
{% block stylesheets %}
    <link href=\"{{ asset('bundles/app/css/s3.upload.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block body %}

    <div class=\"mg-page-title parallax\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>My Profile</h2>
                </div>
            </div>
        </div>
    </div>
    <div class=\"mg-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-sm-12 pull-right\">
                    <div class=\"row mb70 \">
                        <div class=\"col-md-3 col-sm-4 \">
                            <div class=\"avatar-profile\">
                                <figure >
                                    <img src=\"{{ asset('bundles/app/images/member1.png') }}\" alt=\"\" class=\"img-responsive\" alt=\"Avatar User\">
                                </figure>
                                <div class=\"file-container\">
                                    <input type=\"hidden\" id=\"offering_type_deal_doc\" name=\"\" />
                                    <div class=\"\">
                                        <div class=\"fileinput-button file-input-button f\">
                                            <button name=\"upload\" class=\"btn btn-default btn-block btn-upload-avatar\"><i class=\"fa fa-cloud-upload\"></i> Upload Avatar</button>
                                            <input id=\"file_logo\" class=\"s3_upload\" style=\"text-transform: none;cursor:pointer;\" type=\"file\" name=\"file_logo\" signUrl = \"/s3-url/convergence\" userCallback=\"multiUpload\" />
                                            <div class=\"upload_status\" style=\"display: none\">
                                                <div class=\"upload_info\"><strong class=\"upload_name\"></strong> - <span id=\"id_upload_text\" class=\"upload_text\"></span></div>
                                                <div class=\"progress_bar\"><div class=\"percent\">0%</div></div>
                                            </div>
                                            <div class=\"delete_deal_doc\" style=\"color: red; display: none; cursor: pointer\">
                                                <button class=\"btn btn-danger\" type=\"button\"> <i class=\"fa fa-times\"></i> Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-9 col-sm-8\">
                            <div class=\"profile-info \">
                                <div class=\"mb20\">
                                    <h3 class=\"mb20\">{% if self.fullName != ' ' %}{{ self.fullName }}{% else %}<a href=\"{{path('complete_registration')}}\">Please complete the registration process</a>{% endif %}</h3>
                                    <p class=\"h5\"><i class=\"fa fa-envelope icon-profile\"></i> {{ self.email }}</p>
                                    <p class=\"h5\"><i class=\"fa fa-phone icon-profile\"></i> {{ self.phone1|default('No phone number provided') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb30\">
                        <h2 class=\"mg-sec-left-title\">My Documents</h2>
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Document name</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for document in documents %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>{{ loop.index }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ document.fileAlias }}</td>
\t\t\t\t\t\t\t\t\t<td class=\"col-download-doc\"><a href=\"{{ document.url }}\" target=\"_blank\"><i class=\"fa fa-download\"></i> Download</a></td>
\t\t\t\t\t\t\t\t</tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                    <div class=\"text-right\">
                        <a href=\"javascript:void(0)\" id=\"btn-delete-account\" class=\"btn btn-danger\">
                            <i class=\"fa fa-times\"></i> Delete Account
                        </a>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-12 pull-left\">
                    <div class=\"mg-widget-area\">
                        <aside class=\"mg-widget\">
                            <h2 class=\"mg-widget-title\">MY PROFILE</h2>
                            <ul>
                                <li class=\"active\"><a href=\"{{ path('my_profile') }}\"><i class=\"fa fa-user\"></i> Overview</a></li>
                                <li><a href=\"{{ path('edit_profile') }}\"><i class=\"fa fa-money\"></i> Edit Profile</a></li>
                                <li><a href=\"{{ path('change_password') }}\"><i class=\"fa fa-key\"></i> Change Password</a></li>
                                <li><a href=\"{{ path('change_email') }}\"><i class=\"fa fa-money\"></i> Change Email</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('bundles/app/js/s3.upload.js') }}\"></script>
{% endblock %}", "AppBundle:Profile:my_profile.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Profile/my_profile.html.twig");
    }
}
