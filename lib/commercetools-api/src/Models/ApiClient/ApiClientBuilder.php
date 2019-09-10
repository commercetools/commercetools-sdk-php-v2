<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ApiClient;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use DateTimeImmutable;

/**
 * @implements Builder<ApiClient>
 */
final class ApiClientBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $deleteAt;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $lastUsedAt;
    
    /**
     * @var ?string
     */
    protected $scope;
    
    /**
     * @var ?string
     */
    protected $name;
    
    /**
     * @var ?string
     */
    protected $secret;
    
    /**
     * @var ?string
     */
    protected $id;

    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getCreatedAt()
    {
       return $this->createdAt;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getDeleteAt()
    {
       return $this->deleteAt;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getLastUsedAt()
    {
       return $this->lastUsedAt;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getScope()
    {
       return $this->scope;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getName()
    {
       return $this->name;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSecret()
    {
       return $this->secret;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       return $this->id;
    }
    /**
     * @return $this
     */
    final public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDeleteAt(?DateTimeImmutable $deleteAt)
    {
        $this->deleteAt = $deleteAt;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLastUsedAt(?DateTimeImmutable $lastUsedAt)
    {
        $this->lastUsedAt = $lastUsedAt;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withScope(?string $scope)
    {
        $this->scope = $scope;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withName(?string $name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSecret(?string $secret)
    {
        $this->secret = $secret;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withId(?string $id)
    {
        $this->id = $id;
        
        return $this;
    }
    
    public function build(): ApiClient {
        return new ApiClientModel(
            $this->createdAt,
            $this->deleteAt,
            $this->lastUsedAt,
            $this->scope,
            $this->name,
            $this->secret,
            $this->id
        );
    }
    
    public static function of(): ApiClientBuilder
    {
        return new self();
    }
}