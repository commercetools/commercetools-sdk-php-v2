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
 * @implements Builder<ApprovalRuleUpdate>
 */
final class ApprovalRuleUpdateBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?ApprovalRuleUpdateActionCollection
     */
    private $actions;

    /**
     * <p>Expected version of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> to which the changes should be applied.
     * If the expected version does not match the actual version, a <a href="/../api/errors#409-conflict">409 Conflict</a> error will be returned.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Update actions to be performed on the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a>.</p>
     *

     * @return null|ApprovalRuleUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?ApprovalRuleUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?ApprovalRuleUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): ApprovalRuleUpdate
    {
        return new ApprovalRuleUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): ApprovalRuleUpdateBuilder
    {
        return new self();
    }
}
