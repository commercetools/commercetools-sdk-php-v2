<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalFlow;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApprovalFlowRejectAction extends ApprovalFlowUpdateAction
{
    public const FIELD_REASON = 'reason';

    /**
     * <p>The reason for the rejection of the <a href="ctp:api:type:ApprovalFlow">Approval Flow</a>.</p>
     *

     * @return null|string
     */
    public function getReason();

    /**
     * @param ?string $reason
     */
    public function setReason(?string $reason): void;
}
