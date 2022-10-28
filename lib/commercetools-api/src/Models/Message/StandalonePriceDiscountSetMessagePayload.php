<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\DiscountedPrice;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StandalonePriceDiscountSetMessagePayload extends MessagePayload
{
    public const FIELD_DISCOUNTED = 'discounted';

    /**
     * <p>The new <code>discounted</code> value of the updated <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *

     * @return null|DiscountedPrice
     */
    public function getDiscounted();

    /**
     * @param ?DiscountedPrice $discounted
     */
    public function setDiscounted(?DiscountedPrice $discounted): void;
}
