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
use Commercetools\History\Models\ChangeValue\SetCartClassificationShippingRateInputValue;
use Commercetools\History\Models\ChangeValue\SetCartClassificationShippingRateInputValueModel;
use Commercetools\History\Models\ChangeValue\SetCartScoreShippingRateInputValue;
use Commercetools\History\Models\ChangeValue\SetCartScoreShippingRateInputValueModel;

/**
 * @internal
 */
final class SetShippingRateInputChangeModel extends JsonObjectModel implements SetShippingRateInputChange
{

    public const DISCRIMINATOR_VALUE = 'SetShippingRateInputChange';
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
     * @var ?mixed
     */
    protected $nextValue;

    /**
     *
     * @var ?mixed
     */
    protected $previousValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?JsonObject $nextValue = null,
        ?JsonObject $previousValue = null,
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
            $this->type =  (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Update action for <code>setShippingRateInput</code></p>
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
     * @return ?mixed
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var ?mixed $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->nextValue = $data;
        }

        return $this->nextValue;
    }

    /**
     *
     * @return ?mixed
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var ?mixed $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->previousValue = $data;
        }

        return $this->previousValue;
    }

    /**
     * @return null|SetCartClassificationShippingRateInputValue
     */
    public function getNextValueAsSetCartClassificationShippingRateInputValue()
    {
        /** @psalm-var stdClass|array<string, mixed>|null $data */
        $data = $this->raw(self::FIELD_NEXT_VALUE);
        if (is_null($data)) {
            return null;
        }

        return SetCartClassificationShippingRateInputValueModel::of($data);
    }

    /**
     * @return null|SetCartScoreShippingRateInputValue
     */
    public function getNextValueAsSetCartScoreShippingRateInputValue()
    {
        /** @psalm-var stdClass|array<string, mixed>|null $data */
        $data = $this->raw(self::FIELD_NEXT_VALUE);
        if (is_null($data)) {
            return null;
        }

        return SetCartScoreShippingRateInputValueModel::of($data);
    }

    /**
     * @return null|SetCartClassificationShippingRateInputValue
     */
    public function getPreviousValueAsSetCartClassificationShippingRateInputValue()
    {
        /** @psalm-var stdClass|array<string, mixed>|null $data */
        $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
        if (is_null($data)) {
            return null;
        }

        return SetCartClassificationShippingRateInputValueModel::of($data);
    }

    /**
     * @return null|SetCartScoreShippingRateInputValue
     */
    public function getPreviousValueAsSetCartScoreShippingRateInputValue()
    {
        /** @psalm-var stdClass|array<string, mixed>|null $data */
        $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
        if (is_null($data)) {
            return null;
        }

        return SetCartScoreShippingRateInputValueModel::of($data);
    }

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?JsonObject $nextValue
     */
    public function setNextValue(?JsonObject $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?JsonObject $previousValue
     */
    public function setPreviousValue(?JsonObject $previousValue): void
    {
        $this->previousValue = $previousValue;
    }



}
