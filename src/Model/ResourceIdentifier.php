<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ResourceIdentifier extends JsonObject {
    protected $typeId;
    protected $id;
    protected $key;

    const DISCRIMINATOR_VALUE = null;
    const DISCRIMINATOR_FIELD = 'typeId';
    public function __construct(array $data = []) {
        $this->typeId = static::DISCRIMINATOR_VALUE;
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function getTypeId(): string
    {
        if (is_null($this->typeId)) {
            $value = $this->raw('typeId');
            if (!is_null($value)) {
                $this->typeId = (string)$value;
            } else {
                return '';
            }
        }
        return $this->typeId;
    }
                

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
                
}
