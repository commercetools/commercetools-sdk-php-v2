<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<ProductTailoringResourceIdentifier>
 * @method ProductTailoringResourceIdentifier current()
 * @method ProductTailoringResourceIdentifier end()
 * @method ProductTailoringResourceIdentifier at($offset)
 */
class ProductTailoringResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert ProductTailoringResourceIdentifier $value
     * @psalm-param ProductTailoringResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringResourceIdentifier $data */
                $data = ProductTailoringResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
