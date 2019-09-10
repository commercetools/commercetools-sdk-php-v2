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
 * @extends MapperSequence<ProductChangeSlugAction>
 * @method ProductChangeSlugAction current()
 * @method ProductChangeSlugAction at($offset)
 */
class ProductChangeSlugActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductChangeSlugAction $value
     * @psalm-param ProductChangeSlugAction|stdClass $value
     * @return ProductChangeSlugActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductChangeSlugAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductChangeSlugAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProductChangeSlugAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductChangeSlugActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}