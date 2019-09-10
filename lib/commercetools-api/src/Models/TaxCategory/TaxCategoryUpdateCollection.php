<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TaxCategoryUpdate>
 *
 * @method TaxCategoryUpdate current()
 * @method TaxCategoryUpdate at($offset)
 */
class TaxCategoryUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert TaxCategoryUpdate $value
     * @psalm-param TaxCategoryUpdate|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return TaxCategoryUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxCategoryUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxCategoryUpdate
     */
    protected function mapper()
    {
        return function (int $index): ?TaxCategoryUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TaxCategoryUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
