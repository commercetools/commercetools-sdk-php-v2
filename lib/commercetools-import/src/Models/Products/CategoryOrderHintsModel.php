<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Products;

use Commercetools\Base\JsonObjectModel;

final class CategoryOrderHintsModel extends JsonObjectModel implements CategoryOrderHints
{
    public function __construct(
    ) {
    }

    /**
     * @return mixed
     */
    public function by(string $key)
    {
        $data = $this->raw($key);
        if (is_null($data)) {
            return null;
        }
        if (1 === preg_match(CategoryOrderHints::FIELD_PATTERN0, $key)) {
            // @psalm-var scalar $data
            return (string) $data;
        }

        return $data;
    }
}
