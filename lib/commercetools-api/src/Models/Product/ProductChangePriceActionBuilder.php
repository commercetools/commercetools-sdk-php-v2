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
     * <p>The <code>id</code> of the Embedded Price to update.</p>
     *

     * @return null|string
     */
    public function getPriceId()
    {
        return $this->priceId;
    }

    /**
     * <p>Value to set.</p>
     * <p>If the key of the Price is used by another Embedded Price on the ProductVariant, a <a href="ctp:api:type:DuplicatePriceKeyError">DuplicatePriceKey</a> error is returned.</p>
     * <p>If the new Embedded Price has the same price scope as another Embedded Price on the ProductVariant, a <a href="ctp:api:type:DuplicatePriceScopeError">DuplicatePriceScope</a> error is returned.</p>
     * <p>If the new Embedded Price has overlapping validity periods within the same price scope, an <a href="ctp:api:type:OverlappingPriceValidityError">OverlappingPriceValidity</a> error is returned. An Embedded Price without validity period does not conflict with an Embedded Price defined for a time period.</p>
     *

     * @return null|PriceDraft
     */
    public function getPrice()
    {
        return $this->price instanceof PriceDraftBuilder ? $this->price->build() : $this->price;
    }

    /**
     * <p>Whether only the staged Embedded Price is updated. If <code>false</code>, both the current and staged Embedded Price are updated.</p>
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
