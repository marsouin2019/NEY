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

/* @PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/products.html.twig */
class __TwigTemplate_fc28ab0ced4392fa6c5ee63c99e0cafe978cb55d77105a27ca757dcfc199e29c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
        echo "
    (";
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["viewableManufacturer"] ?? null), "manufacturerProducts", [])), "html", null, true);
        echo ")
  </h3>
  <div class=\"card-body\">
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["viewableManufacturer"] ?? null), "manufacturerProducts", []));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 33
            echo "      <div class=\"card\">
        <div class=\"card-header clearfix\">
          <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_form", ["id" => $this->getAttribute($context["product"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", []), "html", null, true);
            echo "</a>

          <div class=\"d-inline-block float-right\">
            <div class=\"btn-group-action text-right\">
              <div class=\"btn-group\">
                <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split p-0\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                </a>
                <div class=\"dropdown-menu dropdown-menu-right\">
                  <a class=\"btn tooltip-link js-submit-row-action dropdown-item\"
                     href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_form", ["id" => $this->getAttribute($context["product"], "id", [])]), "html", null, true);
            echo "\"
                  >
                    ";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
            echo "
                  </a>
                  <button class=\"btn tooltip-link js-form-submit-btn dropdown-item\"
                          type=\"button\"
                          data-form-submit-url=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_unit_action", ["action" => "delete", "id" => $this->getAttribute($context["product"], "id", [])]), "html", null, true);
            echo "\"
                          data-form-confirm-message=\"";
            // line 51
            echo twig_escape_filter($this->env, sprintf("%s%s?", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete item #", [], "Admin.International.Feature"), $this->getAttribute($context["product"], "id", [])), "html", null, true);
            echo "\"
                  >
                    ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "Admin.Actions"), "html", null, true);
            echo "
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"card-body\">
          ";
            // line 61
            if ( !twig_test_empty($this->getAttribute($context["product"], "combinations", []))) {
                // line 62
                echo "            <table class=\"table\">
              <thead>
                <tr>
                  <th>";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Attribute name", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", [], "Admin.Global"), "html", null, true);
                echo "</th>
                  <th>";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("EAN13", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("UPC", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  ";
                // line 69
                if (( !($context["isAllShopContext"] ?? null) && ($context["isStockManagementEnabled"] ?? null))) {
                    // line 70
                    echo "                    <th>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Available quantity", [], "Admin.Catalog.Feature"), "html", null, true);
                    echo "</th>
                  ";
                }
                // line 72
                echo "                </tr>
              </thead>
              <tbody>
                ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "combinations", []));
                foreach ($context['_seq'] as $context["_key"] => $context["combination"]) {
                    // line 76
                    echo "                  <tr>
                    <td>";
                    // line 77
                    echo twig_escape_filter($this->env, $this->getAttribute($context["combination"], "attributes", []), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute($context["combination"], "reference", []), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 79
                    echo twig_escape_filter($this->env, $this->getAttribute($context["combination"], "ean13", []), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 80
                    echo twig_escape_filter($this->env, $this->getAttribute($context["combination"], "upc", []), "html", null, true);
                    echo "</td>
                    ";
                    // line 81
                    if (( !($context["isAllShopContext"] ?? null) && ($context["isStockManagementEnabled"] ?? null))) {
                        // line 82
                        echo "                      <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["combination"], "quantity", []), "html", null, true);
                        echo "</td>
                    ";
                    }
                    // line 84
                    echo "                  </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['combination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "              </tbody>
            </table>
          ";
            } else {
                // line 89
                echo "            <table class=\"table\">
              <thead>
                <tr>
                  <th>";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ref:", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("EAN13:", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("UPC:", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  ";
                // line 95
                if (($context["isStockManagementEnabled"] ?? null)) {
                    // line 96
                    echo "                    <th>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Qty:", [], "Admin.Catalog.Feature"), "html", null, true);
                    echo "</th>
                  ";
                }
                // line 98
                echo "                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "reference", []), "html", null, true);
                echo "</td>
                  <td>";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "ean13", []), "html", null, true);
                echo "</td>
                  <td>";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "upc", []), "html", null, true);
                echo "</td>
                  ";
                // line 105
                if (($context["isStockManagementEnabled"] ?? null)) {
                    // line 106
                    echo "                    <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", []), "html", null, true);
                    echo "</td>
                  ";
                }
                // line 108
                echo "                </tr>
              </tbody>
            </table>
          ";
            }
            // line 112
            echo "        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 115,  235 => 112,  229 => 108,  223 => 106,  221 => 105,  217 => 104,  213 => 103,  209 => 102,  203 => 98,  197 => 96,  195 => 95,  191 => 94,  187 => 93,  183 => 92,  178 => 89,  173 => 86,  166 => 84,  160 => 82,  158 => 81,  154 => 80,  150 => 79,  146 => 78,  142 => 77,  139 => 76,  135 => 75,  130 => 72,  124 => 70,  122 => 69,  118 => 68,  114 => 67,  110 => 66,  106 => 65,  101 => 62,  99 => 61,  88 => 53,  83 => 51,  79 => 50,  72 => 46,  67 => 44,  53 => 35,  49 => 33,  45 => 32,  39 => 29,  35 => 28,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/products.html.twig", "/var/www/html/ecomerce/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Manufacturer/Blocks/View/products.html.twig");
    }
}
