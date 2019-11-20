<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ExtensionChangeTriggersActionModel extends JsonObjectModel implements ExtensionChangeTriggersAction
{
    const DISCRIMINATOR_VALUE = 'changeTriggers';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?ExtensionTriggerCollection
     */
    protected $triggers;

    public function __construct(
        ExtensionTriggerCollection $triggers = null
    ) {
        $this->triggers = $triggers;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ExtensionUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|ExtensionTriggerCollection
     */
    public function getTriggers()
    {
        if (is_null($this->triggers)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ExtensionChangeTriggersAction::FIELD_TRIGGERS);
            if (is_null($data)) {
                return null;
            }
            $this->triggers = ExtensionTriggerCollection::fromArray($data);
        }

        return $this->triggers;
    }

    public function setTriggers(?ExtensionTriggerCollection $triggers): void
    {
        $this->triggers = $triggers;
    }
}
