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
use Commercetools\History\Models\Common\DiscountedLineItemPriceForQuantity;
use Commercetools\History\Models\Common\DiscountedLineItemPriceForQuantityModel;
use Commercetools\History\Models\Common\LocalizedString;
use Commercetools\History\Models\Common\LocalizedStringModel;

/**
 * @internal
 */
final class SetLineItemDiscountedPricePerQuantityChangeModel extends JsonObjectModel implements SetLineItemDiscountedPricePerQuantityChange
{

    public const DISCRIMINATOR_VALUE = 'SetLineItemDiscountedPricePerQuantityChange';
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
    protected $variant;

    /**
     *
     * @var ?DiscountedLineItemPriceForQuantity
     */
    protected $nextValue;

    /**
     *
     * @var ?DiscountedLineItemPriceForQuantity
     */
    protected $previousValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?LocalizedString $lineItem = null,
        ?string $variant = null,
        ?DiscountedLineItemPriceForQuantity $nextValue = null,
        ?DiscountedLineItemPriceForQuantity $previousValue = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->lineItem = $lineItem;
        $this->variant = $variant;
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
     * <p>Update action for <code>setLineItemDiscountedPricePerQuantity</code></p>
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
    public function getVariant()
    {
        if (is_null($this->variant)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VARIANT);
            if (is_null($data)) {
                return null;
            }
            $this->variant =  (string) $data;
        }

        return $this->variant;
    }

    /**
     *
     * @return null|DiscountedLineItemPriceForQuantity
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->nextValue =  DiscountedLineItemPriceForQuantityModel::of($data);
        }

        return $this->nextValue;
    }

    /**
     *
     * @return null|DiscountedLineItemPriceForQuantity
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->previousValue =  DiscountedLineItemPriceForQuantityModel::of($data);
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
     * @param ?string $variant
     */
    public function setVariant(?string $variant): void
    {
        $this->variant = $variant;
    }

    /**
     * @param ?DiscountedLineItemPriceForQuantity $nextValue
     */
    public function setNextValue(?DiscountedLineItemPriceForQuantity $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?DiscountedLineItemPriceForQuantity $previousValue
     */
    public function setPreviousValue(?DiscountedLineItemPriceForQuantity $previousValue): void
    {
        $this->previousValue = $previousValue;
    }



}
