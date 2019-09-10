<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;

interface ErrorObject extends JsonObject
{
    const DISCRIMINATOR_FIELD = 'code';
    const FIELD_CODE = 'code';
    const FIELD_MESSAGE = 'message';

    /**
     *
     * @return string|null
     */
    public function getCode();
    
    /**
     *
     * @return string|null
     */
    public function getMessage();
    public function setCode(?string $code): void;
    
    public function setMessage(?string $message): void;
}