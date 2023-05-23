<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifierBuilder;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AssociateMissingPermissionError>
 */
final class AssociateMissingPermissionErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var null|CustomerResourceIdentifier|CustomerResourceIdentifierBuilder
     */
    private $associate;

    /**

     * @var null|BusinessUnitResourceIdentifier|BusinessUnitResourceIdentifierBuilder
     */
    private $businessUnit;

    /**

     * @var null|CustomerResourceIdentifier|CustomerResourceIdentifierBuilder
     */
    private $associateOnBehalf;

    /**

     * @var ?array
     */
    private $permissions;

    /**
     * <ul>
     * <li>When an action is performed by an Associate: <code>&quot;Associate '$idOfAssociate' has no rights to $action in business-unit '$idOrKeyOfBusinessUnit'. Needs '$requiredPermission'.&quot;</code></li>
     * <li>When an action is performed for another Associate, like <a href="/projects/associate-carts#get-cart-in-businessunit">viewing their Cart</a>: <code>&quot;Associate '$idOfAssociate' has no rights to $action for customer '$idOfCustomer' in business-unit '$idOrKeyOfBusinessUnit'. Needs '$requiredPermission'.&quot;</code></li>
     * <li>When viewing an entity: <code>&quot;Associate '$idOfAssociate' has no rights to $action in business-unit '$idOrKeyOfBusinessUnit'. Needs '$requiredViewMyPermission' or '$requiredViewOthersPermission'.&quot;</code></li>
     * </ul>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p><a href="ctp:api:type:CustomerResourceIdentifier">ResourceIdentifier</a> to the <a href="ctp:api:type:Associate">Associate</a> that tried to perform the action.</p>
     *

     * @return null|CustomerResourceIdentifier
     */
    public function getAssociate()
    {
        return $this->associate instanceof CustomerResourceIdentifierBuilder ? $this->associate->build() : $this->associate;
    }

    /**
     * <p><a href="ctp:api:type:BusinessUnitResourceIdentifier">ResourceIdentifier</a> to the <a href="ctp:api:type:BusinessUnit">BusinessUnit</a>.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit()
    {
        return $this->businessUnit instanceof BusinessUnitResourceIdentifierBuilder ? $this->businessUnit->build() : $this->businessUnit;
    }

    /**
     * <p><a href="ctp:api:type:CustomerResourceIdentifier">ResourceIdentifier</a> of the <a href="ctp:api:type:Associate">Associate</a> on whose behalf the action is performed.</p>
     *

     * @return null|CustomerResourceIdentifier
     */
    public function getAssociateOnBehalf()
    {
        return $this->associateOnBehalf instanceof CustomerResourceIdentifierBuilder ? $this->associateOnBehalf->build() : $this->associateOnBehalf;
    }

    /**
     * <p>The Permissions that the <a href="ctp:api:type:Associate">Associate</a> performing the action lacks. At least one of these Permissions is needed.</p>
     *

     * @return null|array
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @param ?CustomerResourceIdentifier $associate
     * @return $this
     */
    public function withAssociate(?CustomerResourceIdentifier $associate)
    {
        $this->associate = $associate;

        return $this;
    }

    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     * @return $this
     */
    public function withBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    /**
     * @param ?CustomerResourceIdentifier $associateOnBehalf
     * @return $this
     */
    public function withAssociateOnBehalf(?CustomerResourceIdentifier $associateOnBehalf)
    {
        $this->associateOnBehalf = $associateOnBehalf;

        return $this;
    }

    /**
     * @param ?array $permissions
     * @return $this
     */
    public function withPermissions(?array $permissions)
    {
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * @deprecated use withAssociate() instead
     * @return $this
     */
    public function withAssociateBuilder(?CustomerResourceIdentifierBuilder $associate)
    {
        $this->associate = $associate;

        return $this;
    }

    /**
     * @deprecated use withBusinessUnit() instead
     * @return $this
     */
    public function withBusinessUnitBuilder(?BusinessUnitResourceIdentifierBuilder $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    /**
     * @deprecated use withAssociateOnBehalf() instead
     * @return $this
     */
    public function withAssociateOnBehalfBuilder(?CustomerResourceIdentifierBuilder $associateOnBehalf)
    {
        $this->associateOnBehalf = $associateOnBehalf;

        return $this;
    }

    public function build(): AssociateMissingPermissionError
    {
        return new AssociateMissingPermissionErrorModel(
            $this->message,
            $this->associate instanceof CustomerResourceIdentifierBuilder ? $this->associate->build() : $this->associate,
            $this->businessUnit instanceof BusinessUnitResourceIdentifierBuilder ? $this->businessUnit->build() : $this->businessUnit,
            $this->associateOnBehalf instanceof CustomerResourceIdentifierBuilder ? $this->associateOnBehalf->build() : $this->associateOnBehalf,
            $this->permissions
        );
    }

    public static function of(): AssociateMissingPermissionErrorBuilder
    {
        return new self();
    }
}
