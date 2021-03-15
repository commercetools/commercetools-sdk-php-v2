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
 * @implements Builder<ChangeTargetAction>
 */
final class ChangeTargetActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|ChangeTargetActionValue|ChangeTargetActionValueBuilder
     */
    private $nextValue;

    /**
     * @var null|ChangeTargetActionValue|ChangeTargetActionValueBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>changeTarget</code> on cart discounts</p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|ChangeTargetActionValue
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ChangeTargetActionValueBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @return null|ChangeTargetActionValue
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ChangeTargetActionValueBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?ChangeTargetActionValue $nextValue
     * @return $this
     */
    public function withNextValue(?ChangeTargetActionValue $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?ChangeTargetActionValue $previousValue
     * @return $this
     */
    public function withPreviousValue(?ChangeTargetActionValue $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?ChangeTargetActionValueBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?ChangeTargetActionValueBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): ChangeTargetAction
    {
        return new ChangeTargetActionModel(
            $this->change,
            $this->nextValue instanceof ChangeTargetActionValueBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof ChangeTargetActionValueBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): ChangeTargetActionBuilder
    {
        return new self();
    }
}
