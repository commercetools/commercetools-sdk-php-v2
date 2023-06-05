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
use Commercetools\History\Models\Common\TaxedPrice;
use Commercetools\History\Models\Common\TaxedPriceModel;

/**
 * @internal
 */
final class SetShippingInfoTaxedPriceChangeModel extends JsonObjectModel implements SetShippingInfoTaxedPriceChange
{

    public const DISCRIMINATOR_VALUE = 'SetShippingInfoTaxedPriceChange';
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
     * @var ?TaxedPrice
     */
    protected $nextValue;

    /**
     *
     * @var ?TaxedPrice
     */
    protected $previousValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?TaxedPrice $nextValue = null,
        ?TaxedPrice $previousValue = null,
        ?string $type = null
    ) {
        $this->change = $change;
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
     * <p>Update action for <code>setShippingInfoTaxedPrice</code></p>
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
     * @return null|TaxedPrice
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->nextValue = TaxedPriceModel::of($data);
        }

        return $this->nextValue;
    }

    /**
     *
     * @return null|TaxedPrice
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->previousValue = TaxedPriceModel::of($data);
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
     * @param ?TaxedPrice $nextValue
     */
    public function setNextValue(?TaxedPrice $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?TaxedPrice $previousValue
     */
    public function setPreviousValue(?TaxedPrice $previousValue): void
    {
        $this->previousValue = $previousValue;
    }



}
