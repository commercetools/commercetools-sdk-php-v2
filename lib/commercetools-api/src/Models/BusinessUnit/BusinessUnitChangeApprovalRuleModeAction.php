<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitChangeApprovalRuleModeAction extends BusinessUnitUpdateAction
{
    public const FIELD_APPROVAL_RULE_MODE = 'approvalRuleMode';

    /**
     * <p>The new value for <code>approvalRuleMode</code>.</p>
     *

     * @return null|string
     */
    public function getApprovalRuleMode();

    /**
     * @param ?string $approvalRuleMode
     */
    public function setApprovalRuleMode(?string $approvalRuleMode): void;
}
