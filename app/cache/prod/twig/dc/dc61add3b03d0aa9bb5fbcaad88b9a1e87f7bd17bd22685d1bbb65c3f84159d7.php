<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_edd7f03a745baa7aecd0ecee5db39d52e58458cc87f3f8e9a7857c94d2a726c8 extends Twig_Template
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
        $__internal_3b60c92ef9b763bc2811ae809a225831f638d49d5e551cd486b09c82896b5b9c = $this->env->getExtension("native_profiler");
        $__internal_3b60c92ef9b763bc2811ae809a225831f638d49d5e551cd486b09c82896b5b9c->enter($__internal_3b60c92ef9b763bc2811ae809a225831f638d49d5e551cd486b09c82896b5b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b60c92ef9b763bc2811ae809a225831f638d49d5e551cd486b09c82896b5b9c->leave($__internal_3b60c92ef9b763bc2811ae809a225831f638d49d5e551cd486b09c82896b5b9c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5379659db8058f82c566d2ff2f50636c8e966359ce521f6165b688b1cb4137e1 = $this->env->getExtension("native_profiler");
        $__internal_5379659db8058f82c566d2ff2f50636c8e966359ce521f6165b688b1cb4137e1->enter($__internal_5379659db8058f82c566d2ff2f50636c8e966359ce521f6165b688b1cb4137e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_5379659db8058f82c566d2ff2f50636c8e966359ce521f6165b688b1cb4137e1->leave($__internal_5379659db8058f82c566d2ff2f50636c8e966359ce521f6165b688b1cb4137e1_prof);

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
