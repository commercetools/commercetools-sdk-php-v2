<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApprovalRuleUpdate extends JsonObject
{
    public const FIELD_VERSION = 'version';
    public const FIELD_ACTIONS = 'actions';

    /**
     * <p>Expected version of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> to which the changes should be applied.
     * If the expected version does not match the actual version, a <a href="ctp:api:type:ConcurrentModificationError">ConcurrentModification</a> error will be returned.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Update actions to be performed on the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a>.</p>
     *

     * @return null|ApprovalRuleUpdateActionCollection
     */
    public function getActions();

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?ApprovalRuleUpdateActionCollection $actions
     */
    public function setActions(?ApprovalRuleUpdateActionCollection $actions): void;
}
