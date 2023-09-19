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
 * @implements Builder<ApprovalRuleSetPredicateAction>
 */
final class ApprovalRuleSetPredicateActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $predicate;

    /**
     * <p>A valid <a href="/../api/projects/predicates#order-predicates">Order Predicate</a> to set for the Approval Rule.</p>
     *

     * @return null|string
     */
    public function getPredicate()
    {
        return $this->predicate;
    }

    /**
     * @param ?string $predicate
     * @return $this
     */
    public function withPredicate(?string $predicate)
    {
        $this->predicate = $predicate;

        return $this;
    }


    public function build(): ApprovalRuleSetPredicateAction
    {
        return new ApprovalRuleSetPredicateActionModel(
            $this->predicate
        );
    }

    public static function of(): ApprovalRuleSetPredicateActionBuilder
    {
        return new self();
    }
}
