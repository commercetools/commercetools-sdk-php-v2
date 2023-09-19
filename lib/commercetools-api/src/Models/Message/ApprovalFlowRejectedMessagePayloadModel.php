<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceModel;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Order\OrderReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ApprovalFlowRejectedMessagePayloadModel extends JsonObjectModel implements ApprovalFlowRejectedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ApprovalFlowRejected';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?CustomerReference
     */
    protected $associate;

    /**
     *
     * @var ?string
     */
    protected $rejectionReason;

    /**
     *
     * @var ?OrderReference
     */
    protected $order;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CustomerReference $associate = null,
        ?string $rejectionReason = null,
        ?OrderReference $order = null,
        ?string $type = null
    ) {
        $this->associate = $associate;
        $this->rejectionReason = $rejectionReason;
        $this->order = $order;
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
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Customer">Customer</a> who rejected the <a href="/projects/approval-flows">Approval Flow</a>.</p>
     *
     *
     * @return null|CustomerReference
     */
    public function getAssociate()
    {
        if (is_null($this->associate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ASSOCIATE);
            if (is_null($data)) {
                return null;
            }

            $this->associate = CustomerReferenceModel::of($data);
        }

        return $this->associate;
    }

    /**
     * <p>Description of the reason why the <a href="ctp:api:type:ApprovalFlow">Approval Flow</a> was rejected.</p>
     *
     *
     * @return null|string
     */
    public function getRejectionReason()
    {
        if (is_null($this->rejectionReason)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_REJECTION_REASON);
            if (is_null($data)) {
                return null;
            }
            $this->rejectionReason = (string) $data;
        }

        return $this->rejectionReason;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Order">Order</a> that received the rejection.</p>
     *
     *
     * @return null|OrderReference
     */
    public function getOrder()
    {
        if (is_null($this->order)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ORDER);
            if (is_null($data)) {
                return null;
            }

            $this->order = OrderReferenceModel::of($data);
        }

        return $this->order;
    }


    /**
     * @param ?CustomerReference $associate
     */
    public function setAssociate(?CustomerReference $associate): void
    {
        $this->associate = $associate;
    }

    /**
     * @param ?string $rejectionReason
     */
    public function setRejectionReason(?string $rejectionReason): void
    {
        $this->rejectionReason = $rejectionReason;
    }

    /**
     * @param ?OrderReference $order
     */
    public function setOrder(?OrderReference $order): void
    {
        $this->order = $order;
    }
}
