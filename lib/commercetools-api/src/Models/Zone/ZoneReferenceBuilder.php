<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * @var null|Zone|ZoneBuilder
     */
    private $obj;

    /**
     * <p>Unique ID of the referenced <a href="ctp:api:type:Zone">Zone</a>.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Contains the representation of the expanded Zone. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for Zones.</p>
     *
     * @return null|Zone
     */
    public function getObj()
    {
        return $this->obj instanceof ZoneBuilder ? $this->obj->build() : $this->obj;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?Zone $obj
     * @return $this
     */
    public function withObj(?Zone $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
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
            $this->obj instanceof ZoneBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): ZoneReferenceBuilder
    {
        return new self();
    }
}
