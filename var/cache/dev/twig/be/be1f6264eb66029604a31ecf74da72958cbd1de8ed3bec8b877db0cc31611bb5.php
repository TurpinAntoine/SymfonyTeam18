<?php

/* home/mail.html.twig */
class __TwigTemplate_ee16a2aa37f4bdce9823c1d9de831113531a54a7a2b9c42e8c0865b1d6ace1f9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/mail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/mail.html.twig"));

        // line 1
        echo "Hello
If you receive this email, it's because I didn't log back in times. So as my last will, I want you to have my confessions :




";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["confession"]) || array_key_exists("confession", $context) ? $context["confession"] : (function () { throw new Twig_Error_Runtime('Variable "confession" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "title", array()), "html", null, true);
            echo "
    ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "text", array()), "html", null, true);
            echo "


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
Sincerely, ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["confession"]) || array_key_exists("confession", $context) ? $context["confession"] : (function () { throw new Twig_Error_Runtime('Variable "confession" does not exist.', 14, $this->source); })()), 0, array()), "belongsto", array()), "username", array()), "html", null, true);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  56 => 13,  46 => 9,  41 => 8,  37 => 7,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello
If you receive this email, it's because I didn't log back in times. So as my last will, I want you to have my confessions :




{% for c in confession %}
    {{ c.title }}
    {{ c.text }}


{% endfor %}

Sincerely, {{ confession.0.belongsto.username }}
", "home/mail.html.twig", "/Users/antoineturpin/PhpstormProjects/projet-symfo/SymfonyTeam18/TimeCapsule/templates/home/mail.html.twig");
    }
}
