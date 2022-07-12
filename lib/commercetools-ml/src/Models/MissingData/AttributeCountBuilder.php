<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AttributeCount>
 */
final class AttributeCountBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $productTypeAttributes;

    /**

     * @var ?int
     */
    private $variantAttributes;

    /**

     * @var ?int
     */
    private $missingAttributeValues;

    /**
     * <p>Number of attributes defined in the product type.</p>
     *

     * @return null|int
     */
    public function getProductTypeAttributes()
    {
        return $this->productTypeAttributes;
    }

    /**
     * <p>Number of attributes defined in the variant.</p>
     *

     * @return null|int
     */
    public function getVariantAttributes()
    {
        return $this->variantAttributes;
    }

    /**
     * <p>Number of attributes missing values in the variant.</p>
     *

     * @return null|int
     */
    public function getMissingAttributeValues()
    {
        return $this->missingAttributeValues;
    }

    /**
     * @param ?int $productTypeAttributes
     * @return $this
     */
    public function withProductTypeAttributes(?int $productTypeAttributes)
    {
        $this->productTypeAttributes = $productTypeAttributes;

        return $this;
    }

    /**
     * @param ?int $variantAttributes
     * @return $this
     */
    public function withVariantAttributes(?int $variantAttributes)
    {
        $this->variantAttributes = $variantAttributes;

        return $this;
    }

    /**
     * @param ?int $missingAttributeValues
     * @return $this
     */
    public function withMissingAttributeValues(?int $missingAttributeValues)
    {
        $this->missingAttributeValues = $missingAttributeValues;

        return $this;
    }


    public function build(): AttributeCount
    {
        return new AttributeCountModel(
            $this->productTypeAttributes,
            $this->variantAttributes,
            $this->missingAttributeValues
        );
    }

    public static function of(): AttributeCountBuilder
    {
        return new self();
    }
}
