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


    public function __construct(
        string $key = null,
        ExtensionDestination $destination = null,
        ExtensionTriggerCollection $triggers = null,
        int $timeoutInMs = null
    ) {
        $this->key = $key;
        $this->destination = $destination;
        $this->triggers = $triggers;
        $this->timeoutInMs = $timeoutInMs;

    }

    /**
     * <p>User-specific unique identifier for the extension</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ExtensionDraft::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Details where the extension can be reached</p>
     *
     * @return null|ExtensionDestination
     */
    public function getDestination()
    {
        if (is_null($this->destination)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ExtensionDraft::FIELD_DESTINATION);
            if (is_null($data)) {
                return null;
            }
            $className = ExtensionDestinationModel::resolveDiscriminatorClass($data);
            $this->destination = $className::of($data);
        }

        return $this->destination;
    }

    /**
     * <p>Describes what triggers the extension</p>
     *
     * @return null|ExtensionTriggerCollection
     */
    public function getTriggers()
    {
        if (is_null($this->triggers)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ExtensionDraft::FIELD_TRIGGERS);
            if (is_null($data)) {
                return null;
            }
            $this->triggers = ExtensionTriggerCollection::fromArray($data);
        }

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
        if (is_null($this->timeoutInMs)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ExtensionDraft::FIELD_TIMEOUT_IN_MS);
            if (is_null($data)) {
                return null;
            }
            $this->timeoutInMs = (int) $data;
        }

        return $this->timeoutInMs;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setDestination(?ExtensionDestination $destination): void
    {
        $this->destination = $destination;
    }

    public function setTriggers(?ExtensionTriggerCollection $triggers): void
    {
        $this->triggers = $triggers;
    }

    public function setTimeoutInMs(?int $timeoutInMs): void
    {
        $this->timeoutInMs = $timeoutInMs;
    }



}
