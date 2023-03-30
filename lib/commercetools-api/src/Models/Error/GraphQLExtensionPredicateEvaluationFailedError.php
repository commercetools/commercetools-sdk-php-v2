<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLExtensionPredicateEvaluationFailedError extends GraphQLErrorObject
{
    public const FIELD_ERROR_BY_EXTENSION = 'errorByExtension';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Details about the API Extension that was involved in the error.</p>
     *

     * @return null|ErrorByExtension
     */
    public function getErrorByExtension();

    /**
     * @param ?ErrorByExtension $errorByExtension
     */
    public function setErrorByExtension(?ErrorByExtension $errorByExtension): void;
}
