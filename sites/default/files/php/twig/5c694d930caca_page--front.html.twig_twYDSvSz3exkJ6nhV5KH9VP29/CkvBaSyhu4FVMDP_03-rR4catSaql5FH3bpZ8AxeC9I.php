<?php

/* themes/custom/fashion/page--front.html.twig */
class __TwigTemplate_1cd44a193b1bb7c3919e9f9d2ba722d1a02667573a0727601bd933a8ad8fcb4c extends Twig_Template
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
        $tags = array("include" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"container\">
  <span class=\"page-overlay\"></span>
  ";
        // line 3
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/header.html.twig"), "themes/custom/fashion/page--front.html.twig", 3)->display($context);
        // line 4
        echo "
  ";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "

  ";
        // line 7
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/footer.html.twig"), "themes/custom/fashion/page--front.html.twig", 7)->display($context);
        // line 8
        echo "

  <!-- subscribe block -->
  <div class=\"subscribe-block\">
    <h2>Subscribe to our newsletter</h2>
    <p>Subscribe to our newsletter and get 10% off on your first order.</p>
    <form action=\"\">
      <input type=\"email\" placeholder=\"E-mail address\">
      <div class=\"form-item checkbox\">
        <input id=\"man\" type=\"checkbox\" name=\"category\" value=\"\">
        <label class=\"form-checkbox\" for=\"man\">Man</label>
      </div>
      <div class=\"form-item checkbox\">
        <input id=\"women\" type=\"checkbox\" name=\"category\" value=\"\">
        <label class=\"form-checkbox\" for=\"women\">Women</label>
      </div>
      <button type=\"submit\" class=\"btn btn-black btn-big\">Subscribe</button>
    </form>
    <a href=\"javascript:;\" class=\"icon font-ico-close-big js-subscribe-close\"></a>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/fashion/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  57 => 7,  52 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/fashion/page--front.html.twig", "C:\\xampp\\htdocs\\shop\\themes\\custom\\fashion\\page--front.html.twig");
    }
}
