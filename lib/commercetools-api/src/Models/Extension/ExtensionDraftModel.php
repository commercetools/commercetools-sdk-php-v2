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
final class ExtensionDraftModel extends JsonObjectModel implements ExtensionDraft
{
    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?ExtensionDestination
     */
    protected $destination;

    /**
     * @var ?ExtensionTriggerCollection
     */
    protected $triggers;

    /**
     * @var ?int
     */
    protected $timeoutInMs;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?ExtensionDestination $destination = null,
        ?ExtensionTriggerCollection $triggers = null,
        ?int $timeoutInMs = null
    ) {
        $this->key = $key;
        $this->destination = $destination;
        $this->triggers = $triggers;
        $this->timeoutInMs = $timeoutInMs;
    }

    /**
     * <p>User-defined unique identifier for the Extension.
     * Keys can only contain alphanumeric characters, underscores, and hyphens.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Defines where the Extension can be reached.</p>
     *
     * @return null|ExtensionDestination
     */
    public function getDestination()
    {
        if (is_null($this->destination)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DESTINATION);
            if (is_null($data)) {
                return null;
            }
            $className = ExtensionDestinationModel::resolveDiscriminatorClass($data);
            $this->destination = $className::of($data);
        }

        return $this->destination;
    }

    /**
     * <p>Describes what triggers the Extension.</p>
     *
     * @return null|ExtensionTriggerCollection
     */
    public function getTriggers()
    {
        if (is_null($this->triggers)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TRIGGERS);
            if (is_null($data)) {
                return null;
            }
            $this->triggers = ExtensionTriggerCollection::fromArray($data);
        }

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
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?ExtensionDestination $destination
     */
    public function setDestination(?ExtensionDestination $destination): void
    {
        $this->destination = $destination;
    }

    /**
     * @param ?ExtensionTriggerCollection $triggers
     */
    public function setTriggers(?ExtensionTriggerCollection $triggers): void
    {
        $this->triggers = $triggers;
    }

    /**
     * @param ?int $timeoutInMs
     */
    public function setTimeoutInMs(?int $timeoutInMs): void
    {
        $this->timeoutInMs = $timeoutInMs;
    }
}
