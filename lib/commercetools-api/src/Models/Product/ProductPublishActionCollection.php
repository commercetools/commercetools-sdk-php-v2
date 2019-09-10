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
 * @extends MapperSequence<ProductPublishAction>
 *
 * @method ProductPublishAction current()
 * @method ProductPublishAction at($offset)
 */
class ProductPublishActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductPublishAction $value
     * @psalm-param ProductPublishAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductPublishActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPublishAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPublishAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductPublishAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductPublishActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
