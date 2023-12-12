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
 * @implements Builder<ApprovalRuleUpdateAction>
 */
final class ApprovalRuleUpdateActionBuilder implements Builder
{
    public function build(): ApprovalRuleUpdateAction
    {
        return new ApprovalRuleUpdateActionModel(
        );
    }

    public static function of(): ApprovalRuleUpdateActionBuilder
    {
        return new self();
    }
}
