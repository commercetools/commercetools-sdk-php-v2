<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Base\JsonObject;

interface ErrorResponse extends JsonObject
{
    const FIELD_STATUS_CODE = 'statusCode';
    const FIELD_MESSAGE = 'message';
    const FIELD_ERROR = 'error';
    const FIELD_ERROR_DESCRIPTION = 'error_description';
    const FIELD_ERRORS = 'errors';

    /**
     * @return int
     */
    public function getStatusCode();

    /**
     * @return string
     */
    public function getMessage();

    /**
     * @return string
     */
    public function getError();

    /**
     * @return string
     */
    public function getError_description();

    /**
     * @return array
     */
    public function getErrors();

    /**
     * @param int $statusCode
     * @return $this
     */
    public function setStatusCode(int $statusCode);

    /**
     * @param string $message
     * @return $this
     */
    public function setMessage(string $message);

    /**
     * @param string $error
     * @return $this
     */
    public function setError(string $error);

    /**
     * @param string $error_description
     * @return $this
     */
    public function setError_description(string $error_description);

    /**
     * @param array $errors
     * @return $this
     */
    public function setErrors(array $errors);

}
