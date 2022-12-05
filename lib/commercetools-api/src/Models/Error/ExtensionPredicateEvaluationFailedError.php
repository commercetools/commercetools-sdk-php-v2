<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ExtensionPredicateEvaluationFailedError extends ErrorObject
{
    public const FIELD_ERROR_BY_EXTENSION = 'errorByExtension';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;The compared field $fieldName is not present.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Details about the API Extension that was involved in the error.</p>
     *

     * @return null|ErrorByExtension
     */
    public function getErrorByExtension();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?ErrorByExtension $errorByExtension
     */
    public function setErrorByExtension(?ErrorByExtension $errorByExtension): void;
}
