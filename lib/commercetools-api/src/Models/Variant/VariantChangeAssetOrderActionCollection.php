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
 * @extends VariantUpdateActionCollection<VariantChangeAssetOrderAction>
 * @method VariantChangeAssetOrderAction current()
 * @method VariantChangeAssetOrderAction end()
 * @method VariantChangeAssetOrderAction at($offset)
 */
class VariantChangeAssetOrderActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantChangeAssetOrderAction $value
     * @psalm-param VariantChangeAssetOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantChangeAssetOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantChangeAssetOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantChangeAssetOrderAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantChangeAssetOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantChangeAssetOrderAction $data */
                $data = VariantChangeAssetOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
