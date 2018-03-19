<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_627299fa42cfd848fd182d99a5255e474fc3368ddd730c0603fa8257bf337c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4970ae00c210349a5695f13344bccf6f2eea08182202a2788747bd643e31c955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4970ae00c210349a5695f13344bccf6f2eea08182202a2788747bd643e31c955->enter($__internal_4970ae00c210349a5695f13344bccf6f2eea08182202a2788747bd643e31c955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5ed1ecfe60ad5f025c9c56dd921fc9582857310507361450ecf058e36bdc31aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed1ecfe60ad5f025c9c56dd921fc9582857310507361450ecf058e36bdc31aa->enter($__internal_5ed1ecfe60ad5f025c9c56dd921fc9582857310507361450ecf058e36bdc31aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_4970ae00c210349a5695f13344bccf6f2eea08182202a2788747bd643e31c955->leave($__internal_4970ae00c210349a5695f13344bccf6f2eea08182202a2788747bd643e31c955_prof);

        
        $__internal_5ed1ecfe60ad5f025c9c56dd921fc9582857310507361450ecf058e36bdc31aa->leave($__internal_5ed1ecfe60ad5f025c9c56dd921fc9582857310507361450ecf058e36bdc31aa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8b9c1c90ecf7f56fc425b5731bfc54a339ce714800655ed56e966bd7796b6dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b9c1c90ecf7f56fc425b5731bfc54a339ce714800655ed56e966bd7796b6dd->enter($__internal_d8b9c1c90ecf7f56fc425b5731bfc54a339ce714800655ed56e966bd7796b6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ada2a1c2633b4e8c7f032885a134ec9e48211238ba64d3e88edcc762625d6b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada2a1c2633b4e8c7f032885a134ec9e48211238ba64d3e88edcc762625d6b86->enter($__internal_ada2a1c2633b4e8c7f032885a134ec9e48211238ba64d3e88edcc762625d6b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ada2a1c2633b4e8c7f032885a134ec9e48211238ba64d3e88edcc762625d6b86->leave($__internal_ada2a1c2633b4e8c7f032885a134ec9e48211238ba64d3e88edcc762625d6b86_prof);

        
        $__internal_d8b9c1c90ecf7f56fc425b5731bfc54a339ce714800655ed56e966bd7796b6dd->leave($__internal_d8b9c1c90ecf7f56fc425b5731bfc54a339ce714800655ed56e966bd7796b6dd_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c5ff0e532d9276bb9d57cb7be9553f5ccd9f3c338cb5a48943edaeeaf062063d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ff0e532d9276bb9d57cb7be9553f5ccd9f3c338cb5a48943edaeeaf062063d->enter($__internal_c5ff0e532d9276bb9d57cb7be9553f5ccd9f3c338cb5a48943edaeeaf062063d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_baaacc96f6108b5fd9ed6efc7cfe09ab867e5b096a80d87fa1b393a31e6d40cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baaacc96f6108b5fd9ed6efc7cfe09ab867e5b096a80d87fa1b393a31e6d40cc->enter($__internal_baaacc96f6108b5fd9ed6efc7cfe09ab867e5b096a80d87fa1b393a31e6d40cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_baaacc96f6108b5fd9ed6efc7cfe09ab867e5b096a80d87fa1b393a31e6d40cc->leave($__internal_baaacc96f6108b5fd9ed6efc7cfe09ab867e5b096a80d87fa1b393a31e6d40cc_prof);

        
        $__internal_c5ff0e532d9276bb9d57cb7be9553f5ccd9f3c338cb5a48943edaeeaf062063d->leave($__internal_c5ff0e532d9276bb9d57cb7be9553f5ccd9f3c338cb5a48943edaeeaf062063d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_145f6ff454a9e9f8052b009b0522a39bfc5071f08cee0f354e03cc2b59262ea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_145f6ff454a9e9f8052b009b0522a39bfc5071f08cee0f354e03cc2b59262ea4->enter($__internal_145f6ff454a9e9f8052b009b0522a39bfc5071f08cee0f354e03cc2b59262ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40a02a891a461bfc313dcc6254e7bc2c62d917d0a5301e2bd28a00fd9c630ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a02a891a461bfc313dcc6254e7bc2c62d917d0a5301e2bd28a00fd9c630ba3->enter($__internal_40a02a891a461bfc313dcc6254e7bc2c62d917d0a5301e2bd28a00fd9c630ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_40a02a891a461bfc313dcc6254e7bc2c62d917d0a5301e2bd28a00fd9c630ba3->leave($__internal_40a02a891a461bfc313dcc6254e7bc2c62d917d0a5301e2bd28a00fd9c630ba3_prof);

        
        $__internal_145f6ff454a9e9f8052b009b0522a39bfc5071f08cee0f354e03cc2b59262ea4->leave($__internal_145f6ff454a9e9f8052b009b0522a39bfc5071f08cee0f354e03cc2b59262ea4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/fdegroote/Sites/Travis/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
