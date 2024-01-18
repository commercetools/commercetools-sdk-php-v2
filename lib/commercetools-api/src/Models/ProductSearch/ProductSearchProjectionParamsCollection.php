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
 * @extends MapperSequence<ProductSearchProjectionParams>
 * @method ProductSearchProjectionParams current()
 * @method ProductSearchProjectionParams end()
 * @method ProductSearchProjectionParams at($offset)
 */
class ProductSearchProjectionParamsCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSearchProjectionParams $value
     * @psalm-param ProductSearchProjectionParams|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchProjectionParamsCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchProjectionParams) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchProjectionParams
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchProjectionParams {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchProjectionParams $data */
                $data = ProductSearchProjectionParamsModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
