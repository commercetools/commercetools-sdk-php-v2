<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalFlow;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ApprovalFlowApproveAction>
 */
final class ApprovalFlowApproveActionBuilder implements Builder
{
    public function build(): ApprovalFlowApproveAction
    {
        return new ApprovalFlowApproveActionModel(
        );
    }

    public static function of(): ApprovalFlowApproveActionBuilder
    {
        return new self();
    }
}
