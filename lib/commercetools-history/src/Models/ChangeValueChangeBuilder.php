<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ChangeValueChange>
 */
final class ChangeValueChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|ChangeValueChangeValue|ChangeValueChangeValueBuilder
     */
    private $nextValue;

    /**
     * @var null|ChangeValueChangeValue|ChangeValueChangeValueBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>changeValue</code> on cart discounts and product discounts</p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|ChangeValueChangeValue
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ChangeValueChangeValueBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @return null|ChangeValueChangeValue
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ChangeValueChangeValueBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?ChangeValueChangeValue $nextValue
     * @return $this
     */
    public function withNextValue(?ChangeValueChangeValue $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?ChangeValueChangeValue $previousValue
     * @return $this
     */
    public function withPreviousValue(?ChangeValueChangeValue $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?ChangeValueChangeValueBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?ChangeValueChangeValueBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): ChangeValueChange
    {
        return new ChangeValueChangeModel(
            $this->change,
            $this->nextValue instanceof ChangeValueChangeValueBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof ChangeValueChangeValueBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): ChangeValueChangeBuilder
    {
        return new self();
    }
}
