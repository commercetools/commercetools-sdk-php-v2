<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ApprovalRule\ApprovalRule;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApprovalRuleCreatedMessagePayload extends MessagePayload
{
    public const FIELD_APPROVAL_RULE = 'approvalRule';

    /**
     * <p>The <a href="ctp:api:type:ApprovalRule">Approval Rule</a> that was created.</p>
     *

     * @return null|ApprovalRule
     */
    public function getApprovalRule();

    /**
     * @param ?ApprovalRule $approvalRule
     */
    public function setApprovalRule(?ApprovalRule $approvalRule): void;
}
