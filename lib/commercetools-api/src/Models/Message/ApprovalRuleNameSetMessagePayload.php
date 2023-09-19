<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApprovalRuleNameSetMessagePayload extends MessagePayload
{
    public const FIELD_NAME = 'name';
    public const FIELD_OLD_NAME = 'oldName';

    /**
     * <p>Name of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> after the <a href="ctp:api:type:ApprovalRuleSetNameAction">Set Name</a> update action.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Name of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> before the <a href="ctp:api:type:ApprovalRuleSetNameAction">Set Name</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldName();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?string $oldName
     */
    public function setOldName(?string $oldName): void;
}
