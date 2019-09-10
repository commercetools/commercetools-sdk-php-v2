<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ScoreShippingRateInputDraft>
 */
final class ScoreShippingRateInputDraftBuilder implements Builder
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
    protected $score;

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
    final public function getScore()
    {
       return $this->score;
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
    final public function withScore(?int $score)
    {
        $this->score = $score;
        
        return $this;
    }
    
    public function build(): ScoreShippingRateInputDraft {
        return new ScoreShippingRateInputDraftModel(
            $this->type,
            $this->score
        );
    }
    
    public static function of(): ScoreShippingRateInputDraftBuilder
    {
        return new self();
    }
}