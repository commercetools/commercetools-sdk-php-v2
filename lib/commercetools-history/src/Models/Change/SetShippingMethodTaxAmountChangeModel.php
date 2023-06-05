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
use Commercetools\History\Models\ChangeValue\ShippingMethodTaxAmountChangeValue;
use Commercetools\History\Models\ChangeValue\ShippingMethodTaxAmountChangeValueModel;

/**
 * @internal
 */
final class SetShippingMethodTaxAmountChangeModel extends JsonObjectModel implements SetShippingMethodTaxAmountChange
{

    public const DISCRIMINATOR_VALUE = 'SetShippingMethodTaxAmountChange';
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
     * @var ?ShippingMethodTaxAmountChangeValue
     */
    protected $nextValue;

    /**
     *
     * @var ?ShippingMethodTaxAmountChangeValue
     */
    protected $previousValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?string $taxMode = null,
        ?ShippingMethodTaxAmountChangeValue $nextValue = null,
        ?ShippingMethodTaxAmountChangeValue $previousValue = null,
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
     * <p>Update action for <code>setShippingMethodTaxAmount</code></p>
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
     * @return null|ShippingMethodTaxAmountChangeValue
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->nextValue = ShippingMethodTaxAmountChangeValueModel::of($data);
        }

        return $this->nextValue;
    }

    /**
     *
     * @return null|ShippingMethodTaxAmountChangeValue
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->previousValue = ShippingMethodTaxAmountChangeValueModel::of($data);
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
     * @param ?ShippingMethodTaxAmountChangeValue $nextValue
     */
    public function setNextValue(?ShippingMethodTaxAmountChangeValue $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?ShippingMethodTaxAmountChangeValue $previousValue
     */
    public function setPreviousValue(?ShippingMethodTaxAmountChangeValue $previousValue): void
    {
        $this->previousValue = $previousValue;
    }



}
