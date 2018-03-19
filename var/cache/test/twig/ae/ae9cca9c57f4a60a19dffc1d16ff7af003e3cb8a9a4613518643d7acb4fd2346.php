<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cb1a7cc564830439bd3f0d72399e2624cdf3cd1facaba6c48ae6f93c34d0943b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5dfbaeb09ebdf3d2315ba28c4f672f949e4da24eb81bc5089004a67dfd0e1e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dfbaeb09ebdf3d2315ba28c4f672f949e4da24eb81bc5089004a67dfd0e1e20->enter($__internal_5dfbaeb09ebdf3d2315ba28c4f672f949e4da24eb81bc5089004a67dfd0e1e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_62a96e3482fd2c1dd635d01aa0225899c71efbfc010d65bd6839d9e86d315933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a96e3482fd2c1dd635d01aa0225899c71efbfc010d65bd6839d9e86d315933->enter($__internal_62a96e3482fd2c1dd635d01aa0225899c71efbfc010d65bd6839d9e86d315933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dfbaeb09ebdf3d2315ba28c4f672f949e4da24eb81bc5089004a67dfd0e1e20->leave($__internal_5dfbaeb09ebdf3d2315ba28c4f672f949e4da24eb81bc5089004a67dfd0e1e20_prof);

        
        $__internal_62a96e3482fd2c1dd635d01aa0225899c71efbfc010d65bd6839d9e86d315933->leave($__internal_62a96e3482fd2c1dd635d01aa0225899c71efbfc010d65bd6839d9e86d315933_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4bd87f06c49d4d25a9a8aa472118013501a65a7a2260530824b7aae3bc406f0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bd87f06c49d4d25a9a8aa472118013501a65a7a2260530824b7aae3bc406f0b->enter($__internal_4bd87f06c49d4d25a9a8aa472118013501a65a7a2260530824b7aae3bc406f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c611a1848542ea22031adbc9e68039b49e54478cfcea2c6d585cb76c5deca500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c611a1848542ea22031adbc9e68039b49e54478cfcea2c6d585cb76c5deca500->enter($__internal_c611a1848542ea22031adbc9e68039b49e54478cfcea2c6d585cb76c5deca500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c611a1848542ea22031adbc9e68039b49e54478cfcea2c6d585cb76c5deca500->leave($__internal_c611a1848542ea22031adbc9e68039b49e54478cfcea2c6d585cb76c5deca500_prof);

        
        $__internal_4bd87f06c49d4d25a9a8aa472118013501a65a7a2260530824b7aae3bc406f0b->leave($__internal_4bd87f06c49d4d25a9a8aa472118013501a65a7a2260530824b7aae3bc406f0b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_341d5606ffbd6e50a4e06a0158e1846ba0da4bd831721c8bbb41958dcf1dcdf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_341d5606ffbd6e50a4e06a0158e1846ba0da4bd831721c8bbb41958dcf1dcdf2->enter($__internal_341d5606ffbd6e50a4e06a0158e1846ba0da4bd831721c8bbb41958dcf1dcdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_258e2503f43f41b9052777dfa80fd9a113f041b11d366a7f0f60b29e193f2cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_258e2503f43f41b9052777dfa80fd9a113f041b11d366a7f0f60b29e193f2cf3->enter($__internal_258e2503f43f41b9052777dfa80fd9a113f041b11d366a7f0f60b29e193f2cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_258e2503f43f41b9052777dfa80fd9a113f041b11d366a7f0f60b29e193f2cf3->leave($__internal_258e2503f43f41b9052777dfa80fd9a113f041b11d366a7f0f60b29e193f2cf3_prof);

        
        $__internal_341d5606ffbd6e50a4e06a0158e1846ba0da4bd831721c8bbb41958dcf1dcdf2->leave($__internal_341d5606ffbd6e50a4e06a0158e1846ba0da4bd831721c8bbb41958dcf1dcdf2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5aebbd8b2b9b0b26c147d997dfa9bbc94e2f153b764392a1059bb167f3bb2ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5aebbd8b2b9b0b26c147d997dfa9bbc94e2f153b764392a1059bb167f3bb2ee->enter($__internal_b5aebbd8b2b9b0b26c147d997dfa9bbc94e2f153b764392a1059bb167f3bb2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c566fccaebd2ff2e30fd7d74ca9a11dc60f38ab585921e5c898becfc7fd89aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c566fccaebd2ff2e30fd7d74ca9a11dc60f38ab585921e5c898becfc7fd89aa9->enter($__internal_c566fccaebd2ff2e30fd7d74ca9a11dc60f38ab585921e5c898becfc7fd89aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c566fccaebd2ff2e30fd7d74ca9a11dc60f38ab585921e5c898becfc7fd89aa9->leave($__internal_c566fccaebd2ff2e30fd7d74ca9a11dc60f38ab585921e5c898becfc7fd89aa9_prof);

        
        $__internal_b5aebbd8b2b9b0b26c147d997dfa9bbc94e2f153b764392a1059bb167f3bb2ee->leave($__internal_b5aebbd8b2b9b0b26c147d997dfa9bbc94e2f153b764392a1059bb167f3bb2ee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/fdegroote/Sites/Travis/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
