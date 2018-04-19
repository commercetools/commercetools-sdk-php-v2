<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class SearchKeywordsModel extends JsonObjectModel implements SearchKeywords
{
    private $patternData = [];
    /**
     * @param string $key
     * @return mixed
     */
    public function get(string $key)
    {
        if (!isset($this->patternData[$key])) {
            switch (true) {
                case preg_match('/^[a-z]{2}(-[A-Z]{2})?$/', $key) === 1:
                    $value = $this->raw($key);
                    if (is_null($value)) {
                        return $this->mapData(SearchKeywordCollection::class, null);
                    }
                    $value = $this->mapData(SearchKeywordCollection::class, $value);
                    break;
                default:
                    throw new InvalidArgumentException();
            }
            $this->patternData[$key] = $value;
        }
        return $this->patternData[$key];
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return $this
     */
    public function set(string $key, $value)
    {
        if (!$this->validKey($key)) {
            throw new InvalidArgumentException();
        }
        $this->patternData[$key] = $value;
        return $this;
    }


    private function validKey(string $key): bool
    {
        switch (true) {
            case preg_match('/^[a-z]{2}(-[A-Z]{2})?$/', $key) === 1:
                return true;
            default:
                return false;
        }
    }

    /**
     * @inheritdoc
     */
    protected function toArray(): array
    {
        $data = parent::toArray();
        $data = array_merge($data, $this->patternData);
        unset($data['patternData']);
        return $data;
    }
}
