<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c59594c1ba8460de84f3e646bddeed630a7f643eaa0955392cb95333f02f98e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b20d70b6395000cfde7482f3a87610bde4d96e2b694363b3c24a44cd104d0225 = $this->env->getExtension("native_profiler");
        $__internal_b20d70b6395000cfde7482f3a87610bde4d96e2b694363b3c24a44cd104d0225->enter($__internal_b20d70b6395000cfde7482f3a87610bde4d96e2b694363b3c24a44cd104d0225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b20d70b6395000cfde7482f3a87610bde4d96e2b694363b3c24a44cd104d0225->leave($__internal_b20d70b6395000cfde7482f3a87610bde4d96e2b694363b3c24a44cd104d0225_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_864dac95954e9292f85938568892765f87162c08d9054011eda8927c6b1bf077 = $this->env->getExtension("native_profiler");
        $__internal_864dac95954e9292f85938568892765f87162c08d9054011eda8927c6b1bf077->enter($__internal_864dac95954e9292f85938568892765f87162c08d9054011eda8927c6b1bf077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_864dac95954e9292f85938568892765f87162c08d9054011eda8927c6b1bf077->leave($__internal_864dac95954e9292f85938568892765f87162c08d9054011eda8927c6b1bf077_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2b10d6dfa7aa0bb87d0b240f2876e4ee37dfc814537546b57db858e3daf40447 = $this->env->getExtension("native_profiler");
        $__internal_2b10d6dfa7aa0bb87d0b240f2876e4ee37dfc814537546b57db858e3daf40447->enter($__internal_2b10d6dfa7aa0bb87d0b240f2876e4ee37dfc814537546b57db858e3daf40447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2b10d6dfa7aa0bb87d0b240f2876e4ee37dfc814537546b57db858e3daf40447->leave($__internal_2b10d6dfa7aa0bb87d0b240f2876e4ee37dfc814537546b57db858e3daf40447_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_420e67de41a11adba30774536d774661baaea703c5d817bf85c6c8042458ef04 = $this->env->getExtension("native_profiler");
        $__internal_420e67de41a11adba30774536d774661baaea703c5d817bf85c6c8042458ef04->enter($__internal_420e67de41a11adba30774536d774661baaea703c5d817bf85c6c8042458ef04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_420e67de41a11adba30774536d774661baaea703c5d817bf85c6c8042458ef04->leave($__internal_420e67de41a11adba30774536d774661baaea703c5d817bf85c6c8042458ef04_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
