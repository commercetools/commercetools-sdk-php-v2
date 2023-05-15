<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\BusinessUnit\AssociateRoleAssignmentDraftCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyBusinessUnitAssociateDraft extends JsonObject
{
    public const FIELD_VERSION = 'version';
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_ASSOCIATE_ROLE_ASSIGNMENTS = 'associateRoleAssignments';

    /**
     * <p>Expected version of the BusinessUnit on which the changes should be applied. If the expected version does not match the actual version, a <a href="/../api/errors#409-conflict">409 Conflict</a> error will be returned.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p><a href="ctp:api:type:Customer">Customer</a> to create and assign to the Business Unit.</p>
     *

     * @return null|MyCustomerDraft
     */
    public function getCustomer();

    /**
     * <p>Roles assigned to the new Associate within a Business Unit.</p>
     *

     * @return null|AssociateRoleAssignmentDraftCollection
     */
    public function getAssociateRoleAssignments();

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?MyCustomerDraft $customer
     */
    public function setCustomer(?MyCustomerDraft $customer): void;

    /**
     * @param ?AssociateRoleAssignmentDraftCollection $associateRoleAssignments
     */
    public function setAssociateRoleAssignments(?AssociateRoleAssignmentDraftCollection $associateRoleAssignments): void;
}
