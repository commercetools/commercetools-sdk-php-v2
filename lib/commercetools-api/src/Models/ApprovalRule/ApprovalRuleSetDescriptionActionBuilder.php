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
 * @implements Builder<ApprovalRuleSetDescriptionAction>
 */
final class ApprovalRuleSetDescriptionActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $description;

    /**
     * <p>New description to set for the Approval Rule.</p>
     *

     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param ?string $description
     * @return $this
     */
    public function withDescription(?string $description)
    {
        $this->description = $description;

        return $this;
    }


    public function build(): ApprovalRuleSetDescriptionAction
    {
        return new ApprovalRuleSetDescriptionActionModel(
            $this->description
        );
    }

    public static function of(): ApprovalRuleSetDescriptionActionBuilder
    {
        return new self();
    }
}
