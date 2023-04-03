<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLDuplicateVariantValuesError extends GraphQLErrorObject
{
    public const FIELD_VARIANT_VALUES = 'variantValues';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Every Product Variant must have a distinct combination of SKU, prices, and custom Attribute values.</p>
     *

     * @return null|VariantValues
     */
    public function getVariantValues();

    /**
     * @param ?VariantValues $variantValues
     */
    public function setVariantValues(?VariantValues $variantValues): void;
}
