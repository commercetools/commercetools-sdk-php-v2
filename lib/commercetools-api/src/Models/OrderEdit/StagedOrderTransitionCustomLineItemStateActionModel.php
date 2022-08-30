<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class StagedOrderTransitionCustomLineItemStateActionModel extends JsonObjectModel implements StagedOrderTransitionCustomLineItemStateAction
{
    public const DISCRIMINATOR_VALUE = 'transitionCustomLineItemState';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $customLineItemId;

    /**
     *
     * @var ?int
     */
    protected $quantity;

    /**
     *
     * @var ?StateResourceIdentifier
     */
    protected $fromState;

    /**
     *
     * @var ?StateResourceIdentifier
     */
    protected $toState;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $actualTransitionDate;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $customLineItemId = null,
        ?int $quantity = null,
        ?StateResourceIdentifier $fromState = null,
        ?StateResourceIdentifier $toState = null,
        ?DateTimeImmutable $actualTransitionDate = null,
        ?string $action = null
    ) {
        $this->customLineItemId = $customLineItemId;
        $this->quantity = $quantity;
        $this->fromState = $fromState;
        $this->toState = $toState;
        $this->actualTransitionDate = $actualTransitionDate;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
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
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:State">State</a>.</p>
     *
     *
     * @return null|StateResourceIdentifier
     */
    public function getFromState()
    {
        if (is_null($this->fromState)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FROM_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->fromState = StateResourceIdentifierModel::of($data);
        }

        return $this->fromState;
    }

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:State">State</a>.</p>
     *
     *
     * @return null|StateResourceIdentifier
     */
    public function getToState()
    {
        if (is_null($this->toState)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TO_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->toState = StateResourceIdentifierModel::of($data);
        }

        return $this->toState;
    }

    /**
     *
     * @return null|DateTimeImmutable
     */
    public function getActualTransitionDate()
    {
        if (is_null($this->actualTransitionDate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTUAL_TRANSITION_DATE);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->actualTransitionDate = $data;
        }

        return $this->actualTransitionDate;
    }


    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void
    {
        $this->customLineItemId = $customLineItemId;
    }

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param ?StateResourceIdentifier $fromState
     */
    public function setFromState(?StateResourceIdentifier $fromState): void
    {
        $this->fromState = $fromState;
    }

    /**
     * @param ?StateResourceIdentifier $toState
     */
    public function setToState(?StateResourceIdentifier $toState): void
    {
        $this->toState = $toState;
    }

    /**
     * @param ?DateTimeImmutable $actualTransitionDate
     */
    public function setActualTransitionDate(?DateTimeImmutable $actualTransitionDate): void
    {
        $this->actualTransitionDate = $actualTransitionDate;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[StagedOrderTransitionCustomLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE]) && $data[StagedOrderTransitionCustomLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE] instanceof \DateTimeImmutable) {
            $data[StagedOrderTransitionCustomLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE] = $data[StagedOrderTransitionCustomLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
