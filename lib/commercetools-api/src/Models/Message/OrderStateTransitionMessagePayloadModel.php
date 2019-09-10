<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class OrderStateTransitionMessagePayloadModel extends JsonObjectModel implements OrderStateTransitionMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderStateTransition';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?bool
     */
    protected $force;

    /**
     * @var ?StateReference
     */
    protected $state;

    public function __construct(
        string $type = null,
        bool $force = null,
        StateReference $state = null
    ) {
        $this->type = $type;
        $this->force = $force;
        $this->state = $state;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|bool
     */
    public function getForce()
    {
        if (is_null($this->force)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(OrderStateTransitionMessagePayload::FIELD_FORCE);
            if (is_null($data)) {
                return null;
            }
            $this->force = (bool) $data;
        }

        return $this->force;
    }

    /**
     * @return null|StateReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderStateTransitionMessagePayload::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateReferenceModel::of($data);
        }

        return $this->state;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setForce(?bool $force): void
    {
        $this->force = $force;
    }

    public function setState(?StateReference $state): void
    {
        $this->state = $state;
    }
}
