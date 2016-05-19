<?php

/* article/edit.html.twig */
class __TwigTemplate_5c5ed492ba84560fd9875d78fb94dd848f593f33d59a8ed88cf79cca2cbffbd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/edit.html.twig", 1);
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
        $__internal_6ac4ac37179125f90a743fa598644e949a35ed7822489c97fcfdd63f41d56dfb = $this->env->getExtension("native_profiler");
        $__internal_6ac4ac37179125f90a743fa598644e949a35ed7822489c97fcfdd63f41d56dfb->enter($__internal_6ac4ac37179125f90a743fa598644e949a35ed7822489c97fcfdd63f41d56dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ac4ac37179125f90a743fa598644e949a35ed7822489c97fcfdd63f41d56dfb->leave($__internal_6ac4ac37179125f90a743fa598644e949a35ed7822489c97fcfdd63f41d56dfb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d830c24e052408a806edd2ca2624edf3169a45e613748f759651b9794ece965 = $this->env->getExtension("native_profiler");
        $__internal_4d830c24e052408a806edd2ca2624edf3169a45e613748f759651b9794ece965->enter($__internal_4d830c24e052408a806edd2ca2624edf3169a45e613748f759651b9794ece965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Article edit</h1>

<form action=\"#\" method=\"post\" ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "

    <input type=\"submit\" value=\"Edit\" />
</form>

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4d830c24e052408a806edd2ca2624edf3169a45e613748f759651b9794ece965->leave($__internal_4d830c24e052408a806edd2ca2624edf3169a45e613748f759651b9794ece965_prof);

    }

    public function getTemplateName()
    {
        return "article/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  64 => 17,  58 => 14,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Article edit</h1>*/
/* */
/* <form action="#" method="post" {{ form_enctype(edit_form) }}>*/
/*     {{ form_widget(edit_form) }}*/
/* */
/*     <input type="submit" value="Edit" />*/
/* </form>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('article_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
