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
final class AssociateRoleSetPermissionsActionModel extends JsonObjectModel implements AssociateRoleSetPermissionsAction
{
    public const DISCRIMINATOR_VALUE = 'setPermissions';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?array
     */
    protected $permissions;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $permissions = null,
        ?string $action = null
    ) {
        $this->permissions = $permissions;
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
     * <p>Overrides the current list of Permissions for the AssociateRole.</p>
     *
     *
     * @return null|array
     */
    public function getPermissions()
    {
        if (is_null($this->permissions)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_PERMISSIONS);
            if (is_null($data)) {
                return null;
            }
            $this->permissions = $data;
        }

        return $this->permissions;
    }


    /**
     * @param ?array $permissions
     */
    public function setPermissions(?array $permissions): void
    {
        $this->permissions = $permissions;
    }
}
