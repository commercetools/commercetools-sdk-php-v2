<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;

/**
 * @implements Builder<SubscriptionSetChangesAction>
 */
final class SubscriptionSetChangesActionBuilder implements Builder
{
    /**
     * @var ?ChangeSubscriptionCollection
     */
    private $changes;

    /**
     * @return null|ChangeSubscriptionCollection
     */
    public function getChanges()
    {
        return $this->changes;
    }

    /**
     * @return $this
     */
    public function withChanges(?ChangeSubscriptionCollection $changes)
    {
        $this->changes = $changes;

        return $this;
    }

    public function build(): SubscriptionSetChangesAction
    {
        return new SubscriptionSetChangesActionModel(
            $this->changes
        );
    }

    public static function of(): SubscriptionSetChangesActionBuilder
    {
        return new self();
    }
}
