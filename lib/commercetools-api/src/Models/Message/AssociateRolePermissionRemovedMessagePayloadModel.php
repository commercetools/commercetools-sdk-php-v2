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
final class AssociateRolePermissionRemovedMessagePayloadModel extends JsonObjectModel implements AssociateRolePermissionRemovedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'AssociateRolePermissionRemoved';
    /**
     *
     * @var ?string
     */
    protected $type;

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
        ?string $type = null
    ) {
        $this->permission = $permission;
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
     * <p>The Permission that was removed from the AssociateRole.</p>
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
