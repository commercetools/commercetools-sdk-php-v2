<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\JsonObjectModel;

final class ExtensionSetTimeoutInMsActionModel extends JsonObjectModel implements ExtensionSetTimeoutInMsAction
{
    const DISCRIMINATOR_VALUE = 'setTimeoutInMs';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?int
     */
    protected $timeoutInMs;

    public function __construct(
        int $timeoutInMs = null
    ) {
        $this->timeoutInMs = $timeoutInMs;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ExtensionUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>The maximum time the commercetools platform waits for a response from the extension.
     * The maximum value is 2000 ms (2 seconds).
     * This limit can be increased per project after we review the performance impact.
     * Please contact Support via the support and provide the region, project key and use case.</p>
     *
     * @return null|int
     */
    public function getTimeoutInMs()
    {
        if (is_null($this->timeoutInMs)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ExtensionSetTimeoutInMsAction::FIELD_TIMEOUT_IN_MS);
            if (is_null($data)) {
                return null;
            }
            $this->timeoutInMs = (int) $data;
        }

        return $this->timeoutInMs;
    }

    public function setTimeoutInMs(?int $timeoutInMs): void
    {
        $this->timeoutInMs = $timeoutInMs;
    }
}
