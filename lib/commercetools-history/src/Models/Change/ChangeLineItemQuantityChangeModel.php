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
use Commercetools\History\Models\Common\LocalizedString;
use Commercetools\History\Models\Common\LocalizedStringModel;

/**
 * @internal
 */
final class ChangeLineItemQuantityChangeModel extends JsonObjectModel implements ChangeLineItemQuantityChange
{

    public const DISCRIMINATOR_VALUE = 'ChangeLineItemQuantityChange';
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
     * @var ?LocalizedString
     */
    protected $lineItem;

    /**
     *
     * @var ?string
     */
    protected $lineItemId;

    /**
     *
     * @var ?int
     */
    protected $nextValue;

    /**
     *
     * @var ?int
     */
    protected $previousValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?LocalizedString $lineItem = null,
        ?string $lineItemId = null,
        ?int $nextValue = null,
        ?int $previousValue = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->lineItem = $lineItem;
        $this->lineItemId = $lineItemId;
        $this->nextValue = $nextValue;
        $this->previousValue = $previousValue;
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
     * <p>Update action for <code>changeLineItemQuantity</code></p>
     *
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
     * @return null|LocalizedString
     */
    public function getLineItem()
    {
        if (is_null($this->lineItem)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LINE_ITEM);
            if (is_null($data)) {
                return null;
            }

            $this->lineItem =  LocalizedStringModel::of($data);
        }

        return $this->lineItem;
    }

    /**
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
            $this->lineItemId =  (string) $data;
        }

        return $this->lineItemId;
    }

    /**
     * <p>The amount of a LineItem in the cart. Must be a positive integer.</p>
     *
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
     * <p>The amount of a LineItem in the cart. Must be a positive integer.</p>
     *
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
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?LocalizedString $lineItem
     */
    public function setLineItem(?LocalizedString $lineItem): void
    {
        $this->lineItem = $lineItem;
    }

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    /**
     * @param ?int $nextValue
     */
    public function setNextValue(?int $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?int $previousValue
     */
    public function setPreviousValue(?int $previousValue): void
    {
        $this->previousValue = $previousValue;
    }



}
