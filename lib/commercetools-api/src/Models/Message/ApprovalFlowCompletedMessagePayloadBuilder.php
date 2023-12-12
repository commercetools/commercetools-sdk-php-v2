<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Order\OrderReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ApprovalFlowCompletedMessagePayload>
 */
final class ApprovalFlowCompletedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $status;

    /**

     * @var null|OrderReference|OrderReferenceBuilder
     */
    private $order;

    /**
     * <p>Final status of the <a href="ctp:api:type:ApprovalFlow">Approval Flow</a>.</p>
     *

     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Order">Order</a> related to the completed <a href="ctp:api:type:ApprovalFlow">Approval Flow</a>.</p>
     *

     * @return null|OrderReference
     */
    public function getOrder()
    {
        return $this->order instanceof OrderReferenceBuilder ? $this->order->build() : $this->order;
    }

    /**
     * @param ?string $status
     * @return $this
     */
    public function withStatus(?string $status)
    {
        $this->status = $status;

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
     * @deprecated use withOrder() instead
     * @return $this
     */
    public function withOrderBuilder(?OrderReferenceBuilder $order)
    {
        $this->order = $order;

        return $this;
    }

    public function build(): ApprovalFlowCompletedMessagePayload
    {
        return new ApprovalFlowCompletedMessagePayloadModel(
            $this->status,
            $this->order instanceof OrderReferenceBuilder ? $this->order->build() : $this->order
        );
    }

    public static function of(): ApprovalFlowCompletedMessagePayloadBuilder
    {
        return new self();
    }
}
