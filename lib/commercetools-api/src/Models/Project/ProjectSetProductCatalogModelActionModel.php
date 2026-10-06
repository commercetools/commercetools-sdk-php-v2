<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProjectSetProductCatalogModelActionModel extends JsonObjectModel implements ProjectSetProductCatalogModelAction
{
    public const DISCRIMINATOR_VALUE = 'setProductCatalogModel';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $productCatalogModel;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $productCatalogModel = null,
        ?string $action = null
    ) {
        $this->productCatalogModel = $productCatalogModel;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Configuration for the Product catalog model in the Project.</p>
     * <p>The <code>x-catalog-model</code> request header can override the effective Catalog model for a single request to resources that resolve Variant data, such as Carts, Orders, and Shopping Lists, independent of the Project's configured Catalog model. Use it during migration to test Modular Catalog behavior on selected requests before changing the Project's configured Catalog model. It is intended as a migration aid, not as a permanent substitute for the Project configuration. It has no effect on Product update actions.</p>
     * <p>When set to <code>Classic</code>, Product Variants are embedded in the Product.</p>
     * <p>When set to <code>InMigration</code>, Product Variants remain embedded in the Product, but the Project's default resolution switches to the Modular Catalog model. Use this transitional state to complete your read migration to Modular while embedded Variant writes continue.
     * In this mode:</p>
     * <ul>
     * <li>Variants are resolved from standalone Variants by default, with no <code>x-catalog-model</code> header needed. This affects any resource that references a Variant, including Cart and Order line items, discount matching, and Product Selections.</li>
     * <li><a href="ctp:api:type:Product">Products</a> and <a href="ctp:api:type:ProductProjection">Product Projections</a> continue to return embedded Variant data.</li>
     * <li>Product Search continues to index embedded Variants.</li>
     * <li>Variant update actions on the Product API are still accepted, so continue dual-writing changes to embedded and standalone Variants during the migration. This keeps embedded Variant data up to date for Product Search, which continues to index embedded Variants.</li>
     * </ul>
     * <p>When set to <code>Modular</code>, Product Variants are managed as standalone entities.
     * In this mode:</p>
     * <ul>
     * <li>Variant-related update actions on Products return a <code>400</code> error.</li>
     * <li>Products must be created without <code>masterVariant</code> and <code>variants</code>.</li>
     * <li>Products cannot be deleted while Variants reference them.</li>
     * <li>Products cannot be unpublished while they have published Variants.</li>
     * <li><a href="/projects/carts">Carts</a> read variant data from the Variant API instead of embedded Product Variants.</li>
     * <li><code>priceMode</code> on Products is set to <code>Standalone</code>.</li>
     * </ul>
     *
     *
     * @return null|string
     */
    public function getProductCatalogModel()
    {
        if (is_null($this->productCatalogModel)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRODUCT_CATALOG_MODEL);
            if (is_null($data)) {
                return null;
            }
            $this->productCatalogModel = (string) $data;
        }

        return $this->productCatalogModel;
    }


    /**
     * @param ?string $productCatalogModel
     */
    public function setProductCatalogModel(?string $productCatalogModel): void
    {
        $this->productCatalogModel = $productCatalogModel;
    }
}
