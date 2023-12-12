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
 * @implements Builder<ApprovalRuleSetStatusAction>
 */
final class ApprovalRuleSetStatusActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $status;

    /**
     * <p>New status to set for the Approval Rule.</p>
     *

     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param ?string $status
     * @return $this
     */
    public function withStatus(?string $status)
    {
        $this->status = $status;

        return $this;
    }


    public function build(): ApprovalRuleSetStatusAction
    {
        return new ApprovalRuleSetStatusActionModel(
            $this->status
        );
    }

    public static function of(): ApprovalRuleSetStatusActionBuilder
    {
        return new self();
    }
}
