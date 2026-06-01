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

/* themes/contrib/january_theme/templates/block/block--about.html.twig */
class __TwigTemplate_149d137806515227ffdd2581f7c99581 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 37
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 37), 37, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 38
($context["plugin_id"] ?? null), 38, $this->source))), 3 => ((        // line 39
($context["layout"] ?? null)) ? (("layout--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 39, $this->source)))) : (""))];
        // line 42
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true);
        echo ">
  ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 93
        echo "</div>";
    }

    // line 43
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "  <div class=\"about-sec section-spacing\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-6 wow fadeInUpBig\">
              <div class=\"img-wrapper\">
                ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 49)) {
            // line 50
            echo "                    <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 50)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 50), "entity", [], "any", false, false, true, 50), "uri", [], "any", false, false, true, 50), "value", [], "any", false, false, true, 50), 50, $this->source)), "html", null, true);
            echo "\" alt=\"About\">
                ";
        }
        // line 52
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_white_box_title", [], "any", false, false, true, 52) && twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_white_box_content", [], "any", false, false, true, 52))) {
            // line 53
            echo "                    <div class=\"since-content\">
                    ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_white_box_title", [], "any", false, false, true, 54)) {
                // line 55
                echo "                    <span>
                        ";
                // line 56
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_white_box_title", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "
                    </span>
                    ";
            }
            // line 59
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_white_box_title", [], "any", false, false, true, 59)) {
                // line 60
                echo "                    <b>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_white_box_content", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                echo "</b>
                    ";
            }
            // line 62
            echo "                    </div>
                ";
        }
        // line 64
        echo "              </div>
            </div>
            <div class=\"col-lg-6 wow fadeInUpBig\">
              <div class=\"content-wrapper\">
                  ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 68, $this->source), "html", null, true);
        echo "
                  ";
        // line 69
        if (($context["label"] ?? null)) {
            // line 70
            echo "                    <h4 class=\"small-heading\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 70, $this->source), "html", null, true);
            echo "</h4>
                  ";
        }
        // line 72
        echo "                  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 72, $this->source), "html", null, true);
        echo "
                  ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 73)) {
            // line 74
            echo "                  <h2>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            echo "</h2>
                  ";
        }
        // line 76
        echo "                  ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_summery", [], "any", false, false, true, 76)) {
            // line 77
            echo "                  <div class=\"quoted-content\">
                    ";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_summery", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "
                  </div>
                  ";
        }
        // line 81
        echo "                  ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 81)) {
            // line 82
            echo "                  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "
                  ";
        }
        // line 84
        echo "                  ";
        if ((($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 84)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#url_title"] ?? null) : null)) {
            // line 85
            echo "                  <a class=\"icon-button\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 85)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#url_title"] ?? null) : null), 85, $this->source), "html", null, true);
            echo "\"><i class=\"icon\"><i class=\"fa-solid fa-arrow-right\"></i></i>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 85)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#title"] ?? null) : null), 85, $this->source), "html", null, true);
            echo "</a>
                  ";
        }
        // line 87
        echo "              </div>
            </div>
        </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/january_theme/templates/block/block--about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 87,  160 => 85,  157 => 84,  151 => 82,  148 => 81,  142 => 78,  139 => 77,  136 => 76,  130 => 74,  128 => 73,  123 => 72,  117 => 70,  115 => 69,  111 => 68,  105 => 64,  101 => 62,  95 => 60,  92 => 59,  86 => 56,  83 => 55,  81 => 54,  78 => 53,  75 => 52,  69 => 50,  67 => 49,  60 => 44,  56 => 43,  52 => 93,  50 => 43,  45 => 42,  43 => 39,  42 => 38,  41 => 37,  40 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/january_theme/templates/block/block--about.html.twig", "/var/www/html/web/themes/contrib/january_theme/templates/block/block--about.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 35, "block" => 43, "if" => 49);
        static $filters = array("clean_class" => 37, "escape" => 42);
        static $functions = array("file_url" => 50);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape'],
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
