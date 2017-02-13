<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class Reference extends JsonObject {
    protected $typeId;
    protected $id;

    const DISCRIMINATOR_VALUE = null;
    public function __construct(array $data = []) {
        $this->typeId = static::DISCRIMINATOR_VALUE;
        parent::__construct($data);
    }

    /**
     * @return array
     */
    public function getTypeId(): array
    {
        if (is_null($this->typeId)) {
            $value = $this->raw('typeId');
            if (!is_null($value)) {
                $this->typeId = $value;
            } else {
                return [];
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
                
}
