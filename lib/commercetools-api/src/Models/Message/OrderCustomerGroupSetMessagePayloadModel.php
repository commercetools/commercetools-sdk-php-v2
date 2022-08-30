<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderCustomerGroupSetMessagePayloadModel extends JsonObjectModel implements OrderCustomerGroupSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderCustomerGroupSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?CustomerGroupReference
     */
    protected $customerGroup;

    /**
     *
     * @var ?CustomerGroupReference
     */
    protected $oldCustomerGroup;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CustomerGroupReference $customerGroup = null,
        ?CustomerGroupReference $oldCustomerGroup = null,
        ?string $type = null
    ) {
        $this->customerGroup = $customerGroup;
        $this->oldCustomerGroup = $oldCustomerGroup;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p><a href="ctp:api:type:CustomerGroup">CustomerGroup</a> on the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:StagedOrderSetCustomerGroupAction">Set Customer Group</a> update action.</p>
     *
     *
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroup = CustomerGroupReferenceModel::of($data);
        }

        return $this->customerGroup;
    }

    /**
     * <p><a href="ctp:api:type:CustomerGroup">CustomerGroup</a> on the <a href="ctp:api:type:Order">Order</a> before the <a href="ctp:api:type:StagedOrderSetCustomerGroupAction">Set Customer Group</a> update action.</p>
     *
     *
     * @return null|CustomerGroupReference
     */
    public function getOldCustomerGroup()
    {
        if (is_null($this->oldCustomerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OLD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->oldCustomerGroup = CustomerGroupReferenceModel::of($data);
        }

        return $this->oldCustomerGroup;
    }


    /**
     * @param ?CustomerGroupReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    /**
     * @param ?CustomerGroupReference $oldCustomerGroup
     */
    public function setOldCustomerGroup(?CustomerGroupReference $oldCustomerGroup): void
    {
        $this->oldCustomerGroup = $oldCustomerGroup;
    }
}
