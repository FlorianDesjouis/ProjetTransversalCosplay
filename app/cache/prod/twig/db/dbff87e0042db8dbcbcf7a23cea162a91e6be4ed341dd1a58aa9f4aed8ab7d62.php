<?php

/* article/index.html.twig */
class __TwigTemplate_626b39797e15e2130f5c9314b81866f4bd6ca86209828df2998832c4eef43852 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
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
        $__internal_97853bccce51cdfae17d1c129a6160acab5be0331cd009c477d670c6b598b8fa = $this->env->getExtension("native_profiler");
        $__internal_97853bccce51cdfae17d1c129a6160acab5be0331cd009c477d670c6b598b8fa->enter($__internal_97853bccce51cdfae17d1c129a6160acab5be0331cd009c477d670c6b598b8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97853bccce51cdfae17d1c129a6160acab5be0331cd009c477d670c6b598b8fa->leave($__internal_97853bccce51cdfae17d1c129a6160acab5be0331cd009c477d670c6b598b8fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8216bc801bdc09471bf9a86e775e54b0641443870273c6cfaea98889b7314ff8 = $this->env->getExtension("native_profiler");
        $__internal_8216bc801bdc09471bf9a86e775e54b0641443870273c6cfaea98889b7314ff8->enter($__internal_8216bc801bdc09471bf9a86e775e54b0641443870273c6cfaea98889b7314ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Article list</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Datecreation</th>
                <th>Image</th>
                <th>Userid</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["article"], "dateCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "path", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "userId", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("article_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_8216bc801bdc09471bf9a86e775e54b0641443870273c6cfaea98889b7314ff8->leave($__internal_8216bc801bdc09471bf9a86e775e54b0641443870273c6cfaea98889b7314ff8_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 43,  112 => 38,  100 => 32,  94 => 29,  87 => 25,  83 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Article list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <th>Description</th>*/
/*                 <th>Datecreation</th>*/
/*                 <th>Image</th>*/
/*                 <th>Userid</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for article in articles %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('article_show', { 'id': article.id }) }}">{{ article.id }}</a></td>*/
/*                 <td>{{ article.name }}</td>*/
/*                 <td>{{ article.description }}</td>*/
/*                 <td>{% if article.dateCreation %}{{ article.dateCreation|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ article.path }}</td>*/
/*                 <td>{{ article.userId }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('article_show', { 'id': article.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('article_edit', { 'id': article.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('article_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
