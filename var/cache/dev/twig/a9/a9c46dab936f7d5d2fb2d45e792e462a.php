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

/* san_pham/list.html.twig */
class __TwigTemplate_1059d220ab38234d5be4d4805c25bb0e extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "san_pham/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "san_pham/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "san_pham/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Note form";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_san_pham");
        echo "\" class='btn btn-primary'>Add</a>
        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class='btn btn-danger'>Logout</a>
        <table class=\"table\">
            <thead>
                <tr>
                    <td>STT</td>
                    <td>Mã SP</td>
                    <td>Hình ảnh</td>
                    <td>Tên SP</td>
                    <td>Giá</td>
                    <td>Hành động</td>
                </tr>
            </thead>
            <tbody>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["sp"]) {
            // line 22
            echo "                    <tr>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sp"], "getId", [], "method", false, false, false, 24), "html", null, true);
            echo "</td>
                        <td><img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/sanpham/" . twig_get_attribute($this->env, $this->source, $context["sp"], "getPhoto", [], "method", false, false, false, 25))), "html", null, true);
            echo "\" height=\"150\" /></td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sp"], "getName", [], "method", false, false, false, 26), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sp"], "getPrice", [], "method", false, false, false, 27), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_san_pham", ["id" => twig_get_attribute($this->env, $this->source, $context["sp"], "getId", [], "method", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Edit</a>
                            <a href=\"javascript:deletesp('";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_san_pham", ["id" => twig_get_attribute($this->env, $this->source, $context["sp"], "getId", [], "method", false, false, false, 30)]), "html", null, true);
            echo "')\" class=\"btn btn-danger\">Delete</a>
                            <form>
                            <button type=\"submit\" formmethod=\"post\" formaction=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["product_id" => twig_get_attribute($this->env, $this->source, $context["sp"], "getId", [], "method", false, false, false, 32)]), "html", null, true);
            echo "\">Add to cart</button>
                            </form>
                        </td>
                    </tr>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </tbody>
        </table>
    </div>
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
        echo "    <script>
        function deletesp(url){
            if(confirm(\"Do you delete product?\")){
                window.location.href = url;
            }
        }
    </script>

    ";
        // line 50
        if ( !twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 50, $this->source); })()))) {
            // line 51
            echo "        <script>
            alert(\"";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "\");
            window.location.href = \"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ds_san_pham");
            echo "\";
        </script>
    ";
        }
        // line 56
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "san_pham/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 56,  223 => 53,  219 => 52,  216 => 51,  214 => 50,  204 => 42,  194 => 41,  181 => 37,  162 => 32,  157 => 30,  153 => 29,  148 => 27,  144 => 26,  140 => 25,  136 => 24,  132 => 23,  129 => 22,  112 => 21,  96 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Note form{% endblock %}

{% block body %}
    <div class=\"container\">
        <a href=\"{{path('app_san_pham')}}\" class='btn btn-primary'>Add</a>
        <a href=\"{{path('app_logout')}}\" class='btn btn-danger'>Logout</a>
        <table class=\"table\">
            <thead>
                <tr>
                    <td>STT</td>
                    <td>Mã SP</td>
                    <td>Hình ảnh</td>
                    <td>Tên SP</td>
                    <td>Giá</td>
                    <td>Hành động</td>
                </tr>
            </thead>
            <tbody>
                {% for sp in data %}
                    <tr>
                        <td>{{loop.index}}</td>
                        <td>{{sp.getId()}}</td>
                        <td><img src=\"{{asset('uploads/sanpham/' ~ sp.getPhoto())}}\" height=\"150\" /></td>
                        <td>{{sp.getName()}}</td>
                        <td>{{sp.getPrice()}}</td>
                        <td>
                            <a href=\"{{path('app_edit_san_pham',{'id':sp.getId()})}}\" class=\"btn btn-warning\">Edit</a>
                            <a href=\"javascript:deletesp('{{path('app_delete_san_pham',{'id':sp.getId()})}}')\" class=\"btn btn-danger\">Delete</a>
                            <form>
                            <button type=\"submit\" formmethod=\"post\" formaction=\"{{path('app_cart_add',{'product_id':sp.getId()})}}\">Add to cart</button>
                            </form>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
{% block javascripts %}
    <script>
        function deletesp(url){
            if(confirm(\"Do you delete product?\")){
                window.location.href = url;
            }
        }
    </script>

    {% if message is not empty %}
        <script>
            alert(\"{{message}}\");
            window.location.href = \"{{path('app_ds_san_pham')}}\";
        </script>
    {% endif %}

{% endblock %}", "san_pham/list.html.twig", "D:\\Project\\php\\btec_demo\\templates\\san_pham\\list.html.twig");
    }
}
