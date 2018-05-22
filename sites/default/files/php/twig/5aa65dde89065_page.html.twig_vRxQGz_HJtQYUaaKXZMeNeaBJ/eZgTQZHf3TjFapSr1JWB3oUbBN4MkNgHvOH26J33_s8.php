<?php

/* core/themes/kpTheme/templates/page.html.twig */
class __TwigTemplate_ce2d4c7bfc2e0eab51a5e458ab755542586ced3e79dda9eea4f262c66742d9c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 2);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div id=\"page\">
    ";
        // line 2
        if ($this->getAttribute(($context["page"] ?? null), "headline", array())) {
            // line 3
            echo "        <section id=\"headline\">
            <div class=\"container\">
                    ";
            // line 5
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "headline", array()), "html", null, true));
            echo "
            </div>
        </section>
    ";
        }
        // line 9
        echo "
    <header id=\"header\">
        <div class=\"container\">
                ";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
        </div>
    </header>

    <section id=\"main\">
        <div class=\"container\">
            <div class=\"row\">
                <div id=\"content\" class=\"col-md-9 col-sm-9 col-xs-12\">
                    ";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
                </div>
                    ";
        // line 22
        if ($this->getAttribute(($context["page"] ?? null), "sidebar", array())) {
            // line 23
            echo "                        <aside id=\"sidebar\" class=\"sidebar col-md-3 col-sm-3 col-xs-12\">
                            ";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar", array()), "html", null, true));
            echo "
                        </aside>
                    ";
        }
        // line 27
        echo "            </div>
        </div>
    </section>

    ";
        // line 31
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 32
            echo "        <footer id=\"footer\">
            <div class=\"container\">
                ";
            // line 34
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
            </div>
        </footer>
    ";
        }
        // line 38
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "core/themes/kpTheme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 38,  103 => 34,  99 => 32,  97 => 31,  91 => 27,  85 => 24,  82 => 23,  80 => 22,  75 => 20,  64 => 12,  59 => 9,  52 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/kpTheme/templates/page.html.twig", "/var/www/html/testDrupal/core/themes/kpTheme/templates/page.html.twig");
    }
}
