<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_234282ca299180e1fd2ddab9f026f994d65c2ae8c662b23d1d6fcbb7f82a0f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array(0 => $this->getContext($context, "action")), "method"), array("currentClass" => "active"), "list");
    }

    // line 25
    public function block_show($context, array $blocks = array())
    {
        // line 26
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "showgroups"));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 28
            echo "            <table class=\"table table-bordered\">
                ";
            // line 29
            if ($this->getContext($context, "name")) {
                // line 30
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array(0 => $this->getContext($context, "name")), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 36
            echo "
                ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "view_group"), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 38
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 39
                if ($this->getAttribute($this->getContext($context, "elements", true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                    // line 40
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute($this->getContext($context, "elements"), $this->getContext($context, "field_name"), array(), "array"), $this->getContext($context, "object"));
                    echo "
                        ";
                }
                // line 42
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  12 => 34,  583 => 182,  560 => 174,  543 => 166,  521 => 160,  499 => 154,  487 => 137,  484 => 136,  477 => 134,  470 => 126,  458 => 107,  432 => 99,  405 => 109,  399 => 95,  397 => 85,  372 => 124,  350 => 119,  313 => 113,  302 => 83,  218 => 59,  382 => 102,  367 => 97,  295 => 72,  206 => 40,  816 => 268,  813 => 267,  808 => 262,  801 => 258,  795 => 255,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 247,  769 => 245,  767 => 244,  764 => 243,  758 => 241,  756 => 240,  753 => 239,  747 => 237,  745 => 236,  742 => 235,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 274,  723 => 267,  718 => 264,  716 => 234,  712 => 233,  709 => 232,  703 => 229,  700 => 228,  698 => 227,  693 => 224,  687 => 221,  684 => 220,  682 => 219,  679 => 218,  668 => 213,  665 => 212,  662 => 211,  648 => 210,  642 => 208,  637 => 205,  631 => 203,  597 => 197,  594 => 184,  586 => 192,  582 => 190,  579 => 181,  576 => 186,  571 => 178,  552 => 169,  549 => 166,  546 => 165,  540 => 162,  527 => 159,  522 => 156,  493 => 148,  491 => 150,  488 => 146,  485 => 145,  472 => 142,  463 => 124,  460 => 139,  447 => 105,  438 => 133,  418 => 128,  412 => 86,  410 => 165,  391 => 83,  386 => 138,  348 => 80,  308 => 111,  276 => 57,  266 => 72,  231 => 63,  190 => 179,  188 => 178,  343 => 132,  338 => 78,  323 => 125,  271 => 108,  262 => 51,  251 => 101,  211 => 81,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 199,  602 => 185,  592 => 195,  585 => 177,  568 => 175,  547 => 173,  539 => 165,  536 => 161,  533 => 164,  530 => 163,  528 => 167,  525 => 166,  516 => 155,  512 => 159,  507 => 157,  498 => 134,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  446 => 139,  428 => 136,  425 => 135,  414 => 127,  400 => 129,  388 => 117,  377 => 115,  371 => 113,  358 => 94,  339 => 88,  329 => 75,  324 => 117,  319 => 116,  307 => 87,  282 => 79,  223 => 58,  178 => 123,  118 => 49,  306 => 141,  303 => 140,  300 => 139,  292 => 79,  248 => 100,  236 => 49,  216 => 28,  70 => 29,  77 => 27,  181 => 80,  148 => 101,  690 => 411,  681 => 203,  676 => 402,  674 => 215,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 201,  613 => 188,  605 => 186,  595 => 354,  588 => 193,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 173,  557 => 330,  550 => 326,  538 => 319,  531 => 312,  526 => 162,  514 => 158,  509 => 156,  504 => 302,  492 => 132,  486 => 130,  481 => 290,  456 => 143,  452 => 272,  445 => 267,  443 => 104,  429 => 255,  424 => 97,  422 => 250,  420 => 249,  415 => 247,  383 => 224,  361 => 107,  346 => 196,  331 => 187,  326 => 93,  304 => 66,  291 => 82,  272 => 64,  257 => 103,  242 => 113,  152 => 63,  114 => 46,  97 => 37,  58 => 22,  321 => 91,  318 => 145,  316 => 81,  299 => 82,  288 => 60,  284 => 106,  281 => 74,  275 => 103,  253 => 53,  250 => 67,  232 => 136,  222 => 61,  210 => 22,  191 => 55,  185 => 177,  153 => 41,  113 => 46,  100 => 42,  406 => 163,  403 => 97,  401 => 156,  394 => 84,  390 => 150,  369 => 123,  366 => 210,  364 => 120,  352 => 92,  349 => 103,  342 => 89,  336 => 99,  332 => 86,  328 => 124,  315 => 123,  296 => 109,  290 => 106,  280 => 59,  277 => 66,  274 => 65,  267 => 156,  261 => 57,  256 => 121,  244 => 85,  239 => 97,  234 => 80,  228 => 88,  225 => 62,  215 => 78,  198 => 69,  195 => 68,  184 => 47,  180 => 51,  174 => 49,  155 => 53,  127 => 54,  124 => 49,  81 => 36,  194 => 181,  186 => 53,  170 => 34,  165 => 46,  160 => 59,  150 => 58,  129 => 56,  65 => 29,  671 => 293,  621 => 200,  615 => 198,  610 => 239,  608 => 187,  600 => 232,  596 => 181,  590 => 178,  566 => 176,  561 => 224,  558 => 173,  555 => 222,  551 => 174,  548 => 220,  545 => 219,  542 => 172,  523 => 215,  518 => 307,  515 => 212,  511 => 211,  508 => 153,  505 => 152,  502 => 155,  483 => 129,  478 => 144,  475 => 143,  471 => 201,  454 => 136,  451 => 141,  449 => 194,  439 => 260,  436 => 100,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 234,  389 => 171,  378 => 129,  376 => 161,  373 => 99,  359 => 138,  351 => 135,  344 => 90,  340 => 149,  327 => 85,  325 => 84,  317 => 115,  311 => 89,  301 => 117,  297 => 81,  293 => 113,  289 => 78,  286 => 77,  279 => 104,  265 => 106,  263 => 71,  260 => 70,  255 => 105,  237 => 67,  233 => 62,  226 => 95,  213 => 82,  202 => 77,  200 => 55,  197 => 74,  192 => 88,  175 => 122,  146 => 34,  134 => 56,  126 => 55,  53 => 24,  161 => 71,  90 => 38,  84 => 36,  520 => 44,  513 => 403,  510 => 158,  506 => 400,  501 => 151,  496 => 153,  479 => 383,  468 => 200,  466 => 125,  347 => 134,  335 => 77,  333 => 257,  137 => 59,  110 => 45,  104 => 42,  76 => 34,  20 => 11,  34 => 16,  23 => 12,  480 => 135,  474 => 133,  469 => 141,  461 => 155,  457 => 138,  453 => 142,  444 => 134,  440 => 148,  437 => 147,  435 => 132,  430 => 131,  427 => 98,  423 => 128,  413 => 134,  409 => 85,  407 => 242,  402 => 130,  398 => 128,  393 => 172,  387 => 122,  384 => 133,  381 => 120,  379 => 101,  374 => 127,  368 => 117,  365 => 116,  362 => 110,  360 => 109,  355 => 93,  341 => 118,  337 => 103,  322 => 83,  314 => 80,  312 => 68,  309 => 120,  305 => 110,  298 => 63,  294 => 61,  285 => 111,  283 => 68,  278 => 86,  268 => 107,  264 => 84,  258 => 56,  252 => 88,  247 => 66,  241 => 37,  229 => 73,  220 => 80,  214 => 58,  177 => 50,  169 => 66,  140 => 53,  132 => 57,  128 => 23,  107 => 44,  61 => 27,  273 => 56,  269 => 63,  254 => 102,  243 => 69,  240 => 68,  238 => 64,  235 => 74,  230 => 48,  227 => 32,  224 => 46,  221 => 45,  219 => 29,  217 => 44,  208 => 41,  204 => 78,  179 => 107,  159 => 44,  143 => 59,  135 => 81,  119 => 39,  102 => 39,  71 => 30,  67 => 28,  63 => 27,  59 => 26,  38 => 35,  94 => 40,  89 => 38,  85 => 37,  75 => 32,  68 => 30,  56 => 25,  26 => 14,  87 => 38,  31 => 15,  201 => 186,  196 => 90,  183 => 52,  171 => 48,  166 => 114,  163 => 60,  158 => 62,  156 => 93,  151 => 57,  142 => 61,  138 => 97,  136 => 33,  121 => 51,  117 => 49,  105 => 45,  91 => 39,  62 => 27,  49 => 16,  25 => 13,  21 => 12,  28 => 14,  24 => 13,  19 => 11,  93 => 40,  88 => 37,  78 => 36,  46 => 15,  44 => 21,  27 => 14,  79 => 34,  72 => 30,  69 => 29,  47 => 22,  40 => 19,  37 => 20,  22 => 12,  246 => 99,  157 => 58,  145 => 56,  139 => 59,  131 => 55,  123 => 52,  120 => 48,  115 => 47,  111 => 41,  108 => 42,  101 => 42,  98 => 42,  96 => 40,  83 => 29,  74 => 26,  66 => 28,  55 => 18,  52 => 20,  50 => 23,  43 => 20,  41 => 23,  35 => 21,  32 => 14,  29 => 15,  209 => 57,  203 => 56,  199 => 67,  193 => 37,  189 => 54,  187 => 87,  182 => 69,  176 => 36,  173 => 35,  168 => 47,  164 => 113,  162 => 45,  154 => 67,  149 => 62,  147 => 37,  144 => 36,  141 => 98,  133 => 51,  130 => 57,  125 => 40,  122 => 44,  116 => 47,  112 => 145,  109 => 45,  106 => 35,  103 => 44,  99 => 41,  95 => 40,  92 => 39,  86 => 17,  82 => 36,  80 => 28,  73 => 32,  64 => 24,  60 => 27,  57 => 12,  54 => 26,  51 => 23,  48 => 22,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 20,  30 => 2,);
    }
}
