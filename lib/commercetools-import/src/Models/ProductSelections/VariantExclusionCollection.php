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
 * @extends MapperSequence<VariantExclusion>
 * @method VariantExclusion current()
 * @method VariantExclusion end()
 * @method VariantExclusion at($offset)
 */
class VariantExclusionCollection extends MapperSequence
{
    /**
     * @psalm-assert VariantExclusion $value
     * @psalm-param VariantExclusion|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantExclusionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantExclusion) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantExclusion
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantExclusion {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantExclusion $data */
                $data = VariantExclusionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
