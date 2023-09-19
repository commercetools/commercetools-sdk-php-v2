<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ApprovalRule\ApprovalRule;
use Commercetools\Api\Models\ApprovalRule\ApprovalRuleBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ApprovalRuleCreatedMessagePayload>
 */
final class ApprovalRuleCreatedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|ApprovalRule|ApprovalRuleBuilder
     */
    private $approvalRule;

    /**
     * <p>The <a href="ctp:api:type:ApprovalRule">Approval Rule</a> that was created.</p>
     *

     * @return null|ApprovalRule
     */
    public function getApprovalRule()
    {
        return $this->approvalRule instanceof ApprovalRuleBuilder ? $this->approvalRule->build() : $this->approvalRule;
    }

    /**
     * @param ?ApprovalRule $approvalRule
     * @return $this
     */
    public function withApprovalRule(?ApprovalRule $approvalRule)
    {
        $this->approvalRule = $approvalRule;

        return $this;
    }

    /**
     * @deprecated use withApprovalRule() instead
     * @return $this
     */
    public function withApprovalRuleBuilder(?ApprovalRuleBuilder $approvalRule)
    {
        $this->approvalRule = $approvalRule;

        return $this;
    }

    public function build(): ApprovalRuleCreatedMessagePayload
    {
        return new ApprovalRuleCreatedMessagePayloadModel(
            $this->approvalRule instanceof ApprovalRuleBuilder ? $this->approvalRule->build() : $this->approvalRule
        );
    }

    public static function of(): ApprovalRuleCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
