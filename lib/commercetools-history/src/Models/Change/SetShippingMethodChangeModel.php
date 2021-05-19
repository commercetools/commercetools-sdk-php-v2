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
use Commercetools\History\Models\ChangeValue\ShippingMethodChangeValue;
use Commercetools\History\Models\ChangeValue\ShippingMethodChangeValueModel;

/**
 * @internal
 */
final class SetShippingMethodChangeModel extends JsonObjectModel implements SetShippingMethodChange
{

    public const DISCRIMINATOR_VALUE = 'SetShippingMethodChange';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $change;

    /**
     * @var ?ShippingMethodChangeValue
     */
    protected $nextValue;

    /**
     * @var ?ShippingMethodChangeValue
     */
    protected $previousValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?ShippingMethodChangeValue $nextValue = null,
        ?ShippingMethodChangeValue $previousValue = null
    ) {
        $this->change = $change;
        $this->nextValue = $nextValue;
        $this->previousValue = $previousValue;
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
     * <p>Update action for <code>setShippingMethod</code></p>
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
     * @return null|ShippingMethodChangeValue
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->nextValue =  ShippingMethodChangeValueModel::of($data);
        }

        return $this->nextValue;
    }

    /**
     * @return null|ShippingMethodChangeValue
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->previousValue =  ShippingMethodChangeValueModel::of($data);
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
     * @param ?ShippingMethodChangeValue $nextValue
     */
    public function setNextValue(?ShippingMethodChangeValue $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?ShippingMethodChangeValue $previousValue
     */
    public function setPreviousValue(?ShippingMethodChangeValue $previousValue): void
    {
        $this->previousValue = $previousValue;
    }



}
