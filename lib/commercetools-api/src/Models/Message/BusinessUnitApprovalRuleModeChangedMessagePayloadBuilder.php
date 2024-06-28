<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitApprovalRuleModeChangedMessagePayload>
 */
final class BusinessUnitApprovalRuleModeChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $approvalRuleMode;

    /**

     * @var ?string
     */
    private $oldApprovalRuleMode;

    /**
     * <p><a href="ctp:api:type:BusinessUnitApprovalRuleMode">BusinessUnitApprovalRuleMode</a> of the Business Unit after the <a href="ctp:api:type:BusinessUnitChangeApprovalRuleModeAction">Change Approval Rule Mode</a> update action.</p>
     *

     * @return null|string
     */
    public function getApprovalRuleMode()
    {
        return $this->approvalRuleMode;
    }

    /**
     * <p><a href="ctp:api:type:BusinessUnitApprovalRuleMode">BusinessUnitApprovalRuleMode</a> of the Business Unit before the <a href="ctp:api:type:BusinessUnitChangeApprovalRuleModeAction">Change Approval Rule Mode</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldApprovalRuleMode()
    {
        return $this->oldApprovalRuleMode;
    }

    /**
     * @param ?string $approvalRuleMode
     * @return $this
     */
    public function withApprovalRuleMode(?string $approvalRuleMode)
    {
        $this->approvalRuleMode = $approvalRuleMode;

        return $this;
    }

    /**
     * @param ?string $oldApprovalRuleMode
     * @return $this
     */
    public function withOldApprovalRuleMode(?string $oldApprovalRuleMode)
    {
        $this->oldApprovalRuleMode = $oldApprovalRuleMode;

        return $this;
    }


    public function build(): BusinessUnitApprovalRuleModeChangedMessagePayload
    {
        return new BusinessUnitApprovalRuleModeChangedMessagePayloadModel(
            $this->approvalRuleMode,
            $this->oldApprovalRuleMode
        );
    }

    public static function of(): BusinessUnitApprovalRuleModeChangedMessagePayloadBuilder
    {
        return new self();
    }
}
