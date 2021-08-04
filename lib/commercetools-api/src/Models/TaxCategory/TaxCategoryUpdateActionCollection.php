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
 * @template T of TaxCategoryUpdateAction
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method TaxCategoryUpdateAction current()
 * @method TaxCategoryUpdateAction end()
 * @method TaxCategoryUpdateAction at($offset)
 */
class TaxCategoryUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TaxCategoryUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxCategoryUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?TaxCategoryUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = TaxCategoryUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
