<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectSetProductCatalogModelAction extends ProjectUpdateAction
{
    public const FIELD_PRODUCT_CATALOG_MODEL = 'productCatalogModel';

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
    public function getProductCatalogModel();

    /**
     * @param ?string $productCatalogModel
     */
    public function setProductCatalogModel(?string $productCatalogModel): void;
}
