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

/* index.html.twig */
class __TwigTemplate_7bf82dbae175e1baaf9fa3d0e2009bbb extends Template
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
                <a href=\"http://localhost/my-twig-project/register.php\">Register</a> |
                <a href=\"http://localhost/my-twig-project/login.php\">Login</a>
            </h1>
            ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "loggedin", [], "any", false, false, false, 20)) {
            // line 21
            echo "            <form action=\"logout.php\" method=\"post\">
            <button class=\"btn btn-primary\" type=\"submit\">Logout</button>
            </form>
            ";
        }
        // line 25
        echo "            
        </div>
        
        <div class=\"slideshow-container\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slides"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 30
            echo "             <div class=\"mySlides fade\">
                <div class=\"numbertext\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "number", [], "any", false, false, false, 31), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "total", [], "any", false, false, false, 31), "html", null, true);
            echo "</div>
                <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, false, 32), "html", null, true);
            echo "\" style=\"width:100%\">
                <div class=\"text\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "text", [], "any", false, false, false, 33), "html", null, true);
            echo "</div>
            </div> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            <a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
            <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>
        </div>
        
        <div id=\"menu\">  
            
            <ul>
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dropdownElements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dropdownElement"]) {
            // line 44
            echo "                    <li class=\"dropdown\">
                        <a>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dropdownElement"], "hrefText", [], "any", false, false, false, 45), "html", null, true);
            echo "</a>
                            <ul class=\"dropdown-content\">
                                <li><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dropdownElement"], "URL", [], "any", false, false, false, 47), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dropdownElement"], "hrefPageName", [], "any", false, false, false, 47), "html", null, true);
            echo "</a> 
                                </li>

                            </ul>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dropdownElement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t        </ul> 
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columnDivs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["columnDiv"]) {
            // line 55
            echo "                <div id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["columnDiv"], "colNr", [], "any", false, false, false, 55), "html", null, true);
            echo "\">
                    ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["columnDiv"], "divContent", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
                // line 57
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["columnDiv"], "colNr", [], "any", false, false, false, 57) == "col2")) {
                    // line 58
                    echo "                            <h1>Zombie Shooter</h1>
                         ";
                }
                // line 60
                echo "                        <p>";
                echo twig_escape_filter($this->env, $context["comments"], "html", null, true);
                echo "</p>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "
                    ";
            // line 64
            $context["counter"] = 1;
            // line 65
            echo "
                    ";
            // line 66
            if ((twig_get_attribute($this->env, $this->source, $context["columnDiv"], "colNr", [], "any", false, false, false, 66) == "col1")) {
                // line 67
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["columnDiv"], "divContentCol1", [], "any", false, false, false, 67));
                foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
                    // line 68
                    echo "                            <p>";
                    echo twig_escape_filter($this->env, $context["comments"], "html", null, true);
                    echo "</p>
                            ";
                    // line 69
                    if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "isAdminLoggedIn", [], "any", false, false, false, 69)) {
                        // line 70
                        echo "                            <button id=\"deleteComment\" commentNr=\"";
                        echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                        echo "\">Delete</button>
                            ";
                        // line 71
                        $context["counter"] = (($context["counter"] ?? null) + 1);
                        // line 72
                        echo "                            ";
                    }
                    // line 73
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "loggedin", [], "any", false, false, false, 74)) {
                    // line 75
                    echo "                            <form method=\"post\" action=\"insert.php\">
                            <label for=\"input\">Add comment:</label>
                            <input type=\"text\" id=\"input\" name=\"input\">
                            <button class=\"btn btn-primary\" type=\"submit\">Submit</button>
                            </form>
                        ";
                }
                // line 81
                echo "                    ";
            }
            // line 82
            echo "
                    ";
            // line 83
            if ((twig_get_attribute($this->env, $this->source, $context["columnDiv"], "colNr", [], "any", false, false, false, 83) == "col3")) {
                // line 84
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["colThree"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["colText"]) {
                    // line 85
                    echo "                            <p>";
                    echo twig_escape_filter($this->env, $context["colText"], "html", null, true);
                    echo "</p>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colText'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "                    ";
            }
            // line 88
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['columnDiv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "
           
        </div>
            <div id=\"footer\">
\t          All rights reserved. &copy; GamingBros 2023.
            </div>
    </div>
    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["jsFiles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["jsFile"]) {
            // line 99
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $context["jsFile"], "html", null, true);
            echo "\"></script>
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jsFile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "        <script src=\"delete_comment.js\"></script>
</body>
    
</html>";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 102,  276 => 99,  272 => 98,  263 => 91,  255 => 88,  252 => 87,  243 => 85,  238 => 84,  236 => 83,  233 => 82,  230 => 81,  222 => 75,  219 => 74,  213 => 73,  210 => 72,  208 => 71,  203 => 70,  201 => 69,  196 => 68,  191 => 67,  189 => 66,  186 => 65,  184 => 64,  181 => 63,  171 => 60,  167 => 58,  164 => 57,  160 => 56,  155 => 55,  151 => 54,  148 => 53,  134 => 47,  129 => 45,  126 => 44,  122 => 43,  113 => 36,  104 => 33,  100 => 32,  94 => 31,  91 => 30,  87 => 29,  81 => 25,  75 => 21,  73 => 20,  66 => 16,  57 => 10,  53 => 9,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "F:\\xampp\\htdocs\\my-twig-project\\templates\\index.html.twig");
    }
}
