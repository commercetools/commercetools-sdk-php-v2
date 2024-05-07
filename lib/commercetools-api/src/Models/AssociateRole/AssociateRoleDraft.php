<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AssociateRole;

use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AssociateRoleDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_BUYER_ASSIGNABLE = 'buyerAssignable';
    public const FIELD_PERMISSIONS = 'permissions';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-defined unique and immutable identifier for the AssociateRole.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Name of the AssociateRole.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Whether the AssociateRole can be assigned to an Associate by a <a href="/../api/associates-overview#buyer">buyer</a>.</p>
     *

     * @return null|bool
     */
    public function getBuyerAssignable();

    /**
     * <p>List of Permissions for the AssociateRole.</p>
     *

     * @return null|array
     */
    public function getPermissions();

    /**
     * <p>Custom Fields for the AssociateRole.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?bool $buyerAssignable
     */
    public function setBuyerAssignable(?bool $buyerAssignable): void;

    /**
     * @param ?array $permissions
     */
    public function setPermissions(?array $permissions): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
