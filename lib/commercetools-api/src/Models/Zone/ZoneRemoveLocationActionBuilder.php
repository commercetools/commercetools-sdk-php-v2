<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ZoneRemoveLocationAction>
 */
final class ZoneRemoveLocationActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var Location|?LocationBuilder
     */
    private $location;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

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
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
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

    public function build(): ZoneRemoveLocationAction
    {
        return new ZoneRemoveLocationActionModel(
            $this->action,
            ($this->location instanceof LocationBuilder ? $this->location->build() : $this->location)
        );
    }

    public static function of(): ZoneRemoveLocationActionBuilder
    {
        return new self();
    }
}
