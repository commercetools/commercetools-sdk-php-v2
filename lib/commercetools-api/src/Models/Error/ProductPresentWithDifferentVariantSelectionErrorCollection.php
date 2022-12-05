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
 * @extends ErrorObjectCollection<ProductPresentWithDifferentVariantSelectionError>
 * @method ProductPresentWithDifferentVariantSelectionError current()
 * @method ProductPresentWithDifferentVariantSelectionError end()
 * @method ProductPresentWithDifferentVariantSelectionError at($offset)
 */
class ProductPresentWithDifferentVariantSelectionErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert ProductPresentWithDifferentVariantSelectionError $value
     * @psalm-param ProductPresentWithDifferentVariantSelectionError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPresentWithDifferentVariantSelectionErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPresentWithDifferentVariantSelectionError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPresentWithDifferentVariantSelectionError
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPresentWithDifferentVariantSelectionError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPresentWithDifferentVariantSelectionError $data */
                $data = ProductPresentWithDifferentVariantSelectionErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
