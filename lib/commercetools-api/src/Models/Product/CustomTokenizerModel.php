<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class CustomTokenizerModel extends JsonObjectModel implements CustomTokenizer
{
    const DISCRIMINATOR_VALUE = 'custom';
    public function __construct(
        string $type = null,
        array $inputs = null
    ) {
        $this->type = $type;
        $this->inputs = $inputs;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?array
     */
    protected $inputs;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(SuggestTokenizer::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getInputs()
    {
       if (is_null($this->inputs)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(CustomTokenizer::FIELD_INPUTS);
           if (is_null($data)) {
               return null;
           }
           $this->inputs = $data;
       }
       return $this->inputs;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setInputs(?array $inputs): void
    {
        $this->inputs = $inputs;
    }
    
}