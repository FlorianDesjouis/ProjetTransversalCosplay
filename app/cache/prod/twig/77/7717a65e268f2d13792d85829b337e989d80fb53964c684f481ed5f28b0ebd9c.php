<?php

/* article/new.html.twig */
class __TwigTemplate_87b246da7a6c27cbd5b3a98c1bf8272284370e9381c8c334e5bad3fd215ddf7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1afaaebef22042b9cbd1a136c9c024171a7f8aba147c4e9a5a875a7b15b6f15 = $this->env->getExtension("native_profiler");
        $__internal_e1afaaebef22042b9cbd1a136c9c024171a7f8aba147c4e9a5a875a7b15b6f15->enter($__internal_e1afaaebef22042b9cbd1a136c9c024171a7f8aba147c4e9a5a875a7b15b6f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1afaaebef22042b9cbd1a136c9c024171a7f8aba147c4e9a5a875a7b15b6f15->leave($__internal_e1afaaebef22042b9cbd1a136c9c024171a7f8aba147c4e9a5a875a7b15b6f15_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec8caab309ad4f744650f233077154c0ba1352191b991445019c21d5d279e959 = $this->env->getExtension("native_profiler");
        $__internal_ec8caab309ad4f744650f233077154c0ba1352191b991445019c21d5d279e959->enter($__internal_ec8caab309ad4f744650f233077154c0ba1352191b991445019c21d5d279e959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Article creation</h1>

<form action=\"#\" method=\"post\" ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" value=\"Uploader\" />
</form>

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_ec8caab309ad4f744650f233077154c0ba1352191b991445019c21d5d279e959->leave($__internal_ec8caab309ad4f744650f233077154c0ba1352191b991445019c21d5d279e959_prof);

    }

    public function getTemplateName()
    {
        return "article/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Article creation</h1>*/
/* */
/* <form action="#" method="post" {{ form_enctype(form) }}>*/
/*     {{ form_widget(form) }}*/
/* */
/*     <input type="submit" value="Uploader" />*/
/* </form>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('article_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
