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
 * @implements Builder<ApproverDisjunction>
 */
final class ApproverDisjunctionBuilder implements Builder
{
    /**

     * @var ?RuleApproverCollection
     */
    private $or;

    /**
     * <p>Any of the nested approvers must approve in order for the disjunction to be considered approved.</p>
     *

     * @return null|RuleApproverCollection
     */
    public function getOr()
    {
        return $this->or;
    }

    /**
     * @param ?RuleApproverCollection $or
     * @return $this
     */
    public function withOr(?RuleApproverCollection $or)
    {
        $this->or = $or;

        return $this;
    }


    public function build(): ApproverDisjunction
    {
        return new ApproverDisjunctionModel(
            $this->or
        );
    }

    public static function of(): ApproverDisjunctionBuilder
    {
        return new self();
    }
}
