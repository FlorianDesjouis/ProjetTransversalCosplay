<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_2f3051d5019762306d097a8ef37dc98e98f42e897c9ffd1ab5e718d94b7d7692 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_d6b068d7c59d8a9c4eb5e90966870c713cfb631e0a41e194a16382e01950f0ab = $this->env->getExtension("native_profiler");
        $__internal_d6b068d7c59d8a9c4eb5e90966870c713cfb631e0a41e194a16382e01950f0ab->enter($__internal_d6b068d7c59d8a9c4eb5e90966870c713cfb631e0a41e194a16382e01950f0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6b068d7c59d8a9c4eb5e90966870c713cfb631e0a41e194a16382e01950f0ab->leave($__internal_d6b068d7c59d8a9c4eb5e90966870c713cfb631e0a41e194a16382e01950f0ab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73bd8fa87e140e6dae7e7560f1501ac53559449d31456bda3b638b553876b086 = $this->env->getExtension("native_profiler");
        $__internal_73bd8fa87e140e6dae7e7560f1501ac53559449d31456bda3b638b553876b086->enter($__internal_73bd8fa87e140e6dae7e7560f1501ac53559449d31456bda3b638b553876b086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_73bd8fa87e140e6dae7e7560f1501ac53559449d31456bda3b638b553876b086->leave($__internal_73bd8fa87e140e6dae7e7560f1501ac53559449d31456bda3b638b553876b086_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
