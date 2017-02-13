<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class Resource extends JsonObject {
    protected $id;
    protected $version;
    protected $createdAt;
    protected $lastModifiedAt;

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
     * @return \DateTimeImmutable
     */
    public function getCreatedAt(): \DateTimeImmutable
    {
        if (is_null($this->createdAt)) {
            $value = $this->raw('createdAt');
            if (!is_null($value)) {
                $this->createdAt = new \DateTimeImmutable($value);
            } else {
                return new \DateTimeImmutable();
            }
        }
        return $this->createdAt;
    }
                

    /**
     * @return \DateTimeImmutable
     */
    public function getLastModifiedAt(): \DateTimeImmutable
    {
        if (is_null($this->lastModifiedAt)) {
            $value = $this->raw('lastModifiedAt');
            if (!is_null($value)) {
                $this->lastModifiedAt = new \DateTimeImmutable($value);
            } else {
                return new \DateTimeImmutable();
            }
        }
        return $this->lastModifiedAt;
    }
                
}
