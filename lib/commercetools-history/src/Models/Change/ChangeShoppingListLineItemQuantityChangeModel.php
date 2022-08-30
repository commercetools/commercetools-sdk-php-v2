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
use Commercetools\History\Models\ChangeValue\ShoppingListLineItemValue;
use Commercetools\History\Models\ChangeValue\ShoppingListLineItemValueModel;

/**
 * @internal
 */
final class ChangeShoppingListLineItemQuantityChangeModel extends JsonObjectModel implements ChangeShoppingListLineItemQuantityChange
{

    public const DISCRIMINATOR_VALUE = 'ChangeShoppingListLineItemQuantityChange';
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
     * @var ?ShoppingListLineItemValue
     */
    protected $lineItem;

    /**
     *
     * @var ?int
     */
    protected $previousValue;

    /**
     *
     * @var ?int
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?ShoppingListLineItemValue $lineItem = null,
        ?int $previousValue = null,
        ?int $nextValue = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->lineItem = $lineItem;
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
     * @return null|ShoppingListLineItemValue
     */
    public function getLineItem()
    {
        if (is_null($this->lineItem)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LINE_ITEM);
            if (is_null($data)) {
                return null;
            }

            $this->lineItem =  ShoppingListLineItemValueModel::of($data);
        }

        return $this->lineItem;
    }

    /**
     *
     * @return null|int
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->previousValue =  (int) $data;
        }

        return $this->previousValue;
    }

    /**
     *
     * @return null|int
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->nextValue =  (int) $data;
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
     * @param ?ShoppingListLineItemValue $lineItem
     */
    public function setLineItem(?ShoppingListLineItemValue $lineItem): void
    {
        $this->lineItem = $lineItem;
    }

    /**
     * @param ?int $previousValue
     */
    public function setPreviousValue(?int $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?int $nextValue
     */
    public function setNextValue(?int $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
