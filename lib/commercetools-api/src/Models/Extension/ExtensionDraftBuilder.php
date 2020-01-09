<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ExtensionDraft>
 */
final class ExtensionDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * @var null|ExtensionDestination|ExtensionDestinationBuilder
     */
    private $destination;

    /**
     * @var ?ExtensionTriggerCollection
     */
    private $triggers;

    /**
     * @var ?int
     */
    private $timeoutInMs;

    /**
     * <p>User-specific unique identifier for the extension</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Details where the extension can be reached</p>
     *
     * @return null|ExtensionDestination
     */
    public function getDestination()
    {
        return $this->destination instanceof ExtensionDestinationBuilder ? $this->destination->build() : $this->destination;
    }

    /**
     * <p>Describes what triggers the extension</p>
     *
     * @return null|ExtensionTriggerCollection
     */
    public function getTriggers()
    {
        return $this->triggers;
    }

    /**
     * <p>The maximum time the commercetools platform waits for a response from the extension.
     * The maximum value is 2000 ms (2 seconds).
     * This limit can be increased per project after we review the performance impact.
     * Please contact Support via the <a href="https://support.commercetools.com">Support Portal</a> and provide the region, project key and use case.</p>
     *
     * @return null|int
     */
    public function getTimeoutInMs()
    {
        return $this->timeoutInMs;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDestination(?ExtensionDestination $destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTriggers(?ExtensionTriggerCollection $triggers)
    {
        $this->triggers = $triggers;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTimeoutInMs(?int $timeoutInMs)
    {
        $this->timeoutInMs = $timeoutInMs;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDestinationBuilder(?ExtensionDestinationBuilder $destination)
    {
        $this->destination = $destination;

        return $this;
    }

    public function build(): ExtensionDraft
    {
        return new ExtensionDraftModel(
            $this->key,
            $this->destination instanceof ExtensionDestinationBuilder ? $this->destination->build() : $this->destination,
            $this->triggers,
            $this->timeoutInMs
        );
    }

    public static function of(): ExtensionDraftBuilder
    {
        return new self();
    }
}
