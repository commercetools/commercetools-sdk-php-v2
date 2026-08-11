<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<McpServerDraft>
 * @method McpServerDraft current()
 * @method McpServerDraft end()
 * @method McpServerDraft at($offset)
 */
class McpServerDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert McpServerDraft $value
     * @psalm-param McpServerDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return McpServerDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof McpServerDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?McpServerDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?McpServerDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var McpServerDraft $data */
                $data = McpServerDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
