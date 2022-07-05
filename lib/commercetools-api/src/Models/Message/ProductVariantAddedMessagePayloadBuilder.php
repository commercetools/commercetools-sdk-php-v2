<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductVariant;
use Commercetools\Api\Models\Product\ProductVariantBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductVariantAddedMessagePayload>
 */
final class ProductVariantAddedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|ProductVariant|ProductVariantBuilder
     */
    private $variant;

    /**

     * @var ?bool
     */
    private $staged;

    /**

     * @return null|ProductVariant
     */
    public function getVariant()
    {
        return $this->variant instanceof ProductVariantBuilder ? $this->variant->build() : $this->variant;
    }

    /**

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @param ?ProductVariant $variant
     * @return $this
     */
    public function withVariant(?ProductVariant $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @deprecated use withVariant() instead
     * @return $this
     */
    public function withVariantBuilder(?ProductVariantBuilder $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    public function build(): ProductVariantAddedMessagePayload
    {
        return new ProductVariantAddedMessagePayloadModel(
            $this->variant instanceof ProductVariantBuilder ? $this->variant->build() : $this->variant,
            $this->staged
        );
    }

    public static function of(): ProductVariantAddedMessagePayloadBuilder
    {
        return new self();
    }
}
