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


final class PriceChangedErrorModel extends JsonObjectModel implements PriceChangedError
{
    const DISCRIMINATOR_VALUE = 'PriceChanged';
    public function __construct(
        string $code = null,
        string $message = null,
        array $lineItems = null,
        bool $shipping = null
    ) {
        $this->code = $code;
        $this->message = $message;
        $this->lineItems = $lineItems;
        $this->shipping = $shipping;
        
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
     * @var ?array
     */
    protected $lineItems;
    
    /**
     * @var ?bool
     */
    protected $shipping;

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
     * @return array|null
     */
    final public function getLineItems()
    {
       if (is_null($this->lineItems)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(PriceChangedError::FIELD_LINE_ITEMS);
           if (is_null($data)) {
               return null;
           }
           $this->lineItems = $data;
       }
       return $this->lineItems;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getShipping()
    {
       if (is_null($this->shipping)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(PriceChangedError::FIELD_SHIPPING);
           if (is_null($data)) {
               return null;
           }
           $this->shipping = (bool)$data;
       }
       return $this->shipping;
    }
    final public function setCode(?string $code): void
    {
        $this->code = $code;
    }
    
    final public function setMessage(?string $message): void
    {
        $this->message = $message;
    }
    
    final public function setLineItems(?array $lineItems): void
    {
        $this->lineItems = $lineItems;
    }
    
    final public function setShipping(?bool $shipping): void
    {
        $this->shipping = $shipping;
    }
    
}