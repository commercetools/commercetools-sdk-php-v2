<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;

final class ShoppingListReferenceModel extends JsonObjectModel implements ShoppingListReference
{
    const DISCRIMINATOR_VALUE = 'shopping-list';
    public function __construct(
        string $typeId = null,
        string $id = null,
        ShoppingList $obj = null
    ) {
        $this->typeId = $typeId;
        $this->id = $id;
        $this->obj = $obj;
        
    }

    /**
     * @var ?string
     */
    protected $typeId;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?ShoppingList
     */
    protected $obj;

    /**
     *
     * @return string|null
     */
    final public function getTypeId()
    {
       if (is_null($this->typeId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Reference::FIELD_TYPE_ID);
           if (is_null($data)) {
               return null;
           }
           $this->typeId = (string)$data;
       }
       return $this->typeId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       if (is_null($this->id)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Reference::FIELD_ID);
           if (is_null($data)) {
               return null;
           }
           $this->id = (string)$data;
       }
       return $this->id;
    }
    
    /**
     *
     * @return ShoppingList|null
     */
    final public function getObj()
    {
       if (is_null($this->obj)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShoppingListReference::FIELD_OBJ);
           if (is_null($data)) {
               return null;
           }
           
           $this->obj = ShoppingListModel::of($data);
       }
       return $this->obj;
    }
    final public function setTypeId(?string $typeId): void
    {
        $this->typeId = $typeId;
    }
    
    final public function setId(?string $id): void
    {
        $this->id = $id;
    }
    
    final public function setObj(?ShoppingList $obj): void
    {
        $this->obj = $obj;
    }
    
}