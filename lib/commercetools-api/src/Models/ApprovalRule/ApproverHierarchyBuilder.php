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
 * @implements Builder<ApproverHierarchy>
 */
final class ApproverHierarchyBuilder implements Builder
{
    /**

     * @var ?ApproverConjunctionCollection
     */
    private $tiers;

    /**
     * <p>All of the nested conjunctions must be approved in order for the hierarchy to be considered approved.</p>
     *

     * @return null|ApproverConjunctionCollection
     */
    public function getTiers()
    {
        return $this->tiers;
    }

    /**
     * @param ?ApproverConjunctionCollection $tiers
     * @return $this
     */
    public function withTiers(?ApproverConjunctionCollection $tiers)
    {
        $this->tiers = $tiers;

        return $this;
    }


    public function build(): ApproverHierarchy
    {
        return new ApproverHierarchyModel(
            $this->tiers
        );
    }

    public static function of(): ApproverHierarchyBuilder
    {
        return new self();
    }
}
