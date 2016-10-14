<?php

/* pagination.html.twig */
class __TwigTemplate_63353a46655e5a0ca6c96a1beb653b8a972af9c6fa449d1ee556f1e9d19d712c extends Twig_Template
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
        // line 1
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : null)) > 1)) {
            // line 2
            if (((isset($context["base_url"]) ? $context["base_url"] : null) == "")) {
                // line 3
                echo "    ";
                $context["base_url"] = "/";
            }
            // line 5
            echo "<div class=\"blog-pager\" id=\"blog-pager\">
    <div class=\"pagenavi\">
    ";
            // line 7
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasPrev", array())) {
                // line 8
                echo "        ";
                $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array())) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "prevUrl", array())), array("//" => "/"));
                // line 9
                echo "        <a rel=\"prev\" href=\"";
                echo (isset($context["url"]) ? $context["url"] : null);
                echo "\">&laquo;</a>
    ";
            }
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 12
                echo "        ";
                if ($this->getAttribute($context["paginate"], "isCurrent", array())) {
                    // line 13
                    echo "            <span class=\"current\">";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</span>
        ";
                } elseif ($this->getAttribute(                // line 14
$context["paginate"], "isInDelta", array())) {
                    // line 15
                    echo "            ";
                    $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array())) . $this->getAttribute($context["paginate"], "url", array())), array("//" => "/"));
                    // line 16
                    echo "            <a href=\"";
                    echo (isset($context["url"]) ? $context["url"] : null);
                    echo "\">";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</a>
        ";
                }
                // line 18
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    ";
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasNext", array())) {
                // line 20
                echo "        ";
                $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array())) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nextUrl", array())), array("//" => "/"));
                // line 21
                echo "        <a rel=\"next\" href=\"";
                echo (isset($context["url"]) ? $context["url"] : null);
                echo "\">&raquo;</a>
    ";
            }
            // line 23
            echo "    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  80 => 21,  77 => 20,  74 => 19,  68 => 18,  60 => 16,  57 => 15,  55 => 14,  50 => 13,  47 => 12,  42 => 11,  36 => 9,  33 => 8,  31 => 7,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if pagination|length > 1 %}*/
/* {% if base_url == '' %}*/
/*     {% set base_url = '/' %}*/
/* {% endif %}*/
/* <div class="blog-pager" id="blog-pager">*/
/*     <div class="pagenavi">*/
/*     {% if pagination.hasPrev %}*/
/*         {% set url = (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}*/
/*         <a rel="prev" href="{{ url }}">&laquo;</a>*/
/*     {% endif %}*/
/*     {% for paginate in pagination %}*/
/*         {% if paginate.isCurrent %}*/
/*             <span class="current">{{ paginate.number }}</span>*/
/*         {% elseif paginate.isInDelta %}*/
/*             {% set url = (base_url ~ pagination.params ~ paginate.url)|replace({'//':'/'}) %}*/
/*             <a href="{{ url }}">{{ paginate.number }}</a>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/*     {% if pagination.hasNext %}*/
/*         {% set url = (base_url ~ pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}*/
/*         <a rel="next" href="{{ url }}">&raquo;</a>*/
/*     {% endif %}*/
/*     </div>*/
/* </div>*/
/* {% endif %}*/
/* */
