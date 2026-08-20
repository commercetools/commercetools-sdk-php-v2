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
 * @extends StoreUpdateActionCollection<StoreSetTermsOfServiceUrlAction>
 * @method StoreSetTermsOfServiceUrlAction current()
 * @method StoreSetTermsOfServiceUrlAction end()
 * @method StoreSetTermsOfServiceUrlAction at($offset)
 */
class StoreSetTermsOfServiceUrlActionCollection extends StoreUpdateActionCollection
{
    /**
     * @psalm-assert StoreSetTermsOfServiceUrlAction $value
     * @psalm-param StoreSetTermsOfServiceUrlAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreSetTermsOfServiceUrlActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreSetTermsOfServiceUrlAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreSetTermsOfServiceUrlAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreSetTermsOfServiceUrlAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreSetTermsOfServiceUrlAction $data */
                $data = StoreSetTermsOfServiceUrlActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
