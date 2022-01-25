<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<ProductSelectionResourceIdentifier>
 * @method ProductSelectionResourceIdentifier current()
 * @method ProductSelectionResourceIdentifier end()
 * @method ProductSelectionResourceIdentifier at($offset)
 */
class ProductSelectionResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert ProductSelectionResourceIdentifier $value
     * @psalm-param ProductSelectionResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionResourceIdentifier $data */
                $data = ProductSelectionResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
