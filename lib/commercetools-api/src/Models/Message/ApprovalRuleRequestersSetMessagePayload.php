<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ApprovalRule\RuleRequesterCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApprovalRuleRequestersSetMessagePayload extends MessagePayload
{
    public const FIELD_REQUESTERS = 'requesters';
    public const FIELD_OLD_REQUESTERS = 'oldRequesters';

    /**
     * <p>RuleRequester of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> after the <a href="ctp:api:type:ApprovalRuleSetRequestersAction">Set Requester</a> update action.</p>
     *

     * @return null|RuleRequesterCollection
     */
    public function getRequesters();

    /**
     * <p>RuleRequester of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> after the <a href="ctp:api:type:ApprovalRuleSetRequestersAction">Set Requester</a> update action.</p>
     *

     * @return null|RuleRequesterCollection
     */
    public function getOldRequesters();

    /**
     * @param ?RuleRequesterCollection $requesters
     */
    public function setRequesters(?RuleRequesterCollection $requesters): void;

    /**
     * @param ?RuleRequesterCollection $oldRequesters
     */
    public function setOldRequesters(?RuleRequesterCollection $oldRequesters): void;
}
