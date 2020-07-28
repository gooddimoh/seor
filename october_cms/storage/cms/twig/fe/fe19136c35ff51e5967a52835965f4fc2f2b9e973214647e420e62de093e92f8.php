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

/* C:\xampp\htdocs\seor.ua\october_cms/themes/responsiv-flat/partials/footer.htm */
class __TwigTemplate_8505bcf5591ca704db3f9855e2bb0cfb359dd4ca7a15f0b87bff15ecf7274493 extends \Twig\Template
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
        echo "<div class=\"container\">
    <nav class=\"pull-left\">
        <ul>
            <li class=\"active\">
                <a href=\"#\">Home</a>
            </li>
            <li>
                <a href=\"#\">Company</a>
            </li>
            <li>
                <a href=\"#\">Portfolio</a>
            </li>
            <li>
                <a href=\"#\">Blog</a>
            </li>
            <li>
                <a href=\"#\">Contact</a>
            </li>
        </ul>
    </nav>
    <div class=\"social-btns pull-right\">
        <a href=\"#\"><div class=\"fui-vimeo\"></div><div class=\"fui-vimeo\"></div></a>
        <a href=\"#\"><div class=\"fui-facebook\"></div><div class=\"fui-facebook\"></div></a>
        <a href=\"#\"><div class=\"fui-twitter\"></div><div class=\"fui-twitter\"></div></a>
    </div>
    <div class=\"additional-links\">
        Be sure to take a look to our <a href=\"#\">Terms of Use</a> and <a href=\"#\">Privacy Policy</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\seor.ua\\october_cms/themes/responsiv-flat/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <nav class=\"pull-left\">
        <ul>
            <li class=\"active\">
                <a href=\"#\">Home</a>
            </li>
            <li>
                <a href=\"#\">Company</a>
            </li>
            <li>
                <a href=\"#\">Portfolio</a>
            </li>
            <li>
                <a href=\"#\">Blog</a>
            </li>
            <li>
                <a href=\"#\">Contact</a>
            </li>
        </ul>
    </nav>
    <div class=\"social-btns pull-right\">
        <a href=\"#\"><div class=\"fui-vimeo\"></div><div class=\"fui-vimeo\"></div></a>
        <a href=\"#\"><div class=\"fui-facebook\"></div><div class=\"fui-facebook\"></div></a>
        <a href=\"#\"><div class=\"fui-twitter\"></div><div class=\"fui-twitter\"></div></a>
    </div>
    <div class=\"additional-links\">
        Be sure to take a look to our <a href=\"#\">Terms of Use</a> and <a href=\"#\">Privacy Policy</a>
    </div>
</div>", "C:\\xampp\\htdocs\\seor.ua\\october_cms/themes/responsiv-flat/partials/footer.htm", "");
    }
}
