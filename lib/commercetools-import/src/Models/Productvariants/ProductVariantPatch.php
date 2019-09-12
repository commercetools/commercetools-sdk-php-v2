<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\ImportReference;

interface ProductVariantPatch extends JsonObject
{
    const FIELD_PRODUCT_VARIANT = 'productVariant';
    const FIELD_ATTRIBUTES = 'attributes';

    /**
     * <p>The product variant to which this patch is applied.</p>.
     *
     * @return null|ImportReference
     */
    public function getProductVariant();

    /**
     * @return null|Attributes
     */
    public function getAttributes();

    public function setProductVariant(?ImportReference $productVariant): void;

    public function setAttributes(?Attributes $attributes): void;
}
