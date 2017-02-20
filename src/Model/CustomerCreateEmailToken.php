<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CustomerCreateEmailToken extends JsonObject {
    protected $id;
    protected $version;
    protected $ttl;

    /**
     * @return string
     */
    public function getId(): string
    {
        if (is_null($this->id)) {
            $value = $this->raw('id');
            if (!is_null($value)) {
                $this->id = (string)$value;
            } else {
                return '';
            }
        }
        return $this->id;
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
                

    /**
     * @return int
     */
    public function getTtl(): int
    {
        if (is_null($this->ttl)) {
            $value = $this->raw('ttl');
            if (!is_null($value)) {
                $this->ttl = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->ttl;
    }
                
}
