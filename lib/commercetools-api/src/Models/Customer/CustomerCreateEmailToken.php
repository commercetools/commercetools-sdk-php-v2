<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerCreateEmailToken extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_VERSION = 'version';
    public const FIELD_TTL_MINUTES = 'ttlMinutes';
    public const FIELD_INVALIDATE_OLDER_TOKENS = 'invalidateOlderTokens';

    /**
     * <p>Unique identifier of the Customer.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Expected version of the Customer.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Validity period of the generated token in minutes.</p>
     *

     * @return null|int
     */
    public function getTtlMinutes();

    /**
     * <p>If set to <code>true</code>, all email tokens issued previously for the Customer will be invalidated.</p>
     *

     * @return null|bool
     */
    public function getInvalidateOlderTokens();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?int $ttlMinutes
     */
    public function setTtlMinutes(?int $ttlMinutes): void;

    /**
     * @param ?bool $invalidateOlderTokens
     */
    public function setInvalidateOlderTokens(?bool $invalidateOlderTokens): void;
}
