<?php

/* article/show.html.twig */
class __TwigTemplate_87980bdaa935bc2853c464cfdd355834256e530a79e62e5ef1516936992335ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
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
        $__internal_78ca2e4f4d7441af7e4fde1921a1fff06cadf14c979c22af3e304493d1b056ed = $this->env->getExtension("native_profiler");
        $__internal_78ca2e4f4d7441af7e4fde1921a1fff06cadf14c979c22af3e304493d1b056ed->enter($__internal_78ca2e4f4d7441af7e4fde1921a1fff06cadf14c979c22af3e304493d1b056ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78ca2e4f4d7441af7e4fde1921a1fff06cadf14c979c22af3e304493d1b056ed->leave($__internal_78ca2e4f4d7441af7e4fde1921a1fff06cadf14c979c22af3e304493d1b056ed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbb1a68f3db81697598e303c496fcc5f831d709991b8008fa211972af8e6e593 = $this->env->getExtension("native_profiler");
        $__internal_bbb1a68f3db81697598e303c496fcc5f831d709991b8008fa211972af8e6e593->enter($__internal_bbb1a68f3db81697598e303c496fcc5f831d709991b8008fa211972af8e6e593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "name", array()), "html", null, true);
        echo "</h1>
    <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/desguize/images/uploads/" . $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "path", array()))), "html", null, true);
        echo "\">
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "description", array()), "html", null, true);
        echo "</p>
    <p>
        ";
        // line 8
        if ($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "dateCreation", array())) {
            // line 9
            echo "            Posté le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "dateCreation", array()), "Y-m-d"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "dateCreation", array()), "H:m:s"), "html", null, true);
            echo "
        ";
        }
        // line 11
        echo "    </p>
    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_bbb1a68f3db81697598e303c496fcc5f831d709991b8008fa211972af8e6e593->leave($__internal_bbb1a68f3db81697598e303c496fcc5f831d709991b8008fa211972af8e6e593_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  81 => 20,  75 => 17,  69 => 14,  64 => 11,  56 => 9,  54 => 8,  49 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>{{ article.name }}</h1>*/
/*     <img src="{{ asset('bundles/desguize/images/uploads/'~article.path) }}">*/
/*     <p>{{ article.description }}</p>*/
/*     <p>*/
/*         {% if article.dateCreation %}*/
/*             Posté le {{ article.dateCreation|date('Y-m-d') }} à {{ article.dateCreation|date('H:m:s') }}*/
/*         {% endif %}*/
/*     </p>*/
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('article_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('article_edit', { 'id': article.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
