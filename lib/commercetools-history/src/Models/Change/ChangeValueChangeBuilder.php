<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\ChangeValue\ChangeValueChangeValue;
use Commercetools\History\Models\ChangeValue\ChangeValueChangeValueBuilder;

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
    private $previousValue;

    /**

     * @var null|ChangeValueChangeValue|ChangeValueChangeValueBuilder
     */
    private $nextValue;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|ChangeValueChangeValue
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ChangeValueChangeValueBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ChangeValueChangeValue
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ChangeValueChangeValueBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?ChangeValueChangeValue $previousValue
     * @return $this
     */
    public function withPreviousValue(?ChangeValueChangeValue $previousValue)
    {
        $this->previousValue = $previousValue;

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
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?ChangeValueChangeValueBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?ChangeValueChangeValueBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): ChangeValueChange
    {
        return new ChangeValueChangeModel(
            $this->change,
            $this->previousValue instanceof ChangeValueChangeValueBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof ChangeValueChangeValueBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): ChangeValueChangeBuilder
    {
        return new self();
    }
}
