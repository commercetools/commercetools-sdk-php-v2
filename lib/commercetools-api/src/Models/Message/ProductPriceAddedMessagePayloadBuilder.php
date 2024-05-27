<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductPriceAddedMessagePayload>
 */
final class ProductPriceAddedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $variantId;

    /**

     * @var null|Price|PriceBuilder
     */
    private $price;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> for which the Price was added.</p>
     *

     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * <p>The Embedded Price that was added to the <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|Price
     */
    public function getPrice()
    {
        return $this->price instanceof PriceBuilder ? $this->price->build() : $this->price;
    }

    /**
     * <p>Whether the update was only applied to the staged <a href="ctp:api:type:ProductProjection">Product Projection</a>.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @param ?int $variantId
     * @return $this
     */
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * @param ?Price $price
     * @return $this
     */
    public function withPrice(?Price $price)
    {
        $this->price = $price;

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
     * @deprecated use withPrice() instead
     * @return $this
     */
    public function withPriceBuilder(?PriceBuilder $price)
    {
        $this->price = $price;

        return $this;
    }

    public function build(): ProductPriceAddedMessagePayload
    {
        return new ProductPriceAddedMessagePayloadModel(
            $this->variantId,
            $this->price instanceof PriceBuilder ? $this->price->build() : $this->price,
            $this->staged
        );
    }

    public static function of(): ProductPriceAddedMessagePayloadBuilder
    {
        return new self();
    }
}
