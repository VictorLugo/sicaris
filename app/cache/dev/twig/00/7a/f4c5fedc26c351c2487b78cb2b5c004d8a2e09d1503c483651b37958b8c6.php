<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_007af4c5fedc26c351c2487b78cb2b5c004d8a2e09d1503c483651b37958b8c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin"), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method"), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 16,  31 => 15,  29 => 15,  26 => 14,  22 => 12,  19 => 11,  594 => 184,  583 => 182,  579 => 181,  571 => 178,  566 => 176,  560 => 174,  558 => 173,  552 => 169,  543 => 166,  539 => 165,  533 => 164,  530 => 163,  526 => 162,  521 => 160,  514 => 158,  509 => 156,  502 => 155,  499 => 154,  496 => 153,  491 => 150,  487 => 137,  484 => 136,  480 => 135,  477 => 134,  474 => 133,  470 => 126,  466 => 125,  463 => 124,  458 => 107,  447 => 105,  443 => 104,  436 => 100,  432 => 99,  427 => 98,  424 => 97,  412 => 86,  409 => 85,  405 => 109,  403 => 97,  399 => 95,  397 => 85,  394 => 84,  391 => 83,  386 => 138,  384 => 133,  378 => 129,  374 => 127,  372 => 124,  369 => 123,  364 => 120,  350 => 119,  341 => 118,  324 => 117,  319 => 116,  317 => 115,  313 => 113,  308 => 111,  305 => 110,  302 => 83,  299 => 82,  297 => 81,  292 => 79,  289 => 78,  286 => 77,  281 => 74,  266 => 72,  263 => 71,  260 => 70,  243 => 69,  240 => 68,  237 => 67,  231 => 63,  225 => 62,  222 => 61,  218 => 59,  214 => 58,  209 => 57,  203 => 56,  191 => 55,  189 => 54,  186 => 53,  183 => 52,  180 => 51,  177 => 50,  174 => 49,  171 => 48,  168 => 47,  165 => 46,  162 => 45,  159 => 44,  157 => 43,  153 => 41,  147 => 37,  144 => 36,  140 => 35,  136 => 33,  133 => 32,  128 => 23,  124 => 150,  121 => 149,  115 => 146,  112 => 145,  109 => 144,  105 => 142,  103 => 141,  100 => 140,  98 => 77,  95 => 76,  93 => 67,  90 => 66,  88 => 32,  85 => 31,  80 => 29,  75 => 28,  72 => 27,  69 => 26,  67 => 25,  64 => 24,  61 => 23,  58 => 22,  52 => 20,  47 => 17,  45 => 16,  42 => 15,  39 => 14,);
    }
}
