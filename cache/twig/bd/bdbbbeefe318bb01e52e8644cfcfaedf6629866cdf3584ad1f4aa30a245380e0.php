<?php

/* partials/footer.html.twig */
class __TwigTemplate_b34114f2368337aa31489ab090e60282e918c86e53398f71c9f8a4b25208f8d3 extends Twig_Template
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
        echo "<div class=\"site-footer\" id=\"colophon\" role=\"contentinfo\">
  <footer class=\"footer\" id=\"footer\">
    <div class=\"container1 clearfix\">
      <div class=\"go-top\">
        <a href=\"#\"><i class=\"fa fa-angle-up\"></i></a>
      </div>
      <p></p>
      <div id=\"mycontent\">
        ";
        // line 9
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "copyright", array())) {
            // line 10
            echo "        ";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "copyright", array());
            echo "
        ";
        }
        // line 12
        echo "      </div>
      <p></p>
    </div>
  </footer>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,  31 => 10,  29 => 9,  19 => 1,);
    }
}
/* <div class="site-footer" id="colophon" role="contentinfo">*/
/*   <footer class="footer" id="footer">*/
/*     <div class="container1 clearfix">*/
/*       <div class="go-top">*/
/*         <a href="#"><i class="fa fa-angle-up"></i></a>*/
/*       </div>*/
/*       <p></p>*/
/*       <div id="mycontent">*/
/*         {% if site.copyright %}*/
/*         {{ site.copyright }}*/
/*         {% endif %}*/
/*       </div>*/
/*       <p></p>*/
/*     </div>*/
/*   </footer>*/
/* </div>*/
/* */
