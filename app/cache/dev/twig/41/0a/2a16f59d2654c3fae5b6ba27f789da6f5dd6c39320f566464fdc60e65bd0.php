<?php

/* nav.html.twig */
class __TwigTemplate_410a2a16f59d2654c3fae5b6ba27f789da6f5dd6c39320f566464fdc60e65bd0 extends Twig_Template
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
        echo "<div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
  <div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-responsive-collapse\">
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"\">\$\$BMW\$\$</a>
  </div>
  <div class=\"navbar-collapse collapse navbar-responsive-collapse\">
    <ul class=\"nav navbar-nav\">
      <li ><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/"), "method"), "html", null, true);
        echo "\">Dashboard</a></li>
      <li ><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/reg"), "method"), "html", null, true);
        echo "\">Rejestracja</a></li>
      <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Filmy <b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu\">
          <li></li>
 
        </ul>
      </li>
      <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Zamówienia<b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu\">
          <li></li>
          
         
          <li></li>
       
 
        </ul>
      </li>
    </ul>
    
\t\t
  </div>
  </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  32 => 12,  19 => 1,);
    }
}
