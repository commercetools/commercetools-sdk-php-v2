<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AssociateRole;

use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AssociateRoleDraft>
 */
final class AssociateRoleDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?bool
     */
    private $buyerAssignable;

    /**

     * @var ?array
     */
    private $permissions;

    /**

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * <p>User-defined unique identifier for the AssociateRole.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Name of the AssociateRole.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Whether the AssociateRole can be assigned to an Associate by a <a href="/../api/associates-overview#buyer">buyer</a>.</p>
     *

     * @return null|bool
     */
    public function getBuyerAssignable()
    {
        return $this->buyerAssignable;
    }

    /**
     * <p>List of Permissions for the AssociateRole.</p>
     *

     * @return null|array
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * <p>Custom Fields for the AssociateRole.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?bool $buyerAssignable
     * @return $this
     */
    public function withBuyerAssignable(?bool $buyerAssignable)
    {
        $this->buyerAssignable = $buyerAssignable;

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
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): AssociateRoleDraft
    {
        return new AssociateRoleDraftModel(
            $this->key,
            $this->name,
            $this->buyerAssignable,
            $this->permissions,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): AssociateRoleDraftBuilder
    {
        return new self();
    }
}
