<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ExtensionChangeTriggersAction extends ExtensionUpdateAction
{
    public const FIELD_TRIGGERS = 'triggers';

    /**
     * @return null|ExtensionTriggerCollection
     */
    public function getTriggers();

    public function setTriggers(?ExtensionTriggerCollection $triggers): void;
}
