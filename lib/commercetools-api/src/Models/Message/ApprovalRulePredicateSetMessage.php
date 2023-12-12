<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApprovalRulePredicateSetMessage extends Message
{
    public const FIELD_PREDICATE = 'predicate';
    public const FIELD_OLD_PREDICATE = 'oldPredicate';

    /**
     * <p>Name of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> after the <a href="ctp:api:type:ApprovalRuleSetPredicateAction">Set Predicate</a> update action.</p>
     *

     * @return null|string
     */
    public function getPredicate();

    /**
     * <p>Name of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> before the <a href="ctp:api:type:ApprovalRuleSetPredicateAction">Set Predicate</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldPredicate();

    /**
     * @param ?string $predicate
     */
    public function setPredicate(?string $predicate): void;

    /**
     * @param ?string $oldPredicate
     */
    public function setOldPredicate(?string $oldPredicate): void;
}
