<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_5a75330f0de78d2af386f11326b759e52188374c786f3fee655a2aa4a08361fc extends Twig_Template
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
        $__internal_13ce826a7e17a79f9d52039a69be1f30dfdfd4a13d32a40efdbf08675eecbbdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13ce826a7e17a79f9d52039a69be1f30dfdfd4a13d32a40efdbf08675eecbbdc->enter($__internal_13ce826a7e17a79f9d52039a69be1f30dfdfd4a13d32a40efdbf08675eecbbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_3acb40c97eabc807544d9c44e967ed5431094c9d5a540c9751be272464d1bd0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3acb40c97eabc807544d9c44e967ed5431094c9d5a540c9751be272464d1bd0c->enter($__internal_3acb40c97eabc807544d9c44e967ed5431094c9d5a540c9751be272464d1bd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_13ce826a7e17a79f9d52039a69be1f30dfdfd4a13d32a40efdbf08675eecbbdc->leave($__internal_13ce826a7e17a79f9d52039a69be1f30dfdfd4a13d32a40efdbf08675eecbbdc_prof);

        
        $__internal_3acb40c97eabc807544d9c44e967ed5431094c9d5a540c9751be272464d1bd0c->leave($__internal_3acb40c97eabc807544d9c44e967ed5431094c9d5a540c9751be272464d1bd0c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
