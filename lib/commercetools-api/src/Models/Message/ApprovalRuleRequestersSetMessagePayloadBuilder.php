<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ApprovalRule\RuleRequesterCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ApprovalRuleRequestersSetMessagePayload>
 */
final class ApprovalRuleRequestersSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?RuleRequesterCollection
     */
    private $requesters;

    /**

     * @var ?RuleRequesterCollection
     */
    private $oldRequesters;

    /**
     * <p>RuleRequester of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> after the <a href="ctp:api:type:ApprovalRuleSetRequestersAction">Set Requester</a> update action.</p>
     *

     * @return null|RuleRequesterCollection
     */
    public function getRequesters()
    {
        return $this->requesters;
    }

    /**
     * <p>RuleRequester of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> after the <a href="ctp:api:type:ApprovalRuleSetRequestersAction">Set Requester</a> update action.</p>
     *

     * @return null|RuleRequesterCollection
     */
    public function getOldRequesters()
    {
        return $this->oldRequesters;
    }

    /**
     * @param ?RuleRequesterCollection $requesters
     * @return $this
     */
    public function withRequesters(?RuleRequesterCollection $requesters)
    {
        $this->requesters = $requesters;

        return $this;
    }

    /**
     * @param ?RuleRequesterCollection $oldRequesters
     * @return $this
     */
    public function withOldRequesters(?RuleRequesterCollection $oldRequesters)
    {
        $this->oldRequesters = $oldRequesters;

        return $this;
    }


    public function build(): ApprovalRuleRequestersSetMessagePayload
    {
        return new ApprovalRuleRequestersSetMessagePayloadModel(
            $this->requesters,
            $this->oldRequesters
        );
    }

    public static function of(): ApprovalRuleRequestersSetMessagePayloadBuilder
    {
        return new self();
    }
}
