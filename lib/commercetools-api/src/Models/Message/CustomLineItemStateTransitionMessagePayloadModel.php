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
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class CustomLineItemStateTransitionMessagePayloadModel extends JsonObjectModel implements CustomLineItemStateTransitionMessagePayload
{
    const DISCRIMINATOR_VALUE = 'CustomLineItemStateTransition';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $customLineItemId;

    /**
     * @var ?DateTimeImmutable
     */
    protected $transitionDate;

    /**
     * @var ?int
     */
    protected $quantity;

    /**
     * @var ?StateReference
     */
    protected $fromState;

    /**
     * @var ?StateReference
     */
    protected $toState;

    public function __construct(
        string $customLineItemId = null,
        DateTimeImmutable $transitionDate = null,
        int $quantity = null,
        StateReference $fromState = null,
        StateReference $toState = null
    ) {
        $this->customLineItemId = $customLineItemId;
        $this->transitionDate = $transitionDate;
        $this->quantity = $quantity;
        $this->fromState = $fromState;
        $this->toState = $toState;
        $this->type = static::DISCRIMINATOR_VALUE;
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
     * @return null|string
     */
    public function getCustomLineItemId()
    {
        if (is_null($this->customLineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomLineItemStateTransitionMessagePayload::FIELD_CUSTOM_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->customLineItemId = (string) $data;
        }

        return $this->customLineItemId;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getTransitionDate()
    {
        if (is_null($this->transitionDate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomLineItemStateTransitionMessagePayload::FIELD_TRANSITION_DATE);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->transitionDate = $data;
        }

        return $this->transitionDate;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(CustomLineItemStateTransitionMessagePayload::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (int) $data;
        }

        return $this->quantity;
    }

    /**
     * @return null|StateReference
     */
    public function getFromState()
    {
        if (is_null($this->fromState)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CustomLineItemStateTransitionMessagePayload::FIELD_FROM_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->fromState = StateReferenceModel::of($data);
        }

        return $this->fromState;
    }

    /**
     * @return null|StateReference
     */
    public function getToState()
    {
        if (is_null($this->toState)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CustomLineItemStateTransitionMessagePayload::FIELD_TO_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->toState = StateReferenceModel::of($data);
        }

        return $this->toState;
    }

    public function setCustomLineItemId(?string $customLineItemId): void
    {
        $this->customLineItemId = $customLineItemId;
    }

    public function setTransitionDate(?DateTimeImmutable $transitionDate): void
    {
        $this->transitionDate = $transitionDate;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function setFromState(?StateReference $fromState): void
    {
        $this->fromState = $fromState;
    }

    public function setToState(?StateReference $toState): void
    {
        $this->toState = $toState;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[CustomLineItemStateTransitionMessagePayload::FIELD_TRANSITION_DATE]) && $data[CustomLineItemStateTransitionMessagePayload::FIELD_TRANSITION_DATE] instanceof \DateTimeImmutable) {
            $data[CustomLineItemStateTransitionMessagePayload::FIELD_TRANSITION_DATE] = $data[CustomLineItemStateTransitionMessagePayload::FIELD_TRANSITION_DATE]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
