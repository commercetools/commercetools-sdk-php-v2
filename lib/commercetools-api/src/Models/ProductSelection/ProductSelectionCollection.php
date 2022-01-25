<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<ProductSelection>
 * @method ProductSelection current()
 * @method ProductSelection end()
 * @method ProductSelection at($offset)
 */
class ProductSelectionCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert ProductSelection $value
     * @psalm-param ProductSelection|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelection) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelection
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelection {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelection $data */
                $data = ProductSelectionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
