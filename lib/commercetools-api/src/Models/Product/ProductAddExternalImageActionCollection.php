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
 * @extends MapperSequence<ProductAddExternalImageAction>
 * @method ProductAddExternalImageAction current()
 * @method ProductAddExternalImageAction at($offset)
 */
class ProductAddExternalImageActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductAddExternalImageAction $value
     * @psalm-param ProductAddExternalImageAction|stdClass $value
     * @return ProductAddExternalImageActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductAddExternalImageAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductAddExternalImageAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProductAddExternalImageAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductAddExternalImageActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}