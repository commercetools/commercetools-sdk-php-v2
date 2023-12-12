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
 * @implements Builder<ApprovalFlowUpdateAction>
 */
final class ApprovalFlowUpdateActionBuilder implements Builder
{
    public function build(): ApprovalFlowUpdateAction
    {
        return new ApprovalFlowUpdateActionModel(
        );
    }

    public static function of(): ApprovalFlowUpdateActionBuilder
    {
        return new self();
    }
}
