<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_5cbd840c6ab6670f02b5dc78a10c58ba extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
  <input type=\"checkbox\" name=\"idx[]\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method"), "html", null, true);
        echo "\" />
</td>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
