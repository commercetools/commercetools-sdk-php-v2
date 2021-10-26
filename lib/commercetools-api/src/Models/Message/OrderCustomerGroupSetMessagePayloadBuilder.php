<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderCustomerGroupSetMessagePayload>
 */
final class OrderCustomerGroupSetMessagePayloadBuilder implements Builder
{
    /**
     * @var null|CustomerGroupReference|CustomerGroupReferenceBuilder
     */
    private $customerGroup;

    /**
     * @var null|CustomerGroupReference|CustomerGroupReferenceBuilder
     */
    private $oldCustomerGroup;

    /**
     * <p><a href="/types#reference">Reference</a> to a <a href="ctp:api:type:CustomerGroup">CustomerGroup</a>.</p>
     *
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * <p><a href="/types#reference">Reference</a> to a <a href="ctp:api:type:CustomerGroup">CustomerGroup</a>.</p>
     *
     * @return null|CustomerGroupReference
     */
    public function getOldCustomerGroup()
    {
        return $this->oldCustomerGroup instanceof CustomerGroupReferenceBuilder ? $this->oldCustomerGroup->build() : $this->oldCustomerGroup;
    }

    /**
     * @param ?CustomerGroupReference $customerGroup
     * @return $this
     */
    public function withCustomerGroup(?CustomerGroupReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @param ?CustomerGroupReference $oldCustomerGroup
     * @return $this
     */
    public function withOldCustomerGroup(?CustomerGroupReference $oldCustomerGroup)
    {
        $this->oldCustomerGroup = $oldCustomerGroup;

        return $this;
    }

    /**
     * @deprecated use withCustomerGroup() instead
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupReferenceBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @deprecated use withOldCustomerGroup() instead
     * @return $this
     */
    public function withOldCustomerGroupBuilder(?CustomerGroupReferenceBuilder $oldCustomerGroup)
    {
        $this->oldCustomerGroup = $oldCustomerGroup;

        return $this;
    }

    public function build(): OrderCustomerGroupSetMessagePayload
    {
        return new OrderCustomerGroupSetMessagePayloadModel(
            $this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup,
            $this->oldCustomerGroup instanceof CustomerGroupReferenceBuilder ? $this->oldCustomerGroup->build() : $this->oldCustomerGroup
        );
    }

    public static function of(): OrderCustomerGroupSetMessagePayloadBuilder
    {
        return new self();
    }
}
