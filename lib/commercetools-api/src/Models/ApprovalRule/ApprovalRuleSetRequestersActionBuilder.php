<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ApprovalRuleSetRequestersAction>
 */
final class ApprovalRuleSetRequestersActionBuilder implements Builder
{
    /**

     * @var ?RuleRequesterDraftCollection
     */
    private $requesters;

    /**
     * <p>New requesters to set for the Approval Rule.</p>
     *

     * @return null|RuleRequesterDraftCollection
     */
    public function getRequesters()
    {
        return $this->requesters;
    }

    /**
     * @param ?RuleRequesterDraftCollection $requesters
     * @return $this
     */
    public function withRequesters(?RuleRequesterDraftCollection $requesters)
    {
        $this->requesters = $requesters;

        return $this;
    }


    public function build(): ApprovalRuleSetRequestersAction
    {
        return new ApprovalRuleSetRequestersActionModel(
            $this->requesters
        );
    }

    public static function of(): ApprovalRuleSetRequestersActionBuilder
    {
        return new self();
    }
}
