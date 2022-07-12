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
use Commercetools\History\Models\ChangeValue\ChangeTargetChangeValue;
use Commercetools\History\Models\ChangeValue\ChangeTargetChangeValueBuilder;

/**
 * @implements Builder<ChangeTargetChange>
 */
final class ChangeTargetChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|ChangeTargetChangeValue|ChangeTargetChangeValueBuilder
     */
    private $nextValue;

    /**

     * @var null|ChangeTargetChangeValue|ChangeTargetChangeValueBuilder
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

     * @return null|ChangeTargetChangeValue
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ChangeTargetChangeValueBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**

     * @return null|ChangeTargetChangeValue
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ChangeTargetChangeValueBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?ChangeTargetChangeValue $nextValue
     * @return $this
     */
    public function withNextValue(?ChangeTargetChangeValue $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?ChangeTargetChangeValue $previousValue
     * @return $this
     */
    public function withPreviousValue(?ChangeTargetChangeValue $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?ChangeTargetChangeValueBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?ChangeTargetChangeValueBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): ChangeTargetChange
    {
        return new ChangeTargetChangeModel(
            $this->change,
            $this->nextValue instanceof ChangeTargetChangeValueBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof ChangeTargetChangeValueBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): ChangeTargetChangeBuilder
    {
        return new self();
    }
}
