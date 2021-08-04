<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<ProductTypeResourceIdentifier>
 * @method ProductTypeResourceIdentifier current()
 * @method ProductTypeResourceIdentifier end()
 * @method ProductTypeResourceIdentifier at($offset)
 */
class ProductTypeResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert ProductTypeResourceIdentifier $value
     * @psalm-param ProductTypeResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTypeResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeResourceIdentifier $data */
                $data = ProductTypeResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
