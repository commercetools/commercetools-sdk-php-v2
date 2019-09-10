<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\Builder;

/**
 * @implements Builder<TaxCategoryReference>
 */
final class TaxCategoryReferenceBuilder implements Builder
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
     * @var TaxCategory|?TaxCategoryBuilder
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
     * @return null|TaxCategory
     */
    public function getObj()
    {
        return $this->obj instanceof TaxCategoryBuilder ? $this->obj->build() : $this->obj;
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
            $this->typeId,
            $this->id,
            ($this->obj instanceof TaxCategoryBuilder ? $this->obj->build() : $this->obj)
        );
    }

    public static function of(): TaxCategoryReferenceBuilder
    {
        return new self();
    }
}
