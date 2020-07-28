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

/* C:\xampp\htdocs\seor.ua\october_cms/themes/responsiv-flat/partials/subscribe.htm */
class __TwigTemplate_fd71c3d5eb0f2b02d8b281041fe19c75e7820c7b1f76a5b58f29dce18105d7e4 extends \Twig\Template
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
    <div class=\"row\">
        <form>
            <div class=\"col-sm-8\">
                <input type=\"text\" placeholder=\"Enter your e-mail\" spellcheck=\"false\">
            </div>
            <div class=\"col-sm-4\">
                <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                    Join newsletter
                </button>
            </div>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\seor.ua\\october_cms/themes/responsiv-flat/partials/subscribe.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <form>
            <div class=\"col-sm-8\">
                <input type=\"text\" placeholder=\"Enter your e-mail\" spellcheck=\"false\">
            </div>
            <div class=\"col-sm-4\">
                <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                    Join newsletter
                </button>
            </div>
        </form>
    </div>
</div>", "C:\\xampp\\htdocs\\seor.ua\\october_cms/themes/responsiv-flat/partials/subscribe.htm", "");
    }
}
