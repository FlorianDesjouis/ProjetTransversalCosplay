<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_df980c166271e4270e739202ecd785595ede3ddd79300242c9af9f415eefc547 extends Twig_Template
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
        $__internal_94a5094e3534724915f61610f5474837fac6504aea49df6f425fafc65ceb3673 = $this->env->getExtension("native_profiler");
        $__internal_94a5094e3534724915f61610f5474837fac6504aea49df6f425fafc65ceb3673->enter($__internal_94a5094e3534724915f61610f5474837fac6504aea49df6f425fafc65ceb3673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94a5094e3534724915f61610f5474837fac6504aea49df6f425fafc65ceb3673->leave($__internal_94a5094e3534724915f61610f5474837fac6504aea49df6f425fafc65ceb3673_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d65df695d5b8cda5ec25942a0eec3676516a886f8e4e1c99d141ffd2fdff813 = $this->env->getExtension("native_profiler");
        $__internal_8d65df695d5b8cda5ec25942a0eec3676516a886f8e4e1c99d141ffd2fdff813->enter($__internal_8d65df695d5b8cda5ec25942a0eec3676516a886f8e4e1c99d141ffd2fdff813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8d65df695d5b8cda5ec25942a0eec3676516a886f8e4e1c99d141ffd2fdff813->leave($__internal_8d65df695d5b8cda5ec25942a0eec3676516a886f8e4e1c99d141ffd2fdff813_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f35ff4179e9feafffa0a78438558ec0e8a25bd0b1549430508a41c20849ed503 = $this->env->getExtension("native_profiler");
        $__internal_f35ff4179e9feafffa0a78438558ec0e8a25bd0b1549430508a41c20849ed503->enter($__internal_f35ff4179e9feafffa0a78438558ec0e8a25bd0b1549430508a41c20849ed503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f35ff4179e9feafffa0a78438558ec0e8a25bd0b1549430508a41c20849ed503->leave($__internal_f35ff4179e9feafffa0a78438558ec0e8a25bd0b1549430508a41c20849ed503_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5637f50caaa70879103e232911123809ca8d23c8240ac6aec1cef639f1e90e3f = $this->env->getExtension("native_profiler");
        $__internal_5637f50caaa70879103e232911123809ca8d23c8240ac6aec1cef639f1e90e3f->enter($__internal_5637f50caaa70879103e232911123809ca8d23c8240ac6aec1cef639f1e90e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5637f50caaa70879103e232911123809ca8d23c8240ac6aec1cef639f1e90e3f->leave($__internal_5637f50caaa70879103e232911123809ca8d23c8240ac6aec1cef639f1e90e3f_prof);

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
