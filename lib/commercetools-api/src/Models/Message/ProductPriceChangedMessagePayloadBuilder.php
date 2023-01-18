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
 * @implements Builder<ProductPriceChangedMessagePayload>
 */
final class ProductPriceChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $variantId;

    /**

     * @var null|Price|PriceBuilder
     */
    private $oldPrice;

    /**

     * @var null|Price|PriceBuilder
     */
    private $newPrice;

    /**

     * @var ?bool
     */
    private $staged;

    /**

     * @var null|Price|PriceBuilder
     */
    private $oldStagedPrice;

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> for which the Price was changed.</p>
     *

     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * <p>The current <a href="/projects/products#embedded-price">Embedded Price</a> before the <a href="ctp:api:type:ProductChangePriceAction">Change Embedded Price</a> update action.</p>
     *

     * @return null|Price
     */
    public function getOldPrice()
    {
        return $this->oldPrice instanceof PriceBuilder ? $this->oldPrice->build() : $this->oldPrice;
    }

    /**
     * <p>The <a href="/projects/products#embedded-price">Embedded Price</a> after the <a href="ctp:api:type:ProductChangePriceAction">Change Embedded Price</a> update action.</p>
     *

     * @return null|Price
     */
    public function getNewPrice()
    {
        return $this->newPrice instanceof PriceBuilder ? $this->newPrice->build() : $this->newPrice;
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
     * <p>The staged <a href="/projects/products#embedded-price">Embedded Price</a> before the <a href="ctp:api:type:ProductChangePriceAction">Change Embedded Price</a> update action.</p>
     *

     * @return null|Price
     */
    public function getOldStagedPrice()
    {
        return $this->oldStagedPrice instanceof PriceBuilder ? $this->oldStagedPrice->build() : $this->oldStagedPrice;
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
     * @param ?Price $oldPrice
     * @return $this
     */
    public function withOldPrice(?Price $oldPrice)
    {
        $this->oldPrice = $oldPrice;

        return $this;
    }

    /**
     * @param ?Price $newPrice
     * @return $this
     */
    public function withNewPrice(?Price $newPrice)
    {
        $this->newPrice = $newPrice;

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
     * @param ?Price $oldStagedPrice
     * @return $this
     */
    public function withOldStagedPrice(?Price $oldStagedPrice)
    {
        $this->oldStagedPrice = $oldStagedPrice;

        return $this;
    }

    /**
     * @deprecated use withOldPrice() instead
     * @return $this
     */
    public function withOldPriceBuilder(?PriceBuilder $oldPrice)
    {
        $this->oldPrice = $oldPrice;

        return $this;
    }

    /**
     * @deprecated use withNewPrice() instead
     * @return $this
     */
    public function withNewPriceBuilder(?PriceBuilder $newPrice)
    {
        $this->newPrice = $newPrice;

        return $this;
    }

    /**
     * @deprecated use withOldStagedPrice() instead
     * @return $this
     */
    public function withOldStagedPriceBuilder(?PriceBuilder $oldStagedPrice)
    {
        $this->oldStagedPrice = $oldStagedPrice;

        return $this;
    }

    public function build(): ProductPriceChangedMessagePayload
    {
        return new ProductPriceChangedMessagePayloadModel(
            $this->variantId,
            $this->oldPrice instanceof PriceBuilder ? $this->oldPrice->build() : $this->oldPrice,
            $this->newPrice instanceof PriceBuilder ? $this->newPrice->build() : $this->newPrice,
            $this->staged,
            $this->oldStagedPrice instanceof PriceBuilder ? $this->oldStagedPrice->build() : $this->oldStagedPrice
        );
    }

    public static function of(): ProductPriceChangedMessagePayloadBuilder
    {
        return new self();
    }
}
