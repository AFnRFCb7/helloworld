<?php

/* SonataAdminBundle:CRUD:batch_confirmation.html.twig */
class __TwigTemplate_074798095285c5202d7c5142d1fdeafb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions\">
        <ul>
            ";
        // line 17
        if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array("list", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("LIST", ), "method"))) {
            // line 18
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("list", ), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_list", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 20
        echo "
            ";
        // line 21
        if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array("create", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("CREATE", ), "method"))) {
            // line 22
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("create", ), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_create", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 24
        echo "        </ul>
    </div>
";
    }

    // line 28
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array($this->getContext($context, "action"), ), "method"), array(), "list");
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "    <div class=\"sonata-ba-delete\">

        <h1>";
        // line 33
        echo $this->env->getExtension('translator')->getTranslator()->trans("title_batch_confirmation", array(), "SonataAdminBundle");
        echo "</h1>

        ";
        // line 35
        echo $this->env->getExtension('translator')->getTranslator()->trans("message_batch_confirmation", array(), "SonataAdminBundle");
        // line 36
        echo "
        <div class=\"actions\">
            <form action=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("batch", $this->getAttribute($this->getContext($context, "admin"), "filterParameters"), ), "method"), "html", null, true);
        echo "\" method=\"POST\" >
                <input type=\"hidden\" name=\"confirmation\" value=\"ok\" />
                <input type=\"hidden\" name=\"data\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getContext($context, "data"), "html", null, true);
        echo "\" />

                <div style=\"display: none\">
                    ";
        // line 43
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
                </div>

                <input type=\"submit\" class=\"btn danger\" value=\"";
        // line 46
        echo $this->env->getExtension('translator')->getTranslator()->trans("btn_execute_batch_action", array(), "SonataAdminBundle");
        echo "\" />

                ";
        // line 48
        if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array("list", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("LIST", ), "method"))) {
            // line 49
            echo "                    ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("delete_or", array(), "SonataAdminBundle");
            // line 50
            echo "
                    <a class=\"btn success\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("list", ), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_list", array(), "SonataAdminBundle");
            echo "</a>
                ";
        }
        // line 53
        echo "            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:batch_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
