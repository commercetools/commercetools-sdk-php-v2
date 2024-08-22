<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReferencedResourceNotFound extends ErrorObject
{
    public const FIELD_TYPE_ID = 'typeId';
    public const FIELD_ID = 'id';
    public const FIELD_KEY = 'key';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;The referenced object of type $typeId $predicate was not found. It either doesn't exist, or it can't be accessed from this endpoint (e.g., if the endpoint filters by store or customer account).&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

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
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

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
