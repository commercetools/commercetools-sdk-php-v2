<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MissingAttributesMeta extends JsonObject
{
    public const FIELD_PRODUCT_LEVEL = 'productLevel';
    public const FIELD_VARIANT_LEVEL = 'variantLevel';
    public const FIELD_PRODUCT_TYPE_IDS = 'productTypeIds';

    /**

     * @return null|MissingAttributesDetails
     */
    public function getProductLevel();

    /**

     * @return null|MissingAttributesDetails
     */
    public function getVariantLevel();

    /**
     * <p>The IDs of the product types containing the requested <code>attributeName</code>.</p>
     *

     * @return null|array
     */
    public function getProductTypeIds();

    /**
     * @param ?MissingAttributesDetails $productLevel
     */
    public function setProductLevel(?MissingAttributesDetails $productLevel): void;

    /**
     * @param ?MissingAttributesDetails $variantLevel
     */
    public function setVariantLevel(?MissingAttributesDetails $variantLevel): void;

    /**
     * @param ?array $productTypeIds
     */
    public function setProductTypeIds(?array $productTypeIds): void;
}
