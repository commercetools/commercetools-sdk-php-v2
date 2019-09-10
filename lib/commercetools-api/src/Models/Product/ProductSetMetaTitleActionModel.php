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

final class ProductSetMetaTitleActionModel extends JsonObjectModel implements ProductSetMetaTitleAction
{
    const DISCRIMINATOR_VALUE = 'setMetaTitle';
    public function __construct(
        string $action = null,
        LocalizedString $metaTitle = null,
        bool $staged = null
    ) {
        $this->action = $action;
        $this->metaTitle = $metaTitle;
        $this->staged = $staged;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?LocalizedString
     */
    protected $metaTitle;
    
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
    final public function getMetaTitle()
    {
       if (is_null($this->metaTitle)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductSetMetaTitleAction::FIELD_META_TITLE);
           if (is_null($data)) {
               return null;
           }
           
           $this->metaTitle = LocalizedStringModel::of($data);
       }
       return $this->metaTitle;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getStaged()
    {
       if (is_null($this->staged)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductSetMetaTitleAction::FIELD_STAGED);
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
    
    final public function setMetaTitle(?LocalizedString $metaTitle): void
    {
        $this->metaTitle = $metaTitle;
    }
    
    final public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
    
}