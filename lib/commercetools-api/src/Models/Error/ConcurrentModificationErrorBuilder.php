<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ConcurrentModificationError>
 */
final class ConcurrentModificationErrorBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $code;
    
    /**
     * @var ?string
     */
    protected $message;
    
    /**
     * @var ?int
     */
    protected $currentVersion;

    /**
     *
     * @return string|null
     */
    final public function getCode()
    {
       return $this->code;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getMessage()
    {
       return $this->message;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getCurrentVersion()
    {
       return $this->currentVersion;
    }
    /**
     * @return $this
     */
    final public function withCode(?string $code)
    {
        $this->code = $code;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMessage(?string $message)
    {
        $this->message = $message;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCurrentVersion(?int $currentVersion)
    {
        $this->currentVersion = $currentVersion;
        
        return $this;
    }
    
    public function build(): ConcurrentModificationError {
        return new ConcurrentModificationErrorModel(
            $this->code,
            $this->message,
            $this->currentVersion
        );
    }
    
    public static function of(): ConcurrentModificationErrorBuilder
    {
        return new self();
    }
}