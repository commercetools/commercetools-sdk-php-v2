<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class SearchKeywordsModel extends JsonObjectModel implements SearchKeywords
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
        if (preg_match(SearchKeywords::FIELD_PATTERN0, $key) === 1) {
            /** @psalm-var array<int, stdClass> $data */
            return new SearchKeywordCollection($data);
        }

        return $data;
    }
}
