<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountCodeReference>
 */
final class DiscountCodeReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|DiscountCode|DiscountCodeBuilder
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
     * @return null|DiscountCode
     */
    public function getObj()
    {
        return $this->obj instanceof DiscountCodeBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?DiscountCode $obj
     * @return $this
     */
    public function withObj(?DiscountCode $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
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
            $this->id,
            $this->obj instanceof DiscountCodeBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): DiscountCodeReferenceBuilder
    {
        return new self();
    }
}
