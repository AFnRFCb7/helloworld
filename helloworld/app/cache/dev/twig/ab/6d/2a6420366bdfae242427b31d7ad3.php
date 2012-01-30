<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_ab6d2a6420366bdfae242427b31d7ad3 extends Twig_Template
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

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        ob_start();
        // line 16
        if ((($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "editable")) && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("EDIT", $this->getContext($context, "object"), ), "method"))) {
            // line 17
            echo "    ";
            if ($this->getContext($context, "value")) {
                // line 18
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute($this->getContext($context, "field_description"), "name"), "objectId" => $this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method"), "value" => 0, "code" => $this->getAttribute($this->getContext($context, "admin"), "code", array($this->getContext($context, "object"), ), "method"))), "html", null, true);
                echo "\" class=\"sonata-ba-action sonata-ba-edit-inline\">
            <img
                src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/accept.png"), "html", null, true);
                echo "\"
                alt=\"";
                // line 21
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
                echo "\"
                />
        </a>
    ";
            } else {
                // line 25
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute($this->getContext($context, "field_description"), "name"), "objectId" => $this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method"), "value" => 1, "code" => $this->getAttribute($this->getContext($context, "admin"), "code", array($this->getContext($context, "object"), ), "method"))), "html", null, true);
                echo "\" class=\"sonata-ba-action sonata-ba-edit-inline\">
            <img
                src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/exclamation.png"), "html", null, true);
                echo "\"
                alt=\"";
                // line 28
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
                echo "\" />
        </a>
    ";
            }
        } else {
            // line 32
            echo "    ";
            if ($this->getContext($context, "value")) {
                // line 33
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/accept.png"), "html", null, true);
                echo "\" alt=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
                echo "\" />
    ";
            } else {
                // line 35
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/exclamation.png"), "html", null, true);
                echo "\" alt=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
                echo "\" />
    ";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
