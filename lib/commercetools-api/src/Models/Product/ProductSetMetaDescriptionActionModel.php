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

final class ProductSetMetaDescriptionActionModel extends JsonObjectModel implements ProductSetMetaDescriptionAction
{
    const DISCRIMINATOR_VALUE = 'setMetaDescription';
    public function __construct(
        string $action = null,
        bool $staged = null,
        LocalizedString $metaDescription = null
    ) {
        $this->action = $action;
        $this->staged = $staged;
        $this->metaDescription = $metaDescription;
        
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
     * @var ?LocalizedString
     */
    protected $metaDescription;

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
           $data = $this->raw(ProductSetMetaDescriptionAction::FIELD_STAGED);
           if (is_null($data)) {
               return null;
           }
           $this->staged = (bool)$data;
       }
       return $this->staged;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getMetaDescription()
    {
       if (is_null($this->metaDescription)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductSetMetaDescriptionAction::FIELD_META_DESCRIPTION);
           if (is_null($data)) {
               return null;
           }
           
           $this->metaDescription = LocalizedStringModel::of($data);
       }
       return $this->metaDescription;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
    
    final public function setMetaDescription(?LocalizedString $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }
    
}