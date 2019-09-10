<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;

final class FieldDefinitionModel extends JsonObjectModel implements FieldDefinition
{
    
    public function __construct(
        string $name = null,
        string $inputHint = null,
        LocalizedString $label = null,
        JsonObject $type = null,
        bool $required = null
    ) {
        $this->name = $name;
        $this->inputHint = $inputHint;
        $this->label = $label;
        $this->type = $type;
        $this->required = $required;
        
    }

    /**
     * @var ?string
     */
    protected $name;
    
    /**
     * @var ?string
     */
    protected $inputHint;
    
    /**
     * @var ?LocalizedString
     */
    protected $label;
    
    /**
     * @var ?JsonObject
     */
    protected $type;
    
    /**
     * @var ?bool
     */
    protected $required;

    /**
     *
     * @return string|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(FieldDefinition::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->name = (string)$data;
       }
       return $this->name;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getInputHint()
    {
       if (is_null($this->inputHint)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(FieldDefinition::FIELD_INPUT_HINT);
           if (is_null($data)) {
               return null;
           }
           $this->inputHint = (string)$data;
       }
       return $this->inputHint;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getLabel()
    {
       if (is_null($this->label)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(FieldDefinition::FIELD_LABEL);
           if (is_null($data)) {
               return null;
           }
           
           $this->label = LocalizedStringModel::of($data);
       }
       return $this->label;
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(FieldDefinition::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = JsonObjectModel::of($data);
       }
       return $this->type;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getRequired()
    {
       if (is_null($this->required)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(FieldDefinition::FIELD_REQUIRED);
           if (is_null($data)) {
               return null;
           }
           $this->required = (bool)$data;
       }
       return $this->required;
    }
    final public function setName(?string $name): void
    {
        $this->name = $name;
    }
    
    final public function setInputHint(?string $inputHint): void
    {
        $this->inputHint = $inputHint;
    }
    
    final public function setLabel(?LocalizedString $label): void
    {
        $this->label = $label;
    }
    
    final public function setType(?JsonObject $type): void
    {
        $this->type = $type;
    }
    
    final public function setRequired(?bool $required): void
    {
        $this->required = $required;
    }
    
}