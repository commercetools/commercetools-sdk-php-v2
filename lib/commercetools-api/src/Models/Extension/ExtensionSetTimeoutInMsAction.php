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
     * <p>The maximum time the commercetools platform waits for a response from the extension.
     * The maximum value is 2000 ms (2 seconds).
     * This limit can be increased per project after we review the performance impact.
     * Please contact Support via the support and provide the region, project key and use case.</p>.
     *
     * @return null|int
     */
    public function getTimeoutInMs();

    public function setTimeoutInMs(?int $timeoutInMs): void;
}
