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
    private $nextValue;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value after the change.</p>
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
     * @param ?Location $nextValue
     * @return $this
     */
    public function withNextValue(?Location $nextValue)
    {
        $this->nextValue = $nextValue;

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
            $this->nextValue instanceof LocationBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): AddLocationChangeBuilder
    {
        return new self();
    }
}
