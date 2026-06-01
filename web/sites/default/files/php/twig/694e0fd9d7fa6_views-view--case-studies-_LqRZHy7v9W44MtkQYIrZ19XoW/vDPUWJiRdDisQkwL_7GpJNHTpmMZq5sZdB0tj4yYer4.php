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

/* themes/contrib/january_theme/templates/views/views-view--case-studies--page-1.html.twig */
class __TwigTemplate_378044e23dd43557e2708e14b0884c3c extends Template
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
        echo "<div class=\"case-studies-list\">
";
        // line 35
        $context["classes"] = [0 => "container", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 37
($context["id"] ?? null), 37, $this->source))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 38
($context["id"] ?? null), 38, $this->source)), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 39
($context["display_id"] ?? null), 39, $this->source)), 4 => ((        // line 40
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 40, $this->source))) : (""))];
        // line 43
        echo "<div";
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
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 46, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 48
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 48, $this->source), "html", null, true);
        echo "
  ";
        // line 49
        if (($context["header"] ?? null)) {
            // line 50
            echo "    <div class=\"view-header\">
      ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 51, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 54
        echo "    <div class=\"col top-toolbar wow fadeInUp\">  
        <div class='row align-items-center'> 
            <div class='col-lg-6'>           
                <div class=\"result-counts\">
                    <strong>";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["total_rows"] ?? null), 58, $this->source), "html", null, true);
        echo "</strong> Case studies
                </div>  
            </div>            
            ";
        // line 61
        if (($context["exposed"] ?? null)) {
            // line 62
            echo "            <div class='col-lg-6'>           
                <div class=\"view-filters\">
                    ";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 64, $this->source), "html", null, true);
            echo "
                </div>
            </div>
            ";
        }
        // line 68
        echo "        </div>
    </div>

  ";
        // line 71
        if (($context["attachment_before"] ?? null)) {
            // line 72
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 73, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 76
        echo "
  ";
        // line 77
        if (($context["rows"] ?? null)) {
            // line 78
            echo "    <div class=\"row\">
      ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 79, $this->source), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 81
($context["empty"] ?? null)) {
            // line 82
            echo "    <div class=\"view-empty\">
      ";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 83, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 86
        echo "
  ";
        // line 87
        if (($context["pager"] ?? null)) {
            // line 88
            echo "    <div class=\"wow fadeInUp\">
        ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 89, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 92
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 93
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 94, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 97
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 98
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 98, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 100
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 101
            echo "    <div class=\"view-footer\">
      ";
            // line 102
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 102, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 105
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 106
            echo "    <div class=\"feed-icons\">
      ";
            // line 107
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 107, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 110
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/january_theme/templates/views/views-view--case-studies--page-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 110,  199 => 107,  196 => 106,  193 => 105,  187 => 102,  184 => 101,  181 => 100,  175 => 98,  172 => 97,  166 => 94,  163 => 93,  160 => 92,  154 => 89,  151 => 88,  149 => 87,  146 => 86,  140 => 83,  137 => 82,  135 => 81,  130 => 79,  127 => 78,  125 => 77,  122 => 76,  116 => 73,  113 => 72,  111 => 71,  106 => 68,  99 => 64,  95 => 62,  93 => 61,  87 => 58,  81 => 54,  75 => 51,  72 => 50,  70 => 49,  65 => 48,  59 => 46,  57 => 45,  53 => 44,  48 => 43,  46 => 40,  45 => 39,  44 => 38,  43 => 37,  42 => 35,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/january_theme/templates/views/views-view--case-studies--page-1.html.twig", "/var/www/html/web/themes/contrib/january_theme/templates/views/views-view--case-studies--page-1.html.twig");
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
