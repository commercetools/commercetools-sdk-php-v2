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
     * <p>Value to set.
     * If no timeout is provided, the default value is used for all <a href="ctp:api:type:ExtensionResourceTypeId">types of Extensions</a>.
     * We recommend keeping the timeout as low as possible to avoid performance issues.</p>
     * <p>The limit of 10000 ms (10 seconds) can be increased per Project after we review the performance impact.
     * Please contact the <a href="https://support.commercetools.com">Composable Commerce support team</a> and provide the Region, Project key, and use case.</p>
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
