<?php

/* pizza/new.html.twig */
class __TwigTemplate_be3408cd043613c100e59ca942e72d31cbb39b9b935e402e7e5dc3e1c6cca834 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pizza/new.html.twig", 1);
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
        $__internal_c75dd4c766d51577a0cc70d23a786eac33709047cea83c5c6289cc40377394bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c75dd4c766d51577a0cc70d23a786eac33709047cea83c5c6289cc40377394bf->enter($__internal_c75dd4c766d51577a0cc70d23a786eac33709047cea83c5c6289cc40377394bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizza/new.html.twig"));

        $__internal_414ae25d14bce49f5affa71c630b79d104dd756d1843bd8585f3ac191357e9a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414ae25d14bce49f5affa71c630b79d104dd756d1843bd8585f3ac191357e9a3->enter($__internal_414ae25d14bce49f5affa71c630b79d104dd756d1843bd8585f3ac191357e9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizza/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c75dd4c766d51577a0cc70d23a786eac33709047cea83c5c6289cc40377394bf->leave($__internal_c75dd4c766d51577a0cc70d23a786eac33709047cea83c5c6289cc40377394bf_prof);

        
        $__internal_414ae25d14bce49f5affa71c630b79d104dd756d1843bd8585f3ac191357e9a3->leave($__internal_414ae25d14bce49f5affa71c630b79d104dd756d1843bd8585f3ac191357e9a3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e959843f768134d3788cfe1c773854f3b12c61317b7d1869b50cdbba9835898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e959843f768134d3788cfe1c773854f3b12c61317b7d1869b50cdbba9835898->enter($__internal_2e959843f768134d3788cfe1c773854f3b12c61317b7d1869b50cdbba9835898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e9ef01f16ed5efa30cfdc32c36a53ddbf4331d34f3be6f562289ba3969302ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9ef01f16ed5efa30cfdc32c36a53ddbf4331d34f3be6f562289ba3969302ac->enter($__internal_7e9ef01f16ed5efa30cfdc32c36a53ddbf4331d34f3be6f562289ba3969302ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"content-header\">
        <h1>Agregar Nueva variedad de Pizza</h1>
    </section>

<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-1\">
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            <br>
                <input class=\"btn btn-warning\" type=\"submit\" value=\"Crear\" />
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
</section>

    <ul>
        <li>
            <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_index");
        echo "\">Volver a la Carta</a>
        </li>
    </ul>
";
        
        $__internal_7e9ef01f16ed5efa30cfdc32c36a53ddbf4331d34f3be6f562289ba3969302ac->leave($__internal_7e9ef01f16ed5efa30cfdc32c36a53ddbf4331d34f3be6f562289ba3969302ac_prof);

        
        $__internal_2e959843f768134d3788cfe1c773854f3b12c61317b7d1869b50cdbba9835898->leave($__internal_2e959843f768134d3788cfe1c773854f3b12c61317b7d1869b50cdbba9835898_prof);

    }

    public function getTemplateName()
    {
        return "pizza/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  68 => 15,  62 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
    <section class=\"content-header\">
        <h1>Agregar Nueva variedad de Pizza</h1>
    </section>

<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-1\">
            {{ form_start(form) }}
                {{ form_widget(form) }}
            <br>
                <input class=\"btn btn-warning\" type=\"submit\" value=\"Crear\" />
            {{ form_end(form) }}
        </div>
    </div>
</section>

    <ul>
        <li>
            <a href=\"{{ path('pizza_index') }}\">Volver a la Carta</a>
        </li>
    </ul>
{% endblock %}
", "pizza/new.html.twig", "/home/manuel/symfony/Pizzeria/app/Resources/views/pizza/new.html.twig");
    }
}
