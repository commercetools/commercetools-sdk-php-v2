<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\ItemStateCollection;

/**
 * @internal
 */
final class TransitionCustomLineItemStateChangeModel extends JsonObjectModel implements TransitionCustomLineItemStateChange
{

    public const DISCRIMINATOR_VALUE = 'TransitionCustomLineItemStateChange';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $change;

    /**
     *
     * @var ?ItemStateCollection
     */
    protected $previousValue;

    /**
     *
     * @var ?ItemStateCollection
     */
    protected $nextValue;

    /**
     *
     * @var ?string
     */
    protected $lineItemId;

    /**
     *
     * @var ?string
     */
    protected $stateId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?ItemStateCollection $previousValue = null,
        ?ItemStateCollection $nextValue = null,
        ?string $lineItemId = null,
        ?string $stateId = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->previousValue = $previousValue;
        $this->nextValue = $nextValue;
        $this->lineItemId = $lineItemId;
        $this->stateId = $stateId;
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
     *
     * @return null|string
     */
    public function getChange()
    {
        if (is_null($this->change)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CHANGE);
            if (is_null($data)) {
                return null;
            }
            $this->change = (string) $data;
        }

        return $this->change;
    }

    /**
     * <p>Value before the change.</p>
     *
     *
     * @return null|ItemStateCollection
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->previousValue = ItemStateCollection::fromArray($data);
        }

        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *
     *
     * @return null|ItemStateCollection
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->nextValue = ItemStateCollection::fromArray($data);
        }

        return $this->nextValue;
    }

    /**
     * <p><code>id</code> of the updated <a href="ctp:api:type:CustomLineItem">CustomLineItem</a>.</p>
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
     * <p><code>id</code> of the <a href="ctp:api:type:State">State</a> involved in the transition.</p>
     *
     *
     * @return null|string
     */
    public function getStateId()
    {
        if (is_null($this->stateId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STATE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->stateId = (string) $data;
        }

        return $this->stateId;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?ItemStateCollection $previousValue
     */
    public function setPreviousValue(?ItemStateCollection $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?ItemStateCollection $nextValue
     */
    public function setNextValue(?ItemStateCollection $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    /**
     * @param ?string $stateId
     */
    public function setStateId(?string $stateId): void
    {
        $this->stateId = $stateId;
    }



}
