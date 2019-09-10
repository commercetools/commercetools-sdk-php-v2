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

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;

final class ProductSetDescriptionActionModel extends JsonObjectModel implements ProductSetDescriptionAction
{
    const DISCRIMINATOR_VALUE = 'setDescription';
    public function __construct(
        string $action = null,
        LocalizedString $description = null,
        bool $staged = null
    ) {
        $this->action = $action;
        $this->description = $description;
        $this->staged = $staged;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?LocalizedString
     */
    protected $description;
    
    /**
     * @var ?bool
     */
    protected $staged;

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
     * @return LocalizedString|null
     */
    final public function getDescription()
    {
       if (is_null($this->description)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductSetDescriptionAction::FIELD_DESCRIPTION);
           if (is_null($data)) {
               return null;
           }
           
           $this->description = LocalizedStringModel::of($data);
       }
       return $this->description;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getStaged()
    {
       if (is_null($this->staged)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductSetDescriptionAction::FIELD_STAGED);
           if (is_null($data)) {
               return null;
           }
           $this->staged = (bool)$data;
       }
       return $this->staged;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }
    
    final public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
    
}