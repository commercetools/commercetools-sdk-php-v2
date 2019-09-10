<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductTypeResourceIdentifier>
 * @method ProductTypeResourceIdentifier current()
 * @method ProductTypeResourceIdentifier at($offset)
 */
class ProductTypeResourceIdentifierCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypeResourceIdentifier $value
     * @psalm-param ProductTypeResourceIdentifier|stdClass $value
     * @return ProductTypeResourceIdentifierCollection
     * @throws InvalidArgumentException
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
        return function(int $index): ?ProductTypeResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTypeResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}