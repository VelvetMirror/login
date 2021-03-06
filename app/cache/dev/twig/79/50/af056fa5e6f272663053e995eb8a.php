<?php

/* AcmeLoginBundle::layout.html.twig */
class __TwigTemplate_7950af056fa5e6f272663053e995eb8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html");
        echo "\" type=\"text/css\" media=\"all\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html");
        echo "\" />
    </head>
    <body>
        <div id=\"symfony-wrapper\">
            <div id=\"symfony-header\">
            </div>
            
            ";
        // line 14
        if ($this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "flash", array("notice", ), "method", false)) {
            // line 15
            echo "            <div class=\"flash-message\">
                <em>Notice</em>: ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "flash", array("notice", ), "method", false), "html");
            echo "
            </div>
            ";
        }
        // line 19
        echo "            
            ";
        // line 20
        $this->displayBlock('content_header', $context, $blocks);
        // line 29
        echo "
            <div class=\"symfony-content\">
                ";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "            </div>

            ";
        // line 35
        if (twig_test_defined("code", $context)) {
            // line 36
            echo "            <h2>Code behind this page</h2>
            <div class=\"symfony-content\">";
            // line 37
            echo $this->getContext($context, 'code');
            echo "</div>
            ";
        }
        // line 39
        echo "        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 22
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 23
        echo "                        <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html");
        echo "\">Home</a></li>
                    ";
    }

    // line 20
    public function block_content_header($context, array $blocks = array())
    {
        // line 21
        echo "                <ul id=\"menu\">
                    ";
        // line 22
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 25
        echo "                </ul>

                <div style=\"clear: both\"></div>
            ";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "                ";
    }

    public function getTemplateName()
    {
        return "AcmeLoginBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
