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

/* themes/contrib/january_theme/templates/content/node--article--teaser.html.twig */
class __TwigTemplate_9be9f7bf5c8e7c558594793f8a27538d extends Template
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
<div class=\"inner-wrapper\">
    ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 71)) {
            // line 72
            echo "    <div class=\"img-wrapper\">
        <a href=\"";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 73, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\"><img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 73)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 73), "entity", [], "any", false, false, true, 73), "uri", [], "any", false, false, true, 73), "value", [], "any", false, false, true, 73), 73, $this->source)), "html", null, true);
            echo "\" alt=\"Blog Image\"></a>
    </div>
    ";
        }
        // line 76
        echo "    <div class=\"blog-details\">
        ";
        // line 77
        if (($context["date"] ?? null)) {
            // line 78
            echo "        <div class=\"blog-date\">
            <span class=\"date\">";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 79, $this->source), "d"), "html", null, true);
            echo "</span>
            <span>";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 80, $this->source), "M"), "html", null, true);
            echo "</span>
        </div>
        ";
        }
        // line 83
        echo "        ";
        if (($context["author_name"] ?? null)) {
            // line 84
            echo "        <h6>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 84, $this->source), "html", null, true);
            echo "</h6>
        ";
        }
        // line 86
        echo "        <h4><a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 86, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 86, $this->source), "html", null, true);
        echo "</a></h4>
        <a class=\"icon-button medium\" href=\"";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 87, $this->source), "html", null, true);
        echo "\"><i class=\"icon\"><i class=\"fa-solid fa-arrow-right\"></i></i>Read more</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/january_theme/templates/content/node--article--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 87,  83 => 86,  77 => 84,  74 => 83,  68 => 80,  64 => 79,  61 => 78,  59 => 77,  56 => 76,  48 => 73,  45 => 72,  43 => 71,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/january_theme/templates/content/node--article--teaser.html.twig", "/var/www/html/web/themes/contrib/january_theme/templates/content/node--article--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 71);
        static $filters = array("escape" => 73, "date" => 79);
        static $functions = array("file_url" => 73);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date'],
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
