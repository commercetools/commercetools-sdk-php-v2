<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ExtensionDestination>
 */
final class ExtensionDestinationBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       return $this->type;
    }
    /**
     * @return $this
     */
    final public function withType(?string $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    public function build(): ExtensionDestination {
        return new ExtensionDestinationModel(
            $this->type
        );
    }
    
    public static function of(): ExtensionDestinationBuilder
    {
        return new self();
    }
}