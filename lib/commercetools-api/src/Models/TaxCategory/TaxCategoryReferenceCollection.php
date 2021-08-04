<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<TaxCategoryReference>
 * @method TaxCategoryReference current()
 * @method TaxCategoryReference at($offset)
 */
class TaxCategoryReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert TaxCategoryReference $value
     * @psalm-param TaxCategoryReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TaxCategoryReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxCategoryReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxCategoryReference
     */
    protected function mapper()
    {
        return function (?int $index): ?TaxCategoryReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TaxCategoryReference $data */
                $data = TaxCategoryReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
