<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ImportSink extends JsonObject
{
    const FIELD_KEY = 'key';
    const FIELD_RESOURCE_TYPE = 'resourceType';
    const FIELD_VERSION = 'version';
    const FIELD_SKIP_PREDICATE = 'skipPredicate';
    const FIELD_CREATED_AT = 'createdAt';
    const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';

    /**
     * <p>The key of import sink.</p>.
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>The type of the import resource sent to this import sink.</p>.
     *
     * @return null|string
     */
    public function getResourceType();

    /**
     * <p>The version of this resource.</p>.
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * <p>A predicate allows to check the current state of a CTP resource. And can be used to detect if an import should
     * be performed or should be skipped. And this abstract type allows us to support different syntaxes for our predicates
     * without any breaking changes to our api.</p>.
     *
     * @return null|Predicate
     */
    public function getSkipPredicate();

    /**
     * <p>The creation time of this import sink.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>The last modification time of this import sink.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    public function setKey(?string $key): void;

    public function setResourceType(?string $resourceType): void;

    public function setVersion(?int $version): void;

    public function setSkipPredicate(?Predicate $skipPredicate): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;
}
