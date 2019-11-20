<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;

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
     * @return null|int
     */
    public function getTimeoutInMs()
    {
        return $this->timeoutInMs;
    }

    /**
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
