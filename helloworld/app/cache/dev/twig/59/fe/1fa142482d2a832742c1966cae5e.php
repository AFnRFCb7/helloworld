<?php

/* SonataAdminBundle:CRUD:list__action_view.html.twig */
class __TwigTemplate_59fe1fa142482d2a832742c1966cae5e extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array("show", ), "method")) {
            // line 2
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array("show", $this->getContext($context, "object"), ), "method"), "html", null, true);
            echo "\" class=\"view_link\" title=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("action_show", array(), "SonataAdminBundle");
            echo "\">
        <img src=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/magnifier.png"), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("action_show", array(), "SonataAdminBundle");
            echo "\" />
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
