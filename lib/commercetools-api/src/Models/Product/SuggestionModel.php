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


final class SuggestionModel extends JsonObjectModel implements Suggestion
{
    
    public function __construct(
        string $text = null
    ) {
        $this->text = $text;
        
    }

    /**
     * @var ?string
     */
    protected $text;

    /**
     *
     * @return string|null
     */
    final public function getText()
    {
       if (is_null($this->text)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Suggestion::FIELD_TEXT);
           if (is_null($data)) {
               return null;
           }
           $this->text = (string)$data;
       }
       return $this->text;
    }
    final public function setText(?string $text): void
    {
        $this->text = $text;
    }
    
}