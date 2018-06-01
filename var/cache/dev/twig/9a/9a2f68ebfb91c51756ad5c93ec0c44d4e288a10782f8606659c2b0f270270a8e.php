<?php

/* home/home.html.twig */
class __TwigTemplate_793846af1ecf0df852b0520320f7f63a13c697bacec22b9b0c1340c475b165f8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hello !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
        <div class=\"top-action-bar\">
            <h1 class=\"oswald-semi-bold\">TODOFY</h1>
            ";
        // line 9
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 10
            echo "                <h2 class=\"roboto-regular\">Hello ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->source); })()), "username", array()), "html", null, true);
            echo "</h2>
                <button class=\"login-confession\"><a href=\"logout\">Log Out</a></button>
            ";
        }
        // line 13
        echo "        </div>


            <div>
                <div class=\"confession-actions\"><button class=\"add-confession\"><a href=\"createConfession\">Add confession</a></button</div>
            </div>


    <!-- Confession -->
        <div class=\"confession-section\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["confession"]) || array_key_exists("confession", $context) ? $context["confession"] : (function () { throw new Twig_Error_Runtime('Variable "confession" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["conf"]) {
            // line 24
            echo "                <div class=\"card-confession\">
                    <div  class=\"card-title\"><span class=\"oswald-medium\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "title", array()), "html", null, true);
            echo "</span></div>
                    <div class=\"card-text\"><p class=\"roboto-light\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "text", array()), "html", null, true);
            echo "</p></div>
                    <div class=\"card-delete\"><span id=\"myBtn";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo "\"><a href=\"\">effacer</a></span></div>
                </div>


            <!-- The Modal -->
            <div id=\"myModal";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo "\" class=\"modal\">

                <!-- Modal content -->
                <div class=\"modal-content\">
                    <div class=\"\"><span id=\"close";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo "\" class=\"close\">&times;</span></div>
                    <div class=\"modal-text\"><p>Etes vous sur de vouloir supprimer cette confession ? </p></div>
                    <div class=\"modal-buttons\">
                        <div ><button class=\"modal-yes\" id=\"yes";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo "\"><a href=\"delete/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo "\">Oui</a></button></div>
                        <div ><button class=\"modal-no\" id=\"no";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo "\">Non</button></div>
                    </div>
                </div>

            </div>



<script>
    // Get the modal
    let modal";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo " = document.getElementById('myModal";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo "');

    // Get the button that opens the modal
    let btn";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo " = document.getElementById(\"myBtn";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo "\");

    // Get the <span> element that closes the modal
    let span";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo " = document.getElementById(\"close";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo "\");

    //Get the no button
    let no";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo " = document.getElementById(\"no";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo "\");

    //Get the yes button
    let yes";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo " = document.getElementById(\"yes";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo "\");

    // When the user clicks on the button, open the modal
    btn";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo ".onclick = function(e) {
        e.preventDefault();
        modal";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo ".style.display = \"block\";
    };

    // When the user clicks on <span> (x), close the modal
    span";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo ".onclick = function() {
        modal";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo ".style.display = \"none\";
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo ") {
            modal";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo ".style.display = \"none\";
            modal";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo ".style.backgroundColor = \"blue\";
        }
    };

    //When the user clicks on no, close the modal
    no";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo ".onclick = function() {
        modal";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conf"], "id", array()), "html", null, true);
            echo ".style.display = \"none\";
    };
    </script>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conf'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "        </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 90,  239 => 85,  235 => 84,  227 => 79,  223 => 78,  219 => 77,  211 => 72,  207 => 71,  200 => 67,  195 => 65,  187 => 62,  179 => 59,  171 => 56,  163 => 53,  155 => 50,  142 => 40,  134 => 39,  128 => 36,  121 => 32,  113 => 27,  109 => 26,  105 => 25,  102 => 24,  98 => 23,  86 => 13,  79 => 10,  77 => 9,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Hello !{% endblock %}

{% block body %}

        <div class=\"top-action-bar\">
            <h1 class=\"oswald-semi-bold\">TODOFY</h1>
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <h2 class=\"roboto-regular\">Hello {{ user.username }}</h2>
                <button class=\"login-confession\"><a href=\"logout\">Log Out</a></button>
            {% endif %}
        </div>


            <div>
                <div class=\"confession-actions\"><button class=\"add-confession\"><a href=\"createConfession\">Add confession</a></button</div>
            </div>


    <!-- Confession -->
        <div class=\"confession-section\">
            {% for conf in confession  %}
                <div class=\"card-confession\">
                    <div  class=\"card-title\"><span class=\"oswald-medium\">{{ conf.title }}</span></div>
                    <div class=\"card-text\"><p class=\"roboto-light\">{{ conf.text }}</p></div>
                    <div class=\"card-delete\"><span id=\"myBtn{{ conf.id }}\"><a href=\"\">effacer</a></span></div>
                </div>


            <!-- The Modal -->
            <div id=\"myModal{{ conf.id }}\" class=\"modal\">

                <!-- Modal content -->
                <div class=\"modal-content\">
                    <div class=\"\"><span id=\"close{{ conf.id }}\" class=\"close\">&times;</span></div>
                    <div class=\"modal-text\"><p>Etes vous sur de vouloir supprimer cette confession ? </p></div>
                    <div class=\"modal-buttons\">
                        <div ><button class=\"modal-yes\" id=\"yes{{ conf.id }}\" data-id=\"{{ conf.id }}\"><a href=\"delete/{{ conf.id }}\">Oui</a></button></div>
                        <div ><button class=\"modal-no\" id=\"no{{ conf.id }}\">Non</button></div>
                    </div>
                </div>

            </div>



<script>
    // Get the modal
    let modal{{ conf.id }} = document.getElementById('myModal{{ conf.id }}');

    // Get the button that opens the modal
    let btn{{ conf.id }} = document.getElementById(\"myBtn{{ conf.id }}\");

    // Get the <span> element that closes the modal
    let span{{ conf.id }} = document.getElementById(\"close{{ conf.id }}\");

    //Get the no button
    let no{{ conf.id }} = document.getElementById(\"no{{ conf.id }}\");

    //Get the yes button
    let yes{{ conf.id }} = document.getElementById(\"yes{{ conf.id }}\");

    // When the user clicks on the button, open the modal
    btn{{ conf.id }}.onclick = function(e) {
        e.preventDefault();
        modal{{ conf.id }}.style.display = \"block\";
    };

    // When the user clicks on <span> (x), close the modal
    span{{ conf.id }}.onclick = function() {
        modal{{ conf.id }}.style.display = \"none\";
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal{{ conf.id }}) {
            modal{{ conf.id }}.style.display = \"none\";
            modal{{ conf.id }}.style.backgroundColor = \"blue\";
        }
    };

    //When the user clicks on no, close the modal
    no{{ conf.id }}.onclick = function() {
        modal{{ conf.id }}.style.display = \"none\";
    };
    </script>

    {% endfor %}
        </div>


{% endblock %}", "home/home.html.twig", "/Users/paulperrier/Desktop/HETIC/H3/T3/SYMFONY/GIT/SymfonyTeam18/templates/home/home.html.twig");
    }
}
