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

/**
 * @implements Builder<ApiClientDraft>
 */
final class ApiClientDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?int
     */
    protected $deleteDaysAfterCreation;
    
    /**
     * @var ?string
     */
    protected $scope;
    
    /**
     * @var ?string
     */
    protected $name;

    /**
     *
     * @return int|null
     */
    final public function getDeleteDaysAfterCreation()
    {
       return $this->deleteDaysAfterCreation;
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
     * @return $this
     */
    final public function withDeleteDaysAfterCreation(?int $deleteDaysAfterCreation)
    {
        $this->deleteDaysAfterCreation = $deleteDaysAfterCreation;
        
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
    
    public function build(): ApiClientDraft {
        return new ApiClientDraftModel(
            $this->deleteDaysAfterCreation,
            $this->scope,
            $this->name
        );
    }
    
    public static function of(): ApiClientDraftBuilder
    {
        return new self();
    }
}