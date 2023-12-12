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
 * @implements Builder<ApproverDisjunctionDraft>
 */
final class ApproverDisjunctionDraftBuilder implements Builder
{
    /**

     * @var ?RuleApproverDraftCollection
     */
    private $or;

    /**
     * <p>Any of the nested approvers must approve in order for the disjunction to be considered approved.</p>
     *

     * @return null|RuleApproverDraftCollection
     */
    public function getOr()
    {
        return $this->or;
    }

    /**
     * @param ?RuleApproverDraftCollection $or
     * @return $this
     */
    public function withOr(?RuleApproverDraftCollection $or)
    {
        $this->or = $or;

        return $this;
    }


    public function build(): ApproverDisjunctionDraft
    {
        return new ApproverDisjunctionDraftModel(
            $this->or
        );
    }

    public static function of(): ApproverDisjunctionDraftBuilder
    {
        return new self();
    }
}
