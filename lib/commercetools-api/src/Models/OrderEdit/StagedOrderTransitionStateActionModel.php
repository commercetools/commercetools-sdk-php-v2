<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class StagedOrderTransitionStateActionModel extends JsonObjectModel implements StagedOrderTransitionStateAction
{
    const DISCRIMINATOR_VALUE = 'transitionState';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?bool
     */
    protected $force;

    /**
     * @var ?StateResourceIdentifier
     */
    protected $state;

    public function __construct(
        bool $force = null,
        StateResourceIdentifier $state = null
    ) {
        $this->force = $force;
        $this->state = $state;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderUpdateAction::FIELD_ACTION);
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
    public function getForce()
    {
        if (is_null($this->force)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(StagedOrderTransitionStateAction::FIELD_FORCE);
            if (is_null($data)) {
                return null;
            }
            $this->force = (bool) $data;
        }

        return $this->force;
    }

    /**
     * @return null|StateResourceIdentifier
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(StagedOrderTransitionStateAction::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateResourceIdentifierModel::of($data);
        }

        return $this->state;
    }

    public function setForce(?bool $force): void
    {
        $this->force = $force;
    }

    public function setState(?StateResourceIdentifier $state): void
    {
        $this->state = $state;
    }
}
