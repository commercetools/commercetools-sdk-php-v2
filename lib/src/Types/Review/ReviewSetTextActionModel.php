<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionModel;

class ReviewSetTextActionModel extends ReviewUpdateActionModel implements ReviewSetTextAction {
    const DISCRIMINATOR_VALUE = 'setText';

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
            $value = $this->raw(ReviewSetTextAction::FIELD_TEXT);
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
