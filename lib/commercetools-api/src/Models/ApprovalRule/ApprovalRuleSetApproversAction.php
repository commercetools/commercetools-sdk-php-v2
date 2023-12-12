<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApprovalRuleSetApproversAction extends ApprovalRuleUpdateAction
{
    public const FIELD_APPROVERS = 'approvers';

    /**
     * <p>New approvers to set for the Approval Rule.</p>
     *

     * @return null|ApproverHierarchyDraft
     */
    public function getApprovers();

    /**
     * @param ?ApproverHierarchyDraft $approvers
     */
    public function setApprovers(?ApproverHierarchyDraft $approvers): void;
}
