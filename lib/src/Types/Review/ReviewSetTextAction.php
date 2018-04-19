<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

interface ReviewSetTextAction extends ReviewUpdateAction
{
    const FIELD_TEXT = 'text';

    /**
     * @return string
     */
    public function getText();

    /**
     * @param string $text
     * @return $this
     */
    public function setText(string $text);

}
