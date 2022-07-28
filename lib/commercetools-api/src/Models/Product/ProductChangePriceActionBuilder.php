<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductChangePriceAction>
 */
final class ProductChangePriceActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $priceId;

    /**

     * @var null|EmbeddedPriceDraft|EmbeddedPriceDraftBuilder
     */
    private $price;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>The <code>id</code> of the EmbeddedPrice to update.</p>
     *

     * @return null|string
     */
    public function getPriceId()
    {
        return $this->priceId;
    }

    /**
     * <p>Value to set.</p>
     *

     * @return null|EmbeddedPriceDraft
     */
    public function getPrice()
    {
        return $this->price instanceof EmbeddedPriceDraftBuilder ? $this->price->build() : $this->price;
    }

    /**
     * <p>If <code>true</code>, only the staged EmbeddedPrice is updated. If <code>false</code>, both the current and staged EmbeddedPrice are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @param ?string $priceId
     * @return $this
     */
    public function withPriceId(?string $priceId)
    {
        $this->priceId = $priceId;

        return $this;
    }

    /**
     * @param ?EmbeddedPriceDraft $price
     * @return $this
     */
    public function withPrice(?EmbeddedPriceDraft $price)
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
    public function withPriceBuilder(?EmbeddedPriceDraftBuilder $price)
    {
        $this->price = $price;

        return $this;
    }

    public function build(): ProductChangePriceAction
    {
        return new ProductChangePriceActionModel(
            $this->priceId,
            $this->price instanceof EmbeddedPriceDraftBuilder ? $this->price->build() : $this->price,
            $this->staged
        );
    }

    public static function of(): ProductChangePriceActionBuilder
    {
        return new self();
    }
}
