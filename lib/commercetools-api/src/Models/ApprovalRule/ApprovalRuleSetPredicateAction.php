<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApprovalRuleSetPredicateAction extends ApprovalRuleUpdateAction
{
    public const FIELD_PREDICATE = 'predicate';

    /**
     * <p>A valid <a href="/../api/projects/predicates#order-predicates">Order Predicate</a> to set for the Approval Rule.</p>
     *

     * @return null|string
     */
    public function getPredicate();

    /**
     * @param ?string $predicate
     */
    public function setPredicate(?string $predicate): void;
}
