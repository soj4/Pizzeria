<?php

/* :cliente:edit.html.twig */
class __TwigTemplate_2fa30acac48cdbbcb08c52ee3230bcb78377aa07644548fe4751484e3a502a64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cliente:edit.html.twig", 1);
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
        $__internal_7510e003adc21871adcc78de56c70b938014ddeae66fb2e79412f252a26826a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7510e003adc21871adcc78de56c70b938014ddeae66fb2e79412f252a26826a5->enter($__internal_7510e003adc21871adcc78de56c70b938014ddeae66fb2e79412f252a26826a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:edit.html.twig"));

        $__internal_e8b78685e598e7e65ebe29d99c37a6e6da8fc344b45240a5a14775283a6623b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b78685e598e7e65ebe29d99c37a6e6da8fc344b45240a5a14775283a6623b2->enter($__internal_e8b78685e598e7e65ebe29d99c37a6e6da8fc344b45240a5a14775283a6623b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7510e003adc21871adcc78de56c70b938014ddeae66fb2e79412f252a26826a5->leave($__internal_7510e003adc21871adcc78de56c70b938014ddeae66fb2e79412f252a26826a5_prof);

        
        $__internal_e8b78685e598e7e65ebe29d99c37a6e6da8fc344b45240a5a14775283a6623b2->leave($__internal_e8b78685e598e7e65ebe29d99c37a6e6da8fc344b45240a5a14775283a6623b2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_683ac4d9c019512e0cb0de5b37771820e566a1b99e5e742e7e729ad1b792a86f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683ac4d9c019512e0cb0de5b37771820e566a1b99e5e742e7e729ad1b792a86f->enter($__internal_683ac4d9c019512e0cb0de5b37771820e566a1b99e5e742e7e729ad1b792a86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b00ce4a649a55e71912bb3747c3074d5d9dd6a4cd3e5d717a8e12c6032d80751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00ce4a649a55e71912bb3747c3074d5d9dd6a4cd3e5d717a8e12c6032d80751->enter($__internal_b00ce4a649a55e71912bb3747c3074d5d9dd6a4cd3e5d717a8e12c6032d80751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cliente edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b00ce4a649a55e71912bb3747c3074d5d9dd6a4cd3e5d717a8e12c6032d80751->leave($__internal_b00ce4a649a55e71912bb3747c3074d5d9dd6a4cd3e5d717a8e12c6032d80751_prof);

        
        $__internal_683ac4d9c019512e0cb0de5b37771820e566a1b99e5e742e7e729ad1b792a86f->leave($__internal_683ac4d9c019512e0cb0de5b37771820e566a1b99e5e742e7e729ad1b792a86f_prof);

    }

    public function getTemplateName()
    {
        return ":cliente:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Cliente edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('cliente_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":cliente:edit.html.twig", "/home/nico/pizzerianostra/app/Resources/views/cliente/edit.html.twig");
    }
}
