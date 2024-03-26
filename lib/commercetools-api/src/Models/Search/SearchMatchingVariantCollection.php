<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SearchMatchingVariant>
 * @method SearchMatchingVariant current()
 * @method SearchMatchingVariant end()
 * @method SearchMatchingVariant at($offset)
 */
class SearchMatchingVariantCollection extends MapperSequence
{
    /**
     * @psalm-assert SearchMatchingVariant $value
     * @psalm-param SearchMatchingVariant|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchMatchingVariantCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchMatchingVariant) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchMatchingVariant
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchMatchingVariant {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchMatchingVariant $data */
                $data = SearchMatchingVariantModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
