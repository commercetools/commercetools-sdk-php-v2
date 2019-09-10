<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;

final class ClassificationShippingRateInputModel extends JsonObjectModel implements ClassificationShippingRateInput
{
    const DISCRIMINATOR_VALUE = 'Classification';
    public function __construct(
        string $type = null,
        LocalizedString $label = null,
        string $key = null
    ) {
        $this->type = $type;
        $this->label = $label;
        $this->key = $key;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?LocalizedString
     */
    protected $label;
    
    /**
     * @var ?string
     */
    protected $key;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ShippingRateInput::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getLabel()
    {
       if (is_null($this->label)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ClassificationShippingRateInput::FIELD_LABEL);
           if (is_null($data)) {
               return null;
           }
           
           $this->label = LocalizedStringModel::of($data);
       }
       return $this->label;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ClassificationShippingRateInput::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setLabel(?LocalizedString $label): void
    {
        $this->label = $label;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
}