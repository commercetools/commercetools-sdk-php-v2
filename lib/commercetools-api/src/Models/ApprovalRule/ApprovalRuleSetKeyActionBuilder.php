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
 * @implements Builder<ApprovalRuleSetKeyAction>
 */
final class ApprovalRuleSetKeyActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**
     * <p>Value to set. Must be unique within a Business Unit. If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }


    public function build(): ApprovalRuleSetKeyAction
    {
        return new ApprovalRuleSetKeyActionModel(
            $this->key
        );
    }

    public static function of(): ApprovalRuleSetKeyActionBuilder
    {
        return new self();
    }
}
