<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductSearchRequest>
 * @method ProductSearchRequest current()
 * @method ProductSearchRequest end()
 * @method ProductSearchRequest at($offset)
 */
class ProductSearchRequestCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSearchRequest $value
     * @psalm-param ProductSearchRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchRequest
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchRequest $data */
                $data = ProductSearchRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
