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
use Commercetools\History\Models\Common\ReturnInfo;
use Commercetools\History\Models\Common\ReturnInfoBuilder;

/**
 * @implements Builder<SetReturnInfoChange>
 */
final class SetReturnInfoChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|ReturnInfo|ReturnInfoBuilder
     */
    private $previousValue;

    /**

     * @var null|ReturnInfo|ReturnInfoBuilder
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

     * @return null|ReturnInfo
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ReturnInfoBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ReturnInfo
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ReturnInfoBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?ReturnInfo $previousValue
     * @return $this
     */
    public function withPreviousValue(?ReturnInfo $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?ReturnInfo $nextValue
     * @return $this
     */
    public function withNextValue(?ReturnInfo $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?ReturnInfoBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?ReturnInfoBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetReturnInfoChange
    {
        return new SetReturnInfoChangeModel(
            $this->change,
            $this->previousValue instanceof ReturnInfoBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof ReturnInfoBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): SetReturnInfoChangeBuilder
    {
        return new self();
    }
}
