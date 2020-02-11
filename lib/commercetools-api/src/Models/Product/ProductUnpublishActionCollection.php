<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductUnpublishAction>
 * @method ProductUnpublishAction current()
 * @method ProductUnpublishAction at($offset)
 */
class ProductUnpublishActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductUnpublishAction $value
     * @psalm-param ProductUnpublishAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductUnpublishActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductUnpublishAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductUnpublishAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductUnpublishAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductUnpublishActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
