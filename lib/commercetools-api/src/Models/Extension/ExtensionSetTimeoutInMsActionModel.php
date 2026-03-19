<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ExtensionSetTimeoutInMsActionModel extends JsonObjectModel implements ExtensionSetTimeoutInMsAction
{
    public const DISCRIMINATOR_VALUE = 'setTimeoutInMs';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?int
     */
    protected $timeoutInMs;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $timeoutInMs = null,
        ?string $action = null
    ) {
        $this->timeoutInMs = $timeoutInMs;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Value to set.
     * If no timeout is provided, the default value is used for all <a href="ctp:api:type:ExtensionResourceTypeId">types of Extensions</a>.
     * We recommend keeping the timeout as low as possible to avoid performance issues.</p>
     * <p>The limit of 10000 ms (10 seconds) can be increased per Project after we review the performance impact.
     * Please contact the <a href="https://support.commercetools.com">Composable Commerce support team</a> and provide the Region, Project key, and use case.</p>
     *
     *
     * @return null|int
     */
    public function getTimeoutInMs()
    {
        if (is_null($this->timeoutInMs)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_TIMEOUT_IN_MS);
            if (is_null($data)) {
                return null;
            }
            $this->timeoutInMs = (int) $data;
        }

        return $this->timeoutInMs;
    }


    /**
     * @param ?int $timeoutInMs
     */
    public function setTimeoutInMs(?int $timeoutInMs): void
    {
        $this->timeoutInMs = $timeoutInMs;
    }
}
