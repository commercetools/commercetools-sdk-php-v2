<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\DiscountedPriceDraft;
use Commercetools\Api\Models\Common\DiscountedPriceDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSetDiscountedPriceAction>
 */
final class ProductSetDiscountedPriceActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $priceId;

    /**

     * @var ?bool
     */
    private $staged;

    /**

     * @var null|DiscountedPriceDraft|DiscountedPriceDraftBuilder
     */
    private $discounted;

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:Price">Embedded Price</a> to set the Discount.</p>
     *

     * @return null|string
     */
    public function getPriceId()
    {
        return $this->priceId;
    }

    /**
     * <p>If <code>true</code>, only the staged Embedded Price is updated. If <code>false</code>, both the current and staged Embedded Price are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * <p>Value to set. If empty, any existing value will be removed.
     * The referenced <a href="ctp:api:type:ProductDiscount">ProductDiscount</a> must have the Type <code>external</code>, be active, and its predicate must match the referenced Price.</p>
     *

     * @return null|DiscountedPriceDraft
     */
    public function getDiscounted()
    {
        return $this->discounted instanceof DiscountedPriceDraftBuilder ? $this->discounted->build() : $this->discounted;
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
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @param ?DiscountedPriceDraft $discounted
     * @return $this
     */
    public function withDiscounted(?DiscountedPriceDraft $discounted)
    {
        $this->discounted = $discounted;

        return $this;
    }

    /**
     * @deprecated use withDiscounted() instead
     * @return $this
     */
    public function withDiscountedBuilder(?DiscountedPriceDraftBuilder $discounted)
    {
        $this->discounted = $discounted;

        return $this;
    }

    public function build(): ProductSetDiscountedPriceAction
    {
        return new ProductSetDiscountedPriceActionModel(
            $this->priceId,
            $this->staged,
            $this->discounted instanceof DiscountedPriceDraftBuilder ? $this->discounted->build() : $this->discounted
        );
    }

    public static function of(): ProductSetDiscountedPriceActionBuilder
    {
        return new self();
    }
}
