<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomTokenizer>
 */
final class CustomTokenizerBuilder implements Builder
{
    public function __construct() {
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
       return $this->type;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getInputs()
    {
       return $this->inputs;
    }
    /**
     * @return $this
     */
    final public function withType(?string $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withInputs(?array $inputs)
    {
        $this->inputs = $inputs;
        
        return $this;
    }
    
    public function build(): CustomTokenizer {
        return new CustomTokenizerModel(
            $this->type,
            $this->inputs
        );
    }
    
    public static function of(): CustomTokenizerBuilder
    {
        return new self();
    }
}