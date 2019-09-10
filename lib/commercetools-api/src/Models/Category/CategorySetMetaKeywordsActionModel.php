<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;

final class CategorySetMetaKeywordsActionModel extends JsonObjectModel implements CategorySetMetaKeywordsAction
{
    const DISCRIMINATOR_VALUE = 'setMetaKeywords';
    public function __construct(
        string $action = null,
        LocalizedString $metaKeywords = null
    ) {
        $this->action = $action;
        $this->metaKeywords = $metaKeywords;
        
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
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CategoryUpdateAction::FIELD_ACTION);
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
           $data = $this->raw(CategorySetMetaKeywordsAction::FIELD_META_KEYWORDS);
           if (is_null($data)) {
               return null;
           }
           
           $this->metaKeywords = LocalizedStringModel::of($data);
       }
       return $this->metaKeywords;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setMetaKeywords(?LocalizedString $metaKeywords): void
    {
        $this->metaKeywords = $metaKeywords;
    }
    
}