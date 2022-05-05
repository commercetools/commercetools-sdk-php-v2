<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\PriceDraft;
use Commercetools\Api\Models\Common\PriceDraftBuilder;
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
     * @var null|PriceDraft|PriceDraftBuilder
     */
    private $price;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * <p>ID of the <a href="ctp:api:type:EmbeddedPrice">EmbeddedPrice</a></p>
     *
     * @return null|string
     */
    public function getPriceId()
    {
        return $this->priceId;
    }

    /**
     * @return null|PriceDraft
     */
    public function getPrice()
    {
        return $this->price instanceof PriceDraftBuilder ? $this->price->build() : $this->price;
    }

    /**
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
     * @param ?PriceDraft $price
     * @return $this
     */
    public function withPrice(?PriceDraft $price)
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
    public function withPriceBuilder(?PriceDraftBuilder $price)
    {
        $this->price = $price;

        return $this;
    }

    public function build(): ProductChangePriceAction
    {
        return new ProductChangePriceActionModel(
            $this->priceId,
            $this->price instanceof PriceDraftBuilder ? $this->price->build() : $this->price,
            $this->staged
        );
    }

    public static function of(): ProductChangePriceActionBuilder
    {
        return new self();
    }
}
