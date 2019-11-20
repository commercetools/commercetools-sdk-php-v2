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
     * @var ?int
     */
    private $timeoutInMs;

    /**
     * @var ExtensionDestination|?ExtensionDestinationBuilder
     */
    private $destination;

    /**
     * @var ?ExtensionTriggerCollection
     */
    private $triggers;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @return null|int
     */
    public function getTimeoutInMs()
    {
        return $this->timeoutInMs;
    }

    /**
     * @return null|ExtensionDestination
     */
    public function getDestination()
    {
        return $this->destination instanceof ExtensionDestinationBuilder ? $this->destination->build() : $this->destination;
    }

    /**
     * @return null|ExtensionTriggerCollection
     */
    public function getTriggers()
    {
        return $this->triggers;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
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
    public function withKey(?string $key)
    {
        $this->key = $key;

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
            $this->timeoutInMs,
            ($this->destination instanceof ExtensionDestinationBuilder ? $this->destination->build() : $this->destination),
            $this->triggers,
            $this->key
        );
    }

    public static function of(): ExtensionDraftBuilder
    {
        return new self();
    }
}
