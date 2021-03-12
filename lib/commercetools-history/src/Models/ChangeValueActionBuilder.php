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
 * @implements Builder<ChangeValueAction>
 */
final class ChangeValueActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|ChangeValueActionValue|ChangeValueActionValueBuilder
     */
    private $nextValue;

    /**
     * @var null|ChangeValueActionValue|ChangeValueActionValueBuilder
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
     * @return null|ChangeValueActionValue
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ChangeValueActionValueBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @return null|ChangeValueActionValue
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ChangeValueActionValueBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?ChangeValueActionValue $nextValue
     * @return $this
     */
    public function withNextValue(?ChangeValueActionValue $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?ChangeValueActionValue $previousValue
     * @return $this
     */
    public function withPreviousValue(?ChangeValueActionValue $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?ChangeValueActionValueBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?ChangeValueActionValueBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): ChangeValueAction
    {
        return new ChangeValueActionModel(
            $this->change,
            $this->nextValue instanceof ChangeValueActionValueBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof ChangeValueActionValueBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): ChangeValueActionBuilder
    {
        return new self();
    }
}
