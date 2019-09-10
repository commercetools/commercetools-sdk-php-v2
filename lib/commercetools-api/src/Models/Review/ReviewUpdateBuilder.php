<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Review;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ReviewUpdate>
 */
final class ReviewUpdateBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?ReviewUpdateActionCollection
     */
    protected $actions;
    
    /**
     * @var ?int
     */
    protected $version;

    /**
     *
     * @return ReviewUpdateActionCollection|null
     */
    final public function getActions()
    {
       return $this->actions;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       return $this->version;
    }
    /**
     * @return $this
     */
    final public function withActions(?ReviewUpdateActionCollection $actions)
    {
        $this->actions = $actions;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVersion(?int $version)
    {
        $this->version = $version;
        
        return $this;
    }
    
    public function build(): ReviewUpdate {
        return new ReviewUpdateModel(
            $this->actions,
            $this->version
        );
    }
    
    public static function of(): ReviewUpdateBuilder
    {
        return new self();
    }
}