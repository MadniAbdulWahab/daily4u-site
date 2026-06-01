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

/* themes/contrib/january_theme/templates/content/node--case-studies--teaser.html.twig */
class __TwigTemplate_eb6f3f3a809dddf1292686b59312b8af extends Template
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
        echo "<div class=\"inner-wrapper\">
    ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 70)) {
            // line 71
            echo "    <div class=\"img-wrapper\">
        <a href=\"";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 72, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\"><img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 72)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 72), "entity", [], "any", false, false, true, 72), "uri", [], "any", false, false, true, 72), "value", [], "any", false, false, true, 72), 72, $this->source)), "html", null, true);
            echo "\"></a>
    </div>
    ";
        }
        // line 75
        echo "    <div class=\"casestudy-details\">
        ";
        // line 76
        if (($context["label"] ?? null)) {
            // line 77
            echo "        <h4><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 77, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 77, $this->source), "html", null, true);
            echo "</a></h4>
        ";
        }
        // line 79
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 79)) {
            // line 80
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 82
        echo "        <div class=\"casestudy-action\">
            ";
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "addtoany", [], "any", false, false, true, 83)) {
            // line 84
            echo "            <div class=\"icon-link\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "addtoany", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "</div>
            ";
        }
        // line 86
        echo "            <a class=\"icon-button small\" href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 86, $this->source), "html", null, true);
        echo "\"><i class=\"icon\"><i class=\"fa-solid fa-arrow-right\"></i></i> View more</a>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/january_theme/templates/content/node--case-studies--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 86,  82 => 84,  80 => 83,  77 => 82,  71 => 80,  68 => 79,  60 => 77,  58 => 76,  55 => 75,  47 => 72,  44 => 71,  42 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/january_theme/templates/content/node--case-studies--teaser.html.twig", "/var/www/html/web/themes/contrib/january_theme/templates/content/node--case-studies--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 70);
        static $filters = array("escape" => 72);
        static $functions = array("file_url" => 72);

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
