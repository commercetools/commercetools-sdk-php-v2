<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DivisionDraft extends BusinessUnitDraft
{
    public const FIELD_PARENT_UNIT = 'parentUnit';

    /**
     * <p>The parent unit of this Division. Can be a Company or a Division.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getParentUnit();

    /**
     * <p>If not set, the Division inherits the <a href="ctp:api:type:Store">Stores</a> from a parent unit.
     * Set this to <code>Explicit</code> if you want to set the Stores explicitly in the <code>stores</code> field instead.</p>
     *

     * @return null|string
     */
    public function getStoreMode();

    /**
     * <p>Determines whether the Division can inherit Associates from a parent.</p>
     *

     * @return null|string
     */
    public function getAssociateMode();

    /**
     * <p>Determines whether the Division can inherit Approval Rules from a parent.</p>
     *

     * @return null|string
     */
    public function getApprovalRuleMode();

    /**
     * @param ?BusinessUnitResourceIdentifier $parentUnit
     */
    public function setParentUnit(?BusinessUnitResourceIdentifier $parentUnit): void;

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
