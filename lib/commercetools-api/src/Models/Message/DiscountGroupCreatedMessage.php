<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\DiscountGroup\DiscountGroup;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountGroupCreatedMessage extends Message
{
    public const FIELD_DISCOUNT_GROUP = 'discountGroup';

    /**
     * <p>The DiscountGroup that was created.</p>
     *

     * @return null|DiscountGroup
     */
    public function getDiscountGroup();

    /**
     * @param ?DiscountGroup $discountGroup
     */
    public function setDiscountGroup(?DiscountGroup $discountGroup): void;
}
