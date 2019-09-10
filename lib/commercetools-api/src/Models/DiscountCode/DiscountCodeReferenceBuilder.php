<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;

/**
 * @implements Builder<DiscountCodeReference>
 */
final class DiscountCodeReferenceBuilder implements Builder
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
     * @var DiscountCode|?DiscountCodeBuilder
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
     * @return null|DiscountCode
     */
    public function getObj()
    {
        return $this->obj instanceof DiscountCodeBuilder ? $this->obj->build() : $this->obj;
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
    public function withObj(?DiscountCode $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObjBuilder(?DiscountCodeBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): DiscountCodeReference
    {
        return new DiscountCodeReferenceModel(
            $this->typeId,
            $this->id,
            ($this->obj instanceof DiscountCodeBuilder ? $this->obj->build() : $this->obj)
        );
    }

    public static function of(): DiscountCodeReferenceBuilder
    {
        return new self();
    }
}
