<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AssociateRole;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface AssociateRole extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_KEY = 'key';
    public const FIELD_BUYER_ASSIGNABLE = 'buyerAssignable';
    public const FIELD_NAME = 'name';
    public const FIELD_PERMISSIONS = 'permissions';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Unique identifier of the AssociateRole.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the AssociateRole.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the AssociateRole was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the AssociateRole was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>IDs and references that last modified the AssociateRole.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>IDs and references that created the AssociateRole.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>User-defined unique and immutable identifier of the AssociateRole.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Whether the AssociateRole can be assigned to an Associate by a <a href="/../api/associates-overview#buyer">buyer</a>. If false, the AssociateRole can only be assigned using the <a href="/../api/associates-overview#through-the-general-endpoints">general endpoint</a>.</p>
     *

     * @return null|bool
     */
    public function getBuyerAssignable();

    /**
     * <p>Name of the AssociateRole.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>List of Permissions for the AssociateRole.</p>
     *

     * @return null|array
     */
    public function getPermissions();

    /**
     * <p>Custom Fields for the AssociateRole.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?bool $buyerAssignable
     */
    public function setBuyerAssignable(?bool $buyerAssignable): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?array $permissions
     */
    public function setPermissions(?array $permissions): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;
}
