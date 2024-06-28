<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitApprovalRuleModeChangedMessage extends Message
{
    public const FIELD_APPROVAL_RULE_MODE = 'approvalRuleMode';
    public const FIELD_OLD_APPROVAL_RULE_MODE = 'oldApprovalRuleMode';

    /**
     * <p><a href="ctp:api:type:BusinessUnitApprovalRuleMode">BusinessUnitApprovalRuleMode</a> of the Business Unit after the <a href="ctp:api:type:BusinessUnitChangeApprovalRuleModeAction">Change Approval Rule Mode</a> update action.</p>
     *

     * @return null|string
     */
    public function getApprovalRuleMode();

    /**
     * <p><a href="ctp:api:type:BusinessUnitApprovalRuleMode">BusinessUnitApprovalRuleMode</a> of the Business Unit before the <a href="ctp:api:type:BusinessUnitChangeApprovalRuleModeAction">Change Approval Rule Mode</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldApprovalRuleMode();

    /**
     * @param ?string $approvalRuleMode
     */
    public function setApprovalRuleMode(?string $approvalRuleMode): void;

    /**
     * @param ?string $oldApprovalRuleMode
     */
    public function setOldApprovalRuleMode(?string $oldApprovalRuleMode): void;
}
