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
 * @extends VariantUpdateActionCollection<VariantSetAssetSourcesAction>
 * @method VariantSetAssetSourcesAction current()
 * @method VariantSetAssetSourcesAction end()
 * @method VariantSetAssetSourcesAction at($offset)
 */
class VariantSetAssetSourcesActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantSetAssetSourcesAction $value
     * @psalm-param VariantSetAssetSourcesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantSetAssetSourcesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantSetAssetSourcesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantSetAssetSourcesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantSetAssetSourcesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantSetAssetSourcesAction $data */
                $data = VariantSetAssetSourcesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
