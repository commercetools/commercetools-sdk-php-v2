<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ExtensionAdditionalContextDraft>
 * @method ExtensionAdditionalContextDraft current()
 * @method ExtensionAdditionalContextDraft end()
 * @method ExtensionAdditionalContextDraft at($offset)
 */
class ExtensionAdditionalContextDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ExtensionAdditionalContextDraft $value
     * @psalm-param ExtensionAdditionalContextDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionAdditionalContextDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionAdditionalContextDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionAdditionalContextDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ExtensionAdditionalContextDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionAdditionalContextDraft $data */
                $data = ExtensionAdditionalContextDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
