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

/* themes/contrib/january_theme/templates/views/views-view--our-blog--page-1.html.twig */
class __TwigTemplate_564f083159d67292e3780e2d9a8651b0 extends Template
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
        echo "<div class=\"blogs-list\">
    ";
        // line 35
        $context["classes"] = [0 => "container", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 37
($context["id"] ?? null), 37, $this->source))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 38
($context["id"] ?? null), 38, $this->source)), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 39
($context["display_id"] ?? null), 39, $this->source)), 4 => ((        // line 40
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 40, $this->source))) : (""))];
        // line 43
        echo "    <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
        echo ">
    ";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 44, $this->source), "html", null, true);
        echo "
    ";
        // line 45
        if (($context["title"] ?? null)) {
            // line 46
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 46, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 48
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 48, $this->source), "html", null, true);
        echo "
    ";
        // line 49
        if (($context["header"] ?? null)) {
            // line 50
            echo "        <div class=\"view-header\">
        ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 51, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 54
        echo "    ";
        if (($context["exposed"] ?? null)) {
            // line 55
            echo "        <div class=\"col top-toolbar wow fadeInUp\">  
            ";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 56, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 59
        echo "    ";
        if (($context["attachment_before"] ?? null)) {
            // line 60
            echo "        <div class=\"attachment attachment-before\">
        ";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 61, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 64
        echo "
    ";
        // line 65
        if (($context["rows"] ?? null)) {
            // line 66
            echo "        <div class=\"row\">
        ";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 67, $this->source), "html", null, true);
            echo "
        </div>
    ";
        } elseif (        // line 69
($context["empty"] ?? null)) {
            // line 70
            echo "        <div class=\"view-empty\">
        ";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 71, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 74
        echo "
    ";
        // line 75
        if (($context["pager"] ?? null)) {
            // line 76
            echo "    <div class=\"wow fadeInUp\">
        ";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 77, $this->source), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 80
        echo "    ";
        if (($context["attachment_after"] ?? null)) {
            // line 81
            echo "        <div class=\"attachment attachment-after\">
        ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 82, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 85
        echo "    ";
        if (($context["more"] ?? null)) {
            // line 86
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 86, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 88
        echo "    ";
        if (($context["footer"] ?? null)) {
            // line 89
            echo "        <div class=\"view-footer\">
        ";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 90, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 93
        echo "    ";
        if (($context["feed_icons"] ?? null)) {
            // line 94
            echo "        <div class=\"feed-icons\">
        ";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 95, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 98
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/january_theme/templates/views/views-view--our-blog--page-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 98,  182 => 95,  179 => 94,  176 => 93,  170 => 90,  167 => 89,  164 => 88,  158 => 86,  155 => 85,  149 => 82,  146 => 81,  143 => 80,  137 => 77,  134 => 76,  132 => 75,  129 => 74,  123 => 71,  120 => 70,  118 => 69,  113 => 67,  110 => 66,  108 => 65,  105 => 64,  99 => 61,  96 => 60,  93 => 59,  87 => 56,  84 => 55,  81 => 54,  75 => 51,  72 => 50,  70 => 49,  65 => 48,  59 => 46,  57 => 45,  53 => 44,  48 => 43,  46 => 40,  45 => 39,  44 => 38,  43 => 37,  42 => 35,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/january_theme/templates/views/views-view--our-blog--page-1.html.twig", "/var/www/html/web/themes/contrib/january_theme/templates/views/views-view--our-blog--page-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 35, "if" => 45);
        static $filters = array("clean_class" => 37, "escape" => 43);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
