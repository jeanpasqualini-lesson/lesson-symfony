<?php

/* ::layout.html.twig */
class __TwigTemplate_c296967692d1fffa9e13200c33f26bb4d768b31a816890cc14b478119676ef78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html ng-app=\"app\" lang=\"fr\">
    <head>
        ";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 5
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("built/app/css/app.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    </head>
    <body>
        <div class=\"header\">
            <div class=\"navbar\">

            </div>
        </div>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        <div>
            <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("built/app/js/app.js"), "html", null, true);
        echo "\"></script>
        </div>
    </body>

</html>";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  62 => 4,  57 => 3,  48 => 15,  45 => 14,  43 => 13,  31 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }
}
