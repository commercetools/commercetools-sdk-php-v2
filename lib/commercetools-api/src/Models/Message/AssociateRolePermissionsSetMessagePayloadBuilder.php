<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AssociateRolePermissionsSetMessagePayload>
 */
final class AssociateRolePermissionsSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $permissions;

    /**
     * <p>Permission assigned to the AssociateRole.</p>
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


    public function build(): AssociateRolePermissionsSetMessagePayload
    {
        return new AssociateRolePermissionsSetMessagePayloadModel(
            $this->permissions
        );
    }

    public static function of(): AssociateRolePermissionsSetMessagePayloadBuilder
    {
        return new self();
    }
}
