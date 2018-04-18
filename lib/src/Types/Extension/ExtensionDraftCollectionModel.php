<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ExtensionDraftCollectionModel extends JsonCollection implements ExtensionDraftCollection {

    /**
     * @param ExtensionDraft $value
     * @return ExtensionDraftCollection
     */
    public function add($value) {
        if (!$value instanceof ExtensionDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ExtensionDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ExtensionDraft) {
            $data = $this->mapData(ExtensionDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
