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

/* themes/contrib/january_theme/templates/field/field--block-content--field-testimonial--testimonials.html.twig */
class __TwigTemplate_169f78667f658c3c498e44f278892ce9 extends Template
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
        // line 40
        if (($context["multiple"] ?? null)) {
            // line 41
            echo "<div class=\"testimonial-slider\">
";
        }
        // line 43
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    <div class=\"item\">
        <div class=\"inner-wrapper\">
            <div class=\"testimonial-content\">
                <p>";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 47)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#paragraph"] ?? null) : null), "field_customer_review_message", [], "any", false, false, true, 47), "value", [], "any", false, false, true, 47), 47, $this->source));
            echo "</p>
            </div>
            <div class=\"testimonial-user\">
                <div class=\"user-icon\">
                    <img src=\"";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 51)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#paragraph"] ?? null) : null), "field_customer_image", [], "any", false, false, true, 51), "entity", [], "any", false, false, true, 51), "field_media_image", [], "any", false, false, true, 51), "entity", [], "any", false, false, true, 51), "fileuri", [], "any", false, false, true, 51), 51, $this->source)), "html", null, true);
            echo "\" alt=\"Customer Image\">
                </div>
                <div class=\"user-name\">
                    <h6>";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 54)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#paragraph"] ?? null) : null), "field_customer_name", [], "any", false, false, true, 54), "value", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo " –</h6>
                    <span>";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 55)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#paragraph"] ?? null) : null), "field_customer_designation", [], "any", false, false, true, 55), "value", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "</span>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        if (($context["multiple"] ?? null)) {
            // line 62
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/january_theme/templates/field/field--block-content--field-testimonial--testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 62,  84 => 61,  72 => 55,  68 => 54,  62 => 51,  55 => 47,  50 => 44,  45 => 43,  41 => 41,  39 => 40,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/january_theme/templates/field/field--block-content--field-testimonial--testimonials.html.twig", "/var/www/html/web/themes/contrib/january_theme/templates/field/field--block-content--field-testimonial--testimonials.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 40, "for" => 43);
        static $filters = array("raw" => 47, "escape" => 51);
        static $functions = array("file_url" => 51);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['raw', 'escape'],
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
