<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SubscriptionSetChangesAction extends SubscriptionUpdateAction
{
    public const FIELD_CHANGES = 'changes';

    /**
     * <p>Value to set. Can only be unset if <code>messages</code> is set.</p>
     *

     * @return null|ChangeSubscriptionCollection
     */
    public function getChanges();

    /**
     * @param ?ChangeSubscriptionCollection $changes
     */
    public function setChanges(?ChangeSubscriptionCollection $changes): void;
}
