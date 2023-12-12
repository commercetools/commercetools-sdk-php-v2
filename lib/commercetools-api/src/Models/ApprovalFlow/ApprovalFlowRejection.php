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

interface ApprovalFlowRejection extends JsonObject
{
    public const FIELD_REJECTER = 'rejecter';
    public const FIELD_REJECTED_AT = 'rejectedAt';
    public const FIELD_REASON = 'reason';

    /**
     * <p>Associate who rejected the <a href="ctp:api:type:ApprovalFlow">Approval Flow</a>.</p>
     *

     * @return null|Associate
     */
    public function getRejecter();

    /**
     * <p>Date and time (UTC) when the <a href="ctp:api:type:ApprovalFlow">Approval Flow</a> was rejected at.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getRejectedAt();

    /**
     * <p>The reason for the rejection of the <a href="ctp:api:type:ApprovalFlow">Approval Flow</a>.</p>
     *

     * @return null|string
     */
    public function getReason();

    /**
     * @param ?Associate $rejecter
     */
    public function setRejecter(?Associate $rejecter): void;

    /**
     * @param ?DateTimeImmutable $rejectedAt
     */
    public function setRejectedAt(?DateTimeImmutable $rejectedAt): void;

    /**
     * @param ?string $reason
     */
    public function setReason(?string $reason): void;
}
