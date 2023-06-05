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
use Commercetools\History\Models\Common\TaxedItemPrice;
use Commercetools\History\Models\Common\TaxedItemPriceModel;

/**
 * @internal
 */
final class SetOrderTaxedPriceChangeModel extends JsonObjectModel implements SetOrderTaxedPriceChange
{

    public const DISCRIMINATOR_VALUE = 'SetOrderTaxedPriceChange';
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
     * @var ?string
     */
    protected $taxMode;

    /**
     *
     * @var ?TaxedItemPrice
     */
    protected $nextValue;

    /**
     *
     * @var ?TaxedItemPrice
     */
    protected $previousValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?string $taxMode = null,
        ?TaxedItemPrice $nextValue = null,
        ?TaxedItemPrice $previousValue = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->taxMode = $taxMode;
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
     * <p>Update action for <code>setOrderTaxedPrice</code></p>
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
     * @return null|string
     */
    public function getTaxMode()
    {
        if (is_null($this->taxMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TAX_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->taxMode = (string) $data;
        }

        return $this->taxMode;
    }

    /**
     *
     * @return null|TaxedItemPrice
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->nextValue = TaxedItemPriceModel::of($data);
        }

        return $this->nextValue;
    }

    /**
     *
     * @return null|TaxedItemPrice
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->previousValue = TaxedItemPriceModel::of($data);
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
     * @param ?string $taxMode
     */
    public function setTaxMode(?string $taxMode): void
    {
        $this->taxMode = $taxMode;
    }

    /**
     * @param ?TaxedItemPrice $nextValue
     */
    public function setNextValue(?TaxedItemPrice $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?TaxedItemPrice $previousValue
     */
    public function setPreviousValue(?TaxedItemPrice $previousValue): void
    {
        $this->previousValue = $previousValue;
    }



}
