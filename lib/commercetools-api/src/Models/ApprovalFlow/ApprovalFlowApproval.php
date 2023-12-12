<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalFlow;

use Commercetools\Api\Models\BusinessUnit\Associate;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ApprovalFlowApproval extends JsonObject
{
    public const FIELD_APPROVER = 'approver';
    public const FIELD_APPROVED_AT = 'approvedAt';

    /**
     * <p>Associate who approved the <a href="ctp:api:type:ApprovalFlow">Approval Flow</a>.</p>
     *

     * @return null|Associate
     */
    public function getApprover();

    /**
     * <p>Date and time (UTC) when the <a href="ctp:api:type:ApprovalFlow">Approval Flow</a> was approved at.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getApprovedAt();

    /**
     * @param ?Associate $approver
     */
    public function setApprover(?Associate $approver): void;

    /**
     * @param ?DateTimeImmutable $approvedAt
     */
    public function setApprovedAt(?DateTimeImmutable $approvedAt): void;
}
