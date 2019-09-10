<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ZoneUpdate>
 */
final class ZoneUpdateBuilder implements Builder
{
    /**
     * @var ?ZoneUpdateActionCollection
     */
    private $actions;

    /**
     * @var ?int
     */
    private $version;

    public function __construct()
    {
    }

    /**
     * @return null|ZoneUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return $this
     */
    public function withActions(?ZoneUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    public function build(): ZoneUpdate
    {
        return new ZoneUpdateModel(
            $this->actions,
            $this->version
        );
    }

    public static function of(): ZoneUpdateBuilder
    {
        return new self();
    }
}
