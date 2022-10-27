<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>Value to set. Can only be unset if <code>messages</code> is set.</p>
     *

     * @return null|ChangeSubscriptionCollection
     */
    public function getChanges()
    {
        return $this->changes;
    }

    /**
     * @param ?ChangeSubscriptionCollection $changes
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
