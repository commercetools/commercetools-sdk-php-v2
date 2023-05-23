<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AssociateRole;

use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AssociateRoleDraftModel extends JsonObjectModel implements AssociateRoleDraft
{
    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?bool
     */
    protected $buyerAssignable;

    /**
     *
     * @var ?array
     */
    protected $permissions;

    /**
     *
     * @var ?CustomFieldsDraft
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $name = null,
        ?bool $buyerAssignable = null,
        ?array $permissions = null,
        ?CustomFieldsDraft $custom = null
    ) {
        $this->key = $key;
        $this->name = $name;
        $this->buyerAssignable = $buyerAssignable;
        $this->permissions = $permissions;
        $this->custom = $custom;
    }

    /**
     * <p>User-defined unique identifier for the AssociateRole.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Name of the AssociateRole.</p>
     *
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>Whether the AssociateRole can be assigned to an Associate by a <a href="/../api/associates-overview#buyer">buyer</a>.</p>
     *
     *
     * @return null|bool
     */
    public function getBuyerAssignable()
    {
        if (is_null($this->buyerAssignable)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_BUYER_ASSIGNABLE);
            if (is_null($data)) {
                return null;
            }
            $this->buyerAssignable = (bool) $data;
        }

        return $this->buyerAssignable;
    }

    /**
     * <p>List of Permissions for the AssociateRole.</p>
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
     * <p>Custom Fields for the AssociateRole.</p>
     *
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?bool $buyerAssignable
     */
    public function setBuyerAssignable(?bool $buyerAssignable): void
    {
        $this->buyerAssignable = $buyerAssignable;
    }

    /**
     * @param ?array $permissions
     */
    public function setPermissions(?array $permissions): void
    {
        $this->permissions = $permissions;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
}
