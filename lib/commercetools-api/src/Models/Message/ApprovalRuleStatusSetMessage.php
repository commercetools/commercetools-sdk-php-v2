<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApprovalRuleStatusSetMessage extends Message
{
    public const FIELD_STATUS = 'status';
    public const FIELD_OLD_STATUS = 'oldStatus';

    /**
     * <p>Status of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> after the <a href="ctp:api:type:ApprovalRuleSetStatusAction">Set Status</a> update action.</p>
     *

     * @return null|string
     */
    public function getStatus();

    /**
     * <p>Status of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> before the <a href="ctp:api:type:ApprovalRuleSetStatusAction">Set Status</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldStatus();

    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void;

    /**
     * @param ?string $oldStatus
     */
    public function setOldStatus(?string $oldStatus): void;
}
