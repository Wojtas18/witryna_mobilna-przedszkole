<?php

/* default/index.html.twig */
class __TwigTemplate_147574f69154b7134298183fd04b2ff92d43027be3b8b43c5e56dae212bbcd33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("base.html.twig")->display($context);
        // line 2
        $this->env->loadTemplate("nav.html.twig")->display($context);
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 11
        $this->env->loadTemplate("end.html.twig")->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<br />
<br />
<br />

    Witaj skurwysynu na Homepage.
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  33 => 4,  29 => 11,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
