<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ErrorResponse extends JsonObject {
    protected $statusCode;
    protected $message;
    protected $error;
    protected $error_description;
    protected $errors;

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        if (is_null($this->statusCode)) {
            $value = $this->raw('statusCode');
            if (!is_null($value)) {
                $this->statusCode = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->statusCode;
    }
                

    /**
     * @return string
     */
    public function getMessage(): string
    {
        if (is_null($this->message)) {
            $value = $this->raw('message');
            if (!is_null($value)) {
                $this->message = (string)$value;
            } else {
                return '';
            }
        }
        return $this->message;
    }
                

    /**
     * @return string
     */
    public function getError(): string
    {
        if (is_null($this->error)) {
            $value = $this->raw('error');
            if (!is_null($value)) {
                $this->error = (string)$value;
            } else {
                return '';
            }
        }
        return $this->error;
    }
                

    /**
     * @return string
     */
    public function getErrorDescription(): string
    {
        if (is_null($this->error_description)) {
            $value = $this->raw('error_description');
            if (!is_null($value)) {
                $this->error_description = (string)$value;
            } else {
                return '';
            }
        }
        return $this->error_description;
    }
                

    /**
     * @return ErrorObjectCollection
     */
    public function getErrors(): ErrorObjectCollection
    {
        if (is_null($this->errors)) {
            $value = $this->raw('errors');
            if (!is_null($value)) {
                $this->errors = Mapper::map($value, ErrorObjectCollection::class);
            } else {
                return Mapper::map([], ErrorObjectCollection::class);
            }
        }
        return $this->errors;
    }
                
}
