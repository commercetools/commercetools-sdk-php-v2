<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Review\ReviewUpdateActionModel;

class ReviewSetAuthorNameActionModel extends ReviewUpdateActionModel implements ReviewSetAuthorNameAction
{
    const DISCRIMINATOR_VALUE = 'setAuthorName';

    /**
     * @var string
     */
    protected $authorName;

    /**
     * @return string
     */
    public function getAuthorName()
    {
        if (is_null($this->authorName)) {
            $value = $this->raw(ReviewSetAuthorNameAction::FIELD_AUTHOR_NAME);
            $value = (string)$value;
            $this->authorName = $value;
        }
        return $this->authorName;
    }

    /**
     * @param string $authorName
     * @return $this
     */
    public function setAuthorName(string $authorName)
    {
        $this->authorName = (string)$authorName;

        return $this;
    }

}
