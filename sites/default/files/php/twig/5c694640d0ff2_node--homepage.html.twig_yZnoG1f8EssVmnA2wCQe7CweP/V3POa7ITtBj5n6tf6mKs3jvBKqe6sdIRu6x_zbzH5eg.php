<?php

/* themes/custom/fashion/content/node--homepage.html.twig */
class __TwigTemplate_32c6b28dcd75ced753718a9a45be564240968a7efd3a3f82234a048c8784c366 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array("url" => 4);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array('url')
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
        echo "\t<div class=\"content\">
\t\t\t<div class=\"block collections-block\">
\t\t\t\t<div class=\"block-wrap\">
\t\t\t\t\t<img src=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "themes/custom/fashion/assets/img/content/home-collection-1.jpg\" alt=\"\" class=\"desktop-img\">
\t\t\t\t\t<img src=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "themes/custom/fashion/assets/img/content/home-collection-mob1.jpg\" alt=\"\" class=\"mobile-img\">
\t\t\t\t\t<a class=\"btn btn-black btn-big\" href=\"javascript:;\">shop to collection</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"block-wrap\">
\t\t\t\t\t<img src=\"";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "themes/custom/fashion/assets/img/content/home-collection-2.jpg\" alt=\"\" class=\"desktop-img\">
\t\t\t\t\t<img src=\"";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "themes/custom/fashion/assets/img/content/home-collection-mob2.jpg\" alt=\"\" class=\"mobile-img\">
\t\t\t\t\t<a class=\"btn btn-black btn-big\" href=\"javascript:;\">shop to collection</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- video -->
\t\t\t<div class=\"block video-block\">
\t\t\t\t<div class=\"video-bg-wrap\">
\t\t\t\t\t<video loop=\"\" muted=\"\" autoplay=\"\" poster=\"\" class=\"video-bg\">
\t\t\t\t\t\t<source src=\"https://www.videvo.net/videvo_files/converted/2016_09/videos/160820_399_NYC_OutOfFocusCarLightsLOOP_1080p.mp413592.mp4\" type=\"video/mp4\">
\t\t\t\t\t</video>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- novelties -->
\t\t\t<div class=\"block novelties\">
\t\t\t\t<div class=\"wrap\">
\t\t\t\t\t<h2>
\t\t\t\t\t\t<span class=\"back\">What's new?</span>
\t\t\t\t\t\t<span class=\"front\">New store in Berlin</span>
\t\t\t\t\t</h2>
\t\t\t\t\t<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat lorem ipsum dolor sit amet.</p>
\t\t\t\t\t<a href=\"javascript:;\">Learn more</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/fashion/content/node--homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  59 => 9,  52 => 5,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/fashion/content/node--homepage.html.twig", "C:\\xampp\\htdocs\\shop\\themes\\custom\\fashion\\content\\node--homepage.html.twig");
    }
}
