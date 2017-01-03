<?php

/* C:\OpenServer\domains\oct-test.ru/themes/demo/pages/new_page.htm */
class __TwigTemplate_5814c00b13f15a976d2ec454a1eb63c316a90a79ad32452f72319cc40d6f8774 extends Twig_Template
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
        echo "<div class=\"jumbotron\">
\t<h1>Демо layout</h1>
\t<p>Главная страница сайта</p>
</div>

";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("menu"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\oct-test.ru/themes/demo/pages/new_page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron\">
\t<h1>Демо layout</h1>
\t<p>Главная страница сайта</p>
</div>

{% partial 'menu' %}", "C:\\OpenServer\\domains\\oct-test.ru/themes/demo/pages/new_page.htm", "");
    }
}
