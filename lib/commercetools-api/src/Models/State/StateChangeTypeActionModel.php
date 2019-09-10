<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\JsonObjectModel;

final class StateChangeTypeActionModel extends JsonObjectModel implements StateChangeTypeAction
{
    const DISCRIMINATOR_VALUE = 'changeType';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $type;

    public function __construct(
        string $action = null,
        string $type = null
    ) {
        $this->action = $action;
        $this->type = $type;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StateUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StateChangeTypeAction::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }
}
