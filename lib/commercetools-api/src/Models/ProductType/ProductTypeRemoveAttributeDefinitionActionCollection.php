<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Api\Models\ProductType\ProductTypeUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductTypeUpdateActionCollection<ProductTypeRemoveAttributeDefinitionAction>
 * @method ProductTypeRemoveAttributeDefinitionAction current()
 * @method ProductTypeRemoveAttributeDefinitionAction at($offset)
 */
class ProductTypeRemoveAttributeDefinitionActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @psalm-assert ProductTypeRemoveAttributeDefinitionAction $value
     * @psalm-param ProductTypeRemoveAttributeDefinitionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeRemoveAttributeDefinitionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeRemoveAttributeDefinitionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeRemoveAttributeDefinitionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTypeRemoveAttributeDefinitionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeRemoveAttributeDefinitionAction $data */
                $data = ProductTypeRemoveAttributeDefinitionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
