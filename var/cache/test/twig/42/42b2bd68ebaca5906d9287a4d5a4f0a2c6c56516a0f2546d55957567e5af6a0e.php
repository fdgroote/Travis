<?php

/* base.html.twig */
class __TwigTemplate_a04947d5009d507072a9ba6506ebae3c79fdd03aece5081d3ae329be8551f7d0 extends Twig_Template
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
        $__internal_60261b80ad9e6954daaba357bf983861de1276749b61d842025721d31727102e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60261b80ad9e6954daaba357bf983861de1276749b61d842025721d31727102e->enter($__internal_60261b80ad9e6954daaba357bf983861de1276749b61d842025721d31727102e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d19cca2cb0b352bc3eb2f00fc33839c1fc518cfeaa91aaf5fdf2e3e603b11de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19cca2cb0b352bc3eb2f00fc33839c1fc518cfeaa91aaf5fdf2e3e603b11de5->enter($__internal_d19cca2cb0b352bc3eb2f00fc33839c1fc518cfeaa91aaf5fdf2e3e603b11de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_60261b80ad9e6954daaba357bf983861de1276749b61d842025721d31727102e->leave($__internal_60261b80ad9e6954daaba357bf983861de1276749b61d842025721d31727102e_prof);

        
        $__internal_d19cca2cb0b352bc3eb2f00fc33839c1fc518cfeaa91aaf5fdf2e3e603b11de5->leave($__internal_d19cca2cb0b352bc3eb2f00fc33839c1fc518cfeaa91aaf5fdf2e3e603b11de5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f274fc5e4f27a7aedd25d1a53b14e46a506431cb281480c6534623a6f598c4a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f274fc5e4f27a7aedd25d1a53b14e46a506431cb281480c6534623a6f598c4a6->enter($__internal_f274fc5e4f27a7aedd25d1a53b14e46a506431cb281480c6534623a6f598c4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b389153e25c93204f3fd0d66c54cd184766e455727fa02e534d6465cfe35fd32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b389153e25c93204f3fd0d66c54cd184766e455727fa02e534d6465cfe35fd32->enter($__internal_b389153e25c93204f3fd0d66c54cd184766e455727fa02e534d6465cfe35fd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b389153e25c93204f3fd0d66c54cd184766e455727fa02e534d6465cfe35fd32->leave($__internal_b389153e25c93204f3fd0d66c54cd184766e455727fa02e534d6465cfe35fd32_prof);

        
        $__internal_f274fc5e4f27a7aedd25d1a53b14e46a506431cb281480c6534623a6f598c4a6->leave($__internal_f274fc5e4f27a7aedd25d1a53b14e46a506431cb281480c6534623a6f598c4a6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_50b243ef9949343344a5398765616fa86b8e285753d6b12fd47107fc83d66f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b243ef9949343344a5398765616fa86b8e285753d6b12fd47107fc83d66f8d->enter($__internal_50b243ef9949343344a5398765616fa86b8e285753d6b12fd47107fc83d66f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e8357060ea2017161b6ffea6712bcf10a5e0579f317184f15a3b589e3fb70c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8357060ea2017161b6ffea6712bcf10a5e0579f317184f15a3b589e3fb70c03->enter($__internal_e8357060ea2017161b6ffea6712bcf10a5e0579f317184f15a3b589e3fb70c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e8357060ea2017161b6ffea6712bcf10a5e0579f317184f15a3b589e3fb70c03->leave($__internal_e8357060ea2017161b6ffea6712bcf10a5e0579f317184f15a3b589e3fb70c03_prof);

        
        $__internal_50b243ef9949343344a5398765616fa86b8e285753d6b12fd47107fc83d66f8d->leave($__internal_50b243ef9949343344a5398765616fa86b8e285753d6b12fd47107fc83d66f8d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a638f654773359d83cb6a895980d494c6d13d4f30ba744706db8d65a5dffd0a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a638f654773359d83cb6a895980d494c6d13d4f30ba744706db8d65a5dffd0a1->enter($__internal_a638f654773359d83cb6a895980d494c6d13d4f30ba744706db8d65a5dffd0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3147d5463f89ad550553491d1fadf4b5e92fc18c48898f835f67207beae098c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3147d5463f89ad550553491d1fadf4b5e92fc18c48898f835f67207beae098c1->enter($__internal_3147d5463f89ad550553491d1fadf4b5e92fc18c48898f835f67207beae098c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3147d5463f89ad550553491d1fadf4b5e92fc18c48898f835f67207beae098c1->leave($__internal_3147d5463f89ad550553491d1fadf4b5e92fc18c48898f835f67207beae098c1_prof);

        
        $__internal_a638f654773359d83cb6a895980d494c6d13d4f30ba744706db8d65a5dffd0a1->leave($__internal_a638f654773359d83cb6a895980d494c6d13d4f30ba744706db8d65a5dffd0a1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e326173bb36f38006ea688f93e58f3d735df69178c598b057ca5292911b4a55a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e326173bb36f38006ea688f93e58f3d735df69178c598b057ca5292911b4a55a->enter($__internal_e326173bb36f38006ea688f93e58f3d735df69178c598b057ca5292911b4a55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4871375e23ee5caf0df55ed89ea3e586fee28c7b0a801b75d4f271bff30ddf4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4871375e23ee5caf0df55ed89ea3e586fee28c7b0a801b75d4f271bff30ddf4c->enter($__internal_4871375e23ee5caf0df55ed89ea3e586fee28c7b0a801b75d4f271bff30ddf4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4871375e23ee5caf0df55ed89ea3e586fee28c7b0a801b75d4f271bff30ddf4c->leave($__internal_4871375e23ee5caf0df55ed89ea3e586fee28c7b0a801b75d4f271bff30ddf4c_prof);

        
        $__internal_e326173bb36f38006ea688f93e58f3d735df69178c598b057ca5292911b4a55a->leave($__internal_e326173bb36f38006ea688f93e58f3d735df69178c598b057ca5292911b4a55a_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/fdegroote/Sites/Travis/Symfony/app/Resources/views/base.html.twig");
    }
}
