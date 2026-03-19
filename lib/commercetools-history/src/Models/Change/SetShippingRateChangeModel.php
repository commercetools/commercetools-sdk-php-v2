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
use Commercetools\History\Models\Common\ShippingRate;
use Commercetools\History\Models\Common\ShippingRateModel;

/**
 * @internal
 */
final class SetShippingRateChangeModel extends JsonObjectModel implements SetShippingRateChange
{

    public const DISCRIMINATOR_VALUE = 'SetShippingRateChange';
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
     * @var ?ShippingRate
     */
    protected $previousValue;

    /**
     *
     * @var ?ShippingRate
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?ShippingRate $previousValue = null,
        ?ShippingRate $nextValue = null,
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
     * @return null|ShippingRate
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->previousValue = ShippingRateModel::of($data);
        }

        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *
     *
     * @return null|ShippingRate
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->nextValue = ShippingRateModel::of($data);
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
     * @param ?ShippingRate $previousValue
     */
    public function setPreviousValue(?ShippingRate $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?ShippingRate $nextValue
     */
    public function setNextValue(?ShippingRate $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
