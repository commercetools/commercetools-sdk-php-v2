<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ExtensionDraftModel extends JsonObjectModel implements ExtensionDraft
{
    /**
     * @var ?int
     */
    protected $timeoutInMs;

    /**
     * @var ?ExtensionDestination
     */
    protected $destination;

    /**
     * @var ?ExtensionTriggerCollection
     */
    protected $triggers;

    /**
     * @var ?string
     */
    protected $key;

    public function __construct(
        int $timeoutInMs = null,
        ExtensionDestination $destination = null,
        ExtensionTriggerCollection $triggers = null,
        string $key = null
    ) {
        $this->timeoutInMs = $timeoutInMs;
        $this->destination = $destination;
        $this->triggers = $triggers;
        $this->key = $key;
    }

    /**
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

    /**
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

    public function setTimeoutInMs(?int $timeoutInMs): void
    {
        $this->timeoutInMs = $timeoutInMs;
    }

    public function setDestination(?ExtensionDestination $destination): void
    {
        $this->destination = $destination;
    }

    public function setTriggers(?ExtensionTriggerCollection $triggers): void
    {
        $this->triggers = $triggers;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }
}
