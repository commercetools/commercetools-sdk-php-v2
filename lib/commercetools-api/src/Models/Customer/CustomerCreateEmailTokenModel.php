<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class CustomerCreateEmailTokenModel extends JsonObjectModel implements CustomerCreateEmailToken
{
    
    public function __construct(
        int $ttlMinutes = null,
        string $id = null,
        int $version = null
    ) {
        $this->ttlMinutes = $ttlMinutes;
        $this->id = $id;
        $this->version = $version;
        
    }

    /**
     * @var ?int
     */
    protected $ttlMinutes;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?int
     */
    protected $version;

    /**
     *
     * @return int|null
     */
    final public function getTtlMinutes()
    {
       if (is_null($this->ttlMinutes)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(CustomerCreateEmailToken::FIELD_TTL_MINUTES);
           if (is_null($data)) {
               return null;
           }
           $this->ttlMinutes = (int)$data;
       }
       return $this->ttlMinutes;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       if (is_null($this->id)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerCreateEmailToken::FIELD_ID);
           if (is_null($data)) {
               return null;
           }
           $this->id = (string)$data;
       }
       return $this->id;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       if (is_null($this->version)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(CustomerCreateEmailToken::FIELD_VERSION);
           if (is_null($data)) {
               return null;
           }
           $this->version = (int)$data;
       }
       return $this->version;
    }
    final public function setTtlMinutes(?int $ttlMinutes): void
    {
        $this->ttlMinutes = $ttlMinutes;
    }
    
    final public function setId(?string $id): void
    {
        $this->id = $id;
    }
    
    final public function setVersion(?int $version): void
    {
        $this->version = $version;
    }
    
}