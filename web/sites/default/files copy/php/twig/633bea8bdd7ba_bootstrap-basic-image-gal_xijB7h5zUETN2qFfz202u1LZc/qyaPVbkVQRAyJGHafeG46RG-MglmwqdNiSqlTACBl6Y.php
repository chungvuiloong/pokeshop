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

/* themes/contrib/belgrade/templates/misc/bootstrap-basic-image-gallery.html.twig */
class __TwigTemplate_6417abbe5833a728dc02bc52c8ba0d753d0f6b1dcc10c6af21399f9f24007f64 extends \Twig\Template
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
        // line 16
        echo "
<div class=\"bootstrap-basic-image-gallery\">

  <div class=\"main-image mb-2\" data-toggle=\"modal\" data-slide-to=\"0\" data-target=\"#";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["modal"] ?? null), "id", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main"] ?? null), 19, $this->source), "html", null, true);
        echo "</div>

  ";
        // line 21
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["thumbnails"] ?? null), "images", [], "any", false, false, true, 21)) > 1)) {
            // line 22
            echo "    <div class=\"thumbnails\">
      ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["thumbnails"] ?? null), "images", [], "any", false, false, true, 23));
            foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                // line 24
                echo "        <div class=\"thumb ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["thumbnails"] ?? null), "class", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo " me-1\" style=\"width:";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["thumbnails"] ?? null), "width", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "%;\" data-toggle=\"modal\" data-slide-to=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 24, $this->source), "html", null, true);
                echo "\" data-target=\"#";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["modal"] ?? null), "id", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "\">
          ";
                // line 25
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["image"], 25, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    </div>
  ";
        }
        // line 30
        echo "
  <div class=\"modal carousel slide ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lazyload"] ?? null), 31, $this->source), "html", null, true);
        echo "\" id=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["modal"] ?? null), "id", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["modal"] ?? null), "id", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-body\">
          <div id=\"";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["carousel"] ?? null), "id", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "\" class=\"carousel slide ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lazyload"] ?? null), 35, $this->source), "html", null, true);
        echo "\" data-interval=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["carousel"] ?? null), "interval", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "\" data-ride=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["carousel"] ?? null), "autoplay", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "\">

            <div class=\"carousel-inner\" role=\"listbox\">
              ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["carousel"] ?? null), "images", [], "any", false, false, true, 38));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["carousel_image"]) {
            // line 39
            echo "                <div class=\"item slide-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 39, $this->source), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 39)) {
                echo "active";
            }
            echo "\">
                  ";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["carousel_image"], 40, $this->source), "html", null, true);
            echo "
                  <div class=\"carousel-caption\">";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["carousel_image"], "#caption", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "</div>
                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['carousel_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
              ";
        // line 45
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["thumbnails"] ?? null), "images", [], "any", false, false, true, 45)) > 1)) {
            // line 46
            echo "              <a class=\"left carousel-control\" href=\"#";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["carousel"] ?? null), "id", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "\" role=\"button\" data-slide=\"prev\">
                <span class=\"icon-prev\"></span>
                <span class=\"sr-only\">";
            // line 48
            echo t("Previous", array());
            echo "</span>
              </a>
              <a class=\"right carousel-control\" href=\"#";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["carousel"] ?? null), "id", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "\" role=\"button\" data-slide=\"next\">
                <span class=\"icon-next\"></span>
                <span class=\"sr-only\">";
            // line 52
            echo t("Next", array());
            echo "</span>
              </a>
              ";
        }
        // line 55
        echo "            </div>

            ";
        // line 57
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["thumbnails"] ?? null), "images", [], "any", false, false, true, 57)) > 1)) {
            // line 58
            echo "            <ol class=\"carousel-indicators\">
              ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carousel"] ?? null), "images", [], "any", false, false, true, 59)) - 1)));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                // line 60
                echo "                <li data-target=\"#";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["carousel"] ?? null), "id", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                echo "\" data-slide-to=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["index"], 60, $this->source), "html", null, true);
                echo "\" class=\"";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 60)) {
                    echo "active";
                }
                echo "\"></li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "            </ol>
            ";
        }
        // line 64
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/misc/bootstrap-basic-image-gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 64,  233 => 62,  210 => 60,  193 => 59,  190 => 58,  188 => 57,  184 => 55,  178 => 52,  173 => 50,  168 => 48,  162 => 46,  160 => 45,  157 => 44,  140 => 41,  136 => 40,  127 => 39,  110 => 38,  98 => 35,  87 => 31,  84 => 30,  80 => 28,  71 => 25,  60 => 24,  56 => 23,  53 => 22,  51 => 21,  44 => 19,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/misc/bootstrap-basic-image-gallery.html.twig", "/var/www/html/web/themes/contrib/belgrade/templates/misc/bootstrap-basic-image-gallery.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 21, "for" => 23, "trans" => 48);
        static $filters = array("escape" => 19, "length" => 21);
        static $functions = array("range" => 59);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'trans'],
                ['escape', 'length'],
                ['range']
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
