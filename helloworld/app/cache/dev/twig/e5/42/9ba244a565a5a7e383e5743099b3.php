<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_e5429ba244a565a5a7e383e5743099b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'form' => array($this, 'block_form'),
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
        // line 15
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method")) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => $this->getAttribute($this->getContext($context, "admin"), "toString", array($this->getContext($context, "object"), ), "method")), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
    }

    // line 22
    public function block_actions($context, array $blocks = array())
    {
        // line 23
        echo "    <div class=\"sonata-actions\">
        <ul>
            ";
        // line 25
        if (((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array("show", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method")) && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("VIEW", $this->getContext($context, "object"), ), "method")) && (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "show")) > 0))) {
            // line 26
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array("show", $this->getContext($context, "object"), ), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_show", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 28
        echo "            ";
        if ((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array("history", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method")) && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("EDIT", $this->getContext($context, "object"), ), "method"))) {
            // line 29
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array("history", $this->getContext($context, "object"), ), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_history", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 31
        echo "            ";
        if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array("create", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("CREATE", ), "method"))) {
            // line 32
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("create", ), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_create", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 34
        echo "            ";
        if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array("list", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("LIST", ), "method"))) {
            // line 35
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("list", ), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_list", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 37
        echo "        </ul>
    </div>
";
    }

    // line 41
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array($this->getContext($context, "action"), ), "method"), array(), "list");
    }

    // line 43
    public function block_form($context, array $blocks = array())
    {
        // line 44
        echo "
    ";
        // line 45
        $context["url"] = (($this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method")) ? ("edit") : ("create"));
        // line 46
        echo "
    ";
        // line 47
        if ((!$this->getAttribute($this->getContext($context, "admin"), "hasRoute", array($this->getContext($context, "url"), ), "method"))) {
            // line 48
            echo "        <div>
            ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 52
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array($this->getContext($context, "url"), array("id" => $this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method"), "uniqid" => $this->getAttribute($this->getContext($context, "admin"), "uniqid")), ), "method"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
            echo " method=\"POST\">

            ";
            // line 54
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "errors")) > 0)) {
                // line 55
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 56
                echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
                echo "
                </div>
            ";
            }
            // line 59
            echo "
            ";
            // line 60
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "formgroups"));
            foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                // line 61
                echo "                <fieldset ";
                if ($this->getAttribute($this->getContext($context, "form_group"), "collapsed")) {
                    echo "class=\"sonata-ba-fielset-collapsed\"";
                }
                echo ">
                    <legend>
                        ";
                // line 63
                if ($this->getAttribute($this->getContext($context, "form_group"), "collapsed")) {
                    // line 64
                    echo "                            <a href=\"\" class=\"sonata-ba-collapsed\" title=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_expand", array(), "SonataAdminBundle");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "name"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "</a>
                        ";
                } else {
                    // line 66
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "name"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "
                        ";
                }
                // line 68
                echo "                    </legend>

                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                // line 71
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form_group"), "fields"));
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 72
                    echo "                            ";
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "admin", true), "formfielddescriptions", array(), "any", false, true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                        // line 73
                        echo "                                ";
                        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), $this->getContext($context, "field_name"), array(), "array"));
                        echo "
                            ";
                    }
                    // line 75
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 76
                echo "                    </div>
                </fieldset>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 79
            echo "
            ";
            // line 80
            echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
            echo "

            <div class=\"actions\">
                ";
            // line 83
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isxmlhttprequest")) {
                // line 84
                echo "                    ";
                if ($this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method")) {
                    // line 85
                    echo "                        <input type=\"submit\" class=\"btn primary\" name=\"btn_update\" value=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update", array(), "SonataAdminBundle");
                    echo "\"/>
                    ";
                } else {
                    // line 87
                    echo "                        <input type=\"submit\" class=\"btn\" name=\"btn_create\" value=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create", array(), "SonataAdminBundle");
                    echo "\"/>
                    ";
                }
                // line 89
                echo "                ";
            } else {
                // line 90
                echo "                    ";
                if ($this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method")) {
                    // line 91
                    echo "                        <input type=\"submit\" class=\"btn primary\" name=\"btn_update_and_edit\" value=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update_and_edit_again", array(), "SonataAdminBundle");
                    echo "\"/>
                        <input type=\"submit\" class=\"btn\" name=\"btn_update_and_list\" value=\"";
                    // line 92
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle");
                    echo "\"/>

                        ";
                    // line 94
                    if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array("delete", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("DELETE", $this->getContext($context, "object"), ), "method"))) {
                        // line 95
                        echo "                            ";
                        echo $this->env->getExtension('translator')->getTranslator()->trans("delete_or", array(), "SonataAdminBundle");
                        // line 96
                        echo "                            <a class=\"btn danger\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array("delete", $this->getContext($context, "object"), ), "method"), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('translator')->getTranslator()->trans("link_delete", array(), "SonataAdminBundle");
                        echo "</a>
                        ";
                    }
                    // line 98
                    echo "                    ";
                } else {
                    // line 99
                    echo "                        <input class=\"btn primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create_and_edit_again", array(), "SonataAdminBundle");
                    echo "\"/>
                        <input class=\"btn\" type=\"submit\" name=\"btn_create_and_create\" value=\"";
                    // line 100
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle");
                    echo "\"/>
                    ";
                }
                // line 102
                echo "                ";
            }
            // line 103
            echo "            </div>
        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
