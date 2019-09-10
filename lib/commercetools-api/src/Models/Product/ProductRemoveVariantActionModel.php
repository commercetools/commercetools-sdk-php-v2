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


final class ProductRemoveVariantActionModel extends JsonObjectModel implements ProductRemoveVariantAction
{
    const DISCRIMINATOR_VALUE = 'removeVariant';
    public function __construct(
        string $action = null,
        bool $staged = null,
        int $id = null,
        string $sku = null
    ) {
        $this->action = $action;
        $this->staged = $staged;
        $this->id = $id;
        $this->sku = $sku;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?bool
     */
    protected $staged;
    
    /**
     * @var ?int
     */
    protected $id;
    
    /**
     * @var ?string
     */
    protected $sku;

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
     * @return bool|null
     */
    final public function getStaged()
    {
       if (is_null($this->staged)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductRemoveVariantAction::FIELD_STAGED);
           if (is_null($data)) {
               return null;
           }
           $this->staged = (bool)$data;
       }
       return $this->staged;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getId()
    {
       if (is_null($this->id)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ProductRemoveVariantAction::FIELD_ID);
           if (is_null($data)) {
               return null;
           }
           $this->id = (int)$data;
       }
       return $this->id;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSku()
    {
       if (is_null($this->sku)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductRemoveVariantAction::FIELD_SKU);
           if (is_null($data)) {
               return null;
           }
           $this->sku = (string)$data;
       }
       return $this->sku;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
    
    final public function setId(?int $id): void
    {
        $this->id = $id;
    }
    
    final public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }
    
}