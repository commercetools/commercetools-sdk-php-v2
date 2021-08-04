<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Common\KeyReferenceCollection;
use stdClass;

/**
 * @extends KeyReferenceCollection<TaxCategoryKeyReference>
 * @method TaxCategoryKeyReference current()
 * @method TaxCategoryKeyReference end()
 * @method TaxCategoryKeyReference at($offset)
 */
class TaxCategoryKeyReferenceCollection extends KeyReferenceCollection
{
    /**
     * @psalm-assert TaxCategoryKeyReference $value
     * @psalm-param TaxCategoryKeyReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TaxCategoryKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxCategoryKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxCategoryKeyReference
     */
    protected function mapper()
    {
        return function (?int $index): ?TaxCategoryKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TaxCategoryKeyReference $data */
                $data = TaxCategoryKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
