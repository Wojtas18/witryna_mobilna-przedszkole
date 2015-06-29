<?php

/* end.html.twig */
class __TwigTemplate_2a559b7be5fdd0c7ef325c09cd7a9bc5d3b9d86db482e3cdea008201bd6a473c extends Twig_Template
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
        echo "    <p>Footer</p>
    <div class=\"container\">
                    <div class=\"row\">
                
                    <div class=\"col-xs-12 text-center\">
                        <div id=\"carousel-example-generic\" class=\"carousel slide\">
                            <ol class=\"carousel-indicators hidden-xs\">
                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                            </ol>
                            
                            <div class=\"carousel-inner\">
                                <div class=\"item active\">
                                    <img class=\"img-responsive img-full\" src=\"http://m.ocdn.eu/_m/5a1399294088dd9afb3e24ad428faf68,37,1.jpg\" alt=\"\" style=\"width: 100%\">
                                </div>
                                <div class=\"item\">
                                    <img class=\"img-responsive img-full\" src=\"http://m.ocdn.eu/_m/5a1399294088dd9afb3e24ad428faf68,37,1.jpg\" alt=\"\">
                                </div>
                                <div class=\"item\">
                                    <img class=\"img-responsive img-full\" src=\"http://m.ocdn.eu/_m/5a1399294088dd9afb3e24ad428faf68,37,1.jpg\" alt=\"\">
                                </div>
                             </div>
                                  <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                                    <span class=\"icon-prev\"></span>
                                </a>
                                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                                    <span class=\"icon-next\"></span>
                                </a>
                         </div>
                        <h3>Witamy</h3>
                        <h1>Świat piłki nożnej</h1>
                     </div>
                
            </div>
    </div>


</body>
  <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rent/js/jquery.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rent/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</html>";
    }

    public function getTemplateName()
    {
        return "end.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 43,  60 => 40,  19 => 1,);
    }
}
