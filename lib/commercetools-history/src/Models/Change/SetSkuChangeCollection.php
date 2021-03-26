<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetSkuChange>
 * @method SetSkuChange current()
 * @method SetSkuChange at($offset)
 */
class SetSkuChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetSkuChange $value
     * @psalm-param SetSkuChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetSkuChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetSkuChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetSkuChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetSkuChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetSkuChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
