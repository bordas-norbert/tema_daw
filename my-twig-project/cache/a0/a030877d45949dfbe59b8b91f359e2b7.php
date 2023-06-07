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

/* weapons.html.twig */
class __TwigTemplate_1f2949b498778d244d35fc6121bfdb34 extends Template
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
        echo "<!DOCTYPE html>
<html>
<head>
<title>Weapons</title>
<style>
\t@import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
</style>
<link rel=\"stylesheet\" href=\"site_styles.css\">
<link rel=\"stylesheet\" href=\"dropdown.css\">
<link rel=\"stylesheet\" href=\"slideshow.css\">
<link rel=\"stylesheet\" href=\"weapons.css\">
</head>
<body class=\"body\">

<div id=\"container_principal\"> 
 <div id=\"header\">\t
   <h1 class=\"h1\">Weapons |
   <a href=\"http://localhost/my-twig-project/index.php\">Home</a>
   </h1>
 </div>
 
 <div class=\"slideshow-container\">

  <div class=\"mySlides fade\">
    <div class=\"numbertext\">1 / 4</div>
    <img src=\"shooter_1.png\" style=\"width:100%\">
    <div class=\"text\">Best zombie shooter game is almost here!</div>
  </div>

  <div class=\"mySlides fade\">
    <div class=\"numbertext\">2 / 4</div>
    <img src=\"shooter_2.png\" style=\"width:100%\">
    <div class=\"text\">Stunning graphics and multiplayer campaign missions</div>
  </div>

  <div class=\"mySlides fade\">
    <div class=\"numbertext\">3 / 4</div>
    <img src=\"shooter_3.png\" style=\"width:100%\">
    <div class=\"text\">Over 50 types of zombies with special abilities</div>
  </div>

  <div class=\"mySlides fade\">
    <div class=\"numbertext\">4 / 4</div>
    <img src=\"shooter_4.png\" style=\"width:100%\">
    <div class=\"text\">Don't miss out! Preorder now!</div>
  </div>
  
  <a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
  <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>
 </div>

 <div id=\"menu\">
\t<div class=\"grid-container\">
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weaponsDescription"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["description"]) {
            // line 55
            echo "        <div class=\"grid-item\">
            <p>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["description"], "text", [], "any", false, false, false, 56), "html", null, true);
            echo "</p>
        </div>

        <div class=\"grid-item\">
            <img src=\"weaponimg_";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["description"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo ".png\" class=\"weapon-img\">
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "       

    </div>
 <div id=\"footer\">
\tAll rights reserved. &copy; Firma XY 2021.
 </div>
 
</div>
<script src=\"automaticslideshow.js\"></script>
<script src=\"slideshow.js\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "weapons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 63,  106 => 60,  99 => 56,  96 => 55,  92 => 54,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "weapons.html.twig", "F:\\xampp\\htdocs\\my-twig-project\\templates\\weapons.html.twig");
    }
}
