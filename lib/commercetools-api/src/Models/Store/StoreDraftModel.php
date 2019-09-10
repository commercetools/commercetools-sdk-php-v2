<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Store;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;

final class StoreDraftModel extends JsonObjectModel implements StoreDraft
{
    
    public function __construct(
        LocalizedString $name = null,
        string $key = null
    ) {
        $this->name = $name;
        $this->key = $key;
        
    }

    /**
     * @var ?LocalizedString
     */
    protected $name;
    
    /**
     * @var ?string
     */
    protected $key;

    /**
     *
     * @return LocalizedString|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(StoreDraft::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           
           $this->name = LocalizedStringModel::of($data);
       }
       return $this->name;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(StoreDraft::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    final public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
}