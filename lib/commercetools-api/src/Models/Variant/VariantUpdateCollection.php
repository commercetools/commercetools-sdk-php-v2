<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<VariantUpdate>
 * @method VariantUpdate current()
 * @method VariantUpdate end()
 * @method VariantUpdate at($offset)
 */
class VariantUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert VariantUpdate $value
     * @psalm-param VariantUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantUpdate $data */
                $data = VariantUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
