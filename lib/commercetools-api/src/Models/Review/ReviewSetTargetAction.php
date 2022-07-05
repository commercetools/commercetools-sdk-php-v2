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
     * <p>Identifies the target of the review.
     * Can be a Product or a Channel.
     * If <code>target</code> is absent or <code>null</code>, this field will be removed if it exists.</p>
     *

     * @return null|mixed
     */
    public function getTarget();

    /**
     * @param ?JsonObject $target
     */
    public function setTarget(?JsonObject $target): void;
}
