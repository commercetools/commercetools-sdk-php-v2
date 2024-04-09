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
final class ApprovalFlowApprovalModel extends JsonObjectModel implements ApprovalFlowApproval
{
    /**
     *
     * @var ?Associate
     */
    protected $approver;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $approvedAt;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Associate $approver = null,
        ?DateTimeImmutable $approvedAt = null
    ) {
        $this->approver = $approver;
        $this->approvedAt = $approvedAt;
    }

    /**
     * <p>Associate who approved the <a href="ctp:api:type:ApprovalFlow">Approval Flow</a>.</p>
     *
     *
     * @return null|Associate
     */
    public function getApprover()
    {
        if (is_null($this->approver)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_APPROVER);
            if (is_null($data)) {
                return null;
            }

            $this->approver = AssociateModel::of($data);
        }

        return $this->approver;
    }

    /**
     * <p>Date and time (UTC) the <a href="ctp:api:type:ApprovalFlow">Approval Flow</a> was approved.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getApprovedAt()
    {
        if (is_null($this->approvedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_APPROVED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->approvedAt = $data;
        }

        return $this->approvedAt;
    }


    /**
     * @param ?Associate $approver
     */
    public function setApprover(?Associate $approver): void
    {
        $this->approver = $approver;
    }

    /**
     * @param ?DateTimeImmutable $approvedAt
     */
    public function setApprovedAt(?DateTimeImmutable $approvedAt): void
    {
        $this->approvedAt = $approvedAt;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ApprovalFlowApproval::FIELD_APPROVED_AT]) && $data[ApprovalFlowApproval::FIELD_APPROVED_AT] instanceof \DateTimeImmutable) {
            $data[ApprovalFlowApproval::FIELD_APPROVED_AT] = $data[ApprovalFlowApproval::FIELD_APPROVED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
