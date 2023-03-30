<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLReferencedResourceNotFoundError extends GraphQLErrorObject
{
    public const FIELD_TYPE_ID = 'typeId';
    public const FIELD_ID = 'id';
    public const FIELD_KEY = 'key';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Type of referenced resource.</p>
     *

     * @return null|string
     */
    public function getTypeId();

    /**
     * <p>Unique identifier of the referenced resource, if known.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>User-defined unique identifier of the referenced resource, if known.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * @param ?string $typeId
     */
    public function setTypeId(?string $typeId): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
