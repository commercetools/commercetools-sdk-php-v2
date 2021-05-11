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
 * @extends MapperSequence<ProductSetSelector>
 * @method ProductSetSelector current()
 * @method ProductSetSelector at($offset)
 */
class ProductSetSelectorCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSetSelector $value
     * @psalm-param ProductSetSelector|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetSelectorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetSelector) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetSelector
     */
    protected function mapper()
    {
        return function (int $index): ?ProductSetSelector {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetSelector $data */
                $data = ProductSetSelectorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
