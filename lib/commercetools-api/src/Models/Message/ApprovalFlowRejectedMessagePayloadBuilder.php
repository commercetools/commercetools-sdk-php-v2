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
 * @implements Builder<ApprovalFlowRejectedMessagePayload>
 */
final class ApprovalFlowRejectedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|CustomerReference|CustomerReferenceBuilder
     */
    private $associate;

    /**

     * @var ?string
     */
    private $rejectionReason;

    /**

     * @var null|OrderReference|OrderReferenceBuilder
     */
    private $order;

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Customer">Customer</a> who rejected the <a href="/projects/approval-flows">Approval Flow</a>.</p>
     *

     * @return null|CustomerReference
     */
    public function getAssociate()
    {
        return $this->associate instanceof CustomerReferenceBuilder ? $this->associate->build() : $this->associate;
    }

    /**
     * <p>Description of the reason why the <a href="ctp:api:type:ApprovalFlow">Approval Flow</a> was rejected.</p>
     *

     * @return null|string
     */
    public function getRejectionReason()
    {
        return $this->rejectionReason;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Order">Order</a> that received the rejection.</p>
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
     * @param ?string $rejectionReason
     * @return $this
     */
    public function withRejectionReason(?string $rejectionReason)
    {
        $this->rejectionReason = $rejectionReason;

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

    public function build(): ApprovalFlowRejectedMessagePayload
    {
        return new ApprovalFlowRejectedMessagePayloadModel(
            $this->associate instanceof CustomerReferenceBuilder ? $this->associate->build() : $this->associate,
            $this->rejectionReason,
            $this->order instanceof OrderReferenceBuilder ? $this->order->build() : $this->order
        );
    }

    public static function of(): ApprovalFlowRejectedMessagePayloadBuilder
    {
        return new self();
    }
}
