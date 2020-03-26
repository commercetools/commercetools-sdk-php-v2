<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AttributeCount extends JsonObject
{
    public const FIELD_PRODUCT_TYPE_ATTRIBUTES = 'productTypeAttributes';
    public const FIELD_VARIANT_ATTRIBUTES = 'variantAttributes';
    public const FIELD_MISSING_ATTRIBUTE_VALUES = 'missingAttributeValues';

    /**
     * <p>Number of attributes defined in the product type.</p>
     *
     * @return null|int
     */
    public function getProductTypeAttributes();

    /**
     * <p>Number of attributes defined in the variant.</p>
     *
     * @return null|int
     */
    public function getVariantAttributes();

    /**
     * <p>Number of attributes missing values in the variant.</p>
     *
     * @return null|int
     */
    public function getMissingAttributeValues();

    public function setProductTypeAttributes(?int $productTypeAttributes): void;

    public function setVariantAttributes(?int $variantAttributes): void;

    public function setMissingAttributeValues(?int $missingAttributeValues): void;
}
