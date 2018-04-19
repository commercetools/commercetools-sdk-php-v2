<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonObject;

interface Suggestion extends JsonObject
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
