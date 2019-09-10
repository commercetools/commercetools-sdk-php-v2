<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CustomObject;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class CustomObjectDraftModel extends JsonObjectModel implements CustomObjectDraft
{
    
    public function __construct(
        string $container = null,
        int $version = null,
        JsonObject $value = null,
        string $key = null
    ) {
        $this->container = $container;
        $this->version = $version;
        $this->value = $value;
        $this->key = $key;
        
    }

    /**
     * @var ?string
     */
    protected $container;
    
    /**
     * @var ?int
     */
    protected $version;
    
    /**
     * @var ?JsonObject
     */
    protected $value;
    
    /**
     * @var ?string
     */
    protected $key;

    /**
     *
     * @return string|null
     */
    final public function getContainer()
    {
       if (is_null($this->container)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomObjectDraft::FIELD_CONTAINER);
           if (is_null($data)) {
               return null;
           }
           $this->container = (string)$data;
       }
       return $this->container;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       if (is_null($this->version)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(CustomObjectDraft::FIELD_VERSION);
           if (is_null($data)) {
               return null;
           }
           $this->version = (int)$data;
       }
       return $this->version;
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getValue()
    {
       if (is_null($this->value)) {
           /** @psalm-var ?stdClass $data */
           $data = $this->raw(CustomObjectDraft::FIELD_VALUE);
           if (is_null($data)) {
               return null;
           }
           $this->value = JsonObjectModel::of($data);
       }
       return $this->value;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomObjectDraft::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    final public function setContainer(?string $container): void
    {
        $this->container = $container;
    }
    
    final public function setVersion(?int $version): void
    {
        $this->version = $version;
    }
    
    final public function setValue(?JsonObject $value): void
    {
        $this->value = $value;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
}