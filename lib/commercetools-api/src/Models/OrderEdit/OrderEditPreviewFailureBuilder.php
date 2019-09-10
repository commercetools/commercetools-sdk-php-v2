<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Error\ErrorObjectCollection;

/**
 * @implements Builder<OrderEditPreviewFailure>
 */
final class OrderEditPreviewFailureBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?ErrorObjectCollection
     */
    protected $errors;

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
     * @return ErrorObjectCollection|null
     */
    final public function getErrors()
    {
       return $this->errors;
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
    final public function withErrors(?ErrorObjectCollection $errors)
    {
        $this->errors = $errors;
        
        return $this;
    }
    
    public function build(): OrderEditPreviewFailure {
        return new OrderEditPreviewFailureModel(
            $this->type,
            $this->errors
        );
    }
    
    public static function of(): OrderEditPreviewFailureBuilder
    {
        return new self();
    }
}