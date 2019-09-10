<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductResourceIdentifier>
 * @method ProductResourceIdentifier current()
 * @method ProductResourceIdentifier at($offset)
 */
class ProductResourceIdentifierCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductResourceIdentifier $value
     * @psalm-param ProductResourceIdentifier|stdClass $value
     * @return ProductResourceIdentifierCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductResourceIdentifier
     */
    protected function mapper()
    {
        return function(int $index): ?ProductResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}