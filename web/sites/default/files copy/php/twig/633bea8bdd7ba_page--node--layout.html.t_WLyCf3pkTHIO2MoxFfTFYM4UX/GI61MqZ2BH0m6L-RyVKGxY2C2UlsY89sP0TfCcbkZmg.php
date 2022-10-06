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

/* @belgrade/layout/page--node--layout.html.twig */
class __TwigTemplate_2553103f0ac4c01fc196d17975016f509c8a04c1d238e72e13158448054d75ff extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 46
        return "@belgrade/layout/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@belgrade/layout/page.html.twig", "@belgrade/layout/page--node--layout.html.twig", 46);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 48
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "
  ";
        // line 50
        if (($context["local_tasks_fixed"] ?? null)) {
            // line 51
            echo "    ";
            $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("belgrade/local-tasks.fixed");
            // line 52
            echo "  ";
        }
        // line 53
        echo "
  <main role=\"main\" ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 54, $this->source), "html", null, true);
        echo ">
    <a id=\"main-content\" tabindex=\"-1\"></a>

      ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "

      ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 59)) {
            // line 60
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 62
        echo "
      ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 63)) {
            // line 64
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 66
        echo "  </main>
";
    }

    public function getTemplateName()
    {
        return "@belgrade/layout/page--node--layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 66,  90 => 64,  88 => 63,  85 => 62,  79 => 60,  77 => 59,  72 => 57,  66 => 54,  63 => 53,  60 => 52,  57 => 51,  55 => 50,  52 => 49,  48 => 48,  37 => 46,);
    }

    public function getSourceContext()
    {
        return new Source("", "@belgrade/layout/page--node--layout.html.twig", "/var/www/html/web/themes/contrib/belgrade/templates/layout/page--node--layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 50, "do" => 51);
        static $filters = array("escape" => 54);
        static $functions = array("attach_library" => 51);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'do'],
                ['escape'],
                ['attach_library']
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
