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
 * @implements Builder<SetValidFromAndUntilChange>
 */
final class SetValidFromAndUntilChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|ValidFromAndUntilValue|ValidFromAndUntilValueBuilder
     */
    private $previousValue;

    /**
     * @var null|ValidFromAndUntilValue|ValidFromAndUntilValueBuilder
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
     * <p>Shape of the value for <code>setValidFromAndUntil</code> action</p>
     *
     * @return null|ValidFromAndUntilValue
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ValidFromAndUntilValueBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Shape of the value for <code>setValidFromAndUntil</code> action</p>
     *
     * @return null|ValidFromAndUntilValue
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ValidFromAndUntilValueBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?ValidFromAndUntilValue $previousValue
     * @return $this
     */
    public function withPreviousValue(?ValidFromAndUntilValue $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?ValidFromAndUntilValue $nextValue
     * @return $this
     */
    public function withNextValue(?ValidFromAndUntilValue $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?ValidFromAndUntilValueBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?ValidFromAndUntilValueBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetValidFromAndUntilChange
    {
        return new SetValidFromAndUntilChangeModel(
            $this->change,
            $this->previousValue instanceof ValidFromAndUntilValueBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof ValidFromAndUntilValueBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): SetValidFromAndUntilChangeBuilder
    {
        return new self();
    }
}
