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
final class TransitionLineItemStateChangeModel extends JsonObjectModel implements TransitionLineItemStateChange
{

    public const DISCRIMINATOR_VALUE = 'TransitionLineItemStateChange';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $change;

    /**
     * @var ?string
     */
    protected $lineItemId;

    /**
     * @var ?string
     */
    protected $stateId;

    /**
     * @var ?ItemStateCollection
     */
    protected $nextValue;

    /**
     * @var ?ItemStateCollection
     */
    protected $previousValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?string $lineItemId = null,
        ?string $stateId = null,
        ?ItemStateCollection $nextValue = null,
        ?ItemStateCollection $previousValue = null
    ) {
        $this->change = $change;
        $this->lineItemId = $lineItemId;
        $this->stateId = $stateId;
        $this->nextValue = $nextValue;
        $this->previousValue = $previousValue;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
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
            $this->type =  (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Update action for <code>transitionLineItemState</code></p>
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
            $this->change =  (string) $data;
        }

        return $this->change;
    }

    /**
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
            $this->lineItemId =  (string) $data;
        }

        return $this->lineItemId;
    }

    /**
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
            $this->stateId =  (string) $data;
        }

        return $this->stateId;
    }

    /**
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
            $this->nextValue =  ItemStateCollection::fromArray($data);
        }

        return $this->nextValue;
    }

    /**
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
            $this->previousValue =  ItemStateCollection::fromArray($data);
        }

        return $this->previousValue;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
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

    /**
     * @param ?ItemStateCollection $nextValue
     */
    public function setNextValue(?ItemStateCollection $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?ItemStateCollection $previousValue
     */
    public function setPreviousValue(?ItemStateCollection $previousValue): void
    {
        $this->previousValue = $previousValue;
    }



}
