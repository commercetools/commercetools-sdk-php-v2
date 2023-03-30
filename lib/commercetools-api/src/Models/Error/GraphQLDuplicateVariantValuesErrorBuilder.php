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
 * @implements Builder<GraphQLDuplicateVariantValuesError>
 */
final class GraphQLDuplicateVariantValuesErrorBuilder implements Builder
{
    /**

     * @var null|VariantValues|VariantValuesBuilder
     */
    private $variantValues;

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

    public function build(): GraphQLDuplicateVariantValuesError
    {
        return new GraphQLDuplicateVariantValuesErrorModel(
            $this->variantValues instanceof VariantValuesBuilder ? $this->variantValues->build() : $this->variantValues
        );
    }

    public static function of(): GraphQLDuplicateVariantValuesErrorBuilder
    {
        return new self();
    }
}
