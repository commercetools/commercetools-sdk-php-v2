<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProjectSetProductCatalogModelAction>
 */
final class ProjectSetProductCatalogModelActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $productCatalogModel;

    /**
     * <p>For each migration step, see:</p>
     * <ul>
     * <li><a href="/guides/migration-guides/modular-catalog-migration#change-product-catalog-model-to-inmigration">Change Product Catalog Model to InMigration</a></li>
     * <li><a href="/guides/migration-guides/modular-catalog-migration#change-product-catalog-model-to-modular">Change Product Catalog Model to Modular</a></li>
     * <li><a href="/guides/migration-guides/modular-catalog-migration#rollback-to-classic">Rollback to Classic</a></li>
     * </ul>
     *

     * @return null|string
     */
    public function getProductCatalogModel()
    {
        return $this->productCatalogModel;
    }

    /**
     * @param ?string $productCatalogModel
     * @return $this
     */
    public function withProductCatalogModel(?string $productCatalogModel)
    {
        $this->productCatalogModel = $productCatalogModel;

        return $this;
    }


    public function build(): ProjectSetProductCatalogModelAction
    {
        return new ProjectSetProductCatalogModelActionModel(
            $this->productCatalogModel
        );
    }

    public static function of(): ProjectSetProductCatalogModelActionBuilder
    {
        return new self();
    }
}
