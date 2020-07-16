<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ExtensionSetTimeoutInMsAction>
 */
final class ExtensionSetTimeoutInMsActionBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $timeoutInMs;

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
        return $this->timeoutInMs;
    }

    /**
     * @param ?int $timeoutInMs
     * @return $this
     */
    public function withTimeoutInMs(?int $timeoutInMs)
    {
        $this->timeoutInMs = $timeoutInMs;

        return $this;
    }


    public function build(): ExtensionSetTimeoutInMsAction
    {
        return new ExtensionSetTimeoutInMsActionModel(
            $this->timeoutInMs
        );
    }

    public static function of(): ExtensionSetTimeoutInMsActionBuilder
    {
        return new self();
    }
}
