<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonObject;

interface SearchKeywords extends JsonObject {
    const FIELD_PATTERN0 = '/^[a-z]{2}(-[A-Z]{2})?$/';

    public function get(string $key);
    public function set(string $key, $value);
}
