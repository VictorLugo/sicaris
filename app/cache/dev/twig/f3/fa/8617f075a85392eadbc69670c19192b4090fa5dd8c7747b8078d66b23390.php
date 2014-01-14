<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_f3fa8617f075a85392eadbc69670c19192b4090fa5dd8c7747b8078d66b23390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_block"), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "block"), "name"), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message"), "html", null, true);
        echo "</h3>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 132,  338 => 130,  323 => 125,  271 => 108,  262 => 105,  251 => 101,  211 => 81,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  602 => 185,  592 => 179,  585 => 177,  568 => 175,  547 => 173,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  507 => 157,  498 => 134,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  446 => 139,  428 => 136,  425 => 135,  414 => 127,  400 => 120,  388 => 117,  377 => 115,  371 => 113,  358 => 139,  339 => 100,  329 => 95,  324 => 92,  319 => 124,  307 => 87,  282 => 79,  223 => 58,  178 => 45,  118 => 28,  306 => 141,  303 => 140,  300 => 139,  292 => 135,  248 => 100,  236 => 63,  216 => 100,  70 => 33,  77 => 27,  181 => 80,  148 => 60,  690 => 411,  681 => 203,  676 => 402,  674 => 397,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  613 => 188,  605 => 186,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  557 => 330,  550 => 326,  538 => 319,  531 => 312,  526 => 310,  514 => 306,  509 => 304,  504 => 302,  492 => 132,  486 => 130,  481 => 290,  456 => 143,  452 => 272,  445 => 267,  443 => 261,  429 => 255,  424 => 254,  422 => 250,  420 => 249,  415 => 247,  383 => 224,  361 => 107,  346 => 196,  331 => 187,  326 => 93,  304 => 174,  291 => 82,  272 => 76,  257 => 103,  242 => 113,  152 => 38,  114 => 71,  97 => 63,  58 => 23,  321 => 91,  318 => 145,  316 => 121,  299 => 116,  288 => 107,  284 => 106,  281 => 110,  275 => 103,  253 => 148,  250 => 67,  232 => 136,  222 => 81,  210 => 75,  191 => 50,  185 => 86,  153 => 72,  113 => 44,  100 => 36,  406 => 158,  403 => 121,  401 => 156,  394 => 118,  390 => 150,  369 => 141,  366 => 210,  364 => 139,  352 => 135,  349 => 103,  342 => 101,  336 => 99,  332 => 97,  328 => 124,  315 => 123,  296 => 109,  290 => 106,  280 => 131,  277 => 109,  274 => 77,  267 => 156,  261 => 91,  256 => 121,  244 => 85,  239 => 97,  234 => 80,  228 => 88,  225 => 87,  215 => 78,  198 => 69,  195 => 68,  184 => 47,  180 => 62,  174 => 67,  155 => 53,  127 => 54,  124 => 31,  81 => 15,  194 => 88,  186 => 83,  170 => 79,  165 => 64,  160 => 76,  150 => 55,  129 => 57,  65 => 30,  671 => 293,  621 => 245,  615 => 242,  610 => 239,  608 => 187,  600 => 232,  596 => 181,  590 => 178,  566 => 226,  561 => 224,  558 => 223,  555 => 222,  551 => 174,  548 => 220,  545 => 219,  542 => 172,  523 => 215,  518 => 307,  515 => 212,  511 => 211,  508 => 210,  505 => 156,  502 => 155,  483 => 129,  478 => 203,  475 => 202,  471 => 201,  454 => 196,  451 => 141,  449 => 194,  439 => 260,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 234,  389 => 171,  378 => 144,  376 => 161,  373 => 142,  359 => 138,  351 => 135,  344 => 150,  340 => 149,  327 => 126,  325 => 137,  317 => 133,  311 => 89,  301 => 117,  297 => 84,  293 => 113,  289 => 112,  286 => 80,  279 => 104,  265 => 106,  263 => 71,  260 => 104,  255 => 105,  237 => 86,  233 => 62,  226 => 95,  213 => 82,  202 => 77,  200 => 55,  197 => 74,  192 => 88,  175 => 43,  146 => 34,  134 => 56,  126 => 42,  53 => 23,  161 => 71,  90 => 18,  84 => 16,  520 => 44,  513 => 403,  510 => 158,  506 => 400,  501 => 398,  496 => 397,  479 => 383,  468 => 200,  466 => 280,  347 => 134,  335 => 188,  333 => 257,  137 => 59,  110 => 25,  104 => 23,  76 => 13,  20 => 11,  34 => 4,  23 => 12,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 191,  440 => 148,  437 => 147,  435 => 258,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 130,  398 => 119,  393 => 172,  387 => 122,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 157,  365 => 141,  362 => 110,  360 => 109,  355 => 105,  341 => 131,  337 => 103,  322 => 136,  314 => 99,  312 => 143,  309 => 120,  305 => 119,  298 => 173,  294 => 90,  285 => 111,  283 => 166,  278 => 86,  268 => 107,  264 => 84,  258 => 81,  252 => 88,  247 => 66,  241 => 84,  229 => 73,  220 => 80,  214 => 99,  177 => 61,  169 => 66,  140 => 55,  132 => 59,  128 => 58,  107 => 24,  61 => 25,  273 => 200,  269 => 75,  254 => 102,  243 => 98,  240 => 86,  238 => 64,  235 => 74,  230 => 106,  227 => 134,  224 => 103,  221 => 75,  219 => 84,  217 => 79,  208 => 57,  204 => 78,  179 => 107,  159 => 70,  143 => 59,  135 => 81,  119 => 28,  102 => 37,  71 => 27,  67 => 19,  63 => 24,  59 => 165,  38 => 6,  94 => 35,  89 => 40,  85 => 30,  75 => 39,  68 => 31,  56 => 40,  26 => 14,  87 => 17,  31 => 3,  201 => 72,  196 => 90,  183 => 73,  171 => 102,  166 => 100,  163 => 62,  158 => 62,  156 => 93,  151 => 57,  142 => 61,  138 => 57,  136 => 60,  121 => 29,  117 => 51,  105 => 39,  91 => 34,  62 => 166,  49 => 9,  25 => 12,  21 => 12,  28 => 13,  24 => 13,  19 => 11,  93 => 68,  88 => 60,  78 => 40,  46 => 21,  44 => 74,  27 => 13,  79 => 14,  72 => 199,  69 => 198,  47 => 75,  40 => 19,  37 => 18,  22 => 7,  246 => 99,  157 => 41,  145 => 52,  139 => 31,  131 => 55,  123 => 30,  120 => 56,  115 => 27,  111 => 40,  108 => 39,  101 => 22,  98 => 37,  96 => 17,  83 => 25,  74 => 23,  66 => 25,  55 => 22,  52 => 113,  50 => 22,  43 => 20,  41 => 18,  35 => 16,  32 => 16,  29 => 15,  209 => 96,  203 => 56,  199 => 67,  193 => 73,  189 => 71,  187 => 87,  182 => 69,  176 => 82,  173 => 42,  168 => 60,  164 => 72,  162 => 55,  154 => 67,  149 => 36,  147 => 69,  144 => 33,  141 => 67,  133 => 55,  130 => 57,  125 => 45,  122 => 44,  116 => 45,  112 => 26,  109 => 69,  106 => 36,  103 => 46,  99 => 26,  95 => 20,  92 => 19,  86 => 43,  82 => 28,  80 => 41,  73 => 29,  64 => 184,  60 => 15,  57 => 155,  54 => 154,  51 => 24,  48 => 40,  45 => 20,  42 => 7,  39 => 61,  36 => 17,  33 => 9,  30 => 15,);
    }
}
