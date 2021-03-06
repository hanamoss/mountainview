<?php

/* AppBundle:Profile:my_investments.html.twig */
class __TwigTemplate_4f4b896f6b15f3628d062178e4d7c2b233dc08ee088e2f07a766483c06865903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Profile:my_investments.html.twig", 2);
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
        $context["active"] = "profile";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "My Investments - Crowd Valley";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"mg-page-title parallax\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>My Investments</h2>
                    <p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"mg-page\">
        <div class=\"container\">
            <section>
                <div class=\"mg-sec-title\">
                    <h2>Portfolio Analysis</h2>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-9 col-sm-12 pull-right\">
                        <div id=\"chartContainer\" style=\"height: 500px\"></div>
                    </div>
                    <div class=\"col-md-3 col-sm-12 pull-left\">
                        <div class=\"mg-widget-area\">
                            <div class=\"mg-widget-v1\">
                                <h5>FILTER BY INVESTMENT </h5>
                                <div class=\"checkbox checkbox-list\">
                                    <label for=\"Cash_Balance\">
                                        <input type=\"checkbox\" class=\"radio\" id=\"Cash_Balance\" name=\"metric\" value=\"Cash Balance\">Cash Balance
                                    </label>
                                    <label for=\"Investment_1\">
                                        <input type=\"checkbox\" class=\"radio\" id=\"Investment_1\" name=\"metric\" value=\"Investment 1\">Investment 1
                                    </label>
                                    <label for=\"Investment_2\">
                                        <input type=\"checkbox\" class=\"radio\" id=\"Investment_2\" name=\"metric\" value=\"Investment 2\"> Investment 2
                                    </label>
                                    <label for=\"Investment_3\">
                                        <input type=\"checkbox\" class=\"radio\" id=\"Investment_3\" name=\"metric\" value=\"Investment 3\"> Investment 3
                                    </label>
                                </div>
                            </div>
                            <div class=\"mg-widget-v1\">
                                <h5>FILTER BY SOURCE </h5>
                                <div class=\"checkbox checkbox-list\">
                                    <label for=\"Cash_Transfers\">
                                        <input type=\"checkbox\" class=\"checkbox\" id=\"Cash_Transfers\" name=\"metric\" value=\"Cash Transfers\"> Cash Transfers
                                    </label>
                                    <label for=\"Investments\">
                                        <input type=\"checkbox\" class=\"checkbox\" id=\"Investments\" name=\"metric\" value=\"Investments\"> Investments
                                    </label>
                                    <label for=\"Dividends\">
                                        <input type=\"checkbox\" class=\"checkbox\" id=\"Dividends\" name=\"metric\" value=\"Dividends\"> Dividends
                                    </label>
                                    <label for=\"Divestment\">
                                        <input type=\"checkbox\" class=\"checkbox\" id=\"Divestment\" name=\"metric\" value=\"Divestment\"> Divestment
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class=\"mt70\">
                <div class=\"mg-sec-title\">
                    <h2>My Portfolio</h2>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <figure class=\"mg-room mg-room-col-2\">
                            <img src=\"/bundles/app/images/room-1.png\" alt=\"img11\" class=\"img-responsive\">
                            <figcaption>
                                <h2>Project Tomorrow</h2>
                                <div class=\"mg-room-rating\">Settled</div>
                                <div class=\"mg-room-price\">\$10,000</div>
                                <p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
                                <div class=\" mg-room-fecilities\">
                                    <ul>
                                        <li>You own 10,000 shares</li>
                                        <li>You have 2,000 shares open on the secondary market</li>
                                        <li>You have not divested any shares</li>
                                    </ul>
                                </div>
                                <a href=\"/offerings/overview\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
                                <a href=\"#modal-sell-share\" data-toggle=\"modal\" data-target=\"#modal-sell-share\" class=\"btn btn-main\">Sell Shares</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class=\"col-sm-6\">
                        <figure class=\"mg-room mg-room-col-2\">
                            <img src=\"/bundles/app/images/room-1.png\" alt=\"img11\" class=\"img-responsive\">
                            <figcaption>
                                <h2>Project Tomorrow</h2>
                                <div class=\"mg-room-rating\">Settled</div>
                                <div class=\"mg-room-price\">\$10,000</div>
                                <p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
                                <div class=\" mg-room-fecilities\">
                                    <ul>
                                        <li>You own 10,000 shares</li>
                                        <li>You have 2,000 shares open on the secondary market</li>
                                        <li>You have not divested any shares</li>
                                    </ul>
                                </div>
                                <a href=\"/offerings/overview\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
                                <a href=\"#modal-sell-share\" data-toggle=\"modal\" data-target=\"#modal-sell-share\" class=\"btn btn-main\">Sell Shares</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class=\"col-sm-6\">
                        <figure class=\"mg-room mg-room-col-2\">
                            <img src=\"/bundles/app/images/room-1.png\" alt=\"img11\" class=\"img-responsive\">
                            <figcaption>
                                <h2>Project Tomorrow</h2>
                                <div class=\"mg-room-rating\">Settled</div>
                                <div class=\"mg-room-price\">\$10,000</div>
                                <p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
                                <div class=\" mg-room-fecilities\">
                                    <ul>
                                        <li>You own 10,000 shares</li>
                                        <li>You have 2,000 shares open on the secondary market</li>
                                        <li>You have not divested any shares</li>
                                    </ul>
                                </div>
                                <a href=\"/offerings/overview\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
                                <a href=\"#modal-sell-share\" data-toggle=\"modal\" data-target=\"#modal-sell-share\" class=\"btn btn-main\">Sell Shares</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class=\"col-sm-6\">
                        <figure class=\"mg-room mg-room-col-2\">
                            <img src=\"/bundles/app/images/room-1.png\" alt=\"img11\" class=\"img-responsive\">
                            <figcaption>
                                <h2>Project Tomorrow</h2>
                                <div class=\"mg-room-rating\">Settled</div>
                                <div class=\"mg-room-price\">\$10,000</div>
                                <p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
                                <div class=\" mg-room-fecilities\">
                                    <ul>
                                        <li>You own 10,000 shares</li>
                                        <li>You have 2,000 shares open on the secondary market</li>
                                        <li>You have not divested any shares</li>
                                    </ul>
                                </div>
                                <a href=\"/offerings/overview\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
                                <a href=\"#modal-sell-share\" data-toggle=\"modal\" data-target=\"#modal-sell-share\" class=\"btn btn-main\">Sell Shares</a>
                            </figcaption>
                        </figure>
                    </div>

                </div>
            </section>
            <section class=\"mt70\">
                <div class=\"mg-sec-title\">
                    <h2>Portfolio Breakdown</h2>
                </div>
                <div class=\"row mb30\">
                    <div class=\"col-md-6\">
                        <div id=\"privateCompaniesChart\" style=\"height: 300px; width: 100%;\"></div>
                    </div>
                    <div class=\"col-md-6\">
                        <div id=\"realEstateChart\" style=\"height: 300px; width: 100%;\"></div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div id=\"debtChart\" style=\"height: 300px; width: 100%;\"></div>
                    </div>
                    <div class=\"col-md-6\">
                        <div id=\"equityChart\" style=\"height: 300px; width: 100%;\"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class=\"modal fade\" id=\"modal-sell-share\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-sell-share\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <form role=\"form\" id=\"form_sign_in\" action=\"/\" method=\"POST\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">Apply to Sell Shares</h4>
                    </div>
                    <div class=\"modal-body\">
                        <h4 class=\"mb20\">Project Tomorrow</h4>
                        <div class=\"form-group\">
                            <label for=\"\">Availabe shares</label>
                            <input type=\"text\" id=\"\" name=\"\" required=\"required\" class=\"form-control\" placeholder=\"\" readonly=\"readonly\" value=\"8,000\" />
                        </div>
                        <div class=\"form-group\">
                            <label for=\"\">Amount of shares</label>
                            <input type=\"text\" id=\"\" name=\"\" required=\"required\" class=\"form-control\" placeholder=\"\"  />
                        </div>
                        <div class=\"form-group\">
                            <label for=\"\">Price per shares</label>
                            <input type=\"text\" id=\"\" name=\"\" required=\"required\" class=\"form-control\" placeholder=\"\"  />
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" id=\"\" name=\"\" class=\"btn btn-dark-main btn-block btn-lg\">Apply</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
    }

    // line 211
    public function block_javascripts($context, array $blocks = array())
    {
        // line 212
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/app/js/canvasjs.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            var colorArr = [\"#455a64\", \"#546e7a\", \"#607d8b\", \"#78909c\", \"#90a4ae\"];
            var renderChart = function(chartData) {
                //drawn chart
                CanvasJS.addColorSet(\"colorArr\", colorArr);
                var chart = new CanvasJS.Chart(\"chartContainer\", {
                    colorSet: \"colorArr\",
                    backgroundColor: \"transparent\",
                    zoomEnabled: true,
                    dataPointMaxWidth: 40,
                    theme: \"theme\",
                    /*title: {
                        text: \"NUMBER OF DEALS\",
                        fontFamily: \"'Open Sans', sans-serif\",
                        fontSize: 20,
                        horizontalAlign: \"left\",
                        fontColor: \"#646464\"
                    },*/
                    toolTip: {
                        fontFamily: \"'Open Sans', sans-serif\"
                    },
                    animationEnabled: true,
                    animationDuration: 1000,
                    axisX:{
                        tickLength: 1,
                        labelFontFamily: \"'Open Sans', sans-serif\",
                        labelFontSize: 14,
                        labelFontColor: \"#646464\",
                        lineColor: \"#646464\",
                        tickLength: 15,
                        tickColor: \"transparent\"
                    },
                    axisY:{
                        lineThickness: 0,
                        tickLength: 0,
                        labelFormatter: function(e){
                            return  \"\"
                        }
                    },
                    data: [
                        {
                            type: \"stackedColumn\",
                            legendText: \"Cash Transfers\",
                            showInLegend: \"true\",
                            dataPoints: [
                                {  y: 1926, label: \"2001\"},
                                {  y: 3053, label: \"2002\" },
                                {  y: 2710, label: \"2003\" },
                                {  y: 4990, label: \"2004\" },
                                {  y: 1430, label: \"2005\" },
                                {  y: 6645, label: \"2006\" },
                                {  y: 5899, label: \"2007\" },
                                {  y: 4336, label: \"2008\" },
                                {  y: 6785, label: \"2009\" },
                                {  y: 7034, label: \"2010\" },
                                {  y: 3003, label: \"2011\" },
                                {  y: 6940, label: \"2012\" }
                            ]
                        },
                        {
                            type: \"stackedColumn\",
                            legendText: \"Investments\",
                            showInLegend: \"true\",
                            dataPoints: [
                                {  y: 2926, label: \"2001\"},
                                {  y: 2053, label: \"2002\" },
                                {  y: 2510, label: \"2003\" },
                                {  y: 2190, label: \"2004\" },
                                {  y: 3230, label: \"2005\" },
                                {  y: 3645, label: \"2006\" },
                                {  y: 6899, label: \"2007\" },
                                {  y: 6336, label: \"2008\" },
                                {  y: 6785, label: \"2009\" },
                                {  y: 10364, label: \"2010\" },
                                {  y: 7003, label: \"2011\" },
                                {  y: 7940, label: \"2012\" }
                            ]
                        },
                        {
                            type: \"stackedColumn\",
                            legendText: \"Dividends\",
                            showInLegend: \"true\",
                            dataPoints: [
                                {  y: 1, label: \"2001\"},
                                {  y: 1, label: \"2002\" },
                                {  y: 0, label: \"2003\" },
                                {  y: 0, label: \"2004\" },
                                {  y: 0, label: \"2005\" },
                                {  y: 43, label: \"2006\" },
                                {  y: 521, label: \"2007\" },
                                {  y: 1690, label: \"2008\" },
                                {  y: 1533, label: \"2009\" },
                                {  y: 1872, label: \"2010\" },
                                {  y: 1664, label: \"2011\" },
                                {  y: 1316, label: \"2012\" }
                            ]
                        },
                        {
                            type: \"stackedColumn\",
                            legendText: \"Divestment\",
                            showInLegend: \"true\",
                            dataPoints: [
                                {  y: 340, label: \"2001\"},
                                {  y: 4, label: \"2002\" },
                                {  y: 442, label: \"2003\" },
                                {  y: 462, label: \"2004\" },
                                {  y: 419, label: \"2005\" },
                                {  y: 1262, label: \"2006\" },
                                {  y: 108, label: \"2007\" },
                                {  y: 1063, label: \"2008\" },
                                {  y: 549, label: \"2009\" },
                                {  y: 639, label: \"2010\" },
                                {  y: 376, label: \"2011\" },
                                {  y: 1352, label: \"2012\" }
                            ]
                        }
                    ],
                    legend:{
                        horizontalAlign: \"left\", // \"center\" , \"right\"
                        verticalAlign: \"top\",  // \"top\" , \"bottom\"
                        fontFamily: \"'Open Sans', sans-serif\",
                        fontSize: 15,
                        cursor:\"pointer\",
                        fontColor: \"#646464\",
                        itemclick:function(e) {
                            if(typeof(e.dataSeries.visible) === \"undefined\" || e.dataSeries.visible) {
                                e.dataSeries.visible = false;
                            } else {
                                e.dataSeries.visible = true;
                            }
                            chart.render();
                        }
                    }
                });
                chart.render();
            }

            renderChart();

            var renderPieChart = function (element, title, dataPoints) {
                var pieChart = new CanvasJS.Chart(element,
                        {
                            title:{
                                text: title,
                                fontFamily: \"arial black\"
                            },
                            animationEnabled: true,
                            legend: {
                                verticalAlign: \"bottom\",
                                horizontalAlign: \"center\"
                            },
                            theme: \"theme1\",
                            data: [
                                {
                                    type: \"pie\",
                                    indexLabelFontFamily: \"Garamond\",
                                    indexLabelFontSize: 20,
                                    indexLabelFontWeight: \"bold\",
                                    startAngle:0,
                                    indexLabelFontColor: \"MistyRose\",
                                    indexLabelLineColor: \"darkgrey\",
                                    indexLabelPlacement: \"inside\",
                                    toolTipContent: \"{name}\",
                                    showInLegend: true,
                                    indexLabel: \"#percent%\",
                                    dataPoints: dataPoints
                                }
                            ]
                        });
                pieChart.render();
            }

            //private companies
            var dataPrivateCompanies = [{  y: 52, name: \"Pie 1\"}, {  y: 44, name: \"Pie 2\"}, {  y: 12, name: \"Pie 3\"}];
            renderPieChart(\"privateCompaniesChart\", \"Private Companies\", dataPrivateCompanies);

            // real estate
            var dataRealEstate = [{  y: 13, name: \"Pie 1\"}, {  y: 67, name: \"Pie 2\"}, {  y: 33, name: \"Pie 3\"}];
            renderPieChart(\"realEstateChart\", \"Real Estate\", dataRealEstate);

            // debt
            var dataDebt = [{  y: 44, name: \"Pie 1\"}, {  y: 22, name: \"Pie 2\"}, {  y: 44, name: \"Pie 3\"}];
            renderPieChart(\"debtChart\", \"Debt\", dataDebt);

            // equity
            var dataEquity = [{  y: 20, name: \"Pie 1\"}, {  y: 70, name: \"Pie 2\"}, {  y: 33, name: \"Pie 3\"}];
            renderPieChart(\"equityChart\", \"Equity\", dataEquity);
        });

    </script>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Profile:my_investments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 212,  249 => 211,  42 => 7,  39 => 6,  33 => 4,  29 => 2,  27 => 1,  11 => 2,);
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

{% block title %}My Investments - Crowd Valley{% endblock %}

{% block body %}

    <div class=\"mg-page-title parallax\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>My Investments</h2>
                    <p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"mg-page\">
        <div class=\"container\">
            <section>
                <div class=\"mg-sec-title\">
                    <h2>Portfolio Analysis</h2>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-9 col-sm-12 pull-right\">
                        <div id=\"chartContainer\" style=\"height: 500px\"></div>
                    </div>
                    <div class=\"col-md-3 col-sm-12 pull-left\">
                        <div class=\"mg-widget-area\">
                            <div class=\"mg-widget-v1\">
                                <h5>FILTER BY INVESTMENT </h5>
                                <div class=\"checkbox checkbox-list\">
                                    <label for=\"Cash_Balance\">
                                        <input type=\"checkbox\" class=\"radio\" id=\"Cash_Balance\" name=\"metric\" value=\"Cash Balance\">Cash Balance
                                    </label>
                                    <label for=\"Investment_1\">
                                        <input type=\"checkbox\" class=\"radio\" id=\"Investment_1\" name=\"metric\" value=\"Investment 1\">Investment 1
                                    </label>
                                    <label for=\"Investment_2\">
                                        <input type=\"checkbox\" class=\"radio\" id=\"Investment_2\" name=\"metric\" value=\"Investment 2\"> Investment 2
                                    </label>
                                    <label for=\"Investment_3\">
                                        <input type=\"checkbox\" class=\"radio\" id=\"Investment_3\" name=\"metric\" value=\"Investment 3\"> Investment 3
                                    </label>
                                </div>
                            </div>
                            <div class=\"mg-widget-v1\">
                                <h5>FILTER BY SOURCE </h5>
                                <div class=\"checkbox checkbox-list\">
                                    <label for=\"Cash_Transfers\">
                                        <input type=\"checkbox\" class=\"checkbox\" id=\"Cash_Transfers\" name=\"metric\" value=\"Cash Transfers\"> Cash Transfers
                                    </label>
                                    <label for=\"Investments\">
                                        <input type=\"checkbox\" class=\"checkbox\" id=\"Investments\" name=\"metric\" value=\"Investments\"> Investments
                                    </label>
                                    <label for=\"Dividends\">
                                        <input type=\"checkbox\" class=\"checkbox\" id=\"Dividends\" name=\"metric\" value=\"Dividends\"> Dividends
                                    </label>
                                    <label for=\"Divestment\">
                                        <input type=\"checkbox\" class=\"checkbox\" id=\"Divestment\" name=\"metric\" value=\"Divestment\"> Divestment
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class=\"mt70\">
                <div class=\"mg-sec-title\">
                    <h2>My Portfolio</h2>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <figure class=\"mg-room mg-room-col-2\">
                            <img src=\"/bundles/app/images/room-1.png\" alt=\"img11\" class=\"img-responsive\">
                            <figcaption>
                                <h2>Project Tomorrow</h2>
                                <div class=\"mg-room-rating\">Settled</div>
                                <div class=\"mg-room-price\">\$10,000</div>
                                <p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
                                <div class=\" mg-room-fecilities\">
                                    <ul>
                                        <li>You own 10,000 shares</li>
                                        <li>You have 2,000 shares open on the secondary market</li>
                                        <li>You have not divested any shares</li>
                                    </ul>
                                </div>
                                <a href=\"/offerings/overview\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
                                <a href=\"#modal-sell-share\" data-toggle=\"modal\" data-target=\"#modal-sell-share\" class=\"btn btn-main\">Sell Shares</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class=\"col-sm-6\">
                        <figure class=\"mg-room mg-room-col-2\">
                            <img src=\"/bundles/app/images/room-1.png\" alt=\"img11\" class=\"img-responsive\">
                            <figcaption>
                                <h2>Project Tomorrow</h2>
                                <div class=\"mg-room-rating\">Settled</div>
                                <div class=\"mg-room-price\">\$10,000</div>
                                <p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
                                <div class=\" mg-room-fecilities\">
                                    <ul>
                                        <li>You own 10,000 shares</li>
                                        <li>You have 2,000 shares open on the secondary market</li>
                                        <li>You have not divested any shares</li>
                                    </ul>
                                </div>
                                <a href=\"/offerings/overview\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
                                <a href=\"#modal-sell-share\" data-toggle=\"modal\" data-target=\"#modal-sell-share\" class=\"btn btn-main\">Sell Shares</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class=\"col-sm-6\">
                        <figure class=\"mg-room mg-room-col-2\">
                            <img src=\"/bundles/app/images/room-1.png\" alt=\"img11\" class=\"img-responsive\">
                            <figcaption>
                                <h2>Project Tomorrow</h2>
                                <div class=\"mg-room-rating\">Settled</div>
                                <div class=\"mg-room-price\">\$10,000</div>
                                <p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
                                <div class=\" mg-room-fecilities\">
                                    <ul>
                                        <li>You own 10,000 shares</li>
                                        <li>You have 2,000 shares open on the secondary market</li>
                                        <li>You have not divested any shares</li>
                                    </ul>
                                </div>
                                <a href=\"/offerings/overview\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
                                <a href=\"#modal-sell-share\" data-toggle=\"modal\" data-target=\"#modal-sell-share\" class=\"btn btn-main\">Sell Shares</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class=\"col-sm-6\">
                        <figure class=\"mg-room mg-room-col-2\">
                            <img src=\"/bundles/app/images/room-1.png\" alt=\"img11\" class=\"img-responsive\">
                            <figcaption>
                                <h2>Project Tomorrow</h2>
                                <div class=\"mg-room-rating\">Settled</div>
                                <div class=\"mg-room-price\">\$10,000</div>
                                <p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
                                <div class=\" mg-room-fecilities\">
                                    <ul>
                                        <li>You own 10,000 shares</li>
                                        <li>You have 2,000 shares open on the secondary market</li>
                                        <li>You have not divested any shares</li>
                                    </ul>
                                </div>
                                <a href=\"/offerings/overview\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
                                <a href=\"#modal-sell-share\" data-toggle=\"modal\" data-target=\"#modal-sell-share\" class=\"btn btn-main\">Sell Shares</a>
                            </figcaption>
                        </figure>
                    </div>

                </div>
            </section>
            <section class=\"mt70\">
                <div class=\"mg-sec-title\">
                    <h2>Portfolio Breakdown</h2>
                </div>
                <div class=\"row mb30\">
                    <div class=\"col-md-6\">
                        <div id=\"privateCompaniesChart\" style=\"height: 300px; width: 100%;\"></div>
                    </div>
                    <div class=\"col-md-6\">
                        <div id=\"realEstateChart\" style=\"height: 300px; width: 100%;\"></div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div id=\"debtChart\" style=\"height: 300px; width: 100%;\"></div>
                    </div>
                    <div class=\"col-md-6\">
                        <div id=\"equityChart\" style=\"height: 300px; width: 100%;\"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class=\"modal fade\" id=\"modal-sell-share\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-sell-share\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <form role=\"form\" id=\"form_sign_in\" action=\"/\" method=\"POST\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">Apply to Sell Shares</h4>
                    </div>
                    <div class=\"modal-body\">
                        <h4 class=\"mb20\">Project Tomorrow</h4>
                        <div class=\"form-group\">
                            <label for=\"\">Availabe shares</label>
                            <input type=\"text\" id=\"\" name=\"\" required=\"required\" class=\"form-control\" placeholder=\"\" readonly=\"readonly\" value=\"8,000\" />
                        </div>
                        <div class=\"form-group\">
                            <label for=\"\">Amount of shares</label>
                            <input type=\"text\" id=\"\" name=\"\" required=\"required\" class=\"form-control\" placeholder=\"\"  />
                        </div>
                        <div class=\"form-group\">
                            <label for=\"\">Price per shares</label>
                            <input type=\"text\" id=\"\" name=\"\" required=\"required\" class=\"form-control\" placeholder=\"\"  />
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" id=\"\" name=\"\" class=\"btn btn-dark-main btn-block btn-lg\">Apply</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('bundles/app/js/canvasjs.js') }}\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            var colorArr = [\"#455a64\", \"#546e7a\", \"#607d8b\", \"#78909c\", \"#90a4ae\"];
            var renderChart = function(chartData) {
                //drawn chart
                CanvasJS.addColorSet(\"colorArr\", colorArr);
                var chart = new CanvasJS.Chart(\"chartContainer\", {
                    colorSet: \"colorArr\",
                    backgroundColor: \"transparent\",
                    zoomEnabled: true,
                    dataPointMaxWidth: 40,
                    theme: \"theme\",
                    /*title: {
                        text: \"NUMBER OF DEALS\",
                        fontFamily: \"'Open Sans', sans-serif\",
                        fontSize: 20,
                        horizontalAlign: \"left\",
                        fontColor: \"#646464\"
                    },*/
                    toolTip: {
                        fontFamily: \"'Open Sans', sans-serif\"
                    },
                    animationEnabled: true,
                    animationDuration: 1000,
                    axisX:{
                        tickLength: 1,
                        labelFontFamily: \"'Open Sans', sans-serif\",
                        labelFontSize: 14,
                        labelFontColor: \"#646464\",
                        lineColor: \"#646464\",
                        tickLength: 15,
                        tickColor: \"transparent\"
                    },
                    axisY:{
                        lineThickness: 0,
                        tickLength: 0,
                        labelFormatter: function(e){
                            return  \"\"
                        }
                    },
                    data: [
                        {
                            type: \"stackedColumn\",
                            legendText: \"Cash Transfers\",
                            showInLegend: \"true\",
                            dataPoints: [
                                {  y: 1926, label: \"2001\"},
                                {  y: 3053, label: \"2002\" },
                                {  y: 2710, label: \"2003\" },
                                {  y: 4990, label: \"2004\" },
                                {  y: 1430, label: \"2005\" },
                                {  y: 6645, label: \"2006\" },
                                {  y: 5899, label: \"2007\" },
                                {  y: 4336, label: \"2008\" },
                                {  y: 6785, label: \"2009\" },
                                {  y: 7034, label: \"2010\" },
                                {  y: 3003, label: \"2011\" },
                                {  y: 6940, label: \"2012\" }
                            ]
                        },
                        {
                            type: \"stackedColumn\",
                            legendText: \"Investments\",
                            showInLegend: \"true\",
                            dataPoints: [
                                {  y: 2926, label: \"2001\"},
                                {  y: 2053, label: \"2002\" },
                                {  y: 2510, label: \"2003\" },
                                {  y: 2190, label: \"2004\" },
                                {  y: 3230, label: \"2005\" },
                                {  y: 3645, label: \"2006\" },
                                {  y: 6899, label: \"2007\" },
                                {  y: 6336, label: \"2008\" },
                                {  y: 6785, label: \"2009\" },
                                {  y: 10364, label: \"2010\" },
                                {  y: 7003, label: \"2011\" },
                                {  y: 7940, label: \"2012\" }
                            ]
                        },
                        {
                            type: \"stackedColumn\",
                            legendText: \"Dividends\",
                            showInLegend: \"true\",
                            dataPoints: [
                                {  y: 1, label: \"2001\"},
                                {  y: 1, label: \"2002\" },
                                {  y: 0, label: \"2003\" },
                                {  y: 0, label: \"2004\" },
                                {  y: 0, label: \"2005\" },
                                {  y: 43, label: \"2006\" },
                                {  y: 521, label: \"2007\" },
                                {  y: 1690, label: \"2008\" },
                                {  y: 1533, label: \"2009\" },
                                {  y: 1872, label: \"2010\" },
                                {  y: 1664, label: \"2011\" },
                                {  y: 1316, label: \"2012\" }
                            ]
                        },
                        {
                            type: \"stackedColumn\",
                            legendText: \"Divestment\",
                            showInLegend: \"true\",
                            dataPoints: [
                                {  y: 340, label: \"2001\"},
                                {  y: 4, label: \"2002\" },
                                {  y: 442, label: \"2003\" },
                                {  y: 462, label: \"2004\" },
                                {  y: 419, label: \"2005\" },
                                {  y: 1262, label: \"2006\" },
                                {  y: 108, label: \"2007\" },
                                {  y: 1063, label: \"2008\" },
                                {  y: 549, label: \"2009\" },
                                {  y: 639, label: \"2010\" },
                                {  y: 376, label: \"2011\" },
                                {  y: 1352, label: \"2012\" }
                            ]
                        }
                    ],
                    legend:{
                        horizontalAlign: \"left\", // \"center\" , \"right\"
                        verticalAlign: \"top\",  // \"top\" , \"bottom\"
                        fontFamily: \"'Open Sans', sans-serif\",
                        fontSize: 15,
                        cursor:\"pointer\",
                        fontColor: \"#646464\",
                        itemclick:function(e) {
                            if(typeof(e.dataSeries.visible) === \"undefined\" || e.dataSeries.visible) {
                                e.dataSeries.visible = false;
                            } else {
                                e.dataSeries.visible = true;
                            }
                            chart.render();
                        }
                    }
                });
                chart.render();
            }

            renderChart();

            var renderPieChart = function (element, title, dataPoints) {
                var pieChart = new CanvasJS.Chart(element,
                        {
                            title:{
                                text: title,
                                fontFamily: \"arial black\"
                            },
                            animationEnabled: true,
                            legend: {
                                verticalAlign: \"bottom\",
                                horizontalAlign: \"center\"
                            },
                            theme: \"theme1\",
                            data: [
                                {
                                    type: \"pie\",
                                    indexLabelFontFamily: \"Garamond\",
                                    indexLabelFontSize: 20,
                                    indexLabelFontWeight: \"bold\",
                                    startAngle:0,
                                    indexLabelFontColor: \"MistyRose\",
                                    indexLabelLineColor: \"darkgrey\",
                                    indexLabelPlacement: \"inside\",
                                    toolTipContent: \"{name}\",
                                    showInLegend: true,
                                    indexLabel: \"#percent%\",
                                    dataPoints: dataPoints
                                }
                            ]
                        });
                pieChart.render();
            }

            //private companies
            var dataPrivateCompanies = [{  y: 52, name: \"Pie 1\"}, {  y: 44, name: \"Pie 2\"}, {  y: 12, name: \"Pie 3\"}];
            renderPieChart(\"privateCompaniesChart\", \"Private Companies\", dataPrivateCompanies);

            // real estate
            var dataRealEstate = [{  y: 13, name: \"Pie 1\"}, {  y: 67, name: \"Pie 2\"}, {  y: 33, name: \"Pie 3\"}];
            renderPieChart(\"realEstateChart\", \"Real Estate\", dataRealEstate);

            // debt
            var dataDebt = [{  y: 44, name: \"Pie 1\"}, {  y: 22, name: \"Pie 2\"}, {  y: 44, name: \"Pie 3\"}];
            renderPieChart(\"debtChart\", \"Debt\", dataDebt);

            // equity
            var dataEquity = [{  y: 20, name: \"Pie 1\"}, {  y: 70, name: \"Pie 2\"}, {  y: 33, name: \"Pie 3\"}];
            renderPieChart(\"equityChart\", \"Equity\", dataEquity);
        });

    </script>
{% endblock %}
", "AppBundle:Profile:my_investments.html.twig", "C:\\wamp\\www\\mountainview\\src\\AppBundle/Resources/views/Profile/my_investments.html.twig");
    }
}
