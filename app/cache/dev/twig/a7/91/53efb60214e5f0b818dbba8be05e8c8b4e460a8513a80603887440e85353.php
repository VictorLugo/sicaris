<?php

/* SonataAdminBundle:Button:create_button.html.twig */
class __TwigTemplate_a79153efb60214e5f0b818dbba8be05e8c8b4e460a8513a80603887440e85353 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty($this->getAttribute($this->getContext($context, "admin"), "subClasses"))) {
                // line 14
                echo "        <a class=\"btn sonata-action-element\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
            <i class=\"icon-plus\"></i>
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 18
                echo "        <span class=\"btn-group sonata-action-element\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"icon-plus\"></i>
                ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                ";
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($this->getContext($context, "admin"), "subclasses")));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 26
                    echo "                    <li>
                        <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create", 1 => array("subclass" => $this->getContext($context, "subclass"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "subclass"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "</a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "            </ul>
        </span>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 30,  54 => 26,  27 => 14,  22 => 12,  690 => 411,  681 => 405,  676 => 402,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  613 => 366,  605 => 361,  595 => 354,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  557 => 330,  550 => 326,  542 => 321,  538 => 319,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  504 => 302,  492 => 295,  486 => 292,  481 => 290,  474 => 285,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  422 => 250,  420 => 249,  415 => 247,  407 => 242,  396 => 234,  383 => 224,  366 => 210,  361 => 208,  346 => 196,  331 => 187,  326 => 185,  321 => 183,  291 => 169,  267 => 156,  257 => 149,  242 => 140,  238 => 139,  232 => 136,  213 => 126,  197 => 119,  186 => 111,  179 => 107,  171 => 102,  156 => 93,  135 => 81,  127 => 76,  92 => 61,  56 => 40,  31 => 22,  29 => 21,  26 => 20,  23 => 18,  19 => 11,  816 => 268,  813 => 267,  808 => 262,  801 => 258,  795 => 255,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 247,  769 => 245,  767 => 244,  764 => 243,  758 => 241,  756 => 240,  753 => 239,  747 => 237,  745 => 236,  742 => 235,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 274,  723 => 267,  718 => 264,  716 => 234,  712 => 233,  709 => 232,  703 => 229,  700 => 228,  698 => 227,  693 => 224,  687 => 221,  684 => 220,  682 => 219,  679 => 218,  674 => 397,  668 => 213,  665 => 212,  662 => 211,  648 => 210,  642 => 208,  637 => 205,  631 => 203,  623 => 373,  621 => 200,  618 => 199,  615 => 198,  597 => 197,  594 => 196,  592 => 195,  588 => 350,  586 => 192,  582 => 190,  579 => 187,  576 => 186,  571 => 178,  567 => 337,  558 => 169,  552 => 167,  549 => 166,  546 => 165,  540 => 162,  536 => 161,  533 => 160,  527 => 159,  522 => 156,  516 => 155,  508 => 153,  505 => 152,  501 => 151,  496 => 149,  493 => 148,  491 => 147,  488 => 146,  485 => 145,  478 => 144,  475 => 143,  472 => 142,  469 => 141,  463 => 140,  460 => 139,  457 => 138,  454 => 136,  447 => 135,  444 => 134,  438 => 133,  435 => 258,  430 => 131,  427 => 130,  424 => 254,  418 => 128,  412 => 174,  410 => 165,  406 => 163,  403 => 162,  400 => 129,  398 => 128,  394 => 126,  391 => 125,  386 => 123,  368 => 117,  365 => 116,  348 => 80,  338 => 78,  335 => 188,  329 => 75,  317 => 70,  312 => 177,  304 => 174,  298 => 173,  294 => 61,  288 => 60,  280 => 59,  276 => 57,  273 => 56,  262 => 51,  243 => 38,  241 => 37,  231 => 33,  227 => 134,  222 => 30,  219 => 129,  216 => 28,  210 => 22,  203 => 122,  201 => 186,  194 => 181,  190 => 179,  188 => 178,  185 => 177,  183 => 125,  180 => 124,  178 => 123,  175 => 122,  166 => 100,  164 => 113,  152 => 92,  148 => 101,  144 => 99,  141 => 98,  138 => 97,  121 => 75,  117 => 93,  114 => 71,  91 => 89,  72 => 56,  67 => 28,  58 => 22,  53 => 20,  51 => 38,  45 => 16,  39 => 13,  37 => 12,  35 => 11,  382 => 102,  379 => 119,  373 => 118,  367 => 97,  364 => 96,  358 => 94,  355 => 101,  352 => 92,  344 => 90,  342 => 79,  339 => 88,  332 => 86,  327 => 74,  325 => 84,  322 => 72,  316 => 81,  314 => 80,  308 => 67,  305 => 77,  299 => 74,  295 => 72,  292 => 71,  289 => 70,  283 => 166,  277 => 66,  274 => 65,  272 => 158,  269 => 63,  266 => 52,  261 => 57,  258 => 49,  253 => 148,  236 => 35,  230 => 48,  224 => 46,  221 => 45,  217 => 44,  214 => 43,  208 => 124,  206 => 40,  193 => 37,  176 => 36,  173 => 116,  170 => 34,  165 => 31,  147 => 90,  140 => 25,  133 => 24,  116 => 23,  112 => 21,  109 => 69,  104 => 67,  100 => 104,  98 => 62,  93 => 60,  90 => 59,  85 => 87,  78 => 53,  75 => 19,  64 => 14,  61 => 13,  57 => 27,  50 => 25,  47 => 17,  41 => 14,  38 => 18,  36 => 4,  33 => 16,  30 => 15,  24 => 13,  97 => 63,  94 => 90,  88 => 60,  83 => 86,  80 => 33,  77 => 27,  74 => 52,  71 => 25,  69 => 50,  66 => 15,  63 => 22,  55 => 21,  49 => 18,  46 => 15,  43 => 21,  12 => 34,);
    }
}
