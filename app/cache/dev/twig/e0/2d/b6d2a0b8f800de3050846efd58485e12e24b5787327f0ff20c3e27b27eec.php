<?php

/* login.html.twig */
class __TwigTemplate_e02db6d2a0b8f800de3050846efd58485e12e24b5787327f0ff20c3e27b27eec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'login' => array($this, 'block_login'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('login', $context, $blocks);
        // line 47
        echo "         ";
    }

    // line 2
    public function block_login($context, array $blocks = array())
    {
        // line 3
        echo "            <div class=\"panel panel-default \">
                <div class=\"panel-heading\"> <strong class=\"\">Login</strong>

                </div>
                <div class=\"panel-body\">
                    <form class=\"form-horizontal\" role=\"form\" method = \"POST\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">
                        <div class=\"form-group\">
                            <label for=\"inputEmail3\" class=\"col-sm-3 control-label\"><span class=\"glyphicon glyphicon-user\"> </span></label>
                            <div class=\"col-sm-9\">
                                <input type=\"name\" class=\"form-control\" id=\"inputName3\" placeholder=\"Login\" name=\"username\" required=\"\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"inputPassword3\" class=\"col-sm-3 control-label\"><span class=\"glyphicon glyphicon-eye-close\"> </span></label>
                            <div class=\"col-sm-9\">
                                <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\" name=\"password\" required=\"\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-3 col-sm-9\">
                                <div class=\"checkbox\">
                                    <label class=\"\">
                                       
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group last\">
                            <div class=\"col-sm-offset-3 col-sm-9\">
                                <button type=\"submit\" class=\"btn btn-success btn-sm\">Sign in</button>
                                <button type=\"reset\" class=\"btn btn-default btn-sm\">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"panel-footer\">Not Registered? <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/register"), "method"), "html", null, true);
        echo "\" class=\"\">Register here</a>
                </div>
           \t";
        // line 39
        if (array_key_exists("name", $context)) {
            // line 40
            echo "\t\t\t<div class=\"alert-info fade in\">
\t\t\t\t<strong>Hello ";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo " !</strong>
\t\t\t</div>
\t\t\t";
        }
        // line 44
        echo "           
            </div>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 44,  81 => 41,  78 => 40,  76 => 39,  71 => 37,  39 => 8,  32 => 3,  29 => 2,  25 => 47,  23 => 2,  20 => 1,);
    }
}
