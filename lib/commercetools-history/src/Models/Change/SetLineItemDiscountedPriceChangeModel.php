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
use Commercetools\History\Models\Common\DiscountedLineItemPrice;
use Commercetools\History\Models\Common\DiscountedLineItemPriceModel;
use Commercetools\History\Models\Common\LocalizedString;
use Commercetools\History\Models\Common\LocalizedStringModel;

/**
 * @internal
 */
final class SetLineItemDiscountedPriceChangeModel extends JsonObjectModel implements SetLineItemDiscountedPriceChange
{

    public const DISCRIMINATOR_VALUE = 'SetLineItemDiscountedPriceChange';
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
     * @var ?DiscountedLineItemPrice
     */
    protected $previousValue;

    /**
     *
     * @var ?DiscountedLineItemPrice
     */
    protected $nextValue;

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
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?DiscountedLineItemPrice $previousValue = null,
        ?DiscountedLineItemPrice $nextValue = null,
        ?LocalizedString $lineItem = null,
        ?string $variant = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->previousValue = $previousValue;
        $this->nextValue = $nextValue;
        $this->lineItem = $lineItem;
        $this->variant = $variant;
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
     * @return null|DiscountedLineItemPrice
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->previousValue = DiscountedLineItemPriceModel::of($data);
        }

        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *
     *
     * @return null|DiscountedLineItemPrice
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->nextValue = DiscountedLineItemPriceModel::of($data);
        }

        return $this->nextValue;
    }

    /**
     * <p>Name of the <a href="ctp:api:type:Product">Product</a> the Line Item is based on.</p>
     *
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

            $this->lineItem = LocalizedStringModel::of($data);
        }

        return $this->lineItem;
    }

    /**
     * <p><code>sku</code> or <code>key</code> of the updated <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *
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
            $this->variant = (string) $data;
        }

        return $this->variant;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?DiscountedLineItemPrice $previousValue
     */
    public function setPreviousValue(?DiscountedLineItemPrice $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?DiscountedLineItemPrice $nextValue
     */
    public function setNextValue(?DiscountedLineItemPrice $nextValue): void
    {
        $this->nextValue = $nextValue;
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



}
