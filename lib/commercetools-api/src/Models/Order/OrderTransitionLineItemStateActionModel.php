<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

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
final class OrderTransitionLineItemStateActionModel extends JsonObjectModel implements OrderTransitionLineItemStateAction
{
    public const DISCRIMINATOR_VALUE = 'transitionLineItemState';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $lineItemId;

    /**
     *
     * @var ?string
     */
    protected $lineItemKey;

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
        ?string $lineItemId = null,
        ?string $lineItemKey = null,
        ?int $quantity = null,
        ?StateResourceIdentifier $fromState = null,
        ?StateResourceIdentifier $toState = null,
        ?DateTimeImmutable $actualTransitionDate = null,
        ?string $action = null
    ) {
        $this->lineItemId = $lineItemId;
        $this->lineItemKey = $lineItemKey;
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
     * <p><code>id</code> of the <a href="ctp:api:type:LineItem">LineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *
     *
     * @return null|string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemId = (string) $data;
        }

        return $this->lineItemId;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:LineItem">LineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *
     *
     * @return null|string
     */
    public function getLineItemKey()
    {
        if (is_null($this->lineItemKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LINE_ITEM_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemKey = (string) $data;
        }

        return $this->lineItemKey;
    }

    /**
     * <p>Number of Line Items that should transition <a href="ctp:api:type:State">State</a>.</p>
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
     * <p><a href="ctp:api:type:State">State</a> the Line Item should transition from.</p>
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
     * <p><a href="ctp:api:type:State">State</a> the Line Item should transition to.</p>
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
     * <p>Date and time (UTC) to perform the <a href="ctp:api:type:State">State</a> transition.</p>
     *
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
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    /**
     * @param ?string $lineItemKey
     */
    public function setLineItemKey(?string $lineItemKey): void
    {
        $this->lineItemKey = $lineItemKey;
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
        if (isset($data[OrderTransitionLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE]) && $data[OrderTransitionLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE] instanceof \DateTimeImmutable) {
            $data[OrderTransitionLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE] = $data[OrderTransitionLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
