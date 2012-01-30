<?php

/* SonataAdminBundle:CRUD:list_date.html.twig */
class __TwigTemplate_4df356e02b5a7083638fe45d122a0d96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        // line 14
        if (twig_test_empty($this->getContext($context, "value"))) {
            // line 15
            echo "&nbsp;";
        } else {
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getContext($context, "value"), "F j, Y"), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
