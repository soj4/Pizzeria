<?php

/* :default:asside.html.twig */
class __TwigTemplate_a23a18bdb656ff1773989d89e41940260d13682b8d79ae3440393196354f5afa extends Twig_Template
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
        $__internal_7b526a7e5fa87a787e69cf13cb1586ffaa0c0782c16ab7d958b280d9e4510ff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b526a7e5fa87a787e69cf13cb1586ffaa0c0782c16ab7d958b280d9e4510ff4->enter($__internal_7b526a7e5fa87a787e69cf13cb1586ffaa0c0782c16ab7d958b280d9e4510ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:asside.html.twig"));

        $__internal_39856410a928b403e865f81605ae5152760570de21f57e8de775c09af568cbdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39856410a928b403e865f81605ae5152760570de21f57e8de775c09af568cbdb->enter($__internal_39856410a928b403e865f81605ae5152760570de21f57e8de775c09af568cbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:asside.html.twig"));

        // line 1
        echo "<aside class=\"main-sidebar\">
    <section class=\"sidebar\">
        <form action=\"#\" class=\"sidebar-form\" method=\"get\">
            <div class=\"input-group\">
                <input class=\"form-control\" name=\"q\" placeholder=\"Search...\" type=\"text\"/>
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-flat\" id=\"search-btn\" name=\"search\" type=\"submit\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </span>
            </div>
        </form>
        <ul class=\"sidebar-menu\" data-widget=\"tree\">
            <li class=\"header\">MENU PRINCIPAL</li>
            <li class=\"\">
                <a href=\"pizza\">
                    <i class=\"fa ion-pie-graph\"></i>
                    <span>Productos</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                </a>
            </li>
            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-th\"></i>
                    <span>Pedidos</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li>
                        <a href=\"pizzapedido/new\">
                            <i class=\"fa fa-circle-o\"></i>
                            Nuevo
                        </a>
                    </li>
                    <li>
                        <a href=\"pizzapedido/\">
                            <i class=\"fa fa-circle-o\"></i>
                            Ver todos
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </section>
</aside>";
        
        $__internal_7b526a7e5fa87a787e69cf13cb1586ffaa0c0782c16ab7d958b280d9e4510ff4->leave($__internal_7b526a7e5fa87a787e69cf13cb1586ffaa0c0782c16ab7d958b280d9e4510ff4_prof);

        
        $__internal_39856410a928b403e865f81605ae5152760570de21f57e8de775c09af568cbdb->leave($__internal_39856410a928b403e865f81605ae5152760570de21f57e8de775c09af568cbdb_prof);

    }

    public function getTemplateName()
    {
        return ":default:asside.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<aside class=\"main-sidebar\">
    <section class=\"sidebar\">
        <form action=\"#\" class=\"sidebar-form\" method=\"get\">
            <div class=\"input-group\">
                <input class=\"form-control\" name=\"q\" placeholder=\"Search...\" type=\"text\"/>
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-flat\" id=\"search-btn\" name=\"search\" type=\"submit\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </span>
            </div>
        </form>
        <ul class=\"sidebar-menu\" data-widget=\"tree\">
            <li class=\"header\">MENU PRINCIPAL</li>
            <li class=\"\">
                <a href=\"pizza\">
                    <i class=\"fa ion-pie-graph\"></i>
                    <span>Productos</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                </a>
            </li>
            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-th\"></i>
                    <span>Pedidos</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li>
                        <a href=\"pizzapedido/new\">
                            <i class=\"fa fa-circle-o\"></i>
                            Nuevo
                        </a>
                    </li>
                    <li>
                        <a href=\"pizzapedido/\">
                            <i class=\"fa fa-circle-o\"></i>
                            Ver todos
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </section>
</aside>", ":default:asside.html.twig", "/home/nico/pizzerianostra/app/Resources/views/default/asside.html.twig");
    }
}