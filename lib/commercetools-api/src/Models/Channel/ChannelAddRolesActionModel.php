<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ChannelAddRolesActionModel extends JsonObjectModel implements ChannelAddRolesAction
{
    public const DISCRIMINATOR_VALUE = 'addRoles';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?array
     */
    protected $roles;


    public function __construct(
        array $roles = null
    ) {
        $this->roles = $roles;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ChannelUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|array
     */
    public function getRoles()
    {
        if (is_null($this->roles)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(ChannelAddRolesAction::FIELD_ROLES);
            if (is_null($data)) {
                return null;
            }
            $this->roles = $data;
        }

        return $this->roles;
    }

    public function setRoles(?array $roles): void
    {
        $this->roles = $roles;
    }
}
