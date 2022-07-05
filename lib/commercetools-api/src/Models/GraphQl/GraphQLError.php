<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\GraphQl;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLError extends JsonObject
{
    public const FIELD_MESSAGE = 'message';
    public const FIELD_LOCATIONS = 'locations';
    public const FIELD_PATH = 'path';

    /**

     * @return null|string
     */
    public function getMessage();

    /**

     * @return null|GraphQLErrorLocationCollection
     */
    public function getLocations();

    /**

     * @return null|array
     */
    public function getPath();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?GraphQLErrorLocationCollection $locations
     */
    public function setLocations(?GraphQLErrorLocationCollection $locations): void;

    /**
     * @param ?array $path
     */
    public function setPath(?array $path): void;
}
