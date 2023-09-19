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
 * @implements Builder<ApproverConjunction>
 */
final class ApproverConjunctionBuilder implements Builder
{
    /**

     * @var ?ApproverDisjunctionCollection
     */
    private $and;

    /**
     * <p>All of the nested disjunctions must be approved in order for the conjunction to be considered approved.</p>
     *

     * @return null|ApproverDisjunctionCollection
     */
    public function getAnd()
    {
        return $this->and;
    }

    /**
     * @param ?ApproverDisjunctionCollection $and
     * @return $this
     */
    public function withAnd(?ApproverDisjunctionCollection $and)
    {
        $this->and = $and;

        return $this;
    }


    public function build(): ApproverConjunction
    {
        return new ApproverConjunctionModel(
            $this->and
        );
    }

    public static function of(): ApproverConjunctionBuilder
    {
        return new self();
    }
}
