<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DuplicateVariantValuesError>
 */
final class DuplicateVariantValuesErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var null|VariantValues|VariantValuesBuilder
     */
    private $variantValues;

    /**
     * <p><code>&quot;A duplicate combination of the variant values (sku, key, images, prices, attributes) exists.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>Every Product Variant must have a distinct combination of SKU, prices, and custom Attribute values.</p>
     *

     * @return null|VariantValues
     */
    public function getVariantValues()
    {
        return $this->variantValues instanceof VariantValuesBuilder ? $this->variantValues->build() : $this->variantValues;
    }

    /**
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @param ?VariantValues $variantValues
     * @return $this
     */
    public function withVariantValues(?VariantValues $variantValues)
    {
        $this->variantValues = $variantValues;

        return $this;
    }

    /**
     * @deprecated use withVariantValues() instead
     * @return $this
     */
    public function withVariantValuesBuilder(?VariantValuesBuilder $variantValues)
    {
        $this->variantValues = $variantValues;

        return $this;
    }

    public function build(): DuplicateVariantValuesError
    {
        return new DuplicateVariantValuesErrorModel(
            $this->message,
            $this->variantValues instanceof VariantValuesBuilder ? $this->variantValues->build() : $this->variantValues
        );
    }

    public static function of(): DuplicateVariantValuesErrorBuilder
    {
        return new self();
    }
}
