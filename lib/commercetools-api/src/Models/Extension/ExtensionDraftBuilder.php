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
     * <p>User-defined unique identifier for the Extension.
     * Keys can only contain alphanumeric characters, underscores, and hyphens.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Defines where the Extension can be reached.</p>
     *
     * @return null|ExtensionDestination
     */
    public function getDestination()
    {
        return $this->destination instanceof ExtensionDestinationBuilder ? $this->destination->build() : $this->destination;
    }

    /**
     * <p>Describes what triggers the Extension.</p>
     *
     * @return null|ExtensionTriggerCollection
     */
    public function getTriggers()
    {
        return $this->triggers;
    }

    /**
     * <p>Maximum time (in milliseconds) the commercetools Platform waits for a response from the Extension.
     * If no timeout is provided, the default value is used for all types of Extensions.
     * The maximum value is 10000 ms (10 seconds) for <code>payment</code> Extensions and 2000 ms (2 seconds) for all other Extensions.</p>
     * <p>This limit can be increased per Project after we review the performance impact.
     * Please contact our support via the <a href="https://support.commercetools.com">support portal</a> and provide the Region, Project key, and use case.</p>
     *
     * @return null|int
     */
    public function getTimeoutInMs()
    {
        return $this->timeoutInMs;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?ExtensionDestination $destination
     * @return $this
     */
    public function withDestination(?ExtensionDestination $destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @param ?ExtensionTriggerCollection $triggers
     * @return $this
     */
    public function withTriggers(?ExtensionTriggerCollection $triggers)
    {
        $this->triggers = $triggers;

        return $this;
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

    /**
     * @deprecated use withDestination() instead
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
