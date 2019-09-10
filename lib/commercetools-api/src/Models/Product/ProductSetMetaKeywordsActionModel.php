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

final class ProductSetMetaKeywordsActionModel extends JsonObjectModel implements ProductSetMetaKeywordsAction
{
    const DISCRIMINATOR_VALUE = 'setMetaKeywords';
    public function __construct(
        string $action = null,
        LocalizedString $metaKeywords = null,
        bool $staged = null
    ) {
        $this->action = $action;
        $this->metaKeywords = $metaKeywords;
        $this->staged = $staged;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?LocalizedString
     */
    protected $metaKeywords;
    
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
    final public function getMetaKeywords()
    {
       if (is_null($this->metaKeywords)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductSetMetaKeywordsAction::FIELD_META_KEYWORDS);
           if (is_null($data)) {
               return null;
           }
           
           $this->metaKeywords = LocalizedStringModel::of($data);
       }
       return $this->metaKeywords;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getStaged()
    {
       if (is_null($this->staged)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductSetMetaKeywordsAction::FIELD_STAGED);
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
    
    final public function setMetaKeywords(?LocalizedString $metaKeywords): void
    {
        $this->metaKeywords = $metaKeywords;
    }
    
    final public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
    
}