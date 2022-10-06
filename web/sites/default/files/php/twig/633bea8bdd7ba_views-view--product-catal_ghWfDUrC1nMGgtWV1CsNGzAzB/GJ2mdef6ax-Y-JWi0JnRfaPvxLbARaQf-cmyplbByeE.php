<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/belgrade/templates/views/views-view--product-catalog.html.twig */
class __TwigTemplate_ad6ae0801b5a25f2a23efb959b78c870ed5662f819970a1360a84cf24cca96be extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        $macros["svg"] = $this->macros["svg"] = $this->loadTemplate("@belgrade/macros.twig", "themes/contrib/belgrade/templates/views/views-view--product-catalog.html.twig", 33)->unwrap();
        // line 34
        echo "
";
        // line 36
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 38
($context["id"] ?? null), 38, $this->source))), 2 => ((        // line 39
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 39, $this->source))) : ("")), 3 => "mb-5"];
        // line 43
        echo "
<div";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 44), 44, $this->source), "html", null, true);
        echo ">
  ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 45, $this->source), "html", null, true);
        echo "
  ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 46, $this->source), "html", null, true);
        echo "
  ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 47, $this->source), "html", null, true);
        echo "

  ";
        // line 49
        if (($context["header"] ?? null)) {
            // line 50
            echo "    <header>
      ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 51, $this->source), "html", null, true);
            echo "
    </header>
  ";
        }
        // line 54
        echo "
  ";
        // line 55
        if (($context["exposed"] ?? null)) {
            // line 56
            echo "  <div class=\"accordion accordion-flush mb-4\">
    <div class=\"accordion-item\">
      <h2 class=\"accordion-header\">
        <button class=\"accordion-button border-bottom collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordionFilter\" aria-expanded=\"false\" aria-controls=\"flush-collapseOne\">
          ";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["svg"], "macro_getIcon", ["filter-circle-fill", 24, 24, "me-2"], 60, $context, $this->getSourceContext()));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Filters & search"));
            echo "
        </button>
      </h2>
      <div id=\"accordionFilter\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-headingOne\">
        <div class=\"accordion-body fs-sm\">
          ";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 65, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 71
        echo "
  ";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 72, $this->source), "html", null, true);
        echo "

  ";
        // line 74
        if (($context["rows"] ?? null)) {
            // line 75
            echo "<div class=\"row g-4\">
      ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 76, $this->source), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 78
($context["empty"] ?? null)) {
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 79, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 81
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 81, $this->source), "html", null, true);
        echo "

  ";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 83, $this->source), "html", null, true);
        echo "
  ";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 84, $this->source), "html", null, true);
        echo "

  ";
        // line 86
        if (($context["footer"] ?? null)) {
            // line 87
            echo "    <footer>
      ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 88, $this->source), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 91
        echo "
  ";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 92, $this->source), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/views/views-view--product-catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 92,  160 => 91,  154 => 88,  151 => 87,  149 => 86,  144 => 84,  140 => 83,  134 => 81,  129 => 79,  127 => 78,  122 => 76,  119 => 75,  117 => 74,  112 => 72,  109 => 71,  100 => 65,  90 => 60,  84 => 56,  82 => 55,  79 => 54,  73 => 51,  70 => 50,  68 => 49,  63 => 47,  59 => 46,  55 => 45,  51 => 44,  48 => 43,  46 => 39,  45 => 38,  44 => 36,  41 => 34,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/views/views-view--product-catalog.html.twig", "/var/www/html/web/themes/contrib/belgrade/templates/views/views-view--product-catalog.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 33, "set" => 36, "if" => 49);
        static $filters = array("clean_class" => 38, "escape" => 44, "t" => 60);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'if'],
                ['clean_class', 'escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
