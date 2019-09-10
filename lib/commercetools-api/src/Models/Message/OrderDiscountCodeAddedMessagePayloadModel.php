<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReferenceModel;

final class OrderDiscountCodeAddedMessagePayloadModel extends JsonObjectModel implements OrderDiscountCodeAddedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderDiscountCodeAdded';
    public function __construct(
        string $type = null,
        DiscountCodeReference $discountCode = null
    ) {
        $this->type = $type;
        $this->discountCode = $discountCode;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?DiscountCodeReference
     */
    protected $discountCode;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MessagePayload::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return DiscountCodeReference|null
     */
    final public function getDiscountCode()
    {
       if (is_null($this->discountCode)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderDiscountCodeAddedMessagePayload::FIELD_DISCOUNT_CODE);
           if (is_null($data)) {
               return null;
           }
           
           $this->discountCode = DiscountCodeReferenceModel::of($data);
       }
       return $this->discountCode;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setDiscountCode(?DiscountCodeReference $discountCode): void
    {
        $this->discountCode = $discountCode;
    }
    
}