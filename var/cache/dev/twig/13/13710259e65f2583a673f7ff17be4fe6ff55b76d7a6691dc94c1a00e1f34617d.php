<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_6a73981c1dfc36ebd2879f0f0f120d03219f13e7305867de63e6c1eeb358794e extends Twig_Template
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
        $__internal_75fb33b0e7037da7b426bc0617a4f8cc0dcd1742a97e73343178c0623eb09c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75fb33b0e7037da7b426bc0617a4f8cc0dcd1742a97e73343178c0623eb09c74->enter($__internal_75fb33b0e7037da7b426bc0617a4f8cc0dcd1742a97e73343178c0623eb09c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_52e6bd05ff6324152baca65306a71c26c1b19c04b2c27840df646542b0cf658f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e6bd05ff6324152baca65306a71c26c1b19c04b2c27840df646542b0cf658f->enter($__internal_52e6bd05ff6324152baca65306a71c26c1b19c04b2c27840df646542b0cf658f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_75fb33b0e7037da7b426bc0617a4f8cc0dcd1742a97e73343178c0623eb09c74->leave($__internal_75fb33b0e7037da7b426bc0617a4f8cc0dcd1742a97e73343178c0623eb09c74_prof);

        
        $__internal_52e6bd05ff6324152baca65306a71c26c1b19c04b2c27840df646542b0cf658f->leave($__internal_52e6bd05ff6324152baca65306a71c26c1b19c04b2c27840df646542b0cf658f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
