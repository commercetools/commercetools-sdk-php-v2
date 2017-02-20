<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CustomObjectDraft extends JsonObject {
    protected $container;
    protected $key;
    protected $value;
    protected $version;

    /**
     * @return string
     */
    public function getContainer(): string
    {
        if (is_null($this->container)) {
            $value = $this->raw('container');
            if (!is_null($value)) {
                $this->container = (string)$value;
            } else {
                return '';
            }
        }
        return $this->container;
    }
                

    /**
     * @return string
     */
    public function getKey(): string
    {
        if (is_null($this->key)) {
            $value = $this->raw('key');
            if (!is_null($value)) {
                $this->key = (string)$value;
            } else {
                return '';
            }
        }
        return $this->key;
    }
                

    /**
     * @return array
     */
    public function getValue(): array
    {
        if (is_null($this->value)) {
            $value = $this->raw('value');
            if (!is_null($value)) {
                $this->value = $value;
            } else {
                return [];
            }
        }
        return $this->value;
    }
                

    /**
     * @return int
     */
    public function getVersion(): int
    {
        if (is_null($this->version)) {
            $value = $this->raw('version');
            if (!is_null($value)) {
                $this->version = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->version;
    }
                
}
