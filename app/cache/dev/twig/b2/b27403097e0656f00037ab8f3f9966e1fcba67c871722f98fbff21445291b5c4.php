<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_8d62e3e7d2decb6e8ac6cba15a3148fe8c0e9452f9004281fc5add3e7ffb180c extends Twig_Template
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
        $__internal_a7a1d0b3acebb2aedc15b57b8db56aff2fc0c6a04ca3055aba91a3f13deb14e8 = $this->env->getExtension("native_profiler");
        $__internal_a7a1d0b3acebb2aedc15b57b8db56aff2fc0c6a04ca3055aba91a3f13deb14e8->enter($__internal_a7a1d0b3acebb2aedc15b57b8db56aff2fc0c6a04ca3055aba91a3f13deb14e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/desguize/images/defaultProfilePhoto.png"), "html", null, true);
        echo "\">
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    <p>Prénom: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        echo "</p>
    <p>Nom: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array()), "html", null, true);
        echo "</p>
    <p>Adresse: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "address", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "postCode", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "town", array()), "html", null, true);
        echo "</p>
</div>";
        
        $__internal_a7a1d0b3acebb2aedc15b57b8db56aff2fc0c6a04ca3055aba91a3f13deb14e8->leave($__internal_a7a1d0b3acebb2aedc15b57b8db56aff2fc0c6a04ca3055aba91a3f13deb14e8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  44 => 7,  40 => 6,  34 => 5,  28 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <img src="{{ asset('bundles/desguize/images/defaultProfilePhoto.png') }}">*/
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/*     <p>Prénom: {{ user.firstname }}</p>*/
/*     <p>Nom: {{ user.lastname }}</p>*/
/*     <p>Adresse: {{ user.address }} {{ user.postCode }} {{ user.town }}</p>*/
/* </div>*/
