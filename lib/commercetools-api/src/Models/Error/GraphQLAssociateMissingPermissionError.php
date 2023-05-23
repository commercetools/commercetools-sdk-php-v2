<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLAssociateMissingPermissionError extends GraphQLErrorObject
{
    public const FIELD_ASSOCIATE = 'associate';
    public const FIELD_BUSINESS_UNIT = 'businessUnit';
    public const FIELD_ASSOCIATE_ON_BEHALF = 'associateOnBehalf';
    public const FIELD_PERMISSIONS = 'permissions';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><a href="ctp:api:type:CustomerResourceIdentifier">ResourceIdentifier</a> to the <a href="ctp:api:type:Associate">Associate</a> that tried to perform the action.</p>
     *

     * @return null|CustomerResourceIdentifier
     */
    public function getAssociate();

    /**
     * <p><a href="ctp:api:type:BusinessUnitResourceIdentifier">ResourceIdentifier</a> to the <a href="ctp:api:type:BusinessUnit">BusinessUnit</a>.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit();

    /**
     * <p><a href="ctp:api:type:CustomerResourceIdentifier">ResourceIdentifier</a> of the <a href="ctp:api:type:Associate">Associate</a> on whose behalf the action is performed.</p>
     *

     * @return null|CustomerResourceIdentifier
     */
    public function getAssociateOnBehalf();

    /**
     * <p>The Permissions that the <a href="ctp:api:type:Associate">Associate</a> performing the action lacks. At least one of these Permissions is needed.</p>
     *

     * @return null|array
     */
    public function getPermissions();

    /**
     * @param ?CustomerResourceIdentifier $associate
     */
    public function setAssociate(?CustomerResourceIdentifier $associate): void;

    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit): void;

    /**
     * @param ?CustomerResourceIdentifier $associateOnBehalf
     */
    public function setAssociateOnBehalf(?CustomerResourceIdentifier $associateOnBehalf): void;

    /**
     * @param ?array $permissions
     */
    public function setPermissions(?array $permissions): void;
}
