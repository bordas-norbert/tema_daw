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

/* login.html.twig */
class __TwigTemplate_aee6da6342d1aea0a24d15a43d64e292 extends Template
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
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["stylesheet2"] ?? null), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["stylesheet3"] ?? null), "html", null, true);
        echo "\">
</head>
<body class=\"body\">
    <div id=\"container_principal\"> 

        <div id=\"header\">    
            <h1 class=\"h1\">";
        // line 16
        echo twig_escape_filter($this->env, ($context["heading"] ?? null), "html", null, true);
        echo " | 
                <a href=\"http://localhost/my-twig-project/index.php\">Home</a>
            </h1>

        </div>
        
        
        
        <div id=\"menu\"> 
            <div>
                <form method=\"post\" action=\"register_user.php\">
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["formDatas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["formData"]) {
            // line 28
            echo "                    <div>
                        <label for=\"input";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formData"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formData"], "label", [], "any", false, false, false, 29), "html", null, true);
            echo "</label>
                        <input type=\"text\" id=\"input";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formData"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\" name=\"input";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formData"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                    ";
        if ((($context["showButton"] ?? null) == "true")) {
            // line 34
            echo "                    <input type=\"submit\" id=\"SubmitBtn\" value=\"Submit\" formaction=\"login_user.php\">
                    ";
        }
        // line 36
        echo "                </form>
            </div>
        </div> 
        ";
        // line 39
        if ((($context["errorMessage"] ?? null) == "ok")) {
            // line 40
            echo "            <p>Succesful login attempt</p>
            ";
        } elseif ((        // line 41
($context["errorMessage"] ?? null) == "unkown_user")) {
            // line 42
            echo "            <a href =\"http://localhost/my-twig-project/register.php\">Please register first by clicking here</a>
        ";
        }
        // line 44
        echo "           
    </div>

</body>
   ";
        // line 51
        echo "</html>";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 51,  127 => 44,  123 => 42,  121 => 41,  118 => 40,  116 => 39,  111 => 36,  107 => 34,  104 => 33,  93 => 30,  87 => 29,  84 => 28,  80 => 27,  66 => 16,  57 => 10,  53 => 9,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login.html.twig", "F:\\xampp\\htdocs\\my-twig-project\\templates\\login.html.twig");
    }
}
