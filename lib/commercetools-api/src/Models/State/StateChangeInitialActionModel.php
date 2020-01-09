<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\JsonObjectModel;

final class StateChangeInitialActionModel extends JsonObjectModel implements StateChangeInitialAction
{
    const DISCRIMINATOR_VALUE = 'changeInitial';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?bool
     */
    protected $initial;

    public function __construct(
        bool $initial = null
    ) {
        $this->initial = $initial;
        $this->action = static::DISCRIMINATOR_VALUE;
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
     * @return null|bool
     */
    public function getInitial()
    {
        if (is_null($this->initial)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(StateChangeInitialAction::FIELD_INITIAL);
            if (is_null($data)) {
                return null;
            }
            $this->initial = (bool) $data;
        }

        return $this->initial;
    }

    public function setInitial(?bool $initial): void
    {
        $this->initial = $initial;
    }
}
