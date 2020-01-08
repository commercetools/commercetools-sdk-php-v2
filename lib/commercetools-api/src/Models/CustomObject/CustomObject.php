<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomObject;

use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface CustomObject extends LoggedResource
{
    const FIELD_CONTAINER = 'container';
    const FIELD_KEY = 'key';
    const FIELD_VALUE = 'value';

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>A namespace to group custom objects.</p>.
     *
     * @return null|string
     */
    public function getContainer();

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|JsonObject
     */
    public function getValue();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    public function setCreatedBy(?CreatedBy $createdBy): void;

    public function setContainer(?string $container): void;

    public function setKey(?string $key): void;

    public function setValue(?JsonObject $value): void;
}
