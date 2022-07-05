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
use Commercetools\History\Models\ChangeValue\CustomShippingMethodChangeValue;
use Commercetools\History\Models\ChangeValue\CustomShippingMethodChangeValueModel;

/**
 * @internal
 */
final class SetCustomShippingMethodChangeModel extends JsonObjectModel implements SetCustomShippingMethodChange
{

    public const DISCRIMINATOR_VALUE = 'SetCustomShippingMethodChange';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?string
     */
    protected $change;

    /**

     * @var ?CustomShippingMethodChangeValue
     */
    protected $nextValue;

    /**

     * @var ?CustomShippingMethodChangeValue
     */
    protected $previousValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?CustomShippingMethodChangeValue $nextValue = null,
        ?CustomShippingMethodChangeValue $previousValue = null
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
     * <p>Update action for <code>setCustomShippingMethod</code></p>
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

     * @return null|CustomShippingMethodChangeValue
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->nextValue =  CustomShippingMethodChangeValueModel::of($data);
        }

        return $this->nextValue;
    }

    /**

     * @return null|CustomShippingMethodChangeValue
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->previousValue =  CustomShippingMethodChangeValueModel::of($data);
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
     * @param ?CustomShippingMethodChangeValue $nextValue
     */
    public function setNextValue(?CustomShippingMethodChangeValue $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?CustomShippingMethodChangeValue $previousValue
     */
    public function setPreviousValue(?CustomShippingMethodChangeValue $previousValue): void
    {
        $this->previousValue = $previousValue;
    }



}
