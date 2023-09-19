<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApprovalRuleDescriptionSetMessagePayload extends MessagePayload
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_OLD_DESCRIPTION = 'oldDescription';

    /**
     * <p>Description of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> after the <a href="ctp:api:type:ApprovalRuleSetDescriptionAction">Set Description</a> update action.</p>
     *

     * @return null|string
     */
    public function getDescription();

    /**
     * <p>Description of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> before the <a href="ctp:api:type:ApprovalRuleSetDescriptionAction">Set Description</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldDescription();

    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void;

    /**
     * @param ?string $oldDescription
     */
    public function setOldDescription(?string $oldDescription): void;
}
