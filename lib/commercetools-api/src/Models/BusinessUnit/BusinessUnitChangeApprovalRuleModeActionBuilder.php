<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitChangeApprovalRuleModeAction>
 */
final class BusinessUnitChangeApprovalRuleModeActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $approvalRuleMode;

    /**
     * <p>The new value for <code>approvalRuleMode</code>.</p>
     *

     * @return null|string
     */
    public function getApprovalRuleMode()
    {
        return $this->approvalRuleMode;
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


    public function build(): BusinessUnitChangeApprovalRuleModeAction
    {
        return new BusinessUnitChangeApprovalRuleModeActionModel(
            $this->approvalRuleMode
        );
    }

    public static function of(): BusinessUnitChangeApprovalRuleModeActionBuilder
    {
        return new self();
    }
}
