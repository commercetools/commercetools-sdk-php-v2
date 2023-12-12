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
 * @implements Builder<ApproverHierarchyDraft>
 */
final class ApproverHierarchyDraftBuilder implements Builder
{
    /**

     * @var ?ApproverConjunctionDraftCollection
     */
    private $tiers;

    /**
     * <p>Nested conjunctions representing tiers of approvers in a hierarchy.</p>
     *

     * @return null|ApproverConjunctionDraftCollection
     */
    public function getTiers()
    {
        return $this->tiers;
    }

    /**
     * @param ?ApproverConjunctionDraftCollection $tiers
     * @return $this
     */
    public function withTiers(?ApproverConjunctionDraftCollection $tiers)
    {
        $this->tiers = $tiers;

        return $this;
    }


    public function build(): ApproverHierarchyDraft
    {
        return new ApproverHierarchyDraftModel(
            $this->tiers
        );
    }

    public static function of(): ApproverHierarchyDraftBuilder
    {
        return new self();
    }
}
