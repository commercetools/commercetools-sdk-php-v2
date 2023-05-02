<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AssociateRole;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AssociateRoleRemovePermissionActionModel extends JsonObjectModel implements AssociateRoleRemovePermissionAction
{
    public const DISCRIMINATOR_VALUE = 'removePermission';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $permission;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $permission = null,
        ?string $action = null
    ) {
        $this->permission = $permission;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Permission to be removed from the AssociateRole.</p>
     *
     *
     * @return null|string
     */
    public function getPermission()
    {
        if (is_null($this->permission)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PERMISSION);
            if (is_null($data)) {
                return null;
            }
            $this->permission = (string) $data;
        }

        return $this->permission;
    }


    /**
     * @param ?string $permission
     */
    public function setPermission(?string $permission): void
    {
        $this->permission = $permission;
    }
}
