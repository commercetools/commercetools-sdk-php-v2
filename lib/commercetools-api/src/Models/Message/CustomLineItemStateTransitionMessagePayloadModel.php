<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class CustomLineItemStateTransitionMessagePayloadModel extends JsonObjectModel implements CustomLineItemStateTransitionMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'CustomLineItemStateTransition';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $customLineItemId;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $transitionDate;

    /**
     *
     * @var ?int
     */
    protected $quantity;

    /**
     *
     * @var ?StateReference
     */
    protected $fromState;

    /**
     *
     * @var ?StateReference
     */
    protected $toState;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $customLineItemId = null,
        ?DateTimeImmutable $transitionDate = null,
        ?int $quantity = null,
        ?StateReference $fromState = null,
        ?StateReference $toState = null,
        ?string $type = null
    ) {
        $this->customLineItemId = $customLineItemId;
        $this->transitionDate = $transitionDate;
        $this->quantity = $quantity;
        $this->fromState = $fromState;
        $this->toState = $toState;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:CustomLineItem">Custom Line Item</a>.</p>
     *
     *
     * @return null|string
     */
    public function getCustomLineItemId()
    {
        if (is_null($this->customLineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CUSTOM_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->customLineItemId = (string) $data;
        }

        return $this->customLineItemId;
    }

    /**
     * <p>Date and time (UTC) when the transition of the <a href="ctp:api:type:CustomLineItem">Custom Line Item</a> <a href="ctp:api:type:State">State</a> was performed.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getTransitionDate()
    {
        if (is_null($this->transitionDate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TRANSITION_DATE);
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
     * <p>Number of <a href="ctp:api:type:CustomLineItem">Custom Line Items</a> for which the <a href="ctp:api:type:State">State</a> was transitioned.</p>
     *
     *
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (int) $data;
        }

        return $this->quantity;
    }

    /**
     * <p><a href="ctp:api:type:State">State</a> the <a href="ctp:api:type:CustomLineItem">Custom Line Item</a> was transitioned from.</p>
     *
     *
     * @return null|StateReference
     */
    public function getFromState()
    {
        if (is_null($this->fromState)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FROM_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->fromState = StateReferenceModel::of($data);
        }

        return $this->fromState;
    }

    /**
     * <p><a href="ctp:api:type:State">State</a> the <a href="ctp:api:type:CustomLineItem">Custom Line Item</a> was transitioned to.</p>
     *
     *
     * @return null|StateReference
     */
    public function getToState()
    {
        if (is_null($this->toState)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TO_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->toState = StateReferenceModel::of($data);
        }

        return $this->toState;
    }


    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void
    {
        $this->customLineItemId = $customLineItemId;
    }

    /**
     * @param ?DateTimeImmutable $transitionDate
     */
    public function setTransitionDate(?DateTimeImmutable $transitionDate): void
    {
        $this->transitionDate = $transitionDate;
    }

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param ?StateReference $fromState
     */
    public function setFromState(?StateReference $fromState): void
    {
        $this->fromState = $fromState;
    }

    /**
     * @param ?StateReference $toState
     */
    public function setToState(?StateReference $toState): void
    {
        $this->toState = $toState;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[CustomLineItemStateTransitionMessagePayload::FIELD_TRANSITION_DATE]) && $data[CustomLineItemStateTransitionMessagePayload::FIELD_TRANSITION_DATE] instanceof \DateTimeImmutable) {
            $data[CustomLineItemStateTransitionMessagePayload::FIELD_TRANSITION_DATE] = $data[CustomLineItemStateTransitionMessagePayload::FIELD_TRANSITION_DATE]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
