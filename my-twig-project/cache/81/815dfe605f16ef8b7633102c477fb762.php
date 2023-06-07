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

/* register.html.twig */
class __TwigTemplate_96c52dc1af687c028480852a4f36d010 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<html>
<head>
    <title>";
        // line 4
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
    </style>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["stylesheet1"] ?? null), "html", null, true);
        echo "\">
</head>
<body class=\"body\">
    <div id=\"container_principal\"> 

        <div id=\"header\">    
            <h1 class=\"h1\">";
        // line 14
        echo twig_escape_filter($this->env, ($context["heading"] ?? null), "html", null, true);
        echo " | 
            <a href=\"index.php\">Home</a>
            </h1>
        </div>
        <div>
            <form method=\"post\" action=\"register_user.php\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["formDatas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["formData"]) {
            // line 21
            echo "                <div>
                    <label for=\"input";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formData"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formData"], "label", [], "any", false, false, false, 22), "html", null, true);
            echo "</label>
                    <input type=\"text\" id=\"input";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formData"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\" name=\"input";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formData"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                <input type=\"submit\" id=\"SubmitBtn\" value=\"Submit\" formaction=\"register_user.php\">
            </form>
        </div>
           
    </div>

</body>
   ";
        // line 36
        echo "</html>";
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 36,  91 => 26,  80 => 23,  74 => 22,  71 => 21,  67 => 20,  58 => 14,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "register.html.twig", "F:\\xampp\\htdocs\\my-twig-project\\templates\\register.html.twig");
    }
}
