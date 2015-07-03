<?php

/* frontpage_properties_carousel--item.html */
class __TwigTemplate_5ff9bccae23a68f2af8edc3f7f3de21b232800c36ddec874c28298a483fbc012 extends Twig_Template
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
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "frontpage_properties_carousel--item.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
