<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductSelectionUpdate>
 * @method ProductSelectionUpdate current()
 * @method ProductSelectionUpdate end()
 * @method ProductSelectionUpdate at($offset)
 */
class ProductSelectionUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSelectionUpdate $value
     * @psalm-param ProductSelectionUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionUpdate $data */
                $data = ProductSelectionUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
