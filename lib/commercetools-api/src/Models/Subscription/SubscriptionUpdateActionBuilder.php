<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;

/**
 * @implements Builder<SubscriptionUpdateAction>
 */
final class SubscriptionUpdateActionBuilder implements Builder
{
    public function build(): SubscriptionUpdateAction
    {
        return new SubscriptionUpdateActionModel(
        );
    }

    public static function of(): SubscriptionUpdateActionBuilder
    {
        return new self();
    }
}
