<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ZoneRemoveLocationAction>
 */
final class ZoneRemoveLocationActionBuilder implements Builder
{
    /**

     * @var null|Location|LocationBuilder
     */
    private $location;

    /**
     * <p>Location to be removed from the Zone.</p>
     *

     * @return null|Location
     */
    public function getLocation()
    {
        return $this->location instanceof LocationBuilder ? $this->location->build() : $this->location;
    }

    /**
     * @param ?Location $location
     * @return $this
     */
    public function withLocation(?Location $location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @deprecated use withLocation() instead
     * @return $this
     */
    public function withLocationBuilder(?LocationBuilder $location)
    {
        $this->location = $location;

        return $this;
    }

    public function build(): ZoneRemoveLocationAction
    {
        return new ZoneRemoveLocationActionModel(
            $this->location instanceof LocationBuilder ? $this->location->build() : $this->location
        );
    }

    public static function of(): ZoneRemoveLocationActionBuilder
    {
        return new self();
    }
}
