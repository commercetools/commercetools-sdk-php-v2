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
use Commercetools\History\Models\Common\Price;
use Commercetools\History\Models\Common\PriceModel;

/**
 * @internal
 */
final class SetLineItemPriceChangeModel extends JsonObjectModel implements SetLineItemPriceChange
{

    public const DISCRIMINATOR_VALUE = 'SetLineItemPriceChange';
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
     * @var ?Price
     */
    protected $nextValue;

    /**
     *
     * @var ?Price
     */
    protected $previousValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?LocalizedString $lineItem = null,
        ?Price $nextValue = null,
        ?Price $previousValue = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->lineItem = $lineItem;
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
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Update action for <code>setLineItemPrice</code></p>
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
            $this->change = (string) $data;
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

            $this->lineItem = LocalizedStringModel::of($data);
        }

        return $this->lineItem;
    }

    /**
     *
     * @return null|Price
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->nextValue = PriceModel::of($data);
        }

        return $this->nextValue;
    }

    /**
     *
     * @return null|Price
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->previousValue = PriceModel::of($data);
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
     * @param ?Price $nextValue
     */
    public function setNextValue(?Price $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?Price $previousValue
     */
    public function setPreviousValue(?Price $previousValue): void
    {
        $this->previousValue = $previousValue;
    }



}
