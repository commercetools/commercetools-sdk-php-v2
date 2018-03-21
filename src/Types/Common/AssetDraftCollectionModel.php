<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonCollection;

class AssetDraftCollectionModel extends JsonCollection implements AssetDraftCollection {

    /**
     * @param AssetDraft $value
     * @return AssetDraftCollection
     */
    public function add($value) {
        if (!$value instanceof AssetDraft) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AssetDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AssetDraft) {
            $data = $this->mapData(AssetDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
