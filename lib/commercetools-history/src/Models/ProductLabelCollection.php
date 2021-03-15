<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductLabel>
 * @method ProductLabel current()
 * @method ProductLabel at($offset)
 */
class ProductLabelCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductLabel $value
     * @psalm-param ProductLabel|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductLabelCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductLabel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductLabel
     */
    protected function mapper()
    {
        return function (int $index): ?ProductLabel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductLabelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
