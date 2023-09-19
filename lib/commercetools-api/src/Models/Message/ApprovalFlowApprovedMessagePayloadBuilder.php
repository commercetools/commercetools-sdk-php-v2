<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceBuilder;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Order\OrderReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ApprovalFlowApprovedMessagePayload>
 */
final class ApprovalFlowApprovedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|CustomerReference|CustomerReferenceBuilder
     */
    private $associate;

    /**

     * @var null|OrderReference|OrderReferenceBuilder
     */
    private $order;

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Customer">Customer</a> who approved the <a href="/projects/approval-flows">Approval Flow</a>.</p>
     *

     * @return null|CustomerReference
     */
    public function getAssociate()
    {
        return $this->associate instanceof CustomerReferenceBuilder ? $this->associate->build() : $this->associate;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Order">Order</a> that received the approval.</p>
     *

     * @return null|OrderReference
     */
    public function getOrder()
    {
        return $this->order instanceof OrderReferenceBuilder ? $this->order->build() : $this->order;
    }

    /**
     * @param ?CustomerReference $associate
     * @return $this
     */
    public function withAssociate(?CustomerReference $associate)
    {
        $this->associate = $associate;

        return $this;
    }

    /**
     * @param ?OrderReference $order
     * @return $this
     */
    public function withOrder(?OrderReference $order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @deprecated use withAssociate() instead
     * @return $this
     */
    public function withAssociateBuilder(?CustomerReferenceBuilder $associate)
    {
        $this->associate = $associate;

        return $this;
    }

    /**
     * @deprecated use withOrder() instead
     * @return $this
     */
    public function withOrderBuilder(?OrderReferenceBuilder $order)
    {
        $this->order = $order;

        return $this;
    }

    public function build(): ApprovalFlowApprovedMessagePayload
    {
        return new ApprovalFlowApprovedMessagePayloadModel(
            $this->associate instanceof CustomerReferenceBuilder ? $this->associate->build() : $this->associate,
            $this->order instanceof OrderReferenceBuilder ? $this->order->build() : $this->order
        );
    }

    public static function of(): ApprovalFlowApprovedMessagePayloadBuilder
    {
        return new self();
    }
}
