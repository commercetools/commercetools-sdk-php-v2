<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SearchKeyword>
 */
final class SearchKeywordBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?JsonObject
     */
    protected $suggestTokenizer;
    
    /**
     * @var ?string
     */
    protected $text;

    /**
     *
     * @return JsonObject|null
     */
    final public function getSuggestTokenizer()
    {
       return $this->suggestTokenizer;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getText()
    {
       return $this->text;
    }
    /**
     * @return $this
     */
    final public function withSuggestTokenizer(?JsonObject $suggestTokenizer)
    {
        $this->suggestTokenizer = $suggestTokenizer;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withText(?string $text)
    {
        $this->text = $text;
        
        return $this;
    }
    
    public function build(): SearchKeyword {
        return new SearchKeywordModel(
            $this->suggestTokenizer,
            $this->text
        );
    }
    
    public static function of(): SearchKeywordBuilder
    {
        return new self();
    }
}