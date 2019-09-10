<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class InvalidItemShippingDetailsErrorModel extends JsonObjectModel implements InvalidItemShippingDetailsError
{
    const DISCRIMINATOR_VALUE = 'InvalidItemShippingDetails';
    public function __construct(
        string $code = null,
        string $message = null,
        string $itemId = null,
        string $subject = null
    ) {
        $this->code = $code;
        $this->message = $message;
        $this->itemId = $itemId;
        $this->subject = $subject;
        
    }

    /**
     * @var ?string
     */
    protected $code;
    
    /**
     * @var ?string
     */
    protected $message;
    
    /**
     * @var ?string
     */
    protected $itemId;
    
    /**
     * @var ?string
     */
    protected $subject;

    /**
     *
     * @return string|null
     */
    final public function getCode()
    {
       if (is_null($this->code)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ErrorObject::FIELD_CODE);
           if (is_null($data)) {
               return null;
           }
           $this->code = (string)$data;
       }
       return $this->code;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getMessage()
    {
       if (is_null($this->message)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ErrorObject::FIELD_MESSAGE);
           if (is_null($data)) {
               return null;
           }
           $this->message = (string)$data;
       }
       return $this->message;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getItemId()
    {
       if (is_null($this->itemId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(InvalidItemShippingDetailsError::FIELD_ITEM_ID);
           if (is_null($data)) {
               return null;
           }
           $this->itemId = (string)$data;
       }
       return $this->itemId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSubject()
    {
       if (is_null($this->subject)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(InvalidItemShippingDetailsError::FIELD_SUBJECT);
           if (is_null($data)) {
               return null;
           }
           $this->subject = (string)$data;
       }
       return $this->subject;
    }
    final public function setCode(?string $code): void
    {
        $this->code = $code;
    }
    
    final public function setMessage(?string $message): void
    {
        $this->message = $message;
    }
    
    final public function setItemId(?string $itemId): void
    {
        $this->itemId = $itemId;
    }
    
    final public function setSubject(?string $subject): void
    {
        $this->subject = $subject;
    }
    
}