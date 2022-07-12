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

     * @return null|ChangeSubscriptionCollection
     */
    public function getChanges();

    /**
     * @param ?ChangeSubscriptionCollection $changes
     */
    public function setChanges(?ChangeSubscriptionCollection $changes): void;
}
