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

/* themes/contrib/january_theme/templates/content/node--our-professionals--teaser.html.twig */
class __TwigTemplate_90d431e2d14220b9d9ad0b5c80b29e6d extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 69)) {
            // line 70
            echo "<div class=\"img-wrapper\">
    <a href=\"";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 71, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\"><img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 71)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 71), "entity", [], "any", false, false, true, 71), "uri", [], "any", false, false, true, 71), "value", [], "any", false, false, true, 71), 71, $this->source)), "html", null, true);
            echo "\" alt=\"Professionals image\"></a>
</div>
";
        }
        // line 74
        echo "<div class=\"professional-details\">
    ";
        // line 75
        if (($context["label"] ?? null)) {
            // line 76
            echo "    <h4><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 76, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 76, $this->source), "html", null, true);
            echo "</a></h4>
    ";
        }
        // line 78
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_job_type", [], "any", false, false, true, 78)) {
            // line 79
            echo "    <div class=\"date\"><i class=\"icon\"><i class=\"fa-solid fa-suitcase\"></i></i>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_job_type", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "</div>
    ";
        }
        // line 81
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_member_phone", [], "any", false, false, true, 81)) {
            // line 82
            echo "    <div class=\"list-icon\">
      <a href=\"tel:";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_member_phone", [], "any", false, false, true, 83), 0, [], "any", false, false, true, 83)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#context"] ?? null) : null), "value", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "\"><i class=\"icon\"><i class=\"fa-solid fa-phone\"></i></i>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_member_phone", [], "any", false, false, true, 83), 0, [], "any", false, false, true, 83)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#context"] ?? null) : null), "value", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "</a>
    </div>
    ";
        }
        // line 86
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_member_email", [], "any", false, false, true, 86)) {
            // line 87
            echo "    <div class=\"list-icon\">
      <a href=\"mailto:";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_member_email", [], "any", false, false, true, 88), 0, [], "any", false, false, true, 88)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#context"] ?? null) : null), "value", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "\"><i class=\"icon\"><i class=\"fa-solid fa-envelope\"></i></i>Send an Email</a>
    </div>
    ";
        }
        // line 91
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/january_theme/templates/content/node--our-professionals--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 91,  94 => 88,  91 => 87,  88 => 86,  80 => 83,  77 => 82,  74 => 81,  68 => 79,  65 => 78,  57 => 76,  55 => 75,  52 => 74,  44 => 71,  41 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/january_theme/templates/content/node--our-professionals--teaser.html.twig", "/var/www/html/web/themes/contrib/january_theme/templates/content/node--our-professionals--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 69);
        static $filters = array("escape" => 71);
        static $functions = array("file_url" => 71);

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
