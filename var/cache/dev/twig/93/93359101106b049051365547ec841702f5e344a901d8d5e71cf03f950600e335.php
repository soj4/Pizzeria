<?php

/* :pizzapedido:show.html.twig */
class __TwigTemplate_031bfd9d70ac00dcdfb1c3a6c295c5659bf429fd7b8ed0fcf9017dd20849a9ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pizzapedido:show.html.twig", 1);
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
        $__internal_57a0f0a3ab47aad2ad6b25dbb0f2b96243880c00828399ead5b5df42407df727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a0f0a3ab47aad2ad6b25dbb0f2b96243880c00828399ead5b5df42407df727->enter($__internal_57a0f0a3ab47aad2ad6b25dbb0f2b96243880c00828399ead5b5df42407df727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:show.html.twig"));

        $__internal_53e3c1d47a09e6b34f2baec125d153b61523366a104fc387ff0c20044246e8c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53e3c1d47a09e6b34f2baec125d153b61523366a104fc387ff0c20044246e8c1->enter($__internal_53e3c1d47a09e6b34f2baec125d153b61523366a104fc387ff0c20044246e8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57a0f0a3ab47aad2ad6b25dbb0f2b96243880c00828399ead5b5df42407df727->leave($__internal_57a0f0a3ab47aad2ad6b25dbb0f2b96243880c00828399ead5b5df42407df727_prof);

        
        $__internal_53e3c1d47a09e6b34f2baec125d153b61523366a104fc387ff0c20044246e8c1->leave($__internal_53e3c1d47a09e6b34f2baec125d153b61523366a104fc387ff0c20044246e8c1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_04b7780a28914b97644a4c2c62e22a734a8895efbbc9e98a74aad92e5d78c106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04b7780a28914b97644a4c2c62e22a734a8895efbbc9e98a74aad92e5d78c106->enter($__internal_04b7780a28914b97644a4c2c62e22a734a8895efbbc9e98a74aad92e5d78c106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a89a2187370bd12b3b39721fcc89e09c86893ab080081abbd45a7000fd15da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a89a2187370bd12b3b39721fcc89e09c86893ab080081abbd45a7000fd15da5->enter($__internal_1a89a2187370bd12b3b39721fcc89e09c86893ab080081abbd45a7000fd15da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pizzapedido</h1>

    <table>
        <tbody>
            <tr>
                <th>Idpizzapedido</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pizzapedido"] ?? $this->getContext($context, "pizzapedido")), "idpizzapedido", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_edit", array("idpizzapedido" => $this->getAttribute(($context["pizzapedido"] ?? $this->getContext($context, "pizzapedido")), "idpizzapedido", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1a89a2187370bd12b3b39721fcc89e09c86893ab080081abbd45a7000fd15da5->leave($__internal_1a89a2187370bd12b3b39721fcc89e09c86893ab080081abbd45a7000fd15da5_prof);

        
        $__internal_04b7780a28914b97644a4c2c62e22a734a8895efbbc9e98a74aad92e5d78c106->leave($__internal_04b7780a28914b97644a4c2c62e22a734a8895efbbc9e98a74aad92e5d78c106_prof);

    }

    public function getTemplateName()
    {
        return ":pizzapedido:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  79 => 23,  73 => 20,  67 => 17,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Pizzapedido</h1>

    <table>
        <tbody>
            <tr>
                <th>Idpizzapedido</th>
                <td>{{ pizzapedido.idpizzapedido }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('pizzapedido_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('pizzapedido_edit', { 'idpizzapedido': pizzapedido.idpizzapedido }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":pizzapedido:show.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pizzapedido/show.html.twig");
    }
}