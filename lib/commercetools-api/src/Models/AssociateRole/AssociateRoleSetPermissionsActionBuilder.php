<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AssociateRole;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AssociateRoleSetPermissionsAction>
 */
final class AssociateRoleSetPermissionsActionBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $permissions;

    /**
     * <p>Overrides the current list of Permissions for the AssociateRole.</p>
     *

     * @return null|array
     */
    public function getPermissions()
    {
        return $this->permissions;
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


    public function build(): AssociateRoleSetPermissionsAction
    {
        return new AssociateRoleSetPermissionsActionModel(
            $this->permissions
        );
    }

    public static function of(): AssociateRoleSetPermissionsActionBuilder
    {
        return new self();
    }
}
