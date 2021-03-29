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
 * @extends MapperSequence<SetProductVariantKeyChange>
 * @method SetProductVariantKeyChange current()
 * @method SetProductVariantKeyChange at($offset)
 */
class SetProductVariantKeyChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetProductVariantKeyChange $value
     * @psalm-param SetProductVariantKeyChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetProductVariantKeyChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetProductVariantKeyChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetProductVariantKeyChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetProductVariantKeyChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetProductVariantKeyChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
