<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\History\Models\Label\LabelCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends LabelCollection<ProductLabel>
 * @method ProductLabel current()
 * @method ProductLabel at($offset)
 */
class ProductLabelCollection extends LabelCollection
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
                /** @var ProductLabel $data */
                $data = ProductLabelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
