<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* order/index.html.twig */
class __TwigTemplate_8919dbc1303ddf91f01f6cd8e9eca7e4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["order_form"]) || array_key_exists("order_form", $context) ? $context["order_form"] : (function () { throw new RuntimeError('Variable "order_form" does not exist.', 1, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "order/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Cart manager
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"container\">
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["order_form"]) || array_key_exists("order_form", $context) ? $context["order_form"] : (function () { throw new RuntimeError('Variable "order_form" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["order_form"]) || array_key_exists("order_form", $context) ? $context["order_form"] : (function () { throw new RuntimeError('Variable "order_form" does not exist.', 10, $this->source); })()), 'widget');
        echo "
            <input type=\"submit\" value=\"Confirm\" class=\"btn btn-primary\" />
        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["order_form"]) || array_key_exists("order_form", $context) ? $context["order_form"] : (function () { throw new RuntimeError('Variable "order_form" does not exist.', 12, $this->source); })()), 'form_end');
        echo "
\t\t<table class=\"table\">
\t\t\t<tr>
\t\t\t\t<th>STT</th>
\t\t\t\t<th>Product</th>
\t\t\t\t<th>Price</th>
\t\t\t\t<th>Quantity</th>
\t\t\t\t<th>Total</th>
\t\t\t</tr>
\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart_manager"]) || array_key_exists("cart_manager", $context) ? $context["cart_manager"] : (function () { throw new RuntimeError('Variable "cart_manager" does not exist.', 21, $this->source); })()), "items", [], "any", false, false, false, 21));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "\t\t\t\t<tr>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "html", null, true);
            echo "
                        -
                        ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 27), "price", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 29), "html", null, true);
            echo "
                    </td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t<tr>
\t\t\t\t<td colspan='4' class='text-center'>SUM</td>
\t\t\t\t<td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cart_manager"]) || array_key_exists("cart_manager", $context) ? $context["cart_manager"] : (function () { throw new RuntimeError('Variable "cart_manager" does not exist.', 36, $this->source); })()), "amount", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t</table>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        if ( !twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 42, $this->source); })()))) {
            // line 43
            echo "    <script> alert(\"";
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "\");</script>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 43,  206 => 42,  196 => 41,  181 => 36,  177 => 34,  160 => 31,  155 => 29,  150 => 27,  146 => 26,  141 => 24,  137 => 23,  134 => 22,  117 => 21,  105 => 12,  100 => 10,  96 => 9,  93 => 8,  83 => 7,  63 => 4,  52 => 2,  50 => 1,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme order_form 'bootstrap_4_layout.html.twig' %}
{% extends 'base.html.twig' %}

{% block title %}Cart manager
{% endblock %}

{% block body %}
\t<div class=\"container\">
        {{form_start(order_form)}}
            {{form_widget(order_form)}}
            <input type=\"submit\" value=\"Confirm\" class=\"btn btn-primary\" />
        {{form_end(order_form)}}
\t\t<table class=\"table\">
\t\t\t<tr>
\t\t\t\t<th>STT</th>
\t\t\t\t<th>Product</th>
\t\t\t\t<th>Price</th>
\t\t\t\t<th>Quantity</th>
\t\t\t\t<th>Total</th>
\t\t\t</tr>
\t\t\t{% for item in cart_manager.items %}
\t\t\t\t<tr>
                    <td>{{loop.index}}</td>
                    <td>{{item.product.id}}
                        -
                        {{item.product.name}}</td>
                    <td>{{item.product.price}}</td>
                    <td>
                        {{item.quantity}}
                    </td>
                    <td>{{item.amount}}</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t<tr>
\t\t\t\t<td colspan='4' class='text-center'>SUM</td>
\t\t\t\t<td>{{cart_manager.amount}}</td>
\t\t\t</tr>
\t\t</table>
\t</div>
{% endblock %}
{% block javascripts %}
{% if message is not empty %}
    <script> alert(\"{{message}}\");</script>
{% endif %}
{% endblock %}
", "order/index.html.twig", "D:\\Project\\php\\btec_demo\\templates\\order\\index.html.twig");
    }
}
