<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ShippingMethodReference>
 */
final class ShippingMethodReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $typeId;

    /**
     * @var ?string
     */
    private $id;

    /**
     * @var ShippingMethod|?ShippingMethodBuilder
     */
    private $obj;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
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
     * @return $this
     */
    public function withTypeId(?string $typeId)
    {
        $this->typeId = $typeId;

        return $this;
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
    public function withObj(?ShippingMethod $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
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
            $this->typeId,
            $this->id,
            ($this->obj instanceof ShippingMethodBuilder ? $this->obj->build() : $this->obj)
        );
    }

    public static function of(): ShippingMethodReferenceBuilder
    {
        return new self();
    }
}
