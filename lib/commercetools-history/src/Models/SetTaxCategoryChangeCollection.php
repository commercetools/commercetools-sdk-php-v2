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
 * @extends MapperSequence<SetTaxCategoryChange>
 * @method SetTaxCategoryChange current()
 * @method SetTaxCategoryChange at($offset)
 */
class SetTaxCategoryChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetTaxCategoryChange $value
     * @psalm-param SetTaxCategoryChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTaxCategoryChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTaxCategoryChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTaxCategoryChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetTaxCategoryChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetTaxCategoryChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
