<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AssociateRolePermissionsSetMessagePayloadModel extends JsonObjectModel implements AssociateRolePermissionsSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'AssociateRolePermissionsSet';
    /**
     *
     * @var ?string
     */
    protected $type;

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
        ?string $type = null
    ) {
        $this->permissions = $permissions;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Permission assigned to the AssociateRole.</p>
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
