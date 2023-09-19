<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

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
final class ApprovalFlowCompletedMessagePayloadModel extends JsonObjectModel implements ApprovalFlowCompletedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ApprovalFlowCompleted';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $status;

    /**
     *
     * @var ?OrderReference
     */
    protected $order;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $status = null,
        ?OrderReference $order = null,
        ?string $type = null
    ) {
        $this->status = $status;
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
     * <p>Final status of the <a href="ctp:api:type:ApprovalFlow">Approval Flow</a>.</p>
     *
     *
     * @return null|string
     */
    public function getStatus()
    {
        if (is_null($this->status)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STATUS);
            if (is_null($data)) {
                return null;
            }
            $this->status = (string) $data;
        }

        return $this->status;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Order">Order</a> related to the completed <a href="ctp:api:type:ApprovalFlow">Approval Flow</a>.</p>
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
     * @param ?string $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * @param ?OrderReference $order
     */
    public function setOrder(?OrderReference $order): void
    {
        $this->order = $order;
    }
}
