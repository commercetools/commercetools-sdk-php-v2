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
 * @implements Builder<ApproverConjunctionDraft>
 */
final class ApproverConjunctionDraftBuilder implements Builder
{
    /**

     * @var ?ApproverDisjunctionDraftCollection
     */
    private $and;

    /**
     * <p>All of the nested disjunctions must be approved in order for the conjunction to be considered approved.
     * The total count of approvers across the nested disjunctions must not exceed 10.</p>
     *

     * @return null|ApproverDisjunctionDraftCollection
     */
    public function getAnd()
    {
        return $this->and;
    }

    /**
     * @param ?ApproverDisjunctionDraftCollection $and
     * @return $this
     */
    public function withAnd(?ApproverDisjunctionDraftCollection $and)
    {
        $this->and = $and;

        return $this;
    }


    public function build(): ApproverConjunctionDraft
    {
        return new ApproverConjunctionDraftModel(
            $this->and
        );
    }

    public static function of(): ApproverConjunctionDraftBuilder
    {
        return new self();
    }
}
