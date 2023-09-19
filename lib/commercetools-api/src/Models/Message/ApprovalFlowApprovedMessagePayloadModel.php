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
final class ApprovalFlowApprovedMessagePayloadModel extends JsonObjectModel implements ApprovalFlowApprovedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ApprovalFlowApproved';
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
     * @var ?OrderReference
     */
    protected $order;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CustomerReference $associate = null,
        ?OrderReference $order = null,
        ?string $type = null
    ) {
        $this->associate = $associate;
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
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Customer">Customer</a> who approved the <a href="/projects/approval-flows">Approval Flow</a>.</p>
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
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Order">Order</a> that received the approval.</p>
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
     * @param ?OrderReference $order
     */
    public function setOrder(?OrderReference $order): void
    {
        $this->order = $order;
    }
}
