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

/* themes/contrib/january_theme/templates/content/node--our-professionals--full.html.twig */
class __TwigTemplate_21bf363ee27960c7788e0271670c685b extends Template
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
";
        // line 70
        $context["layout"] = ((($context["layout"] ?? null)) ? (("layout--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 70, $this->source)))) : (""));
        // line 71
        echo "
";
        // line 73
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "bundle", [], "any", false, false, true, 75), 75, $this->source))), 2 => ((        // line 76
($context["layout"] ?? null)) ? ("grid-full") : ("")), 3 => ((        // line 77
($context["layout"] ?? null)) ? ("ie11-autorow") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 78
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 78)) ? ("node--promoted") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 79
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 79)) ? ("node--sticky") : ("")), 6 => (( !twig_get_attribute($this->env, $this->source,         // line 80
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 80)) ? ("node--unpublished") : ("")), 7 => ((        // line 81
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 81, $this->source)))) : (""))];
        // line 84
        echo "<div class=\"our-single-member\">
    <div class=\"container\">
        <div class=\"row align-items-start\">
            <div class=\"col-md-4 col-lg-3 left-sidebar\">
                <div class=\"inner-div\">
                    <div class=\"profile-sec\">
                        ";
        // line 90
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 90)) {
            // line 91
            echo "                        <div class=\"img-wrapper\">
                            <img src=\"";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 92)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 92), "entity", [], "any", false, false, true, 92), "uri", [], "any", false, false, true, 92), "value", [], "any", false, false, true, 92), 92, $this->source)), "html", null, true);
            echo "\" alt=\"Member Image\">
                        </div>
                        ";
        }
        // line 95
        echo "                        ";
        if (($context["label"] ?? null)) {
            // line 96
            echo "                        <h2>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 96, $this->source), "html", null, true);
            echo "</h2>
                        ";
        }
        // line 98
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_job_type", [], "any", false, false, true, 98)) {
            // line 99
            echo "                        <h5>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_job_type", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "</h5>
                        ";
        }
        // line 101
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_member_phone", [], "any", false, false, true, 101)) {
            // line 102
            echo "                        <div class=\"list-icon\">
                            <a href=\"tel:";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_member_phone", [], "any", false, false, true, 103), 0, [], "any", false, false, true, 103)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#context"] ?? null) : null), "value", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            echo "\"><i class=\"icon\"><i class=\"fa-solid fa-phone\"></i></i> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_member_phone", [], "any", false, false, true, 103), 0, [], "any", false, false, true, 103)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#context"] ?? null) : null), "value", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            echo "</a>
                        </div>
                        ";
        }
        // line 106
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_member_email", [], "any", false, false, true, 106)) {
            // line 107
            echo "                        <div class=\"list-icon\">
                            <a href=\"mailto:";
            // line 108
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_member_email", [], "any", false, false, true, 108), 0, [], "any", false, false, true, 108)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#context"] ?? null) : null), "value", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "\"><i class=\"icon\"><i class=\"fa-solid fa-envelope\"></i></i> Send an Email</a>
                        </div>
                        ";
        }
        // line 111
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_member_social", [], "any", false, false, true, 111)) {
            // line 112
            echo "                        <ul class=\"social-links list-inline d-flex align-items-center m-0\">
                            ";
            // line 113
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_member_social", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "
                        </ul>
                        ";
        }
        // line 116
        echo "                    </div>
                </div>
            </div>
            <div class=\"col-md-8 col-lg-9\">
            ";
        // line 120
        if (((($context["field_member_about_"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_professional_statement", [], "any", false, false, true, 120)) || twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_specializations", [], "any", false, false, true, 120))) {
            // line 121
            echo "                <div class=\"inner-div full-content\">
                    ";
            // line 122
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_member_about_", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
            echo "
                    ";
            // line 123
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_professional_statement", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
            echo "
                    ";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_specializations", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 127
        echo "            </div>
        </div>        
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/january_theme/templates/content/node--our-professionals--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 127,  150 => 124,  146 => 123,  142 => 122,  139 => 121,  137 => 120,  131 => 116,  125 => 113,  122 => 112,  119 => 111,  113 => 108,  110 => 107,  107 => 106,  99 => 103,  96 => 102,  93 => 101,  87 => 99,  84 => 98,  78 => 96,  75 => 95,  69 => 92,  66 => 91,  64 => 90,  56 => 84,  54 => 81,  53 => 80,  52 => 79,  51 => 78,  50 => 77,  49 => 76,  48 => 75,  47 => 73,  44 => 71,  42 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/january_theme/templates/content/node--our-professionals--full.html.twig", "/var/www/html/web/themes/contrib/january_theme/templates/content/node--our-professionals--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70, "if" => 90);
        static $filters = array("clean_class" => 70, "escape" => 92);
        static $functions = array("file_url" => 92);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
