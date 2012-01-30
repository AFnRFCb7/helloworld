<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_ba331c2a614994878d21cc6a55f91589 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'list_table' => array($this, 'block_list_table'),
            'list_filters' => array($this, 'block_list_filters'),
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
        if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array("create", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("CREATE", ), "method"))) {
            // line 18
            echo "                <li class=\"btn\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("create", ), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_create", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 20
        echo "        </ul>
    </div>
";
    }

    // line 24
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array($this->getContext($context, "action"), ), "method"), array(), "list");
    }

    // line 31
    public function block_table_header($context, array $blocks = array())
    {
        // line 32
        echo "                    <thead>
                        <tr class=\"sonata-ba-list-field-header\">
                            ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements"));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 35
            echo "                                ";
            if ((($this->getAttribute($this->getContext($context, "field_description"), "getOption", array("code", ), "method") == "_batch") && (twig_length_filter($this->env, $this->getContext($context, "batchactions")) > 0))) {
                // line 36
                echo "                                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                      <input type=\"checkbox\" id=\"list_batch_checkbox\" />
                                    </th>
                                ";
            } else {
                // line 40
                echo "                                    ";
                $context["sortable"] = false;
                // line 41
                echo "                                    ";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "sortable"))) {
                    // line 42
                    echo "                                        ";
                    $context["sortable"] = true;
                    // line 43
                    echo "                                        ";
                    $context["current"] = ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "values"), "_sort_by") == $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "sortable"));
                    // line 44
                    echo "                                        ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "sortparameters", array($this->getContext($context, "field_description"), $this->getAttribute($this->getContext($context, "admin"), "datagrid"), ), "method");
                    // line 45
                    echo "                                        ";
                    $context["sort_active_class"] = (($this->getContext($context, "current")) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 46
                    echo "                                        ";
                    $context["sort_by"] = (($this->getContext($context, "current")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "values"), "_sort_order")) : ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "_sort_order")));
                    // line 47
                    echo "                                    ";
                }
                // line 48
                echo "
                                    ";
                // line 49
                ob_start();
                // line 50
                echo "                                        <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "field_description"), "type"), "html", null, true);
                echo " ";
                if ($this->getContext($context, "sortable")) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, strtolower($this->getContext($context, "sort_by")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "sort_active_class"), "html", null, true);
                }
                echo "\">
                                            ";
                // line 51
                if ($this->getContext($context, "sortable")) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("list", $this->getContext($context, "sort_parameters"), ), "method"), "html", null, true);
                    echo "\">";
                }
                // line 52
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array($this->getAttribute($this->getContext($context, "field_description"), "label"), ), "method"), "html", null, true);
                echo "
                                            ";
                // line 53
                if ($this->getContext($context, "sortable")) {
                    echo "</a>";
                }
                // line 54
                echo "                                        </th>
                                    ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 56
                echo "                                ";
            }
            // line 57
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 58
        echo "                        </tr>
                    </thead>
                ";
    }

    // line 62
    public function block_table_body($context, array $blocks = array())
    {
        // line 63
        echo "                    <tbody>
                        ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "results"));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 65
            echo "                            <tr>
                                ";
            // line 66
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 67
                echo "                                    ";
                echo $this->env->getExtension('sonata_admin')->renderListElement($this->getContext($context, "object"), $this->getContext($context, "field_description"));
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 69
            echo "                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 71
        echo "                    </tbody>
                ";
    }

    // line 74
    public function block_table_footer($context, array $blocks = array())
    {
        // line 75
        echo "                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "haveToPaginate", array(), "method")) {
            // line 76
            echo "                        <tr>
                            <td colspan=\"";
            // line 77
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements")), "html", null, true);
            echo "\" class=\"pager\">

                                <div class=\"pagination\">
                                  <ul>

                                      ";
            // line 82
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page") != 1)) {
                // line 83
                echo "                                          <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("list", $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array($this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1, ), "method"), ), "method"), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("link_first_pager", array(), "SonataAdminBundle");
                echo "\">&laquo;</a></li>
                                      ";
            }
            // line 85
            echo "
                                      ";
            // line 86
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "previouspage"))) {
                // line 87
                echo "                                          <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("list", $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array($this->getAttribute($this->getContext($context, "admin"), "datagrid"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "previouspage"), ), "method"), ), "method"), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("link_previous_pager", array(), "SonataAdminBundle");
                echo "\">&lsaquo;</a></li>
                                      ";
            }
            // line 89
            echo "
                                      ";
            // line 91
            echo "                                      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "getLinks", array(5, ), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 92
                echo "                                          ";
                if (($this->getContext($context, "page") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page"))) {
                    // line 93
                    echo "                                              <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("list", $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array($this->getAttribute($this->getContext($context, "admin"), "datagrid"), $this->getContext($context, "page"), ), "method"), ), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
                                          ";
                } else {
                    // line 95
                    echo "                                              <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("list", $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array($this->getAttribute($this->getContext($context, "admin"), "datagrid"), $this->getContext($context, "page"), ), "method"), ), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
                                          ";
                }
                // line 97
                echo "                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 98
            echo "
                                      ";
            // line 99
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "nextpage"))) {
                // line 100
                echo "                                          <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("list", $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array($this->getAttribute($this->getContext($context, "admin"), "datagrid"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "nextpage"), ), "method"), ), "method"), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("link_next_pager", array(), "SonataAdminBundle");
                echo "\">&rsaquo;</a></li>
                                      ";
            }
            // line 102
            echo "
                                      ";
            // line 103
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "lastpage"))) {
                // line 104
                echo "                                          <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("list", $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array($this->getAttribute($this->getContext($context, "admin"), "datagrid"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "lastpage"), ), "method"), ), "method"), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("link_last_pager", array(), "SonataAdminBundle");
                echo "\">&raquo;</a></li>
                                      ";
            }
            // line 106
            echo "
                                  </ul>
                                </div>

                            </td>
                        </tr>
                    ";
        }
        // line 113
        echo "                ";
    }

    // line 26
    public function block_list_table($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $context["batchactions"] = $this->getAttribute($this->getContext($context, "admin"), "batchactions");
        // line 28
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "results")) > 0)) {
            // line 29
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("batch", $this->getAttribute($this->getContext($context, "admin"), "filterParameters"), ), "method"), "html", null, true);
            echo "\" method=\"POST\" >
            <table class=\"zebra-striped bordered-table\">
                ";
            // line 31
            $this->displayBlock('table_header', $context, $blocks);
            // line 61
            echo "
                ";
            // line 62
            $this->displayBlock('table_body', $context, $blocks);
            // line 73
            echo "
                ";
            // line 74
            $this->displayBlock('table_footer', $context, $blocks);
            // line 114
            echo "            </table>

            ";
            // line 116
            if ((twig_length_filter($this->env, $this->getContext($context, "batchactions")) > 0)) {
                // line 117
                echo "                <script type=\"text/javascript\">
                    jQuery(document).ready(function(\$){
                       \$('#list_batch_checkbox').click(function(){
                           \$(this).closest('table').find(\"td input[type='checkbox']\").attr('checked', \$(this).is(':checked'));
                       });
                       \$('.delete_link').click(function(e){
                          if (!confirm('";
                // line 123
                echo $this->env->getExtension('translator')->getTranslator()->trans("confirm_msg", array(), "SonataAdminBundle");
                echo "')) e.preventDefault();
                       });
                    });
                </script>

                <div class=\"actions sonata-ba-list-actions\">
                    <select name=\"action\">
                        ";
                // line 130
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "batchactions"));
                foreach ($context['_seq'] as $context["action"] => $context["options"]) {
                    // line 131
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "action"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "label"), "html", null, true);
                    echo "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 133
                echo "                    </select>

                    <label>
                        <input type=\"checkbox\" name=\"all_elements\"/>
                        ";
                // line 137
                echo $this->env->getExtension('translator')->getTranslator()->trans("all_elements", array(), "SonataAdminBundle");
                // line 138
                echo "                    </label>

                    <input type=\"submit\" class=\"btn primary\" value=\"";
                // line 140
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_batch", array(), "SonataAdminBundle");
                echo "\" />
                </div>
            ";
            }
            // line 143
            echo "        </form>
    ";
        } else {
            // line 145
            echo "        <p class=\"notice\">
          ";
            // line 146
            echo $this->env->getExtension('translator')->getTranslator()->trans("no_result", array(), "SonataAdminBundle");
            // line 147
            echo "        </p>
    ";
        }
    }

    // line 151
    public function block_list_filters($context, array $blocks = array())
    {
        // line 152
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "filters")) {
            // line 153
            echo "        <form class=\"sonata-filter-form form-stacked ";
            echo ((($this->getAttribute($this->getContext($context, "admin"), "isChild") && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "filters"))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("list", ), "method"), "html", null, true);
            echo "\" method=\"GET\">
            <fieldset class=\"filter_legend\">
                <legend class=\"filter_legend\">";
            // line 155
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_filters", array(), "SonataAdminBundle");
            echo "</legend>

                <div class=\"filter_container\">
                    <table>
                        <tr>
                            <td>
                                <table class=\"bordered-table\">
                                    ";
            // line 162
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "filters"));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 163
                echo "                                        <tr id=\"filter_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "filter"), "name"), "html", null, true);
                echo "_row\">
                                            <td class=\"filter-title\">";
                // line 164
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array($this->getAttribute($this->getContext($context, "filter"), "label"), ), "method"), "html", null, true);
                echo "</td>
                                            <td class=\"filter-type\">";
                // line 165
                echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "getChild", array($this->getAttribute($this->getContext($context, "filter"), "name"), ), "method"), "getChild", array("type", ), "method"));
                echo "</td>
                                            <td class=\"filter-value\">";
                // line 166
                echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "getChild", array($this->getAttribute($this->getContext($context, "filter"), "name"), ), "method"), "getChild", array("value", ), "method"));
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 169
            echo "                                </table>
                            </td>
                            ";
            // line 172
            echo "                                ";
            // line 173
            echo "                                ";
            // line 174
            echo "                                    ";
            // line 175
            echo "                                        ";
            // line 176
            echo "                                    ";
            // line 177
            echo "                                ";
            // line 178
            echo "                            ";
            // line 179
            echo "                        </tr>
                    </table>
                    ";
            // line 181
            echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
            echo "

                    <input type=\"submit\" class=\"btn primary\" value=\"";
            // line 183
            echo $this->env->getExtension('translator')->getTranslator()->trans("btn_filter", array(), "SonataAdminBundle");
            echo "\" />

                    <a class=\"btn\" href=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("list", ), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_reset_filter", array(), "SonataAdminBundle");
            echo "</a>

                </div>
            </fieldset>

        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
