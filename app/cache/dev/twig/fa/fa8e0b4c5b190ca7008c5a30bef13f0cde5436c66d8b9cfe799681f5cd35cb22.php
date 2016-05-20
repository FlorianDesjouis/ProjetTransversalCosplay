<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a5c6234219ecad9e090714e0df72d6be2fc1b1bdbee93d29fba985106a1814c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_2d02382053f21d6db1bd94e40eaa704fafefe3a933a87004ed994c1de7524993 = $this->env->getExtension("native_profiler");
        $__internal_2d02382053f21d6db1bd94e40eaa704fafefe3a933a87004ed994c1de7524993->enter($__internal_2d02382053f21d6db1bd94e40eaa704fafefe3a933a87004ed994c1de7524993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d02382053f21d6db1bd94e40eaa704fafefe3a933a87004ed994c1de7524993->leave($__internal_2d02382053f21d6db1bd94e40eaa704fafefe3a933a87004ed994c1de7524993_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ef76d5e70f240dd4047c90e9933d1842ffcfff6b04cc127c9e241b5833cbf6e = $this->env->getExtension("native_profiler");
        $__internal_4ef76d5e70f240dd4047c90e9933d1842ffcfff6b04cc127c9e241b5833cbf6e->enter($__internal_4ef76d5e70f240dd4047c90e9933d1842ffcfff6b04cc127c9e241b5833cbf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_4ef76d5e70f240dd4047c90e9933d1842ffcfff6b04cc127c9e241b5833cbf6e->leave($__internal_4ef76d5e70f240dd4047c90e9933d1842ffcfff6b04cc127c9e241b5833cbf6e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
