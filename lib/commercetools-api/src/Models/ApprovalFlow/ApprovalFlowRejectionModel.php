<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalFlow;

use Commercetools\Api\Models\BusinessUnit\Associate;
use Commercetools\Api\Models\BusinessUnit\AssociateModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class ApprovalFlowRejectionModel extends JsonObjectModel implements ApprovalFlowRejection
{
    /**
     *
     * @var ?Associate
     */
    protected $rejecter;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $rejectedAt;

    /**
     *
     * @var ?string
     */
    protected $reason;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Associate $rejecter = null,
        ?DateTimeImmutable $rejectedAt = null,
        ?string $reason = null
    ) {
        $this->rejecter = $rejecter;
        $this->rejectedAt = $rejectedAt;
        $this->reason = $reason;
    }

    /**
     * <p>Associate who rejected the <a href="ctp:api:type:ApprovalFlow">Approval Flow</a>.</p>
     *
     *
     * @return null|Associate
     */
    public function getRejecter()
    {
        if (is_null($this->rejecter)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_REJECTER);
            if (is_null($data)) {
                return null;
            }

            $this->rejecter = AssociateModel::of($data);
        }

        return $this->rejecter;
    }

    /**
     * <p>Date and time (UTC) when the <a href="ctp:api:type:ApprovalFlow">Approval Flow</a> was rejected at.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getRejectedAt()
    {
        if (is_null($this->rejectedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_REJECTED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->rejectedAt = $data;
        }

        return $this->rejectedAt;
    }

    /**
     * <p>The reason for the rejection of the <a href="ctp:api:type:ApprovalFlow">Approval Flow</a>.</p>
     *
     *
     * @return null|string
     */
    public function getReason()
    {
        if (is_null($this->reason)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_REASON);
            if (is_null($data)) {
                return null;
            }
            $this->reason = (string) $data;
        }

        return $this->reason;
    }


    /**
     * @param ?Associate $rejecter
     */
    public function setRejecter(?Associate $rejecter): void
    {
        $this->rejecter = $rejecter;
    }

    /**
     * @param ?DateTimeImmutable $rejectedAt
     */
    public function setRejectedAt(?DateTimeImmutable $rejectedAt): void
    {
        $this->rejectedAt = $rejectedAt;
    }

    /**
     * @param ?string $reason
     */
    public function setReason(?string $reason): void
    {
        $this->reason = $reason;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ApprovalFlowRejection::FIELD_REJECTED_AT]) && $data[ApprovalFlowRejection::FIELD_REJECTED_AT] instanceof \DateTimeImmutable) {
            $data[ApprovalFlowRejection::FIELD_REJECTED_AT] = $data[ApprovalFlowRejection::FIELD_REJECTED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
