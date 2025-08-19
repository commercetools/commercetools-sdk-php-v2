<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\BusinessUnits;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\BusinessUnitKeyReference;

interface DivisionBusinessUnitImport extends BusinessUnitImport
{
    public const FIELD_STORE_MODE = 'storeMode';
    public const FIELD_PARENT_UNIT = 'parentUnit';
    public const FIELD_ASSOCIATE_MODE = 'associateMode';
    public const FIELD_APPROVAL_RULE_MODE = 'approvalRuleMode';

    /**
     * <p>If <code>Explicit</code>, the <code>stores</code> field cannot be empty and the Business Unit is explicitly associated with the given Stores. If <code>FromParent</code>, the Business Unit inherits the Stores from its parent.</p>
     *

     * @return null|string
     */
    public function getStoreMode();

    /**
     * <p>The parent Business Unit of this Division.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getParentUnit();

    /**
     * <p>If <code>Explicit</code>, Associates are not inherited from the parent. If <code>ExplicitAndFromParent</code>, Associates are inherited from the parent.</p>
     *

     * @return null|string
     */
    public function getAssociateMode();

    /**
     * <p>If <code>Explicit</code>, approval rules are not inherited from the parent. If <code>ExplicitAndFromParent</code>, approval rules are inherited from the parent.</p>
     *

     * @return null|string
     */
    public function getApprovalRuleMode();

    /**
     * @param ?string $storeMode
     */
    public function setStoreMode(?string $storeMode): void;

    /**
     * @param ?BusinessUnitKeyReference $parentUnit
     */
    public function setParentUnit(?BusinessUnitKeyReference $parentUnit): void;

    /**
     * @param ?string $associateMode
     */
    public function setAssociateMode(?string $associateMode): void;

    /**
     * @param ?string $approvalRuleMode
     */
    public function setApprovalRuleMode(?string $approvalRuleMode): void;
}
