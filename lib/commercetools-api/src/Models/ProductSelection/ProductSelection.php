<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ProductSelection extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_PRODUCT_COUNT = 'productCount';
    public const FIELD_TYPE = 'type';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Unique ID of the Product Selection.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the Product Selection.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the Product Selection was initially created.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the Product Selection was last updated.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources updated after 1/02/2019 except for events not
     * tracked.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1/02/2019 except for events not
     * tracked.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>User-defined unique identifier for the Product Selection.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>Name of the Product Selection.</p>
     *
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Number of Products that are currently assigned to this Product Selection.</p>
     *
     * @return null|int
     */
    public function getProductCount();

    /**
     * <p>Specifies in which way the Products are assigned to the Product Selection. Currently, the only way of doing this is to specify each Product individually. Hence, the type is fixed to <code>individual</code> for now, but we have plans to add other types in the future.</p>
     *
     * @return null|string
     */
    public function getType();

    /**
     * <p>Custom Fields of this Product Selection.</p>
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
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?int $productCount
     */
    public function setProductCount(?int $productCount): void;

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;
}
