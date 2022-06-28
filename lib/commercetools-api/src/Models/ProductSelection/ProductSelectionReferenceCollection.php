<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<ProductSelectionReference>
 * @method ProductSelectionReference current()
 * @method ProductSelectionReference end()
 * @method ProductSelectionReference at($offset)
 */
class ProductSelectionReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert ProductSelectionReference $value
     * @psalm-param ProductSelectionReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionReference
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionReference $data */
                $data = ProductSelectionReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
