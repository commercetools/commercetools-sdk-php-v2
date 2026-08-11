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
 * @extends VariantUpdateActionCollection<VariantSetAssetsAction>
 * @method VariantSetAssetsAction current()
 * @method VariantSetAssetsAction end()
 * @method VariantSetAssetsAction at($offset)
 */
class VariantSetAssetsActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantSetAssetsAction $value
     * @psalm-param VariantSetAssetsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantSetAssetsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantSetAssetsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantSetAssetsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantSetAssetsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantSetAssetsAction $data */
                $data = VariantSetAssetsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
