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
 * @implements Builder<AssociateRolePermissionAddedMessagePayload>
 */
final class AssociateRolePermissionAddedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $permission;

    /**
     * <p>The Permission that was added to the AssociateRole.</p>
     *

     * @return null|string
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * @param ?string $permission
     * @return $this
     */
    public function withPermission(?string $permission)
    {
        $this->permission = $permission;

        return $this;
    }


    public function build(): AssociateRolePermissionAddedMessagePayload
    {
        return new AssociateRolePermissionAddedMessagePayloadModel(
            $this->permission
        );
    }

    public static function of(): AssociateRolePermissionAddedMessagePayloadBuilder
    {
        return new self();
    }
}
