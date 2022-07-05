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
use Commercetools\History\Models\Common\Location;
use Commercetools\History\Models\Common\LocationBuilder;

/**
 * @implements Builder<AddLocationChange>
 */
final class AddLocationChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|Location|LocationBuilder
     */
    private $previousValue;

    /**

     * @var null|Location|LocationBuilder
     */
    private $nextValue;

    /**
     * <p>Update action for <code>addLocation</code> on zones</p>
     *

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Shape of the value for <code>addLocation</code> and <code>removeLocation</code> actions</p>
     *

     * @return null|Location
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof LocationBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Shape of the value for <code>addLocation</code> and <code>removeLocation</code> actions</p>
     *

     * @return null|Location
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof LocationBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?Location $previousValue
     * @return $this
     */
    public function withPreviousValue(?Location $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?Location $nextValue
     * @return $this
     */
    public function withNextValue(?Location $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?LocationBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?LocationBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): AddLocationChange
    {
        return new AddLocationChangeModel(
            $this->change,
            $this->previousValue instanceof LocationBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof LocationBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): AddLocationChangeBuilder
    {
        return new self();
    }
}
