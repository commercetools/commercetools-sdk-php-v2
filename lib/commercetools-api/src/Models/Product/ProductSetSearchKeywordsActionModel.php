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


final class ProductSetSearchKeywordsActionModel extends JsonObjectModel implements ProductSetSearchKeywordsAction
{
    const DISCRIMINATOR_VALUE = 'setSearchKeywords';
    public function __construct(
        string $action = null,
        SearchKeywords $searchKeywords = null,
        bool $staged = null
    ) {
        $this->action = $action;
        $this->searchKeywords = $searchKeywords;
        $this->staged = $staged;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?SearchKeywords
     */
    protected $searchKeywords;
    
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
     * @return SearchKeywords|null
     */
    final public function getSearchKeywords()
    {
       if (is_null($this->searchKeywords)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductSetSearchKeywordsAction::FIELD_SEARCH_KEYWORDS);
           if (is_null($data)) {
               return null;
           }
           
           $this->searchKeywords = SearchKeywordsModel::of($data);
       }
       return $this->searchKeywords;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getStaged()
    {
       if (is_null($this->staged)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductSetSearchKeywordsAction::FIELD_STAGED);
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
    
    final public function setSearchKeywords(?SearchKeywords $searchKeywords): void
    {
        $this->searchKeywords = $searchKeywords;
    }
    
    final public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
    
}