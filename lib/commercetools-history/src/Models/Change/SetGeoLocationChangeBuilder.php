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
use Commercetools\History\Models\Common\GeoLocation;
use Commercetools\History\Models\Common\GeoLocationBuilder;

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
    private $previousValue;

    /**

     * @var null|GeoLocation|GeoLocationBuilder
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

     * @return null|GeoLocation
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof GeoLocationBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|GeoLocation
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof GeoLocationBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?GeoLocation $previousValue
     * @return $this
     */
    public function withPreviousValue(?GeoLocation $previousValue)
    {
        $this->previousValue = $previousValue;

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
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?GeoLocationBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?GeoLocationBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetGeoLocationChange
    {
        return new SetGeoLocationChangeModel(
            $this->change,
            $this->previousValue instanceof GeoLocationBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof GeoLocationBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): SetGeoLocationChangeBuilder
    {
        return new self();
    }
}
