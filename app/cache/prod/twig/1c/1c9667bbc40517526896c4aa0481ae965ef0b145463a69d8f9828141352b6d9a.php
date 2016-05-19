<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_95d58d699bb38042e6ad27b764e6980a6ac297cb8fe6953c06fc3d3b8788dd8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ac85dfe604523d467b495bac2e9f15653846a930cf7496a51edf4dc34a68756 = $this->env->getExtension("native_profiler");
        $__internal_7ac85dfe604523d467b495bac2e9f15653846a930cf7496a51edf4dc34a68756->enter($__internal_7ac85dfe604523d467b495bac2e9f15653846a930cf7496a51edf4dc34a68756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ac85dfe604523d467b495bac2e9f15653846a930cf7496a51edf4dc34a68756->leave($__internal_7ac85dfe604523d467b495bac2e9f15653846a930cf7496a51edf4dc34a68756_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_77fa9fd2d17baee6c3996b8204c7f2de4d67a668ad6cbdb4848b2aacab9e41f3 = $this->env->getExtension("native_profiler");
        $__internal_77fa9fd2d17baee6c3996b8204c7f2de4d67a668ad6cbdb4848b2aacab9e41f3->enter($__internal_77fa9fd2d17baee6c3996b8204c7f2de4d67a668ad6cbdb4848b2aacab9e41f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_77fa9fd2d17baee6c3996b8204c7f2de4d67a668ad6cbdb4848b2aacab9e41f3->leave($__internal_77fa9fd2d17baee6c3996b8204c7f2de4d67a668ad6cbdb4848b2aacab9e41f3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b76ce01769c53281803a113394efd15b6837670c8dd4d4a8b6be235feaed3a27 = $this->env->getExtension("native_profiler");
        $__internal_b76ce01769c53281803a113394efd15b6837670c8dd4d4a8b6be235feaed3a27->enter($__internal_b76ce01769c53281803a113394efd15b6837670c8dd4d4a8b6be235feaed3a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b76ce01769c53281803a113394efd15b6837670c8dd4d4a8b6be235feaed3a27->leave($__internal_b76ce01769c53281803a113394efd15b6837670c8dd4d4a8b6be235feaed3a27_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_89a60ef22eb7195e2f5870d015bf20d6e4237615b76d5e562f67c3e38a3b734d = $this->env->getExtension("native_profiler");
        $__internal_89a60ef22eb7195e2f5870d015bf20d6e4237615b76d5e562f67c3e38a3b734d->enter($__internal_89a60ef22eb7195e2f5870d015bf20d6e4237615b76d5e562f67c3e38a3b734d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_89a60ef22eb7195e2f5870d015bf20d6e4237615b76d5e562f67c3e38a3b734d->leave($__internal_89a60ef22eb7195e2f5870d015bf20d6e4237615b76d5e562f67c3e38a3b734d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
