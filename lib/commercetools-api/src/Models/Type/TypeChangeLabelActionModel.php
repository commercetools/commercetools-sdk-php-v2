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

final class TypeChangeLabelActionModel extends JsonObjectModel implements TypeChangeLabelAction
{
    const DISCRIMINATOR_VALUE = 'changeLabel';
    public function __construct(
        string $action = null,
        string $fieldName = null,
        LocalizedString $label = null
    ) {
        $this->action = $action;
        $this->fieldName = $fieldName;
        $this->label = $label;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $fieldName;
    
    /**
     * @var ?LocalizedString
     */
    protected $label;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(TypeUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getFieldName()
    {
       if (is_null($this->fieldName)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(TypeChangeLabelAction::FIELD_FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->fieldName = (string)$data;
       }
       return $this->fieldName;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getLabel()
    {
       if (is_null($this->label)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(TypeChangeLabelAction::FIELD_LABEL);
           if (is_null($data)) {
               return null;
           }
           
           $this->label = LocalizedStringModel::of($data);
       }
       return $this->label;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setFieldName(?string $fieldName): void
    {
        $this->fieldName = $fieldName;
    }
    
    final public function setLabel(?LocalizedString $label): void
    {
        $this->label = $label;
    }
    
}