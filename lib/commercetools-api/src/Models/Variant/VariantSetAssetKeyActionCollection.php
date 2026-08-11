<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Variant\VariantUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends VariantUpdateActionCollection<VariantSetAssetKeyAction>
 * @method VariantSetAssetKeyAction current()
 * @method VariantSetAssetKeyAction end()
 * @method VariantSetAssetKeyAction at($offset)
 */
class VariantSetAssetKeyActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantSetAssetKeyAction $value
     * @psalm-param VariantSetAssetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantSetAssetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantSetAssetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantSetAssetKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantSetAssetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantSetAssetKeyAction $data */
                $data = VariantSetAssetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
