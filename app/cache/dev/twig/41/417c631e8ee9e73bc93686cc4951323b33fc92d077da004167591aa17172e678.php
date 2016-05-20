<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_2f27c60c86d4571e684817113ae0cb361218e3381a1e706c07e021b05b6bd574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a739d1e61e244cd1125f6f43397d5c5a210463411f05665ca3f6022f5c0539f = $this->env->getExtension("native_profiler");
        $__internal_0a739d1e61e244cd1125f6f43397d5c5a210463411f05665ca3f6022f5c0539f->enter($__internal_0a739d1e61e244cd1125f6f43397d5c5a210463411f05665ca3f6022f5c0539f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a739d1e61e244cd1125f6f43397d5c5a210463411f05665ca3f6022f5c0539f->leave($__internal_0a739d1e61e244cd1125f6f43397d5c5a210463411f05665ca3f6022f5c0539f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c7f08f2b51487a5593db2569cc402f57450bb62fd3d132e36eb79b5c7c6eeda = $this->env->getExtension("native_profiler");
        $__internal_0c7f08f2b51487a5593db2569cc402f57450bb62fd3d132e36eb79b5c7c6eeda->enter($__internal_0c7f08f2b51487a5593db2569cc402f57450bb62fd3d132e36eb79b5c7c6eeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_0c7f08f2b51487a5593db2569cc402f57450bb62fd3d132e36eb79b5c7c6eeda->leave($__internal_0c7f08f2b51487a5593db2569cc402f57450bb62fd3d132e36eb79b5c7c6eeda_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
