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

/* base.html */
class __TwigTemplate_989e71fac9a32d99284358008a405861b97013675f26416e9a5141bc79f77678 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "\t</head>
\t<body>
\t\t<header>";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        echo "</header>
\t\t<main>";
        // line 14
        $this->displayBlock('main', $context, $blocks);
        echo "</main>
\t\t<footer>";
        // line 15
        $this->displayBlock('footer', $context, $blocks);
        echo "</footer>
\t</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "\t\t<meta charset=\"utf-8\">
\t\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<link rel=\"stylesheet\" href=\"/public/css/_.css\">
\t\t<link rel=\"stylesheet\" href=\"/public/css/fonts.css\">
\t\t<link rel=\"stylesheet\" href=\"/public/css/style.css\">
\t\t";
    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 13
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 14
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 15
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function getDebugInfo()
    {
        return array (  102 => 15,  96 => 14,  90 => 13,  76 => 6,  73 => 5,  69 => 4,  61 => 15,  57 => 14,  53 => 13,  49 => 11,  47 => 4,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t{% block head %}
\t\t<meta charset=\"utf-8\">
\t\t<title>{% block title %}{% endblock %}</title>
\t\t<link rel=\"stylesheet\" href=\"/public/css/_.css\">
\t\t<link rel=\"stylesheet\" href=\"/public/css/fonts.css\">
\t\t<link rel=\"stylesheet\" href=\"/public/css/style.css\">
\t\t{% endblock %}
\t</head>
\t<body>
\t\t<header>{% block header %}{% endblock %}</header>
\t\t<main>{% block main %}{% endblock %}</main>
\t\t<footer>{% block footer %}{% endblock %}</footer>
\t</body>
</html>
", "base.html", "C:\\Users\\Nehuen\\Desktop\\UNLu\\paw-123105\\TP4\\www\\app\\views\\base.html");
    }
}