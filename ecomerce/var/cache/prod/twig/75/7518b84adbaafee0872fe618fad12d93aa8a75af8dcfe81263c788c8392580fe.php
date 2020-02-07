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

/* @PrestaShop/Admin/Sell/Catalog/Manufacturer/edit.html.twig */
class __TwigTemplate_36f950f03c27de58e0a9587f931f7783e5d27bec40f26862b6843395d2d1eae6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 29
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/edit.html.twig", 29);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $context["enableSidebar"] = true;
        // line 27
        $context["layoutTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit: %name%", ["%name%" => ($context["manufacturerName"] ?? null)], "Admin.Actions");
        // line 29
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        // line 32
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col\">
      ";
        // line 34
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/edit.html.twig", 34)->display($context);
        // line 35
        echo "    </div>
  </div>
";
    }

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        // line 40
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/manufacturer.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Manufacturer/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 42,  63 => 40,  60 => 39,  54 => 35,  52 => 34,  48 => 32,  45 => 31,  41 => 29,  39 => 27,  37 => 26,  22 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/edit.html.twig", "/var/www/html/ecomerce/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Manufacturer/edit.html.twig");
    }
}
