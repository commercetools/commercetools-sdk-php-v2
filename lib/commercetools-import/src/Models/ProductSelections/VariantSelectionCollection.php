<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\ProductSelections;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<VariantSelection>
 * @method VariantSelection current()
 * @method VariantSelection end()
 * @method VariantSelection at($offset)
 */
class VariantSelectionCollection extends MapperSequence
{
    /**
     * @psalm-assert VariantSelection $value
     * @psalm-param VariantSelection|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantSelectionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantSelection) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantSelection
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantSelection {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantSelection $data */
                $data = VariantSelectionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
