<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerReference>
 */
final class CustomerReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|Customer|CustomerBuilder
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
     * @return null|Customer
     */
    public function getObj()
    {
        return $this->obj instanceof CustomerBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?Customer $obj
     * @return $this
     */
    public function withObj(?Customer $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?CustomerBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): CustomerReference
    {
        return new CustomerReferenceModel(
            $this->id,
            $this->obj instanceof CustomerBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): CustomerReferenceBuilder
    {
        return new self();
    }
}
