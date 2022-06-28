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
     * <p>New value to set. Must not be empty.</p>
     *
     * @return null|ExtensionTriggerCollection
     */
    public function getTriggers();

    /**
     * @param ?ExtensionTriggerCollection $triggers
     */
    public function setTriggers(?ExtensionTriggerCollection $triggers): void;
}
