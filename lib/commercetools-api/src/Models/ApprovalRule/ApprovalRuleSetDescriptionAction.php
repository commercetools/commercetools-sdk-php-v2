<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApprovalRuleSetDescriptionAction extends ApprovalRuleUpdateAction
{
    public const FIELD_DESCRIPTION = 'description';

    /**
     * <p>New description to set for the Approval Rule.</p>
     *

     * @return null|string
     */
    public function getDescription();

    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void;
}
