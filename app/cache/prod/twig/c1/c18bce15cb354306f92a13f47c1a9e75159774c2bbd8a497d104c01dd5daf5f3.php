<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_71baa161971cca623d557514c2437a82a2e8e23d2916bedbc9d44dace037ff56 extends Twig_Template
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
        $__internal_b23c9203c09a3e32e9df6a81fb2d33669f9e79518251d2a6693643a2f482e203 = $this->env->getExtension("native_profiler");
        $__internal_b23c9203c09a3e32e9df6a81fb2d33669f9e79518251d2a6693643a2f482e203->enter($__internal_b23c9203c09a3e32e9df6a81fb2d33669f9e79518251d2a6693643a2f482e203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_b23c9203c09a3e32e9df6a81fb2d33669f9e79518251d2a6693643a2f482e203->leave($__internal_b23c9203c09a3e32e9df6a81fb2d33669f9e79518251d2a6693643a2f482e203_prof);

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
