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
 * @extends StoreUpdateActionCollection<StoreSetPrivacyPolicyUrlAction>
 * @method StoreSetPrivacyPolicyUrlAction current()
 * @method StoreSetPrivacyPolicyUrlAction end()
 * @method StoreSetPrivacyPolicyUrlAction at($offset)
 */
class StoreSetPrivacyPolicyUrlActionCollection extends StoreUpdateActionCollection
{
    /**
     * @psalm-assert StoreSetPrivacyPolicyUrlAction $value
     * @psalm-param StoreSetPrivacyPolicyUrlAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreSetPrivacyPolicyUrlActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreSetPrivacyPolicyUrlAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreSetPrivacyPolicyUrlAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreSetPrivacyPolicyUrlAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreSetPrivacyPolicyUrlAction $data */
                $data = StoreSetPrivacyPolicyUrlActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
