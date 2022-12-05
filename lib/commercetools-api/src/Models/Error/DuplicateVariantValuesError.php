<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DuplicateVariantValuesError extends ErrorObject
{
    public const FIELD_VARIANT_VALUES = 'variantValues';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;A duplicate combination of the variant values (sku, key, images, prices, attributes) exists.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Every Product Variant must have a distinct combination of SKU, prices, and custom Attribute values.</p>
     *

     * @return null|VariantValues
     */
    public function getVariantValues();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?VariantValues $variantValues
     */
    public function setVariantValues(?VariantValues $variantValues): void;
}
