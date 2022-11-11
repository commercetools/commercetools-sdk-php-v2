<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AuthErrorResponse extends ErrorResponse
{
    public const FIELD_ERROR = 'error';
    public const FIELD_ERROR_DESCRIPTION = 'error_description';

    /**
     * <p>Error code as per the <a href="https://tools.ietf.org/html/rfc6749#section-5.2">OAuth 2.0 specification</a>. For example: <code>&quot;access_denied&quot;</code>.</p>
     *

     * @return null|string
     */
    public function getError();

    /**
     * <p>Plain text description of the first error.</p>
     *

     * @return null|string
     */
    public function getError_description();

    /**
     * <p>Authentication and authorization-related errors returned for a request.</p>
     *

     * @return null|ErrorObjectCollection
     */
    public function getErrors();

    /**
     * @param ?string $error
     */
    public function setError(?string $error): void;

    /**
     * @param ?string $error_description
     */
    public function setError_description(?string $error_description): void;

    /**
     * @param ?ErrorObjectCollection $errors
     */
    public function setErrors(?ErrorObjectCollection $errors): void;
}
