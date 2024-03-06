<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductTailoringUpdate>
 * @method ProductTailoringUpdate current()
 * @method ProductTailoringUpdate end()
 * @method ProductTailoringUpdate at($offset)
 */
class ProductTailoringUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTailoringUpdate $value
     * @psalm-param ProductTailoringUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringUpdate $data */
                $data = ProductTailoringUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
