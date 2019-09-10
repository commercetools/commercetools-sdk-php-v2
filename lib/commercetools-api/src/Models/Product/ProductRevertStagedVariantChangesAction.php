<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;

interface ProductRevertStagedVariantChangesAction extends ProductUpdateAction
{
    
    const FIELD_VARIANT_ID = 'variantId';

    /**
     *
     * @return int|null
     */
    public function getVariantId();
    public function setVariantId(?int $variantId): void;
}