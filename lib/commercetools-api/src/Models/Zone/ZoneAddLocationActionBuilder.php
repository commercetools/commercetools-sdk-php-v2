<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ZoneAddLocationAction>
 */
final class ZoneAddLocationActionBuilder implements Builder
{
    /**
     * @var Location|?LocationBuilder
     */
    private $location;

    /**
     * @return null|Location
     */
    public function getLocation()
    {
        return $this->location instanceof LocationBuilder ? $this->location->build() : $this->location;
    }

    /**
     * @return $this
     */
    public function withLocation(?Location $location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLocationBuilder(?LocationBuilder $location)
    {
        $this->location = $location;

        return $this;
    }

    public function build(): ZoneAddLocationAction
    {
        return new ZoneAddLocationActionModel(
            ($this->location instanceof LocationBuilder ? $this->location->build() : $this->location)
        );
    }

    public static function of(): ZoneAddLocationActionBuilder
    {
        return new self();
    }
}
