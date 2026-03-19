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
use Commercetools\History\Models\Common\DiscountTypeCombination;
use Commercetools\History\Models\Common\DiscountTypeCombinationModel;

/**
 * @internal
 */
final class ChangeDiscountTypeCombinationChangeModel extends JsonObjectModel implements ChangeDiscountTypeCombinationChange
{

    public const DISCRIMINATOR_VALUE = 'ChangeDiscountTypeCombinationChange';
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
     * @var ?DiscountTypeCombination
     */
    protected $previousValue;

    /**
     *
     * @var ?DiscountTypeCombination
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?DiscountTypeCombination $previousValue = null,
        ?DiscountTypeCombination $nextValue = null,
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
     * @return null|DiscountTypeCombination
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = DiscountTypeCombinationModel::resolveDiscriminatorClass($data);
            $this->previousValue = $className::of($data);
        }

        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *
     *
     * @return null|DiscountTypeCombination
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = DiscountTypeCombinationModel::resolveDiscriminatorClass($data);
            $this->nextValue = $className::of($data);
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
     * @param ?DiscountTypeCombination $previousValue
     */
    public function setPreviousValue(?DiscountTypeCombination $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?DiscountTypeCombination $nextValue
     */
    public function setNextValue(?DiscountTypeCombination $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
