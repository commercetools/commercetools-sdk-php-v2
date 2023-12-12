<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ApprovalRule\ApproverHierarchy;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApprovalRuleApproversSetMessage extends Message
{
    public const FIELD_APPROVERS = 'approvers';
    public const FIELD_OLD_APPROVERS = 'oldApprovers';

    /**
     * <p>Approver hierarchy of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> after the <a href="ctp:api:type:ApprovalRuleSetApproversAction">Set Approvers</a> update action.</p>
     *

     * @return null|ApproverHierarchy
     */
    public function getApprovers();

    /**
     * <p>Approver hierarchy of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> before the <a href="ctp:api:type:ApprovalRuleSetApproversAction">Set Approvers</a> update action.</p>
     *

     * @return null|ApproverHierarchy
     */
    public function getOldApprovers();

    /**
     * @param ?ApproverHierarchy $approvers
     */
    public function setApprovers(?ApproverHierarchy $approvers): void;

    /**
     * @param ?ApproverHierarchy $oldApprovers
     */
    public function setOldApprovers(?ApproverHierarchy $oldApprovers): void;
}
