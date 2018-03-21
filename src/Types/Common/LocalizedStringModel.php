<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonObjectModel;

class LocalizedStringModel extends JsonObjectModel implements LocalizedString {
    private $patternData = [];
    /**
     * @param string $key
     * @return mixed
     */
    public function get(string $key)
    {
        if(!isset($this->patternData[$key])) {
            switch (true) {
                case preg_match('/^[a-z]{2}(-[A-Z]{2})?$/', $key):
                    $value = $this->raw($key);
                    $value = (string)$value;
                    break;
                default:
                    throw new \InvalidArgumentException();
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
            throw new \InvalidArgumentException();
        }
        $this->patternData[$key] = $value;
        return $this;
    }


    private function validKey(string $key): bool
    {
        switch (true) {
            case preg_match('/^[a-z]{2}(-[A-Z]{2})?$/', $key):
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
