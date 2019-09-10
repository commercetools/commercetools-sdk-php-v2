<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObject;

interface SubscriptionSetChangesAction extends SubscriptionUpdateAction
{
    
    const FIELD_CHANGES = 'changes';

    /**
     *
     * @return ChangeSubscriptionCollection|null
     */
    public function getChanges();
    public function setChanges(?ChangeSubscriptionCollection $changes): void;
}