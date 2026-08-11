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
     * <p>When set to <code>Classic</code>, Product Variants are embedded in the Product.</p>
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
