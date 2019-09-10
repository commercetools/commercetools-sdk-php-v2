<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\Builder;

/**
 * @implements Builder<StoreReference>
 */
final class StoreReferenceBuilder implements Builder
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
     * @var Store|?StoreBuilder
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
     * @return null|Store
     */
    public function getObj()
    {
        return $this->obj instanceof StoreBuilder ? $this->obj->build() : $this->obj;
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
    public function withObj(?Store $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObjBuilder(?StoreBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): StoreReference
    {
        return new StoreReferenceModel(
            $this->typeId,
            $this->id,
            ($this->obj instanceof StoreBuilder ? $this->obj->build() : $this->obj)
        );
    }

    public static function of(): StoreReferenceBuilder
    {
        return new self();
    }
}
