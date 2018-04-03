<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class SuggestionModel extends JsonObjectModel implements Suggestion {
    /**
     * @var string
     */
    protected $text;

    /**
     * @return string
     */
    public function getText()
    {
        if (is_null($this->text)) {
            $value = $this->raw(Suggestion::FIELD_TEXT);
            $value = (string)$value;
            $this->text = $value;
        }
        return $this->text;
    }

    /**
     * @param string $text
     * @return $this
     */
    public function setText(string $text)
    {
        $this->text = (string)$text;

        return $this;
    }

}
