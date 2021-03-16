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
 * @implements Builder<SetGeoLocationChange>
 */
final class SetGeoLocationChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|GeoLocation|GeoLocationBuilder
     */
    private $nextValue;

    /**
     * @var null|GeoLocation|GeoLocationBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setGeoLocation</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|GeoLocation
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof GeoLocationBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @return null|GeoLocation
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof GeoLocationBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?GeoLocation $nextValue
     * @return $this
     */
    public function withNextValue(?GeoLocation $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?GeoLocation $previousValue
     * @return $this
     */
    public function withPreviousValue(?GeoLocation $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?GeoLocationBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?GeoLocationBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): SetGeoLocationChange
    {
        return new SetGeoLocationChangeModel(
            $this->change,
            $this->nextValue instanceof GeoLocationBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof GeoLocationBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): SetGeoLocationChangeBuilder
    {
        return new self();
    }
}
