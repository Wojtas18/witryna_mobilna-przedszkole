<?php

/* nav.html.twig */
class __TwigTemplate_410a2a16f59d2654c3fae5b6ba27f789da6f5dd6c39320f566464fdc60e65bd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<head>
\t";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 5
        echo "</head>
<body>
<div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
  <div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-responsive-collapse\">
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"\">Twoje Przedszkole</a>
  </div>
  <div class=\"navbar-collapse collapse navbar-responsive-collapse\">
    <ul class=\"nav navbar-nav\">
      <li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/"), "method"), "html", null, true);
        echo "\">Strona główna</a></li>
      <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/reg"), "method"), "html", null, true);
        echo "\">Aktualności</a></li>
      <li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/"), "method"), "html", null, true);
        echo "\">Galeria</a></li>
      <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Konto<b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/"), "method"), "html", null, true);
        echo "\">Obecności</a></li>
\t\t  <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/"), "method"), "html", null, true);
        echo "\">Posiłki</a></li>
\t\t  <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/"), "method"), "html", null, true);
        echo "\">Zajęcia dodatkowe</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
</body>

";
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rent/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t";
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
        return array (  79 => 3,  76 => 2,  63 => 26,  59 => 25,  55 => 24,  48 => 20,  44 => 19,  40 => 18,  25 => 5,  23 => 2,  20 => 1,);
    }
}
