<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApprovalRuleSetKeyAction extends ApprovalRuleUpdateAction
{
    public const FIELD_KEY = 'key';

    /**
     * <p>Value to set. Must be unique within a Business Unit. If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
