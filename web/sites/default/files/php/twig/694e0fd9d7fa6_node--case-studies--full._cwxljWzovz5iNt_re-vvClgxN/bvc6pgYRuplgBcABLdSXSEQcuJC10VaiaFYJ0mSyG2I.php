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

/* themes/contrib/january_theme/templates/content/node--case-studies--full.html.twig */
class __TwigTemplate_1c95ddf531fd4773ffb35abb7ca1c0e8 extends Template
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
        // line 69
        echo "
<div class=\"full-content case-single-content\">
    ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 71)) {
            // line 72
            echo "    <div class=\"case-image\">
        <img src=\"";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 73)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 73), "entity", [], "any", false, false, true, 73), "uri", [], "any", false, false, true, 73), "value", [], "any", false, false, true, 73), 73, $this->source)), "html", null, true);
            echo "\" alt=\"Case Image\">
    </div>
    ";
        }
        // line 76
        echo "    ";
        if (($context["label"] ?? null)) {
            // line 77
            echo "    <h2 class=\"case-title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 77, $this->source), "html", null, true);
            echo "</h2>
    ";
        }
        // line 79
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 79)) {
            // line 80
            echo "    <div class=\"case-post\">
        ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 84
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "addtoany", [], "any", false, false, true, 84)) {
            // line 85
            echo "    <div class=\"postshare\">
        <label>Share:</label>
        ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "addtoany", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            echo "
    </div>    
    ";
        }
        // line 90
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/january_theme/templates/content/node--case-studies--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 90,  82 => 87,  78 => 85,  75 => 84,  69 => 81,  66 => 80,  63 => 79,  57 => 77,  54 => 76,  48 => 73,  45 => 72,  43 => 71,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/january_theme/templates/content/node--case-studies--full.html.twig", "/var/www/html/web/themes/contrib/january_theme/templates/content/node--case-studies--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 71);
        static $filters = array("escape" => 73);
        static $functions = array("file_url" => 73);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['file_url']
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
