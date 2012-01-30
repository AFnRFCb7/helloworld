<?php

/* SonataAdminBundle:Core:dashboard.html.twig */
class __TwigTemplate_3b3515e474852267bb3b4f6b306f1efa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
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
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("title_dashboard", array(), "SonataAdminBundle");
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
    <div class=\"span7\">
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "groups"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 20
            echo "            <table class=\"zebra-striped sonata-ba-list bordered-table\">
                <thead>
                    <tr>
                        <th colspan=\"3\">";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "group"), "label"), array(), "SonataAdminBundle"), "html", null, true);
            echo "</th>
                    </tr>
                </thead>

                <tbody>
                    ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
            foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                // line 29
                echo "                        <tr>
                            <td class=\"sonata-ba-list-label\">";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "admin"), "label"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 32
                if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array("create", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("CREATE", ), "method"))) {
                    // line 33
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("create", ), "method"), "html", null, true);
                    echo "\">
                                        <img src=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/add.png"), "html", null, true);
                    echo "\"  alt=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                    echo "\" />";
                    // line 35
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                    // line 36
                    echo "</a>
                                ";
                }
                // line 38
                echo "                            </td>
                            <td>
                                ";
                // line 40
                if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array("list", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("LIST", ), "method"))) {
                    // line 41
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("list", ), "method"), "html", null, true);
                    echo "\">
                                        <img src=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/application_view_list.png"), "html", null, true);
                    echo "\" alt=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                    echo "\" />";
                    // line 43
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                    // line 44
                    echo "</a>
                                ";
                }
                // line 46
                echo "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 49
            echo "                </tbody>
            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 52
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
