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

/* themes/contrib/belgrade/templates/block/block--facet-block.html.twig */
class __TwigTemplate_e917e0e40cbe744f29b8f3d2ef4c0ffd2a96126afce2113dada4d8a80e5d624f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 31
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 31), 31, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 32
($context["plugin_id"] ?? null), 32, $this->source))), 3 => "bg-light"];
        // line 36
        echo "
";
        // line 65
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 67
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 67), 67, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 68
($context["plugin_id"] ?? null), 68, $this->source))), 3 => "bg-light"];
        // line 72
        echo "
<div";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 73), 73, $this->source), "html", null, true);
        echo ">
  <div class=\"accordion accordion-flush mb-4\">
    <div class=\"accordion-item\">
      ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 76, $this->source), "html", null, true);
        echo "
      ";
        // line 77
        if (($context["label"] ?? null)) {
            // line 78
            echo "      <h5 ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => [0 => "accordion-header", 1 => "mb-0"]], "method", false, false, true, 78), 78, $this->source), "html", null, true);
            echo ">
        <button class=\"accordion-button border-0 fs-md\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#facetBlock-";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["plugin_id"] ?? null), 79, $this->source)), "html", null, true);
            echo "\" aria-expanded=\"true\">
          ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 80, $this->source), "html", null, true);
            echo "
        </button>
      </h5>
      ";
        }
        // line 84
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 84, $this->source), "html", null, true);
        echo "
    </div>
    ";
        // line 86
        $this->displayBlock('content', $context, $blocks);
        // line 93
        echo "  </div>
</div>
";
    }

    // line 86
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "    <div id=\"facetBlock-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["plugin_id"] ?? null), 87, $this->source)), "html", null, true);
        echo "\" class=\"accordion-collapse collapse show border-0\" aria-labelledby=\"flush-headingOne\">
      <div class=\"accordion-body pt-0\">
        ";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 89, $this->source), "html", null, true);
        echo "
      </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/block/block--facet-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 89,  100 => 87,  96 => 86,  90 => 93,  88 => 86,  82 => 84,  75 => 80,  71 => 79,  66 => 78,  64 => 77,  60 => 76,  54 => 73,  51 => 72,  49 => 68,  48 => 67,  47 => 65,  44 => 36,  42 => 32,  41 => 31,  40 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/block/block--facet-block.html.twig", "/var/www/html/web/themes/contrib/belgrade/templates/block/block--facet-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "if" => 77, "block" => 86);
        static $filters = array("clean_class" => 31, "escape" => 73);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
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
