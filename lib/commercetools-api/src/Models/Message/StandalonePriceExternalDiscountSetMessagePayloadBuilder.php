<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\DiscountedPrice;
use Commercetools\Api\Models\Common\DiscountedPriceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StandalonePriceExternalDiscountSetMessagePayload>
 */
final class StandalonePriceExternalDiscountSetMessagePayloadBuilder implements Builder
{
    /**

     * @var null|DiscountedPrice|DiscountedPriceBuilder
     */
    private $discounted;

    /**
     * <p>The <code>discounted</code> value of the <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> after the <a href="ctp:api:type:StandalonePriceSetDiscountedPriceAction">Set Discounted Price</a> update action.</p>
     *

     * @return null|DiscountedPrice
     */
    public function getDiscounted()
    {
        return $this->discounted instanceof DiscountedPriceBuilder ? $this->discounted->build() : $this->discounted;
    }

    /**
     * @param ?DiscountedPrice $discounted
     * @return $this
     */
    public function withDiscounted(?DiscountedPrice $discounted)
    {
        $this->discounted = $discounted;

        return $this;
    }

    /**
     * @deprecated use withDiscounted() instead
     * @return $this
     */
    public function withDiscountedBuilder(?DiscountedPriceBuilder $discounted)
    {
        $this->discounted = $discounted;

        return $this;
    }

    public function build(): StandalonePriceExternalDiscountSetMessagePayload
    {
        return new StandalonePriceExternalDiscountSetMessagePayloadModel(
            $this->discounted instanceof DiscountedPriceBuilder ? $this->discounted->build() : $this->discounted
        );
    }

    public static function of(): StandalonePriceExternalDiscountSetMessagePayloadBuilder
    {
        return new self();
    }
}
