<?php

/* C:\OpenServer\domains\oct-test.ru/themes/demo/partials/menu.htm */
class __TwigTemplate_6543fd2cc9d10a42f9e5fde8e9aebbe2db33a232b24843b7c8e781fed29d2f3c extends Twig_Template
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
        echo "<ul class=\"list-inline\">
\t<li><a href=\"/\"></a>Главная</li>
\t<li><a href=\"/page1\"></a>page1</li>
\t<li><a href=\"/page2\"></a>page2</li>
\t<li><a href=\"/page3\"></a>page3</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\oct-test.ru/themes/demo/partials/menu.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"list-inline\">
\t<li><a href=\"/\"></a>Главная</li>
\t<li><a href=\"/page1\"></a>page1</li>
\t<li><a href=\"/page2\"></a>page2</li>
\t<li><a href=\"/page3\"></a>page3</li>
</ul>", "C:\\OpenServer\\domains\\oct-test.ru/themes/demo/partials/menu.htm", "");
    }
}
