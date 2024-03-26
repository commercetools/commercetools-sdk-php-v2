<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\Error\ErrorResponseCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorResponseCollection<ProductSearchErrorResponse>
 * @method ProductSearchErrorResponse current()
 * @method ProductSearchErrorResponse end()
 * @method ProductSearchErrorResponse at($offset)
 */
class ProductSearchErrorResponseCollection extends ErrorResponseCollection
{
    /**
     * @psalm-assert ProductSearchErrorResponse $value
     * @psalm-param ProductSearchErrorResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchErrorResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchErrorResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchErrorResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchErrorResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchErrorResponse $data */
                $data = ProductSearchErrorResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
