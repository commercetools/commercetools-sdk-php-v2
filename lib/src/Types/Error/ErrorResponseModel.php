<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class ErrorResponseModel extends JsonObjectModel implements ErrorResponse
{
    /**
     * @var int
     */
    protected $statusCode;
    /**
     * @var string
     */
    protected $message;
    /**
     * @var string
     */
    protected $error;
    /**
     * @var string
     */
    protected $error_description;
    /**
     * @var array
     */
    protected $errors;

    /**
     * @return int
     */
    public function getStatusCode()
    {
        if (is_null($this->statusCode)) {
            $value = $this->raw(ErrorResponse::FIELD_STATUS_CODE);
            $value = (int)$value;
            $this->statusCode = $value;
        }
        return $this->statusCode;
    }
    /**
     * @return string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            $value = $this->raw(ErrorResponse::FIELD_MESSAGE);
            $value = (string)$value;
            $this->message = $value;
        }
        return $this->message;
    }
    /**
     * @return string
     */
    public function getError()
    {
        if (is_null($this->error)) {
            $value = $this->raw(ErrorResponse::FIELD_ERROR);
            $value = (string)$value;
            $this->error = $value;
        }
        return $this->error;
    }
    /**
     * @return string
     */
    public function getError_description()
    {
        if (is_null($this->error_description)) {
            $value = $this->raw(ErrorResponse::FIELD_ERROR_DESCRIPTION);
            $value = (string)$value;
            $this->error_description = $value;
        }
        return $this->error_description;
    }
    /**
     * @return array
     */
    public function getErrors()
    {
        if (is_null($this->errors)) {
            $value = $this->raw(ErrorResponse::FIELD_ERRORS);
            $value = (array)$value;
            $this->errors = $value;
        }
        return $this->errors;
    }

    /**
     * @param int $statusCode
     * @return $this
     */
    public function setStatusCode(int $statusCode)
    {
        $this->statusCode = (int)$statusCode;

        return $this;
    }
    /**
     * @param string $message
     * @return $this
     */
    public function setMessage(string $message)
    {
        $this->message = (string)$message;

        return $this;
    }
    /**
     * @param string $error
     * @return $this
     */
    public function setError(string $error)
    {
        $this->error = (string)$error;

        return $this;
    }
    /**
     * @param string $error_description
     * @return $this
     */
    public function setError_description(string $error_description)
    {
        $this->error_description = (string)$error_description;

        return $this;
    }
    /**
     * @param array $errors
     * @return $this
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;

        return $this;
    }

}
