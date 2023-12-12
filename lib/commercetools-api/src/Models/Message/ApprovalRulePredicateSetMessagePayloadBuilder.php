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
 * @implements Builder<ApprovalRulePredicateSetMessagePayload>
 */
final class ApprovalRulePredicateSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $predicate;

    /**

     * @var ?string
     */
    private $oldPredicate;

    /**
     * <p>Name of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> after the <a href="ctp:api:type:ApprovalRuleSetPredicateAction">Set Predicate</a> update action.</p>
     *

     * @return null|string
     */
    public function getPredicate()
    {
        return $this->predicate;
    }

    /**
     * <p>Name of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> before the <a href="ctp:api:type:ApprovalRuleSetPredicateAction">Set Predicate</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldPredicate()
    {
        return $this->oldPredicate;
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

    /**
     * @param ?string $oldPredicate
     * @return $this
     */
    public function withOldPredicate(?string $oldPredicate)
    {
        $this->oldPredicate = $oldPredicate;

        return $this;
    }


    public function build(): ApprovalRulePredicateSetMessagePayload
    {
        return new ApprovalRulePredicateSetMessagePayloadModel(
            $this->predicate,
            $this->oldPredicate
        );
    }

    public static function of(): ApprovalRulePredicateSetMessagePayloadBuilder
    {
        return new self();
    }
}
