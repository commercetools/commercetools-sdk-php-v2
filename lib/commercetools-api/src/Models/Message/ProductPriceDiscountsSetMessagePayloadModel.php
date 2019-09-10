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


final class ProductPriceDiscountsSetMessagePayloadModel extends JsonObjectModel implements ProductPriceDiscountsSetMessagePayload
{
    const DISCRIMINATOR_VALUE = 'ProductPriceDiscountsSet';
    public function __construct(
        string $type = null,
        ProductPriceDiscountsSetUpdatedPriceCollection $updatedPrices = null
    ) {
        $this->type = $type;
        $this->updatedPrices = $updatedPrices;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?ProductPriceDiscountsSetUpdatedPriceCollection
     */
    protected $updatedPrices;

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
     * @return ProductPriceDiscountsSetUpdatedPriceCollection|null
     */
    final public function getUpdatedPrices()
    {
       if (is_null($this->updatedPrices)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ProductPriceDiscountsSetMessagePayload::FIELD_UPDATED_PRICES);
           if (is_null($data)) {
               return null;
           }
           $this->updatedPrices = ProductPriceDiscountsSetUpdatedPriceCollection::fromArray($data);
       }
       return $this->updatedPrices;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setUpdatedPrices(?ProductPriceDiscountsSetUpdatedPriceCollection $updatedPrices): void
    {
        $this->updatedPrices = $updatedPrices;
    }
    
}