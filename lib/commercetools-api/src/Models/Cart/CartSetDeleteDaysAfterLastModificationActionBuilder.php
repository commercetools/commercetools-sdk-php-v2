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
 * @implements Builder<CartSetDeleteDaysAfterLastModificationAction>
 */
final class CartSetDeleteDaysAfterLastModificationActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?int
     */
    protected $deleteDaysAfterLastModification;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       return $this->action;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getDeleteDaysAfterLastModification()
    {
       return $this->deleteDaysAfterLastModification;
    }
    /**
     * @return $this
     */
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification)
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
        
        return $this;
    }
    
    public function build(): CartSetDeleteDaysAfterLastModificationAction {
        return new CartSetDeleteDaysAfterLastModificationActionModel(
            $this->action,
            $this->deleteDaysAfterLastModification
        );
    }
    
    public static function of(): CartSetDeleteDaysAfterLastModificationActionBuilder
    {
        return new self();
    }
}