<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class SearchKeyword extends JsonObject {
    protected $text;
    protected $suggestTokenizer;

    /**
     * @return string
     */
    public function getText(): string
    {
        if (is_null($this->text)) {
            $value = $this->raw('text');
            if (!is_null($value)) {
                $this->text = (string)$value;
            } else {
                return '';
            }
        }
        return $this->text;
    }
                

    /**
     * @return SuggestTokenizer
     */
    public function getSuggestTokenizer(): SuggestTokenizer
    {
        if (is_null($this->suggestTokenizer)) {
            $value = $this->raw('suggestTokenizer');
            if (!is_null($value)) {
                $this->suggestTokenizer = Mapper::map($value, SuggestTokenizer::resolveDiscriminatorClass($value));
            } else {
                return Mapper::map([], SuggestTokenizer::class);
            }
        }
        return $this->suggestTokenizer;
    }
                
}
