<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Error\ErrorObjectCollection;

final class OrderEditPreviewFailureModel extends JsonObjectModel implements OrderEditPreviewFailure
{
    const DISCRIMINATOR_VALUE = 'PreviewFailure';
    public function __construct(
        string $type = null,
        ErrorObjectCollection $errors = null
    ) {
        $this->type = $type;
        $this->errors = $errors;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?ErrorObjectCollection
     */
    protected $errors;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderEditResult::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return ErrorObjectCollection|null
     */
    final public function getErrors()
    {
       if (is_null($this->errors)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(OrderEditPreviewFailure::FIELD_ERRORS);
           if (is_null($data)) {
               return null;
           }
           $this->errors = ErrorObjectCollection::fromArray($data);
       }
       return $this->errors;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setErrors(?ErrorObjectCollection $errors): void
    {
        $this->errors = $errors;
    }
    
}