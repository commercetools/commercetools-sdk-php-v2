<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;

/**
 * @implements Builder<ReviewRatingSetMessagePayload>
 */
final class ReviewRatingSetMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?int
     */
    protected $oldRating;
    
    /**
     * @var ?bool
     */
    protected $includedInStatistics;
    
    /**
     * @var ?int
     */
    protected $newRating;
    
    /**
     * @var ?ReferenceBuilder|Reference
     */
    protected $target;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       return $this->type;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getOldRating()
    {
       return $this->oldRating;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getIncludedInStatistics()
    {
       return $this->includedInStatistics;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getNewRating()
    {
       return $this->newRating;
    }
    
    /**
     *
     * @return Reference|null
     */
    final public function getTarget()
    {
       return ($this->target instanceof ReferenceBuilder ? $this->target->build() : $this->target);
    }
    /**
     * @return $this
     */
    final public function withType(?string $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withOldRating(?int $oldRating)
    {
        $this->oldRating = $oldRating;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withIncludedInStatistics(?bool $includedInStatistics)
    {
        $this->includedInStatistics = $includedInStatistics;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withNewRating(?int $newRating)
    {
        $this->newRating = $newRating;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTarget(?Reference $target)
    {
        $this->target = $target;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withTargetBuilder(?ReferenceBuilder $target)
    {
        $this->target = $target;
        
        return $this;
    }
    
    public function build(): ReviewRatingSetMessagePayload {
        return new ReviewRatingSetMessagePayloadModel(
            $this->type,
            $this->oldRating,
            $this->includedInStatistics,
            $this->newRating,
            ($this->target instanceof ReferenceBuilder ? $this->target->build() : $this->target)
        );
    }
    
    public static function of(): ReviewRatingSetMessagePayloadBuilder
    {
        return new self();
    }
}