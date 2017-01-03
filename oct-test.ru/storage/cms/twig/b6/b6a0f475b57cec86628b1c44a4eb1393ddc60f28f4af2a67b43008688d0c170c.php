<?php

/* C:\OpenServer\domains\oct-test.ru/themes/demo/layouts/test_layout.htm */
class __TwigTemplate_eaec273a6752215f4dc52b87441473776eec2c27f8d11e770d15e51f3e5b6653 extends Twig_Template
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
        // line 1
        echo "<html>
<head>
\t<title>October CMS - test layout</title>
\t<link rel=\"stylesheet\" href=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/theme.css"));
        echo "\">
</head>
<body>
\t<header class=\"container\">
\t\t<h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "<small>Page header</small></h1>
\t</header>
\t
\t<section>
\t\t<div class=\"container\">
\t\t\t";
        // line 13
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 14
        echo "\t\t</div>
\t</section>
\t
\t<footer>
\t\t<hr>
\t\t<p>Footer</p>
\t</footer>
\t
\t<script src = \"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/javascript/app.js"));
        echo "\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\oct-test.ru/themes/demo/layouts/test_layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 22,  41 => 14,  39 => 13,  31 => 8,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
\t<title>October CMS - test layout</title>
\t<link rel=\"stylesheet\" href=\"{{ ['assets/css/theme.css']|theme }}\">
</head>
<body>
\t<header class=\"container\">
\t\t<h1>{{ this.page.title }}<small>Page header</small></h1>
\t</header>
\t
\t<section>
\t\t<div class=\"container\">
\t\t\t{% page %}
\t\t</div>
\t</section>
\t
\t<footer>
\t\t<hr>
\t\t<p>Footer</p>
\t</footer>
\t
\t<script src = \"{{ ['assets/javascript/app.js']|theme }}\"></script>
</body>
</html>", "C:\\OpenServer\\domains\\oct-test.ru/themes/demo/layouts/test_layout.htm", "");
    }
}
