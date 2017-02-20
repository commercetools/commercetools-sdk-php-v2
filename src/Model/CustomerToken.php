<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CustomerToken extends JsonObject {
    protected $id;
    protected $createdAt;
    protected $lastModifiedAt;
    protected $customerId;
    protected $expiresAt;
    protected $value;

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
                

    /**
     * @return string
     */
    public function getCustomerId(): string
    {
        if (is_null($this->customerId)) {
            $value = $this->raw('customerId');
            if (!is_null($value)) {
                $this->customerId = (string)$value;
            } else {
                return '';
            }
        }
        return $this->customerId;
    }
                

    /**
     * @return \DateTimeImmutable
     */
    public function getExpiresAt(): \DateTimeImmutable
    {
        if (is_null($this->expiresAt)) {
            $value = $this->raw('expiresAt');
            if (!is_null($value)) {
                $this->expiresAt = new \DateTimeImmutable($value);
            } else {
                return new \DateTimeImmutable();
            }
        }
        return $this->expiresAt;
    }
                

    /**
     * @return string
     */
    public function getValue(): string
    {
        if (is_null($this->value)) {
            $value = $this->raw('value');
            if (!is_null($value)) {
                $this->value = (string)$value;
            } else {
                return '';
            }
        }
        return $this->value;
    }
                
}
