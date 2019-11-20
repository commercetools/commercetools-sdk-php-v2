<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ZoneReference>
 */
final class ZoneReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var Zone|?ZoneBuilder
     */
    private $obj;

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|Zone
     */
    public function getObj()
    {
        return $this->obj instanceof ZoneBuilder ? $this->obj->build() : $this->obj;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObj(?Zone $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObjBuilder(?ZoneBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): ZoneReference
    {
        return new ZoneReferenceModel(
            $this->id,
            ($this->obj instanceof ZoneBuilder ? $this->obj->build() : $this->obj)
        );
    }

    public static function of(): ZoneReferenceBuilder
    {
        return new self();
    }
}
