<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d063aa8a2cb55541c9f28c714a3206e681af99d9d202ec9c5fb957abf248f7cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51d71ab214e0da95b333486cbbfb13af4bd2754c49ca67367029c1efb0d12238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51d71ab214e0da95b333486cbbfb13af4bd2754c49ca67367029c1efb0d12238->enter($__internal_51d71ab214e0da95b333486cbbfb13af4bd2754c49ca67367029c1efb0d12238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_91be369e320b0ec68e1c2e87535c743462b1467adbfc61f98a5307975e521312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91be369e320b0ec68e1c2e87535c743462b1467adbfc61f98a5307975e521312->enter($__internal_91be369e320b0ec68e1c2e87535c743462b1467adbfc61f98a5307975e521312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51d71ab214e0da95b333486cbbfb13af4bd2754c49ca67367029c1efb0d12238->leave($__internal_51d71ab214e0da95b333486cbbfb13af4bd2754c49ca67367029c1efb0d12238_prof);

        
        $__internal_91be369e320b0ec68e1c2e87535c743462b1467adbfc61f98a5307975e521312->leave($__internal_91be369e320b0ec68e1c2e87535c743462b1467adbfc61f98a5307975e521312_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_32762a991deb0b0bc3436213c544883d2a274844c7f4908a9ded661fe36e9e01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32762a991deb0b0bc3436213c544883d2a274844c7f4908a9ded661fe36e9e01->enter($__internal_32762a991deb0b0bc3436213c544883d2a274844c7f4908a9ded661fe36e9e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6cfe78c629bbc1e36a00716ef0be78c786b640e39beb0d98e43671bf912ef421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cfe78c629bbc1e36a00716ef0be78c786b640e39beb0d98e43671bf912ef421->enter($__internal_6cfe78c629bbc1e36a00716ef0be78c786b640e39beb0d98e43671bf912ef421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_6cfe78c629bbc1e36a00716ef0be78c786b640e39beb0d98e43671bf912ef421->leave($__internal_6cfe78c629bbc1e36a00716ef0be78c786b640e39beb0d98e43671bf912ef421_prof);

        
        $__internal_32762a991deb0b0bc3436213c544883d2a274844c7f4908a9ded661fe36e9e01->leave($__internal_32762a991deb0b0bc3436213c544883d2a274844c7f4908a9ded661fe36e9e01_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e9037888475bb7f1bdd7ac1e8f008229caeb1d7028816ceeeb72f59df5aff194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9037888475bb7f1bdd7ac1e8f008229caeb1d7028816ceeeb72f59df5aff194->enter($__internal_e9037888475bb7f1bdd7ac1e8f008229caeb1d7028816ceeeb72f59df5aff194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a03778b2b8f1613db2c69c40c0a52f5cb86374bdcec4490010d7a22a1f946ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03778b2b8f1613db2c69c40c0a52f5cb86374bdcec4490010d7a22a1f946ded->enter($__internal_a03778b2b8f1613db2c69c40c0a52f5cb86374bdcec4490010d7a22a1f946ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a03778b2b8f1613db2c69c40c0a52f5cb86374bdcec4490010d7a22a1f946ded->leave($__internal_a03778b2b8f1613db2c69c40c0a52f5cb86374bdcec4490010d7a22a1f946ded_prof);

        
        $__internal_e9037888475bb7f1bdd7ac1e8f008229caeb1d7028816ceeeb72f59df5aff194->leave($__internal_e9037888475bb7f1bdd7ac1e8f008229caeb1d7028816ceeeb72f59df5aff194_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
