<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<SearchFacetPathNotFoundError>
 * @method SearchFacetPathNotFoundError current()
 * @method SearchFacetPathNotFoundError at($offset)
 */
class SearchFacetPathNotFoundErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert SearchFacetPathNotFoundError $value
     * @psalm-param SearchFacetPathNotFoundError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchFacetPathNotFoundErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchFacetPathNotFoundError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchFacetPathNotFoundError
     */
    protected function mapper()
    {
        return function (int $index): ?SearchFacetPathNotFoundError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchFacetPathNotFoundError $data */
                $data = SearchFacetPathNotFoundErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
