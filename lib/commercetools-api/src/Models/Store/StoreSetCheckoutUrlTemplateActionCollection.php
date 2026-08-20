<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Store\StoreUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends StoreUpdateActionCollection<StoreSetCheckoutUrlTemplateAction>
 * @method StoreSetCheckoutUrlTemplateAction current()
 * @method StoreSetCheckoutUrlTemplateAction end()
 * @method StoreSetCheckoutUrlTemplateAction at($offset)
 */
class StoreSetCheckoutUrlTemplateActionCollection extends StoreUpdateActionCollection
{
    /**
     * @psalm-assert StoreSetCheckoutUrlTemplateAction $value
     * @psalm-param StoreSetCheckoutUrlTemplateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreSetCheckoutUrlTemplateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreSetCheckoutUrlTemplateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreSetCheckoutUrlTemplateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreSetCheckoutUrlTemplateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreSetCheckoutUrlTemplateAction $data */
                $data = StoreSetCheckoutUrlTemplateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
