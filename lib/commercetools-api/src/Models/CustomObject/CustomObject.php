<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomObject;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface CustomObject extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CONTAINER = 'container';
    public const FIELD_KEY = 'key';
    public const FIELD_VALUE = 'value';

    /**
     * <p>Platform-generated unique identifier of the CustomObject.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the CustomObject.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the CustomObject was initially created.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the CustomObject was last updated.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>Namespace to group CustomObjects.</p>
     *
     * @return null|string
     */
    public function getContainer();

    /**
     * <p>User-defined unique identifier of the CustomObject within the defined <code>container</code>.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>JSON standard types Number, String, Boolean, Array, Object, and <a href="/../api/types">common API data types</a>.
     * For values of type <a href="ctp:api:type:Reference">Reference</a> the integrity of the data is not guaranteed.
     * If the referenced object is deleted, the platform does not delete the corresponding reference to it and the <code>value</code> points to a non-existing object in such case.</p>
     *
     * @return null|mixed
     */
    public function getValue();

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
     * @param ?string $container
     */
    public function setContainer(?string $container): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param mixed $value
     */
    public function setValue($value): void;
}
