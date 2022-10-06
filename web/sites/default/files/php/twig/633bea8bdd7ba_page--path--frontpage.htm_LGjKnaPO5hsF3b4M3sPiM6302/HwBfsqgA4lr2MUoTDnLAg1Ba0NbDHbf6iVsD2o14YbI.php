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

/* themes/contrib/belgrade/templates/layout/page--path--frontpage.html.twig */
class __TwigTemplate_c853e12b93485a8d40c2fa10f3e2a0700edefe4ada9887823490812685647bfe extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 47
        return "@belgrade/layout/page--node--layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("belgrade/frontpage");
        // line 47
        $this->parent = $this->loadTemplate("@belgrade/layout/page--node--layout.html.twig", "themes/contrib/belgrade/templates/layout/page--path--frontpage.html.twig", 47);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/layout/page--path--frontpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 47,  43 => 45,  36 => 47,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/layout/page--path--frontpage.html.twig", "/var/www/html/web/themes/contrib/belgrade/templates/layout/page--path--frontpage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("do" => 45);
        static $filters = array();
        static $functions = array("attach_library" => 45);

        try {
            $this->sandbox->checkSecurity(
                ['do'],
                [],
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
