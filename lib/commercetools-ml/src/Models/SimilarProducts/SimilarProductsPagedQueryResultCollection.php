<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SimilarProductsPagedQueryResult>
 * @method SimilarProductsPagedQueryResult current()
 * @method SimilarProductsPagedQueryResult at($offset)
 */
class SimilarProductsPagedQueryResultCollection extends MapperSequence
{
    /**
     * @psalm-assert SimilarProductsPagedQueryResult $value
     * @psalm-param SimilarProductsPagedQueryResult|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SimilarProductsPagedQueryResultCollection
     */
    public function add($value)
    {
        if (!$value instanceof SimilarProductsPagedQueryResult) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SimilarProductsPagedQueryResult
     */
    protected function mapper()
    {
        return function (?int $index): ?SimilarProductsPagedQueryResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SimilarProductsPagedQueryResult $data */
                $data = SimilarProductsPagedQueryResultModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
