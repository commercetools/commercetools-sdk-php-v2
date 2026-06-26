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

     * @return null|string
     */
    public function getProductCatalogModel();

    /**
     * @param ?string $productCatalogModel
     */
    public function setProductCatalogModel(?string $productCatalogModel): void;
}
