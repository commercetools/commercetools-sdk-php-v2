<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TaxCategoryReference>
 */
final class TaxCategoryReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|TaxCategory|TaxCategoryBuilder
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
     * @return null|TaxCategory
     */
    public function getObj()
    {
        return $this->obj instanceof TaxCategoryBuilder ? $this->obj->build() : $this->obj;
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
    public function withObj(?TaxCategory $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObjBuilder(?TaxCategoryBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): TaxCategoryReference
    {
        return new TaxCategoryReferenceModel(
            $this->id,
            $this->obj instanceof TaxCategoryBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): TaxCategoryReferenceBuilder
    {
        return new self();
    }
}
