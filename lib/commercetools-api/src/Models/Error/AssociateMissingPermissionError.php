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

interface AssociateMissingPermissionError extends ErrorObject
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
     * <ul>
     * <li>When an action is performed by an Associate: <code>&quot;Associate '$idOfAssociate' has no rights to $action in business-unit '$idOrKeyOfBusinessUnit'. Needs '$requiredPermission'.&quot;</code></li>
     * <li>When an action is performed for another Associate, like <a href="/projects/associate-carts#get-cart-in-businessunit">viewing their Cart</a>: <code>&quot;Associate '$idOfAssociate' has no rights to $action for customer '$idOfCustomer' in business-unit '$idOrKeyOfBusinessUnit'. Needs '$requiredPermission'.&quot;</code></li>
     * <li>When viewing an entity: <code>&quot;Associate '$idOfAssociate' has no rights to $action in business-unit '$idOrKeyOfBusinessUnit'. Needs '$requiredViewMyPermission' or '$requiredViewOthersPermission'.&quot;</code></li>
     * </ul>
     *

     * @return null|string
     */
    public function getMessage();

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
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

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
