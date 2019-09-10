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


final class ProductPublishActionModel extends JsonObjectModel implements ProductPublishAction
{
    const DISCRIMINATOR_VALUE = 'publish';
    public function __construct(
        string $action = null,
        string $scope = null
    ) {
        $this->action = $action;
        $this->scope = $scope;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $scope;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getScope()
    {
       if (is_null($this->scope)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductPublishAction::FIELD_SCOPE);
           if (is_null($data)) {
               return null;
           }
           $this->scope = (string)$data;
       }
       return $this->scope;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setScope(?string $scope): void
    {
        $this->scope = $scope;
    }
    
}