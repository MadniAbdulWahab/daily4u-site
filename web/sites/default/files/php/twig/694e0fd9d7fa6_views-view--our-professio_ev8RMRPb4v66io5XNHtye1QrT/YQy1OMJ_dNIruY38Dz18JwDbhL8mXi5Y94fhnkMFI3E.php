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

/* themes/contrib/january_theme/templates/views/views-view--our-professionals--page-1.html.twig */
class __TwigTemplate_4f26f102957accd5fa40eb55ef502f4f extends Template
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
        echo "<div class=\"professional-list\">
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
            <div class='row align-items-center'> 
                <div class='col-lg-6'>           
                    <div class=\"result-counts\">
                        <strong>";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["total_rows"] ?? null), 59, $this->source), "html", null, true);
            echo "</strong> Professional Members
                    </div>  
                </div>
                <div class='col-lg-6'>           
                    <div class=\"view-filters\">
                        ";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 64, $this->source), "html", null, true);
            echo "
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 70
        echo "    ";
        if (($context["attachment_before"] ?? null)) {
            // line 71
            echo "        <div class=\"attachment attachment-before\">
        ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 72, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 75
        echo "
    ";
        // line 76
        if (($context["rows"] ?? null)) {
            // line 77
            echo "        <div class=\"row\">
        ";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 78, $this->source), "html", null, true);
            echo "
        </div>
    ";
        } elseif (        // line 80
($context["empty"] ?? null)) {
            // line 81
            echo "        <div class=\"view-empty\">
        ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 82, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 85
        echo "
    ";
        // line 86
        if (($context["pager"] ?? null)) {
            // line 87
            echo "    <div class=\"wow fadeInUp\">
        ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 88, $this->source), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 91
        echo "    ";
        if (($context["attachment_after"] ?? null)) {
            // line 92
            echo "        <div class=\"attachment attachment-after\">
        ";
            // line 93
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 93, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 96
        echo "    ";
        if (($context["more"] ?? null)) {
            // line 97
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 97, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 99
        echo "    ";
        if (($context["footer"] ?? null)) {
            // line 100
            echo "        <div class=\"view-footer\">
        ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 101, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 104
        echo "    ";
        if (($context["feed_icons"] ?? null)) {
            // line 105
            echo "        <div class=\"feed-icons\">
        ";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 106, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 109
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/january_theme/templates/views/views-view--our-professionals--page-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 109,  196 => 106,  193 => 105,  190 => 104,  184 => 101,  181 => 100,  178 => 99,  172 => 97,  169 => 96,  163 => 93,  160 => 92,  157 => 91,  151 => 88,  148 => 87,  146 => 86,  143 => 85,  137 => 82,  134 => 81,  132 => 80,  127 => 78,  124 => 77,  122 => 76,  119 => 75,  113 => 72,  110 => 71,  107 => 70,  98 => 64,  90 => 59,  84 => 55,  81 => 54,  75 => 51,  72 => 50,  70 => 49,  65 => 48,  59 => 46,  57 => 45,  53 => 44,  48 => 43,  46 => 40,  45 => 39,  44 => 38,  43 => 37,  42 => 35,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/january_theme/templates/views/views-view--our-professionals--page-1.html.twig", "/var/www/html/web/themes/contrib/january_theme/templates/views/views-view--our-professionals--page-1.html.twig");
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
