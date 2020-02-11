<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;

/**
 * @implements Builder<CategoryReference>
 */
final class CategoryReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|Category|CategoryBuilder
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
     * @return null|Category
     */
    public function getObj()
    {
        return $this->obj instanceof CategoryBuilder ? $this->obj->build() : $this->obj;
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
    public function withObj(?Category $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObjBuilder(?CategoryBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): CategoryReference
    {
        return new CategoryReferenceModel(
            $this->id,
            $this->obj instanceof CategoryBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): CategoryReferenceBuilder
    {
        return new self();
    }
}
