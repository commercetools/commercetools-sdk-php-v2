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
final class SetLineItemDeactivatedAtChangeModel extends JsonObjectModel implements SetLineItemDeactivatedAtChange
{

    public const DISCRIMINATOR_VALUE = 'SetLineItemDeactivatedAtChange';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?string
     */
    protected $change;

    /**

     * @var ?ShoppingListLineItemValue
     */
    protected $lineItem;

    /**

     * @var ?string
     */
    protected $previousValue;

    /**

     * @var ?string
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?ShoppingListLineItemValue $lineItem = null,
        ?string $previousValue = null,
        ?string $nextValue = null
    ) {
        $this->change = $change;
        $this->lineItem = $lineItem;
        $this->previousValue = $previousValue;
        $this->nextValue = $nextValue;
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
     * <p>Update action for <code>setLineItemDeactivatedAt</code></p>
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

     * @return null|string
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->previousValue =  (string) $data;
        }

        return $this->previousValue;
    }

    /**

     * @return null|string
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->nextValue =  (string) $data;
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
     * @param ?string $previousValue
     */
    public function setPreviousValue(?string $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?string $nextValue
     */
    public function setNextValue(?string $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
