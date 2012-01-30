<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_9c68f765fb75b7875b907c8bf638b058 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'generic_label' => array($this, 'block_generic_label'),
            'widget_container_attributes_choice_widget' => array($this, 'block_widget_container_attributes_choice_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'label' => array($this, 'block_label'),
            'field_row' => array($this, 'block_field_row'),
            'collection_widget_row' => array($this, 'block_collection_widget_row'),
            'collection_widget' => array($this, 'block_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:silex_form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_generic_label($context, array $blocks = array())
    {
        // line 16
        ob_start();
        // line 17
        echo "    ";
        if ($this->getContext($context, "required")) {
            // line 18
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => ((($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "")) : ("")) . " required")));
            // line 19
            echo "    ";
        }
        // line 20
        echo "    ";
        if (((array_key_exists("in_list_checkbox", $context) && $this->getContext($context, "in_list_checkbox")) && array_key_exists("widget", $context))) {
            // line 21
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo ">
            ";
            // line 22
            echo $this->getContext($context, "widget");
            echo "
            <span>
                ";
            // line 24
            if ((!$this->getAttribute($this->getContext($context, "sonata_admin"), "admin"))) {
                // line 25
                echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
            } else {
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "translationDomain")), "html", null, true);
            }
            // line 29
            echo "            </span>
        </label>
    ";
        } else {
            // line 32
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo ">
            ";
            // line 33
            if ((!$this->getAttribute($this->getContext($context, "sonata_admin"), "admin"))) {
                // line 34
                echo "                ";
                echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                echo "
            ";
            } else {
                // line 36
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "translationDomain")), "html", null, true);
                echo "
            ";
            }
            // line 38
            echo "            ";
            echo (($this->getContext($context, "required")) ? ("*") : (""));
            echo "
        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 44
    public function block_widget_container_attributes_choice_widget($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        ob_start();
        // line 46
        echo "        id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\"
        ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
            echo "=\"";
            if (($this->getContext($context, "attrname") == "class")) {
                echo "inputs-list ";
            }
            echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 48
        echo "        ";
        if (!twig_in_filter("class", $this->getContext($context, "attr"))) {
            echo "class=\"inputs-list\"";
        }
        // line 49
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 52
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 53
        ob_start();
        // line 54
        echo "    ";
        if ($this->getContext($context, "expanded")) {
            // line 55
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes_choice_widget", $context, $blocks);
            echo ">
        ";
            // line 56
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 57
                echo "            <li>
                ";
                // line 58
                echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "child"), null, array("in_list_checkbox" => true, "widget" => $this->env->getExtension('form')->renderWidget($this->getContext($context, "child"))));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 61
            echo "        </ul>
    ";
        } else {
            // line 63
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ($this->getContext($context, "multiple")) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 64
            if ((!(null === $this->getContext($context, "empty_value")))) {
                // line 65
                echo "            <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "empty_value")), "html", null, true);
                echo "</option>
        ";
            }
            // line 67
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, "preferred_choices")) > 0)) {
                // line 68
                echo "            ";
                $context["options"] = $this->getContext($context, "preferred_choices");
                // line 69
                echo "            ";
                $this->displayBlock("widget_choice_options", $context, $blocks);
                echo "
            ";
                // line 70
                if ((twig_length_filter($this->env, $this->getContext($context, "choices")) > 0)) {
                    // line 71
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "separator"), "html", null, true);
                    echo "</option>
            ";
                }
                // line 73
                echo "        ";
            }
            // line 74
            echo "        ";
            $context["options"] = $this->getContext($context, "choices");
            // line 75
            echo "        ";
            $this->displayBlock("widget_choice_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 86
    public function block_label($context, array $blocks = array())
    {
        // line 87
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin", true), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 88
            echo "                    ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "name"));
            echo "
                ";
        } else {
            // line 90
            echo "                    ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"));
            echo "
                ";
        }
        // line 92
        echo "            ";
    }

    // line 81
    public function block_field_row($context, array $blocks = array())
    {
        // line 82
        echo "    ";
        if ((((!array_key_exists("sonata_admin", $context)) || (!$this->getContext($context, "sonata_admin_enabled"))) || (!$this->getAttribute($this->getContext($context, "sonata_admin"), "field_description")))) {
            // line 83
            echo "        ";
            $this->displayParentBlock("field_row", $context, $blocks);
            echo "
    ";
        } else {
            // line 85
            echo "        <div class=\"clearfix";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo " error";
            }
            echo "\" id=\"sonata-ba-field-container-";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\">
            ";
            // line 86
            $this->displayBlock('label', $context, $blocks);
            // line 93
            echo "
            <div class=\"input sonata-ba-field sonata-ba-field-";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "edit"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "inline"), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo "\">

                ";
            // line 96
            echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
            echo "

                ";
            // line 98
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "help")) {
                // line 99
                echo "                    <span class=\"help-block sonata-ba-field-help\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "help"), "html", null, true);
                echo "</span>
                ";
            }
            // line 101
            echo "
                ";
            // line 102
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                // line 103
                echo "                    <div class=\"sonata-ba-field-error-messages\">
                        ";
                // line 104
                echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
                echo "
                    </div>
                ";
            }
            // line 107
            echo "            </div>
        </div>
    ";
        }
    }

    // line 112
    public function block_collection_widget_row($context, array $blocks = array())
    {
        // line 113
        ob_start();
        // line 114
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 115
        if ($this->getContext($context, "allow_delete")) {
            // line 116
            echo "            <a href=\"#\" class=\"sonata-collection-delete\"></a>
        ";
        }
        // line 118
        echo "        ";
        echo $this->env->getExtension('form')->renderRow($this->getContext($context, "child"));
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 123
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 124
        ob_start();
        // line 125
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 126
            echo "        ";
            $context["child"] = $this->getContext($context, "prototype");
            // line 127
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("data-prototype" => $this->renderBlock("collection_widget_row", $context, $blocks)));
            // line 128
            echo "    ";
        }
        // line 129
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 130
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
        ";
        // line 131
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 132
            echo "            ";
            $this->displayBlock("collection_widget_row", $context, $blocks);
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 134
        echo "        ";
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
        ";
        // line 135
        if ($this->getContext($context, "allow_add")) {
            // line 136
            echo "            <div><a href=\"#\" class=\"sonata-collection-add\"></a></div>
        ";
        }
        // line 138
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
