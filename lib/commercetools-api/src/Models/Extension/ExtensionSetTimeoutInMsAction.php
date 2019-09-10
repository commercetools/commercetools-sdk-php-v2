<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

interface ExtensionSetTimeoutInMsAction extends ExtensionUpdateAction
{
    const FIELD_TIMEOUT_IN_MS = 'timeoutInMs';

    /**
     * @return null|int
     */
    public function getTimeoutInMs();

    public function setTimeoutInMs(?int $timeoutInMs): void;
}
