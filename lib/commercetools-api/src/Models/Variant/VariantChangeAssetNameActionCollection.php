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
 * @extends VariantUpdateActionCollection<VariantChangeAssetNameAction>
 * @method VariantChangeAssetNameAction current()
 * @method VariantChangeAssetNameAction end()
 * @method VariantChangeAssetNameAction at($offset)
 */
class VariantChangeAssetNameActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantChangeAssetNameAction $value
     * @psalm-param VariantChangeAssetNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantChangeAssetNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantChangeAssetNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantChangeAssetNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantChangeAssetNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantChangeAssetNameAction $data */
                $data = VariantChangeAssetNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
