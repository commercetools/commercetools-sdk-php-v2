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
use Commercetools\History\Models\ChangeValue\ShoppingListLineItemValueCollection;

/**
 * @internal
 */
final class ChangeShoppingListLineItemsOrderChangeModel extends JsonObjectModel implements ChangeShoppingListLineItemsOrderChange
{

    public const DISCRIMINATOR_VALUE = 'ChangeShoppingListLineItemsOrderChange';
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
     * @var ?ShoppingListLineItemValueCollection
     */
    protected $previousValue;

    /**
     *
     * @var ?ShoppingListLineItemValueCollection
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?ShoppingListLineItemValueCollection $previousValue = null,
        ?ShoppingListLineItemValueCollection $nextValue = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->previousValue = $previousValue;
        $this->nextValue = $nextValue;
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
            $this->type =  (string) $data;
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
            $this->change =  (string) $data;
        }

        return $this->change;
    }

    /**
     *
     * @return null|ShoppingListLineItemValueCollection
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->previousValue =  ShoppingListLineItemValueCollection::fromArray($data);
        }

        return $this->previousValue;
    }

    /**
     *
     * @return null|ShoppingListLineItemValueCollection
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->nextValue =  ShoppingListLineItemValueCollection::fromArray($data);
        }

        return $this->nextValue;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?ShoppingListLineItemValueCollection $previousValue
     */
    public function setPreviousValue(?ShoppingListLineItemValueCollection $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?ShoppingListLineItemValueCollection $nextValue
     */
    public function setNextValue(?ShoppingListLineItemValueCollection $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
