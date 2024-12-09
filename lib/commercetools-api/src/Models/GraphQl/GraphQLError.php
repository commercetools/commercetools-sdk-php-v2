<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\GraphQl;

use Commercetools\Api\Models\Error\GraphQLErrorObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLError extends JsonObject
{
    public const FIELD_MESSAGE = 'message';
    public const FIELD_LOCATIONS = 'locations';
    public const FIELD_PATH = 'path';
    public const FIELD_EXTENSIONS = 'extensions';

    /**
     * <p>Detailed description of the error explaining the root cause of the problem and suggesting how to correct the error.</p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Location within your query where the error occurred.</p>
     *

     * @return null|GraphQLErrorLocationCollection
     */
    public function getLocations();

    /**
     * <p>Query fields listed in order from the root of the query response up to the field in which the error occurred. <code>path</code> is displayed in the response only if an error is associated with a particular field in the query result.</p>
     *

     * @return null|array
     */
    public function getPath();

    /**
     * <p>Dictionary with additional information where applicable.</p>
     *

     * @return null|GraphQLErrorObject
     */
    public function getExtensions();

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

    /**
     * @param ?GraphQLErrorObject $extensions
     */
    public function setExtensions(?GraphQLErrorObject $extensions): void;
}
