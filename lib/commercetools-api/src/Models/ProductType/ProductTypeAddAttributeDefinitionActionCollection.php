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
 * @extends MapperSequence<ProductTypeAddAttributeDefinitionAction>
 * @method ProductTypeAddAttributeDefinitionAction current()
 * @method ProductTypeAddAttributeDefinitionAction at($offset)
 */
class ProductTypeAddAttributeDefinitionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypeAddAttributeDefinitionAction $value
     * @psalm-param ProductTypeAddAttributeDefinitionAction|stdClass $value
     * @return ProductTypeAddAttributeDefinitionActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeAddAttributeDefinitionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeAddAttributeDefinitionAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProductTypeAddAttributeDefinitionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTypeAddAttributeDefinitionActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}