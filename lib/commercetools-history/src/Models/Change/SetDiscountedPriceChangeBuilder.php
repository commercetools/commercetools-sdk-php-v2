<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\DiscountedPrice;
use Commercetools\History\Models\Common\DiscountedPriceBuilder;
use Commercetools\History\Models\Common\Price;
use Commercetools\History\Models\Common\PriceBuilder;

/**
 * @implements Builder<SetDiscountedPriceChange>
 */
final class SetDiscountedPriceChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|DiscountedPrice|DiscountedPriceBuilder
     */
    private $previousValue;

    /**

     * @var null|DiscountedPrice|DiscountedPriceBuilder
     */
    private $nextValue;

    /**

     * @var ?string
     */
    private $catalogData;

    /**

     * @var ?string
     */
    private $variant;

    /**

     * @var ?string
     */
    private $priceId;

    /**

     * @var null|Price|PriceBuilder
     */
    private $price;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|DiscountedPrice
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof DiscountedPriceBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|DiscountedPrice
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof DiscountedPriceBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * <p>Product data that was updated.</p>
     * <ul>
     * <li><code>staged</code>, if the staged <a href="ctp:api:type:ProductCatalogData">ProductCatalogData</a> was updated.</li>
     * <li><code>current</code>, if the current <a href="ctp:api:type:ProductCatalogData">ProductCatalogData</a> was updated.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getCatalogData()
    {
        return $this->catalogData;
    }

    /**
     * <p>Identifier of the updated Product Variant.</p>
     * <p>This field holds the SKU, if defined; otherwise the key; otherwise the ID.</p>
     *

     * @return null|string
     */
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     * <p><code>id</code> of the Embedded <a href="ctp:api:type:Price">Price</a>.</p>
     *

     * @return null|string
     */
    public function getPriceId()
    {
        return $this->priceId;
    }

    /**
     * <p>Embedded Price of the <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|Price
     */
    public function getPrice()
    {
        return $this->price instanceof PriceBuilder ? $this->price->build() : $this->price;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?DiscountedPrice $previousValue
     * @return $this
     */
    public function withPreviousValue(?DiscountedPrice $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?DiscountedPrice $nextValue
     * @return $this
     */
    public function withNextValue(?DiscountedPrice $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?string $catalogData
     * @return $this
     */
    public function withCatalogData(?string $catalogData)
    {
        $this->catalogData = $catalogData;

        return $this;
    }

    /**
     * @param ?string $variant
     * @return $this
     */
    public function withVariant(?string $variant)
    {
        $this->variant = $variant;

        return $this;
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
     * @param ?Price $price
     * @return $this
     */
    public function withPrice(?Price $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?DiscountedPriceBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?DiscountedPriceBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

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

    public function build(): SetDiscountedPriceChange
    {
        return new SetDiscountedPriceChangeModel(
            $this->change,
            $this->previousValue instanceof DiscountedPriceBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof DiscountedPriceBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->catalogData,
            $this->variant,
            $this->priceId,
            $this->price instanceof PriceBuilder ? $this->price->build() : $this->price
        );
    }

    public static function of(): SetDiscountedPriceChangeBuilder
    {
        return new self();
    }
}
