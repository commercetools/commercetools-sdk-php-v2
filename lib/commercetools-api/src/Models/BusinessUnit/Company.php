<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface Company extends BusinessUnit
{
    /**
     * <p>The value of this field is always <code>Explicit</code> because a Company cannot have a parent Business Unit that Stores can be inherited from.</p>
     *

     * @return null|string
     */
    public function getStoreMode();

    /**
     * <p>The value of this field is always <code>Explicit</code> because a Company cannot have a parent Business Unit that Associates can be inherited from.</p>
     *

     * @return null|string
     */
    public function getAssociateMode();

    /**
     * <p>The value of this field is always <code>Explicit</code> because a Company cannot have a parent Business Unit that Approval Rules can be inherited from.</p>
     *

     * @return null|string
     */
    public function getApprovalRuleMode();

    /**
     * @param ?string $storeMode
     */
    public function setStoreMode(?string $storeMode): void;

    /**
     * @param ?string $associateMode
     */
    public function setAssociateMode(?string $associateMode): void;

    /**
     * @param ?string $approvalRuleMode
     */
    public function setApprovalRuleMode(?string $approvalRuleMode): void;
}
