<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Product\ProductResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReviewSetTargetAction extends ReviewUpdateAction
{
    public const FIELD_TARGET = 'target';

    /**
     * <p>Value to set, specified as <a href="ctp:api:type:ProductResourceIdentifier">ProductResourceIdentifier</a> or <a href="ctp:api:type:ChannelResourceIdentifier">ChannelResourceIdentifier</a>, respectively. If empty, any existing value will be removed.</p>
     *

     * @return null|mixed
     */
    public function getTarget();

    /**
     * @param ?JsonObject $target
     */
    public function setTarget(?JsonObject $target): void;
}
