<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Base\JsonObjectModel;

use Commercetools\Types;

class ErrorObjectModel extends JsonObjectModel implements ErrorObject {
    const DISCRIMINATOR_VALUE = '';

    /**
     * @param array $data
     */
    public function __construct(array $data = []) {
        parent::__construct($data);
        $this->setCode(static::DISCRIMINATOR_VALUE);
    }

    /**
     * @var string
     */
    protected $code;
    /**
     * @var string
     */
    protected $message;

    /**
     * @return string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            $value = $this->raw(ErrorObject::FIELD_CODE);
            $value = (string)$value;
            $this->code = $value;
        }
        return $this->code;
    }
    /**
     * @return string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            $value = $this->raw(ErrorObject::FIELD_MESSAGE);
            $value = (string)$value;
            $this->message = $value;
        }
        return $this->message;
    }

    /**
     * @param string $code
     * @return $this
     */
    public function setCode(string $code)
    {
        $this->code = (string)$code;

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

}
