<?php

/* base.html.twig */
class __TwigTemplate_70d2a05b02f2bfbbaaa0423962709a7aa9e5aa4a3f3d1f24717cc83109445712 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddadf2ddacecd1bfee064eda90c083dccd2457fbe12c775d37b4317db343fd7a = $this->env->getExtension("native_profiler");
        $__internal_ddadf2ddacecd1bfee064eda90c083dccd2457fbe12c775d37b4317db343fd7a->enter($__internal_ddadf2ddacecd1bfee064eda90c083dccd2457fbe12c775d37b4317db343fd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ddadf2ddacecd1bfee064eda90c083dccd2457fbe12c775d37b4317db343fd7a->leave($__internal_ddadf2ddacecd1bfee064eda90c083dccd2457fbe12c775d37b4317db343fd7a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4dd9187574ccc86658edfa37d7a66121bd2d227bf203e11c385e117af81faf41 = $this->env->getExtension("native_profiler");
        $__internal_4dd9187574ccc86658edfa37d7a66121bd2d227bf203e11c385e117af81faf41->enter($__internal_4dd9187574ccc86658edfa37d7a66121bd2d227bf203e11c385e117af81faf41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4dd9187574ccc86658edfa37d7a66121bd2d227bf203e11c385e117af81faf41->leave($__internal_4dd9187574ccc86658edfa37d7a66121bd2d227bf203e11c385e117af81faf41_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_19a40bff039999cf75f28dba29c9e1cfec644d45334de722b63b0487cd8c01a8 = $this->env->getExtension("native_profiler");
        $__internal_19a40bff039999cf75f28dba29c9e1cfec644d45334de722b63b0487cd8c01a8->enter($__internal_19a40bff039999cf75f28dba29c9e1cfec644d45334de722b63b0487cd8c01a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_19a40bff039999cf75f28dba29c9e1cfec644d45334de722b63b0487cd8c01a8->leave($__internal_19a40bff039999cf75f28dba29c9e1cfec644d45334de722b63b0487cd8c01a8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fb7f350d6737de2869f67fe2152765edce07aa8c7deb5aa5807f96e1fea5317 = $this->env->getExtension("native_profiler");
        $__internal_0fb7f350d6737de2869f67fe2152765edce07aa8c7deb5aa5807f96e1fea5317->enter($__internal_0fb7f350d6737de2869f67fe2152765edce07aa8c7deb5aa5807f96e1fea5317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0fb7f350d6737de2869f67fe2152765edce07aa8c7deb5aa5807f96e1fea5317->leave($__internal_0fb7f350d6737de2869f67fe2152765edce07aa8c7deb5aa5807f96e1fea5317_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_87ff02ef50caad34b52f16b0022cf57d94df9ae194707775505e34f6344f4c39 = $this->env->getExtension("native_profiler");
        $__internal_87ff02ef50caad34b52f16b0022cf57d94df9ae194707775505e34f6344f4c39->enter($__internal_87ff02ef50caad34b52f16b0022cf57d94df9ae194707775505e34f6344f4c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_87ff02ef50caad34b52f16b0022cf57d94df9ae194707775505e34f6344f4c39->leave($__internal_87ff02ef50caad34b52f16b0022cf57d94df9ae194707775505e34f6344f4c39_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
