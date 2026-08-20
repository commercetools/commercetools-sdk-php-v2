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
 * @extends StoreUpdateActionCollection<StoreSetOrderUrlTemplateAction>
 * @method StoreSetOrderUrlTemplateAction current()
 * @method StoreSetOrderUrlTemplateAction end()
 * @method StoreSetOrderUrlTemplateAction at($offset)
 */
class StoreSetOrderUrlTemplateActionCollection extends StoreUpdateActionCollection
{
    /**
     * @psalm-assert StoreSetOrderUrlTemplateAction $value
     * @psalm-param StoreSetOrderUrlTemplateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreSetOrderUrlTemplateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreSetOrderUrlTemplateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreSetOrderUrlTemplateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreSetOrderUrlTemplateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreSetOrderUrlTemplateAction $data */
                $data = StoreSetOrderUrlTemplateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
