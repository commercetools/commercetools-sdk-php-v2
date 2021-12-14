<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ShippingMethodReference>
 */
final class ShippingMethodReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|ShippingMethod|ShippingMethodBuilder
     */
    private $obj;

    /**
     * <p>Unique ID of the referenced resource.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|ShippingMethod
     */
    public function getObj()
    {
        return $this->obj instanceof ShippingMethodBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?ShippingMethod $obj
     * @return $this
     */
    public function withObj(?ShippingMethod $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?ShippingMethodBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): ShippingMethodReference
    {
        return new ShippingMethodReferenceModel(
            $this->id,
            $this->obj instanceof ShippingMethodBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): ShippingMethodReferenceBuilder
    {
        return new self();
    }
}
