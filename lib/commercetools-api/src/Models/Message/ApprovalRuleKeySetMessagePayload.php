<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApprovalRuleKeySetMessagePayload extends MessagePayload
{
    public const FIELD_KEY = 'key';
    public const FIELD_OLD_KEY = 'oldKey';

    /**
     * <p><code>key</code> value of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> after the <a href="ctp:api:type:ApprovalRuleSetKeyAction">Set Key</a> update action.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p><code>key</code> value of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> before the <a href="ctp:api:type:ApprovalRuleSetKeyAction">Set Key</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldKey();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $oldKey
     */
    public function setOldKey(?string $oldKey): void;
}
