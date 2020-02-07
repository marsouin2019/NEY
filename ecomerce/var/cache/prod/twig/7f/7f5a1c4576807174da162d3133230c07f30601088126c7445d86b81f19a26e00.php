<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Sell/Catalog/Manufacturer/view.html.twig */
class __TwigTemplate_e5ece1ce7a90a85abcc283ff5a403206ff883152288481ab087dd6eb9e984e19 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/view.html.twig", 26);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        // line 29
        echo "  <div class=\"row\">
    <div class=\"col\">
      ";
        // line 31
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/addresses.html.twig", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/view.html.twig", 31)->display($context);
        // line 32
        echo "    </div>
  </div>

  <div class=\"row mt-3\">
    <div class=\"col\">
      ";
        // line 37
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/products.html.twig", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/view.html.twig", 37)->display($context);
        // line 38
        echo "    </div>
  </div>
";
    }

    // line 42
    public function block_javascripts($context, array $blocks = [])
    {
        // line 43
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/manufacturer.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Manufacturer/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 45,  67 => 43,  64 => 42,  58 => 38,  56 => 37,  49 => 32,  47 => 31,  43 => 29,  40 => 28,  22 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/view.html.twig", "/var/www/html/ecomerce/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Manufacturer/view.html.twig");
    }
}
