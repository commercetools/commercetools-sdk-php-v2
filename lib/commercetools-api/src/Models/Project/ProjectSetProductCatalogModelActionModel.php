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
     * <p>For each migration step, see:</p>
     * <ul>
     * <li><a href="/guides/migration-guides/modular-catalog-migration#change-product-catalog-model-to-inmigration">Change Product Catalog Model to InMigration</a></li>
     * <li><a href="/guides/migration-guides/modular-catalog-migration#change-product-catalog-model-to-modular">Change Product Catalog Model to Modular</a></li>
     * <li><a href="/guides/migration-guides/modular-catalog-migration#rollback-to-classic">Rollback to Classic</a></li>
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
